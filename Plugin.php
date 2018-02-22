<?php namespace AlexLit\ZoomingImages;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Zooming Images',
            'description' => 'Image zoom that makes sense',
            'author'      => 'Alexey Litovchenko',
            'icon'        => 'icon-expand',
            'homepage'    => 'https://alexlit.gitlab.io'
        ];
    }

    public function registerComponents()
    {
        return [
           '\AlexLit\ZoomingImages\Components\ZoomingImages' => 'zoomingImages'
        ];
    }
}
