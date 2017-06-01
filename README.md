### OctoberCMS Zooming Images plugin

Image zoom that makes sense.

This plugin use [Zooming](https://github.com/kingdido999/zooming) library.

![banner]()

### Quckstart guide

Add "data-zooming-images" attribute to images that need to zoom on click event and put "Zooming Images" component to your layouts.

Sample:

~~~twig
<img
    src           = "http://desmonding.me/zooming/demo/img/journey.jpg"
    data-original = "http://desmonding.me/zooming/demo/img/journey.jpg"
    data-zooming-images
/>

{% component 'zoomingImages' %}
~~~

**Do not forget to add the "{% styles %}" and "{% scripts %}" tags to your layouts**