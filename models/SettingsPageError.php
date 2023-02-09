<?php

namespace ForWinterCms\Toolbox\Models;

/**
 * SettingsPageError Model
 */
class SettingsPageError extends SettingsPages
{
    public $settingsCode = 'forwintercms_toolbox_settingsPageError';

    public $attachOne = [
        'icon' => 'System\Models\File'
    ];
}
