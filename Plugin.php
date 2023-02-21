<?php

namespace ForWinterCms\Toolbox;

use Event;
use Backend;
use System\Classes\PluginBase;
use Cms\Models\MaintenanceSetting;
use ForWinterCms\Toolbox\Models\SettingsPages;

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
        $this->extendMaintenanceSettings();
    }

    public function registerPermissions()
    {
        $categoryPages = 'Pages';

        return [
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

    public function extendMaintenanceSettings()
    {
        MaintenanceSetting::extend(function($model) {
            $model->attachOne['logo_icon'] = 'System\Models\File';
            $model->rules['social_network.*.url'] = 'sometimes|required|url';
        });

        Event::listen('backend.form.extendFields', function ($widget)
        {
            $controller = $widget->getController();
            if (! $controller instanceof \System\Controllers\Settings)
                return;
            if (! $widget->model instanceof \Cms\Models\MaintenanceSetting)
                return;
            if (! isset($widget->fields['is_enabled']))
                return;

            $widget->addTabFields([
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
                    'label'   => 'Description',
                    'type'    => 'richeditor',
                    'size'    => 'huge',
                    'span'    => 'full',
                    'tab'     => 'Info'
                ],
                'logo_icon' => [
                    'label' => 'Logo icon',
                    'type' => 'fileupload',
                    'mode' => 'image',
                    'imageHeight' => '100',
                    'imageWidth' => '100',
                    'span' => 'left',
                    'tab' => 'Brand'
                ],
                'social_network' => [
                    'label'   => 'Social network',
                    'type'    => 'repeater',
                    'tab'     => 'Contacts',
                    'form'    => [
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
