<?php namespace Codeclutch\Base;

use Backend;
use System\Classes\PluginBase;
use Lang;


class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => Lang::get('codeclutch.base::lang.plugin.name'),
            'description' => Lang::get('codeclutch.base::lang.plugin.description'),
            'author' => 'codeclutch',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerSettings()
    {
        return [
            'base' => [
                'label' => Lang::get('codeclutch.base::lang.plugin.name'),
                'description' => Lang::get('codeclutch.base::lang.plugin.description'),
                'category' => Lang::get('codeclutch.base::lang.plugin.author'),
                'icon' => 'icon-home',
                'order' => 1,
                'class' => 'Codeclutch\Base\Models\Settings'
            ]
        ];
    }


    public function registerComponents()
    {
        return [
            'Codeclutch\Base\Components\Logo' => 'logo',
            'Codeclutch\Base\Components\Head' => 'head',
            'Codeclutch\Base\Components\Signature' => 'signature',
        ];
    }


    public function registerNavigation()
    {
        return []; // Remove this line to activate
    }
}
