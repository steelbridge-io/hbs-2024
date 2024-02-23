<?php get_header();
/**
 * Template Name: Happiness Test Confirmation Template
 *
 */

$general_score = absint($_GET['general']);
$peer_score = absint($_GET['peers']);
$generally_happy_score = absint($_GET['generally_happy']);
$generally_not_happy_score = absint($_GET['generally_not_happy']);
$input_email = sanitize_email($_GET['email']);
$updates = wp_kses($_GET['updates'], '');
$sendemail = wp_kses($_GET['sendemail'], '');
$total_score = $general_score + $peer_score + $generally_happy_score + $generally_not_happy_score;
$average_score = round( $total_score / 4, 0, PHP_ROUND_HALF_UP) ;

?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php get_template_part('page_header'); ?>

          <div class="entry_content">
<?php

function faux_shortcode_replace($search_replace_array, $subject) {
  foreach ($search_replace_array as $search => $replace) :
    $subject = str_replace($search, $replace, $subject);
  endforeach;
  return $subject;
}

$from_email = get_field('confirmation_email_from_address');

// '[text_to_replace]' => '[insert_this_text]'
$text_replacements = array (
  '[average_score]'  => $average_score,
  '[general_score]'  => $general_score,
  '[peer_score]'  => $peer_score,
  '[generally_happy_score]'  => $generally_happy_score,
  '[generally_not_happy_score]'  => $generally_not_happy_score,
  '[email_address_submitted]'  => $input_email,
  '[email_results]'  => $sendemail,
  '[email_signup]'  => $updates,
  '[from_email]' => $from_email
);

$raw_page_content = get_field('confirmation_page');
$raw_email_content = get_field('confirmation_email');

$page_content = faux_shortcode_replace($text_replacements, $raw_page_content);
$email_content = faux_shortcode_replace($text_replacements, $raw_email_content);

echo $page_content;

// echo '<h2>Email Content</h2>';
// echo $email_content;


  // if( $sendemail == 'BOOM' ) :
  // if( $sendemail == 'Yes' ) :
  //     $to = $input_email;
  //     $subject = get_field('confirmation_email_subject_line');
  //     // To send HTML mail, the Content-type header must be set
  //     $headers  = 'MIME-Version: 1.0' . "\r\n";
  //     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  //     // Additional headers
  //     $headers .= 'To: '.$input_email . "\r\n";
  //     $headers .= 'From: ' . $from_email . "\r\n";
  //     mail($to, $subject, $email_content, $headers);
  // endif;


?>

          </div><!-- .entry_content -->



        </article><!-- #post-## -->

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
