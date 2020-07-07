<?php namespace Codeclutch\Base\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'codeclutch_base_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public $attachOne = [
         'logo' => 'System\Models\File',
         'icon' => 'System\Models\File',
         'author_logo' => 'System\Models\File',
    ];
}
