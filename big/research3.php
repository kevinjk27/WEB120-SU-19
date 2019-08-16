<?php include 'includes/header.php'?>


<p align="center">
   <a href="http://kevinkantono.com/web120/"><strong>Kevin Kantono - WEB 120 </strong></a> 
</p>

<div class="research-title">
<p align="center">
    Topic : Flexbox
</p>
</div>

<div align="center">
        <hr style="border-top :3px solid grey;" width="100%">
</div>
<div class="research-content"> 

<div class="research-heading">


<p>
    <strong><em>Research </em></strong>
    <strong></strong>
</p>
    </div>
<p>
    <strong></strong>
</p>
<p>
    “What is Flexbox?”
</p>
<p>
    “Why do we need to use Flexbox?”
</p>
<p>
    “How to apply Flexbox in my website?”
</p>
<p>
    “What are the browsers that support Flexbox?
</p>
    
<div class="research-heading">
<p>
    <strong><em>Gather</em></strong>
    <strong></strong>
</p>
    </div>
<p>
    <strong></strong>
</p>
<p>
    <a href="https://internetingishard.com/html-and-css/flexbox/">
        https://internetingishard.com/html-and-css/flexbox/
    </a>
</p>
<p>
    <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">
        https://css-tricks.com/snippets/css/a-guide-to-flexbox/
    </a>
</p>
<p>
    <a href="https://caniuse.com/#search=flexbox">
        https://caniuse.com/#search=flexbox
    </a>
</p>
<p>
    <a href="https://www.smashingmagazine.com/2019/02/css-browser-support/">
        https://www.smashingmagazine.com/2019/02/css-browser-support/
    </a>
</p>
<p>
    <a href="https://www.sitepoint.com/are-we-ready-to-use-flexbox/">
        https://www.sitepoint.com/are-we-ready-to-use-flexbox/
    </a>
</p>
<p>
    <a
        href="https://philipwalton.com/articles/normalizing-cross-browser-flexbox-bugs/"
    >
        https://philipwalton.com/articles/normalizing-cross-browser-flexbox-bugs/
    </a>
</p>
  <div class="research-heading">   
<p>
    <strong><em>Write</em></strong>
</p>
      </div>
<p>
    <strong></strong>
</p>
<p>
    Flexbox or Flexible Box is layout model in CSS that offers more flexibility
    than float for defining how to place each element on the website. While
    float only entitles items to be aligned horizontally either left or right,
    Flexbox permits elements to freely alter their alignment, width, height,
    and order to best fill the available space.
</p>
<p>
    To better understand the concept, Flexbox contains two types of boxes “flex
    containers” and “flex items”. The flex container will act as the parent
    element that carry the flex items which are the child elements. The flex
    item will help the container to know how many elements to be positioned.
</p>
<p align="center">
    <img
        border="0"
        width="474"
        height="188"
        src="../big/images/3-1.png"alt="flex-container-flex-items"
    />
</p>
<p>
    The first step when creating Flexbox is to declare display: flex CSS
    property in the parent element (flex container). There are numerous Flexbox
    properties that enhance the customization of its content such as:
</p>
<ol start="1" type="1">
    <li>
        <strong>Justify Content</strong>
    </li>
</ol>
<p>
    Define the horizontal axis of its items by declaring justify-content:
    center in CSS sheet inside the flex container. This will centrally align
    its contents. Other values for justify-content are flex-start (items are
    packed toward the start line), flex-end (items are packed toward the end
    line), space-around (items are evenly distributed in the line with equal
    space around them), space-between (items are evenly distributed in the
    line; first item is on the start line, last item on the end line), and
    space evenly (items are distributed so that the spacing between any two
    items and the space to the edges are equal).
</p>
<p align="center">
    <img
        border="0"
        width="268"
        height="410"
        src="../big/images/3-2.png"alt="justify-content"
    />
</p>
<ol start="2" type="1">
    <li>
        <strong>Align Items</strong>
    </li>
</ol>
<p>
    Flexbox also allows to manipulate its contents’ vertical axis by declaring
    align-items property to container. The values can be: center, flex-start
    (top), flex-end (bottom), stretch, and baseline.
</p>
<p align="center">
    <img
        border="0"
        width="310"
        height="410"
        src="../big/images/3-3.png"alt="align-items"
    />
</p>
<ol start="3" type="1">
    <li>
        <strong>Flex direction</strong>
    </li>
</ol>
<p>
    The direction of content can be rendered either horizontally or vertically.
    To do that add flex-direction in CSS page with value of row for horizontal
    and column for vertical.
</p>
<p>
    <img
        border="0"
        width="602"
        height="306"
        src="../big/images/3-4.png"alt="flex-direction"
    />
</p>
<ol start="4" type="1">
    <li>
        <strong>Item Order</strong>
    </li>
</ol>
<p>
    Another property that can be applied in Flexbox is flex item order. This
    arranges the order in which they appear in the flex container. The syntax
    is order: &lt;integer&gt;; /* default is 0 */.
</p>
    <br />
<p>
    Since Flexbox is a recent development of CSS property our job is to make
    sure every browser supports this property. To do that always check any of
    your CSS property at <a href="https://caniuse.com/">CanIUse.com</a> it will
    list which browser that adhere to the properties.
</p>
<p>
    <img
        border="0"
        width="602"
        height="248"
        src="../big/images/3-5.png"alt="flexbox-support"
    />
</p>
<p>
    The screenshot above explains which browsers capable of executing Flexbox
    property. While the majority of browsers support it, the older version of
    IE 9 and below and older version of Opera don’t facilitate this rule. As a
    result, we’ll need to go down the polyfill or fallback route. The only
    available polyfill is <em>Flexie</em>, which enables the 2009 Flexbox model
    on unsupported browsers. In any case, you’ll find yourself wanting to stay
    clear of polyfills to begin with, as they tend to be slow.
</p>
<p>
The other option is to use fallback that will be easier to implement.    <a href="https://modernizr.com/"><em>Modernizr</em></a>, a feature
    detection tool, allows us to detect if a browser supports Flexbox (legacy
    and current), so targeting should be easy. If <em>Modernizr </em>is
    something what you aren’t incompetent with, then conditional CSS may be all
    you’ll need to help you sort things out for IE9 and down.
</p>
    <div class="research-heading">
<p>
    <strong><em>Cite</em></strong>
</p>
    </div>
<p>
    <strong></strong>
</p>
<p>
    Oliver. “Flexbox: HTML &amp; CSS Is Hard.” Flexbox: A Friendly Tutorial for
    Modern CSS Layouts, internetingishard.com/html-and-css/flexbox/.
</p>
<p>
    We’re finally at a point where browser support has hit critical mass and
    developers can start building full websites with flexbox. Our
    recommendation is to use flexbox to lay out your web pages as much as
    possible, reserving floats for when you need text to flow around a box
    (i.e., a magazine-style layout) or when you need to support legacy web
    browsers.
</p>
<p>
    <strong></strong>
</p>
<p>
    Salloum, Nick. “Are We Ready to Use Flexbox?” SitePoint, 9 July 2014,
    www.sitepoint.com/are-we-ready-to-use-flexbox/.
</p>
<p>
    We looked at what flexbox is, where it came from, how to use it, support,
    fallbacks, prefixing, and the works. But still, we have to ask ourselves if
    we’re ready to start implementing it in our projects. For me, the answer is
    a resounding Yes. But that resounding yes has some underlying emphasis:
    Know your project, your desired outcome, and your target market. If you’re
    publishing HTML5 mobile apps, then go for it. If you’re developing an
    accounting system for a business using Windows 98, you’ll probably need to
    stay away! Understand that polyfilling the old version might help you out,
    but will slow down the already-slow browsers. In general, I recommend
    staying away from polyfills — there’s no point further slowing down an
    already old system. So go on out there and learn, practice, and implement
    flexbox in your next suitable project. It’s a fantastic and powerful
    feature, and is a lot of fun to use.
</p>


</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
<h3>Right Column</h3>
<p>Some advisable quote here</p>
 
</aside>
<!-- END RIGHT COL -->

<?php include 'includes/footer.php'?>
 
