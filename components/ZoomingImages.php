<?php namespace AlexLit\zoomingimages\Components;

use Cms\Classes\ComponentBase;

class ZoomingImages extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Zooming Images',
            'description' => 'Image zoom that makes sense',
            'icon'        => 'icon-expand'
        ];
    }

    public function defineProperties()
    {
        return [

            // Options
            'bgColor' => [
                'title'       => 'Background Color',
                'default'     => 'rgb(255, 255, 255)',
                'type'        => 'string',
                'description' => 'Background color of overlay',
                'group'       => 'Options'
            ],
            'bgOpacity' => [
                'title'       => 'Background Opacity',
                'default'     => '1',
                'type'        => 'string',
                'description' => 'Background opacity of overlay',
                'group'       => 'Options'
            ],
            'closeOnWindowResize' => [
                'title'       => 'Close On Window Resize',
                'default'     => 1,
                'type'        => 'checkbox',
                'description' => 'Close the zoomed image when browser window is resized',
                'group'       => 'Options'
            ],
            'customSize' => [
                'title'       => 'Custom Size',
                'default'     => 'null',
                'type'        => 'string',
                'description' => 'Scale to given width and height. Ignore scaleBase if set. Example: { width: 800, height: 400 }',
                'group'       => 'Options'
            ],
            'defaultZoomable' => [
                'title'       => 'Default Zoomable',
                'default'     => 'img[data-action="zoom"], img[data-zooming-images]',
                'type'        => 'string',
                'description' => 'Zoomable elements by default. It can be a css selector or an element',
                'group'       => 'Options'
            ],
            'enableGrab' => [
                'title'       => 'Enable Grab',
                'default'     => 1,
                'type'        => 'checkbox',
                'description' => 'Enable grabbing and dragging the image. Extra zoom-in will be applied',
                'group'       => 'Options'
            ],
            'preloadImage' => [
                'title'       => 'Preload Image',
                'default'     => 0,
                'type'        => 'checkbox',
                'description' => 'Preload zoomable images. Enabling this option might cause performance issue on a page with lots of images or large image size',
                'group'       => 'Options'
            ],
            'scaleBase' => [
                'title'       => 'Scale Base',
                'default'     => '1.0',
                'type'        => 'string',
                'description' => 'The base scale factor for zooming. By default it scales to fit the browser window',
                'group'       => 'Options'
            ],
            'scaleExtra' => [
                'title'       => 'Scale Extra',
                'default'     => '0.5',
                'type'        => 'string',
                'description' => 'The additional scale factor while grabbing the image',
                'group'       => 'Options'
            ],
            'scrollThreshold' => [
                'title'       => 'Scroll Threshold',
                'default'     => '40',
                'type'        => 'string',
                'description' => 'How much scrolling it takes before closing out the instance',
                'group'       => 'Options'
            ],
            'transitionDuration' => [
                'title'       => 'Transition Duration',
                'default'     => '0.4',
                'type'        => 'string',
                'description' => 'Transition duration in seconds',
                'group'       => 'Options'
            ],
            'transitionTimingFunction' => [
                'title'       => 'Transition Timing Function',
                'default'     => 'cubic-bezier(0.4, 0, 0, 1)',
                'type'        => 'string',
                'description' => 'Transition timing function',
                'group'       => 'Options'
            ],
            'zIndex' => [
                'title'       => 'Z-Index',
                'default'     => '998',
                'type'        => 'string',
                'description' => 'The z-index that the overlay will be added with',
                'group'       => 'Options'
            ],

            // Event Hooks,
            'onBeforeOpen' => [
                'title'       => 'onBeforeOpen',
                'default'     => '',
                'type'        => 'string',
                'description' => 'Occurs before opening the target',
                'group'       => 'Event Hooks'
            ],
            'onOpen' => [
                'title'       => 'onOpen',
                'default'     => '',
                'type'        => 'string',
                'description' => 'Occurs after the target is fully opened',
                'group'       => 'Event Hooks'
            ],
            'onBeforeGrab' => [
                'title'       => 'onBeforeGrab',
                'default'     => '',
                'type'        => 'string',
                'description' => 'Occurs before grabbing the target',
                'group'       => 'Event Hooks'
            ],
            'onGrab' => [
                'title'       => 'onGrab',
                'default'     => '',
                'type'        => 'string',
                'description' => 'Occurs after the target is fully grabbed',
                'group'       => 'Event Hooks'
            ],
            'onMove' => [
                'title'       => 'onMove',
                'default'     => '',
                'type'        => 'string',
                'description' => 'Occurs after the target is fully moved',
                'group'       => 'Event Hooks'
            ],
            'onBeforeRealse' => [
                'title'       => 'onBeforeRealse',
                'default'     => '',
                'type'        => 'string',
                'description' => 'Occurs before releasing the target',
                'group'       => 'Event Hooks'
            ],
            'onRelease' => [
                'title'       => 'onRelease',
                'default'     => '',
                'type'        => 'string',
                'description' => 'Occurs after the target is fully released',
                'group'       => 'Event Hooks'
            ],
            'onBeforeClose' => [
                'title'       => 'onBeforeClose',
                'default'     => '',
                'type'        => 'string',
                'description' => 'Occurs before closing the target',
                'group'       => 'Event Hooks'
            ],
            'onClose' => [
                'title'       => 'onClose',
                'default'     => '',
                'type'        => 'string',
                'description' => 'Occurs after the target is fully closed',
                'group'       => 'Event Hooks'
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('assets/scripts/zooming.min.js');
    }
}
