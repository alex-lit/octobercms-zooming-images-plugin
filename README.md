# OctoberCMS Zooming Images plugin

Image zoom that makes sense.

* Pure JavaScript & built with mobile in mind.
* Smooth animations with intuitive gestures.
* Zoom into a hi-res image if supplied.
* Easy to integrate & customizable.

This plugin use awesome [Zooming](https://github.com/kingdido999/zooming)
library.

## Quckstart guide

Put "Zooming Images" component to your layouts. At this point, any image with
attribute `data-action="zoom"` is zoomable by default.

Sample:

```twig
<img
  src="http://desmonding.me/zooming/demo/img/journey.jpg"
  data-action="zoom"
/>

{% component 'zoomingImages' %}
```

**Do not forget to add the `{% scripts %}` tag to your layouts.**

## Official documentation

* [Options](https://desmonding.me/zooming/docs/#/configuration?id=options)
* [Event Hooks](https://desmonding.me/zooming/docs/#/configuration?id=event-hooks)
