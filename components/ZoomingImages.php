<?php namespace AlexLit\zoomingimages\Components;

use Cms\Classes\ComponentBase;

class ZoomingImages extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'alexlit.zoomingimages::lang.plugin.name',
            'description' => 'alexlit.zoomingimages::lang.plugin.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'defaultZoomable' => [
                'title'       => 'Default Zoomable',
                'default'     => 'img[data-zooming-images]',
                'type'        => 'string',
                'description' => 'Zoomable elements by default. It can be a css selector or an element.',
                'group'       => 'Options'
            ],
            'enableGrab' => [
                'title'       => 'Enable Grab',
                'default'     => 1,
                'type'        => 'checkbox',
                'description' => 'To be able to grab and drag the image for extra zoom-in.',
                'group'       => 'Options'
            ],
            'preloadImage' => [
                'title'       => 'Preload Image',
                'default'     => 0,
                'type'        => 'checkbox',
                'description' => 'Preload images with attribute "data-original".',
                'group'       => 'Options'
            ],
            'transitionDuration' => [
                'title'       => 'Transition Duration',
                'default'     => '0.4',
                'type'        => 'string',
                'description' => 'Transition duration in seconds.',
                'group'       => 'Options'
            ],
            'transitionTimingFunction' => [
                'title'       => 'Transition Timing Function',
                'default'     => 'cubic-bezier(0.4, 0, 0, 1)',
                'type'        => 'string',
                'description' => 'Transition timing function.',
                'group'       => 'Options'
            ],
            'bgColor' => [
                'title'       => 'Background Color',
                'default'     => 'rgb(255, 255, 255)',
                'type'        => 'string',
                'description' => 'Overlay background color.',
                'group'       => 'Options'
            ],
            'bgOpacity' => [
                'title'       => 'Background Opacity',
                'default'     => '1',
                'type'        => 'string',
                'description' => 'Overlay background opacity.',
                'group'       => 'Options'
            ],
            'scaleBase' => [
                'title'       => 'Scale Base',
                'default'     => '1.0',
                'type'        => 'string',
                'description' => 'The base scale factor for zooming. By default scale to fit the window.',
                'group'       => 'Options'
            ],
            'scaleExtra' => [
                'title'       => 'Scale Extra',
                'default'     => '0.5',
                'type'        => 'string',
                'description' => 'The extra scale factor when grabbing the image.',
                'group'       => 'Options'
            ],
            'scrollThreshold' => [
                'title'       => 'Scroll Threshold',
                'default'     => '40',
                'type'        => 'string',
                'description' => 'How much scrolling it takes before closing out.',
                'group'       => 'Options'
            ],
            'zIndex' => [
                'title'       => 'Z-Index',
                'default'     => '998',
                'type'        => 'string',
                'description' => 'The z-index that the overlay will be added with.',
                'group'       => 'Options'
            ],
            'customSize' => [
                'title'       => 'Custom Size',
                'default'     => 'null',
                'type'        => 'string',
                'description' => 'Scale (zoom in) to given width and height. Ignore Scale Base if set. Example: { width: 800, height: 400 }',
                'group'       => 'Options'
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('https://cdnjs.cloudflare.com/ajax/libs/zooming/1.1.6/zooming.min.js');
    }
}
