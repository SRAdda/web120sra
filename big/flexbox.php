<?php include "includes/header.php"?>
  
  <h2>Flexbox</h2>
  <div class='embed-container'><iframe src='https://www.youtube.com/embed/JJSoEo8JSnc' allowfullscreen></iframe></div>
</section>
<!-- END LEFT COLUMN -->
<aside>
<div>
     <h3><br>Additional Flexbox Resources</h3>
     <ul>
         <li><a href="https://tinyurl.com/yb56hmug" target="_blank">Basic Concepts of Flexbox</a></li>
         <li><a href="http://caniuse.com/flexbox" target="_blank">A Complete Guide to Flexbox</a></li>
         <li><a href="https://www.linkedin.com/learning/building-responsive-forms-with-flexbox/welcome?u=2359778" target="_blank">Beginning Flexbox Course: Forms</a></li>
     </ul>
     </div>
 </aside>
 
      
<!-- START RIGHT COLUMN -->

<div>
    <p>Officially called the CSS Flexible Box Module, known as flexbox, start by thinking of two axes. The main axis is defined by the 
         flex-direction property. Running perpendicular to it is the cross axis. Mozilla.org provides us a very clear explanation of the 
         basic concepts, which should be read by anyone just starting out with Flexbox.<br></p> 
         <p></p>
         <p>"(Flexbox) can only deal with one-dimensional flows of elements, so certain types of layout changes that break from those simple notions 
can create a cascade of changes as you suddenly need to nest multiple flexboxes that are only positioning two or three elements", (Atkins, 2012). 
Atkins is referring to the fact that flexbox manipulates one dimension at a time: either a column or a row. This differs from the CSS Grid 
Layout, a two-dimensional model controlling rows and columns simultaneously. 
Make your website mobile-friendly by using flexbox. Using flex-wrap enables you to wrap content and flex containers use the size of the 
content in the main axis and will align everything in a row.</p> 

<p>Advanced settings also allow you to fold and add several interactive features. Several effects that were once very complicated with the 
use of css and JavaScript are now possible using this module. The perfect video to show you additional features is Morten Rand-Hendriksen's 
"Advanced Responsive Layouts with CSS Flexbox" on LinkedIn Learning. He recommend started your design with a CSS that styles for the 
smallest possible screen, adding CSS through media queries to accommodate larger screens.</p>

<p>You can use flexbox to create a social media menu, control multiple menus, card based and "holy grail" layouts, add responsive breakpoints
 and even animate content. Hendriksen offers all of the elements required for us to use as a template for our own projects with the 
 exercise files he provides with the LinkedIn Course.</p>

    <p>Works cited:<br> Atkins, Tab. "Why Flexboxes Aren't Good for Page Layout" Blog by Xanthir,January 13, 2014 
    https://www.xanthir.com/blog/b4580</p>
</div> 
        
<?php include "includes/footer.php"?>