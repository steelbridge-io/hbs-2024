<?php
$header_toggle = get_field( 'header_type' );
if ( $header_toggle !== 'none' ) :
?>
<div class="entry_header_wrap entry_header_wrap--<?php echo $header_toggle; ?>">
  <header class="entry_header entry_header--<?php echo $header_toggle; ?>">
    <?php
    $image_video_toggle = get_field('header_image_or_video'); ?>
    <div class="header--video_image_wrap">
    <?php
    if ( $image_video_toggle == 'video' ) : ?>
      <div class="header--video_image">
        <?php
        //echo get_field('header_video_html');
        echo get_field('header_video_html');
        ?>
      </div>
    <?php elseif ( $image_video_toggle == 'image' ) :
      echo acf_image( array( get_field('header_image'), 'header--video_image', 'medium' ) );
    endif;
    ?>
    </div>
    <div class="header--content_wrap">
      <div class="header--title">
        <?php echo get_field('header_title'); ?>
      </div>
      <div class="header--content">
        <?php echo get_field('header_content'); ?>
      </div>
    </div>
  </header><!-- .entry_header -->
</div><!-- .entry_header_wrap -->
<?php endif; ?>
