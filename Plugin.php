<?php

namespace ForWinterCms\Toolbox;

use Backend;
use ForWinterCms\Toolbox\Models\SettingsPages;
use System\Classes\PluginBase;

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
        // $this->registerConsoleCommand('forwintercms:addadmin', 'ForWinterCms\Toolbox\Console\AddAdmin');
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
}
