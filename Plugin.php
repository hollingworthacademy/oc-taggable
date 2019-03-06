<?php namespace Hollingworth\Taggable;

use Backend;
use System\Classes\PluginBase;

/**
 * Taggable Plugin Information File
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
            'name'        => 'Taggable',
            'description' => 'No description provided yet...',
            'author'      => 'Hollingworth',
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
            'Hollingworth\Taggable\Components\MyComponent' => 'myComponent',
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
            'hollingworth.taggable.some_permission' => [
                'tab' => 'Taggable',
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
            'taggable' => [
                'label'       => 'Taggable',
                'url'         => Backend::url('hollingworth/taggable/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['hollingworth.taggable.*'],
                'order'       => 500,
            ],
        ];
    }
}
