### OctoberCMS Zooming Images plugin

Image zoom that makes sense.

- Pure JavaScript & built with mobile in mind.
- Smooth animations with intuitive gestures.
- Zoom into a hi-res image if supplied.
- Easy to integrate & customizable.

This plugin use [Zooming](https://github.com/kingdido999/zooming) library.

![banner](https://cdn.rawgit.com/web2easy/OctoberCMS-Zooming-Images-Plugin/e2a461d7/assets/images/banner.png)

### Quckstart guide

By default, add "data-zooming-images" attribute to images that need to zoom on click event and put "Zooming Images" component to your layouts.

Sample:

~~~
<img
    src = "http://desmonding.me/zooming/demo/img/journey.jpg"
    data-zooming-images
/>

{% component 'zoomingImages' %}
~~~

If you want, you can make scalable all the images in a blog post or article by default, you do not even need to add an attribute. To do this, change value of the **Default Zoomable** field to required selector in options settings of plugin, for example, this selector will look like `.blog-post img`:

Sample:

~~~
<article class="blog-post">

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, omnis, aspernatur, non optio architecto magnam rem sapiente saepe doloremque laudantium possimus qui blanditiis vel id unde accusamus eius cupiditate minima!</p>

    <img src="http://desmonding.me/zooming/demo/img/journey.jpg" />

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, ex porro numquam repellat debitis reiciendis delectus impedit quaerat aperiam unde nihil assumenda? Iusto, numquam atque quasi iste velit eum pariatur.</p>

</article>

{% component 'zoomingImages' %}
~~~

**Do not forget to add the `{% styles %}` and `{% scripts %}` tags to your layouts.**

#### Options

- **Default Zoomable** - Zoomable elements by default. It can be a css selector or an element.
- **Enable Grab** - To be able to grab and drag the image for extra zoom-in.
- **Preload Image** - Preload images with attribute "data-original".
- **Transition Duration** - Transition duration in seconds.
- **Transition Timing Function** - Transition timing function.
- **Background Color** - Overlay background color.
- **Background Opacity** - Overlay background opacity.
- **Scale Base** - The base scale factor for zooming. By default scale to fit the window.
- **Scale Extra** - The extra scale factor when grabbing the image.
- **Scroll Threshold** - How much scrolling it takes before closing out.
- **Z-Index** - The z-index that the overlay will be added with.
- **Custom Size** - Scale (zoom in) to given width and height. Ignore Scale Base if set. Example: { width: 800, height: 400 }