<?php /* Temp late Name: Happiness Test Form
*/ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>



      <div id="container">
      <div id="content" role="main">



      <?php
      /* Run the loop to output the page.
       * If you want to overload this in a child theme then include a file
       * called loop-page.php and that will be used instead.
       */
      get_template_part( 'loop', 'page' );
      ?>


            <div style="margin:-30px 0px 0px 0px;">

<form action="http://www.happybrainscience.com/form-mailer/" method="post">
<p><strong>In general, I consider myself:</strong><br>
<input name="general" type="radio" value="1" />1 Not a very happy person<br />
<input name="general" type="radio" value="2" />2<br />
<input name="general" type="radio" value="3" />3<br />
<input name="general" type="radio" value="4" />4<br />
<input name="general" type="radio" value="5" />5<br />
<input name="general" type="radio" value="6" />6<br />
<input name="general" type="radio" value="7" />7 A very happy person<br /></p>

<p><strong>Compared to most of my peers, I consider myself:</strong><br>
<input name="peers" type="radio" value="1" />1 Less happy<br />
<input name="peers" type="radio" value="2" />2<br />
<input name="peers" type="radio" value="3" />3<br />
<input name="peers" type="radio" value="4" />4<br />
<input name="peers" type="radio" value="5" />5<br />
<input name="peers" type="radio" value="6" />6<br />
<input name="peers" type="radio" value="7" />7 More happy<br /></p>

<p><strong>Some people are generally very happy. They enjoy life regardless of what is going on, getting the most out of everything. To what extent does that characterization describe you?</strong><br>
<input name="happy" type="radio" value="1" />1 Not at all<br />
<input name="happy" type="radio" value="2" />2<br />
<input name="happy" type="radio" value="3" />3<br />
<input name="happy" type="radio" value="4" />4<br />
<input name="happy" type="radio" value="5" />5<br />
<input name="happy" type="radio" value="6" />6<br />
<input name="happy" type="radio" value="7" />7 A great deal<br /></p>

<p><strong>Some people are generally not very happy. They never seem as happy as they might be. To what extent does this describe you?</strong><br>
<input name="nothappy" type="radio" value="1" />1 A great deal (I'm NOT happy)<br />
<input name="nothappy" type="radio" value="2" />2<br />
<input name="nothappy" type="radio" value="3" />3<br />
<input name="nothappy" type="radio" value="4" />4<br />
<input name="nothappy" type="radio" value="5" />5<br />
<input name="nothappy" type="radio" value="6" />6<br />
<input name="nothappy" type="radio" value="7" />7 Not at all (I'm happy!)<br /></p>

<p>Enter your email (optional)<br />


<input name="email" type="text" value="email" /><br />
<input name="emailresults" type="checkbox" value="yes" checked="checked" /> Email me my results<br />
<input name="newsletter" type="checkbox" value="yes"  checked="checked" />  Sign me up to receive occasional brain science news<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>(we never share your email address)</em><br />


</p>


<input type="submit" name="Submit" value="Submit"></form>




</div>


      </div><!-- #content -->
    </div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
