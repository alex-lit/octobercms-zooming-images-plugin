<?php namespace AlexLit\ZoomingImages;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'alexlit.zoomingimages::lang.plugin.name',
            'description' => 'alexlit.zoomingimages::lang.plugin.description',
            'author'      => 'Alexey Litovchenko',
            'icon'        => 'icon-expand',
            'homepage'    => 'https://web2easy.ru'
        ];
    }

    public function registerComponents()
    {
        return [
           '\AlexLit\ZoomingImages\Components\ZoomingImages' => 'zoomingImages'
        ];
    }

    public function registerSettings()
    {
    }
}
