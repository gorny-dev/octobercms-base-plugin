<?php namespace Codeclutch\Base;

use Backend;
use System\Classes\PluginBase;

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
            'name'        => 'base',
            'description' => 'No description provided yet...',
            'author'      => 'codeclutch',
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
                'label'       => 'base',
                'url'         => Backend::url('codeclutch/base/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['codeclutch.base.*'],
                'order'       => 500,
            ],
        ];
    }
}
