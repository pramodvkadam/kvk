<?php namespace Vuonxa\Photobox;

use Backend;
use System\Classes\PluginBase;

/**
 * Photobox Plugin Information File
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
            'name'        => 'Photobox',
            'description' => 'Photobox by Vuonxa Team',
            'author'      => 'Vuonxa',
            'icon'        => 'icon-camera'
        ];
    }

    public function registerComponents()
    {
        return [
            'Vuonxa\Photobox\Components\Photoboxs'       => 'photoBox'
        ];
    }

    public function registerPermissions()
    {
        return [
            'vuonxa.photobox.access_photobox'         => ['tab' => 'Photobox', 'label' => 'Photobox']
        ];
    }

    public function registerNavigation()
    {
        return [
            'photobox' => [
                'label'       => 'Photobox',
                'url'         => Backend::url('vuonxa/photobox/imagemanagers'),
                'icon'        => 'icon-camera',
                'permissions' => ['vuonxa.photobox.*'],
                'order'       => 500,
            ]
        ];
    }

}
