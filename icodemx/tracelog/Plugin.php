<?php
namespace Icodemx\Tracelog;

use Backend;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

/**
 * Tracelog Plugin Information File
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
            'name' => 'icodemx.tracelog::lang.plugin.name',
            'description' => 'icodemx.tracelog::lang.plugin.description',
            'author' => 'Oscar Arzola',
            'icon' => 'icon-eye'
        ];
    }

    public function registerSettings()
    {
        return [
            'tracelog' => [
                'label' => 'icodemx.tracelog::lang.plugin.label',
                'description' => 'icodemx.tracelog::lang.plugin.description',
                'category' => SettingsManager::CATEGORY_LOGS,
                'icon' => 'icon-eye',
                'url' => Backend::url('icodemx/tracelog/show'),
                'order' => 899
            ]
        ];
    }


}
