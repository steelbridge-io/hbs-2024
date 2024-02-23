<?php /* Templ ate Name: Form Mailer
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




<?php

  @$general = StripSlashes($_POST['general']);
  @$peers = StripSlashes($_POST['peers']);
  @$happy = StripSlashes($_POST['happy']);
  @$nothappy = StripSlashes($_POST['nothappy']);
  @$email = $_POST['email'];
  @$emailresults = $_POST['emailresults'];
  @$newsletter = $_POST['newsletter'];
  @$reset = $_POST['reset'];


  $total = $general + $peers + $happy + $nothappy;
  $score = $total/4;

  $subject = 'Happiness Test Submission';
      $toaddress = 'sadekarr@gmail.com';


        $mailcontent = 'Happiness Test Submission Results: '."\n"."\n".

        'Current happiness score is:'.$general."\n"."\n".
        'In general, I consider myself: Answered:'.$general."\n"."\n".
        'Compared to most of my peers, I consider myself: Answered:'.$peers."\n"."\n".
        'Some people are generally very happy. Answered:'.$happy."\n"."\n".
        'Some people are generally not very happy. Answered:'.$nothappy."\n"."\n".
        'Senders email: '.$email."\n".
        'Results emailed to sender?: '.$emailresults."\n".
        'Newsletter signup?: '.$newsletter."\n".
        $fromaddress = 'From: scott@happybrainscience.com';




      // message
      $message = '
      <html>
      <head>
        <title>Happiness Test Submission</title>
      </head>
      <body>

<h3>Thank you for taking the happiness test.</h3>
<p>Based on your ratings, your current happiness score is '.$score.' on a scale of 1 (least happiness) to 7 (maximum happiness). This score is simply the average of your four answers.</p>

<h4>Now, what does this number mean for you?</h4>
<p>It simply tells you where you stand right now and gives you a base, so you can start tracking how your happiness level changes over time.</p>

<p>Science tells us that typically about 40% of your happiness is affected by your intentional activity - what you think and what you do. Evidence is strong that repeated intentional activity may even rewire your brain and impact the 50% that typically seems to be affected by your genes. (Only 10% of your happiness is typically affected by life circumstances, because we usually get used to whatever our circumstances are.)</p>

<p>My intention is to offer you scientifically sound and effective ways to increase your happiness (and specifically your happiness at work) by boosting your brain power, sparking new connections, and rewiring existing ones. </p>

<h4>Why be happier? </h4>

<p>I believe that happiness in itself is valuable, but beyond that, increasing your happiness will also make you more productive, creative, resilient, successful, sociable, engaged, and healthier. Science suggests a boost in happiness raises productivity 10-25%. (Please see this <a href="http://venturebeat.com/2012/01/02/happiness/">VentureBeat article</a> of mine for sources to that claim. And then tell your HR department, if you have one!)</p>

<h4>Where to from here?</h4>

<p>Start taking action and building new happiness habits. For inspiration on action items that will make you happier and increase happiness in your workplace, check out my <a href="http://www.happybrainscience.com/category/hbs-blog/" target="_top" title="Blog">blog</a> or sign up for my monthly <a href="http://eepurl.com/fKlQo">newsletter</a>. I also share actionable ideas on <a href="http://www.facebook.com/pages/Happy-Brain-Science/244551702277956" target="_top" title="facebook">Facebook</a> and <a href="http://twitter.com/ScottCrab" target="_top" title="twitter">Twitter</a> and I would love to see you join the Happy Brain Science community there.</p>

<p>Finally, I am grateful for any and all feedback you might have for me on whats working - or not working - for you when it comes to happiness. Please contact me via email, <a href="http://www.facebook.com/pages/Happy-Brain-Science/244551702277956" target="_top" title="facebook">Facebook</a> or <a href="http://twitter.com/ScottCrab" target="_top" title="twitter">Twitter</a>. </p>


<p>Email: '.$email.'<br />
  Email me my results:  '.$emailresults.'<br />
  Sign me up for me the Happy Brain Science newsletter: '.$newsletter.'<br />
  From: scott@happybrainscience.com</p></p>
  </body>
  </html>
      ';

      // To send HTML mail, the Content-type header must be set
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

      // Additional headers
      $headers .= 'To: '.$toaddress . "\r\n";
      $headers .= 'From: Scott Crabtree <scott@happybrainscience.com>' . "\r\n";

      // Mail it
      mail($to, $subject, $message, $headers);




        if($emailresults == 'yes'){
          $toaddress = $email;

          // To send HTML mail, the Content-type header must be set
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

      // Additional headers
      $headers .= 'To: '.$toaddress . "\r\n";
      $headers .= 'From: Scott Crabtree <scott@happybrainscience.com>' . "\r\n";
            mail($to, $subject, $message, $headers);
        }



  ?>

    <p>Your current happiness score is [ <span style="color:#FF6600; font-weight:bold; font-size:15px;"><?=$score?></span> ] on a scale of 1 (least happiness) to 7 (maximum happiness). It has been calculated by adding up your ratings for each of the four questions and then dividing the total by four.</p><p>
    If you like, you can track your results over time to see if your happiness is increasing. This is not to suggest that you should be obsessed with happiness! Being unhappy at times is normal and natural. Science and I suggest that being happier can be a great goal with a lot of benefits, but attempting to be in a constant state of bliss is counterproductive.</p>
<p>You also might expect to see the average of all results here. I'm not showing you those because it turns out that comparing yourself to others is a good way to be <strong>less</strong> happy. Social comparison is also normal and even necessary. But as <a href="http://www.centreforconfidence.co.uk/pp/evidence.php?p=c2lkPTImdGlkPTImaWQ9MTI=" title="study by Sonja Lyubomirsky and Lee Ross" target="_blank">this study by Sonja Lyubomirsky and Lee Ross shows,</a> happier people tend to do less of it. So don't worry about other people's scores. Focus on how happy you are, how happy you want to be, and techniques you can use to boost your happiness. (You might make others happier in the process, too.)</p>
<p>For suggestions on how to be happier and increase happiness in your workplace, please check out <a href="http://www.happybrainscience.com/category/hbs-blog/" target="_top" title="Blog">my blog</a>, sign up for my newsletter (the sign-up form is to your left), browse my <a href="/recommended-reading/" title="recommended readings" target="_top">recommended readings</a>, or <a href="/contact/" title="Contact" target="_top">let me know how I might help</a>. </p>

<?

      'Email: '.$email."<br />"."\n".
      'Email me my results: '.$emailresults."<br />"."\n".
      'Sign me up to receive occasional brain science news: '.$newsletter."<br />"."\n";



?>












      </div><!-- #content -->
    </div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
