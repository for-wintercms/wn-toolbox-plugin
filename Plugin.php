<?php

namespace ForWinterCms\Toolbox;

use File;
use Event;
use Backend;
use BackendAuth;
use Cms\Classes\Theme;
use System\Classes\PluginBase;
use Cms\Models\MaintenanceSetting;
use ForWinterCms\Toolbox\Models\SettingsPages;
use System\Controllers\Settings as SettingsController;

/**
 * Toolbox Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Toolbox',
            'description' => 'Plugin with toolbox for Winter CMS',
            'author'      => 'ForWinterCms',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        $this->autoCreateContentFiles();
        $this->extendMaintenanceSettings();
    }

    public function registerPermissions()
    {
        $categoryPages = 'Pages';

        return [
            // CMS
            'cms.maintenance_mode_select_page' => [
                'label' => 'Selecting the maintenance mode activation page.',
                'tab' => 'cms::lang.permissions.name'
            ],

            // Pages
            'forwintercms.toolbox.access_pages' => [
                'label' => 'Manage the all pages',
                'tab' => $categoryPages
            ],
            'forwintercms.toolbox.access_page_404' => [
                'label' => 'Manage the 404 page',
                'tab' => $categoryPages
            ],
            'forwintercms.toolbox.access_page_error' => [
                'label' => 'Manage the error page',
                'tab' => $categoryPages
            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'settings_page_404' => [
                'label'       => '404',
                'description' => '404 page.',
                'category'    => SettingsPages::SETTINGS_CATEGORY_PAGES,
                'icon'        => 'icon-times-rectangle-o',
                'class'       => 'ForWinterCms\Toolbox\Models\SettingsPage404',
                'order'       => 500,
                'keywords'    => 'settings, pages, 404',
                'permissions' => ['forwintercms.toolbox.access_pages', 'forwintercms.toolbox.access_page_404'],
            ],
            'settings_page_error' => [
                'label'       => 'Error',
                'description' => 'Error page.',
                'category'    => SettingsPages::SETTINGS_CATEGORY_PAGES,
                'icon'        => 'icon-warning',
                'class'       => 'ForWinterCms\Toolbox\Models\SettingsPageError',
                'order'       => 501,
                'keywords'    => 'settings, pages, error',
                'permissions' => ['forwintercms.toolbox.access_pages', 'forwintercms.toolbox.access_page_error'],
            ]
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'ForWinterCms\Toolbox\FormWidgets\FaIcons' => 'faicons',
        ];
    }

    public function autoCreateContentFiles()
    {
        /**
         * @var $controller \Cms\Classes\Controller
         */
        Event::listen('cms.page.beforeRenderContent', function ($controller, $contentName)
        {
            $contentFilePath = Theme::getActiveTheme()->getPath().'/content/'.$contentName;

            if (File::isFile($contentFilePath))
                return false;
            if (! env('AUTO_CREATE_CMS_CONTENT_FILES', false))
                return false;
            if (! preg_match("/\.(htm|md|txt)$/", $contentName))
                return false;

            // create content file
            $dir = dirname($contentFilePath);
            if (! File::isDirectory($dir))
                File::makeDirectory($dir, 0755, true, true);
            File::put($contentFilePath, '');

            return false;
        });
    }

    public function extendMaintenanceSettings()
    {
        /**
         * @var $model MaintenanceSetting
         */
        MaintenanceSetting::extend(function($model) {
            $model->attachOne['logo_icon'] = 'System\Models\File';
            $model->rules['social_network.*.url'] = 'sometimes|required|url';
        });

        /**
         * @var $settingsManager \System\Classes\SettingsManager
         */
        Event::listen('system.settings.extendItems', function ($settingsManager) {
            $settingsManager->addSettingItem('Winter.Cms', 'maintenance_settings', [
                'permissions' => ['cms.manage_themes', 'cms.maintenance_mode_select_page'],
            ]);
        });

        /**
         * @var $formWidget Backend\Widgets\Form
         */
        Event::listen('backend.form.extendFields', function ($formWidget)
        {
            $controller = $formWidget->getController();
            if (! $controller instanceof SettingsController)
                return;
            if (! $formWidget->model instanceof \Cms\Models\MaintenanceSetting)
                return;
            if (! isset($formWidget->fields['is_enabled']))
                return;

            // control permission
            $user = BackendAuth::getUser();
            if (! $user->hasAccess('cms.manage_themes') && $user->hasAccess('cms.maintenance_mode_select_page'))
                $formWidget->removeField('cms_page');

            // add additional configuration fields
            $formWidget->addTabFields([
                'title' => [
                    'label' => 'Title',
                    'type' => 'text',
                    'span' => 'left',
                    'default' => 'Site maintenance',
                    'comment' => 'Title for the maintenance page',
                    'tab' => 'Info'
                ],
                'counter' => [
                    'label'   => 'Counter',
                    'type'    => 'datepicker',
                    'mode'    => 'datetime',
                    'span'    => 'right',
                    'comment' => 'For a timer (counter) showing the remaining time',
                    'tab'     => 'Info'
                ],
                'desc' => [
                    'label' => 'Description',
                    'type'  => 'richeditor',
                    'size'  => 'huge',
                    'span'  => 'full',
                    'tab'   => 'Info'
                ],
                'logo_icon' => [
                    'label'       => 'Logo icon',
                    'type'        => 'fileupload',
                    'mode'        => 'image',
                    'imageHeight' => '100',
                    'imageWidth'  => '100',
                    'span'        => 'left',
                    'tab'         => 'Brand'
                ],
                'social_network' => [
                    'label' => 'Social network',
                    'type'  => 'repeater',
                    'tab'   => 'Contacts',
                    'form'  => [
                        'fields' => [
                            'icon' => [
                                'label'   => 'Icon',
                                'type'    => 'faicons',
                                'span'    => 'left',
                            ],
                            'url' => [
                                'label'   => 'Link',
                                'type'    => 'text',
                                'span'    => 'right',
                            ],
                        ],
                    ],
                ],
            ]);
        });
    }
}
