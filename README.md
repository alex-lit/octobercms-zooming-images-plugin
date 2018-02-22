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
attribute `data-action='zoom'` is zoomable by default.

**Sample:**

```twig
<img
  src="http://desmonding.me/zooming/demo/img/journey.jpg"
  data-action="zoom"
/>

{% component 'zoomingImages' %}
```

If you want, you can make scalable all the images in a blog post or article by
default, you do not even need to add an attribute. To do this, change value of
the **Default Zoomable** field to required selector in options settings of
plugin, for example, this selector will look like `.blog-post img`:

**Sample:**

```twig
<article class="blog-post">

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, omnis, aspernatur, non optio architecto magnam rem sapiente saepe doloremque laudantium possimus qui blanditiis vel id unde accusamus eius cupiditate minima!</p>

    <img src="http://desmonding.me/zooming/demo/img/journey.jpg" />

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, ex porro numquam repellat debitis reiciendis delectus impedit quaerat aperiam unde nihil assumenda? Iusto, numquam atque quasi iste velit eum pariatur.</p>

</article>

{% component 'zoomingImages' %}
```

**Do not forget to add the `{% scripts %}` tag to your layouts.**

## Official documentation

* [Options](https://desmonding.me/zooming/docs/#/configuration?id=options)
* [Event Hooks](https://desmonding.me/zooming/docs/#/configuration?id=event-hooks)
