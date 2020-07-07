<?php namespace Codeclutch\Base;

use Backend;
use System\Classes\PluginBase;
use Lang;

/**
 * base Plugin Information File
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
                'label'  => Lang::get('codeclutch.base::lang.plugin.name'),
                'description'  => Lang::get('codeclutch.base::lang.plugin.description'),
                'category' => Lang::get('codeclutch.base::lang.plugin.author'),
                'icon' => 'icon-home',
                'order' => 1,
                'class' => 'Codeclutch\Base\Models\Settings'
            ]
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Codeclutch\Base\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'codeclutch.base.some_permission' => [
                'tab' => 'base',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'base' => [
                'label' => 'base',
                'url' => Backend::url('codeclutch/base/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['codeclutch.base.*'],
                'order' => 500,
            ],
        ];
    }
}
