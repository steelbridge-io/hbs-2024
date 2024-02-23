<?php
/**
 * Template Name: Game Sales Page ACF
 *
 */

$_pf = new WC_Product_Factory();
$myProduct = $_pf->get_product('2429');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php
  // Dequeue Styles
  function project_dequeue_unnecessary_styles() {
    wp_dequeue_style( 'happybrainsciencecom-style' );
    wp_deregister_style( 'happybrainsciencecom-style' );
  }
  add_action( 'wp_print_styles', 'project_dequeue_unnecessary_styles' );
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/45aecde154.js" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">

  <?php wp_head(); ?>

  <style type="text/css">
		body, html {
			font-weight: 300;
      overflow-x: hidden;
      height: 100%;
		}
    * {
      /*overflow-y: scroll;*/
      -webkit-overflow-scrolling: touch;
    }
    section.main-header {
			/*background: url(/wp-content/themes/happybrainsciencecom/img/1_image_masthead@144x.png) top left;*/
			background-size: cover;
			color: #fff;
      /* display: table; */
      /* height: 100vh; */
      /* width: 100%; */
    }
    
    .col-sm-12 {
      padding-left: 0;
      padding-right: 0;
    }
		
		.row {
			padding-bottom: 60px;
			padding-top: 60px;
		}
		
		.row.no-padding {
			padding-bottom: 0px;
			padding-top: 0px;
		}
		
		.row.bottom-padding {
			padding-bottom: 60px;
			padding-top: 0px;
		}
    
    section.main-header button {
      font-size: 2em;
    }
    
    .main-header-content {
      /* display: table-cell; */
      text-align: center;
      /* vertical-align: middle; */
    }
    
    h1 {
      font-size: 5em;
      line-height: 1.2;
      margin-bottom: .5em;
    }
    
    h2 {
      font-size: 3.1em;
      font-weight: normal;
      margin-bottom: 1em;
    }
    
    h3 {
      font-size: 2.5em;
      font-weight: normal;
      margin-bottom: 1em;
    }
		
		h1, h2, h3, h4, h5, h6 {
			font-family: 'helvetica-light', arial;
		}
    
    .engagement-column {
      color: #fff;
      text-align: center;
    }
    
    .engagement-column.light {
      background-color: #48a9ac;
    }
    
    .engagement-column.dark {
      background-color: #48a9ac;
    }
    
    .engagement-column span {
      font-size: 1.67em;
			font-weight: bold;
      /* margin-bottom: 0;
      padding: 2em; */
    }
		
    .engagement-column img {
        /* display: inline-block; */
        /* margin: 1em 3em; */
        max-height: 4.5em;
    }
    
    .lifes-too-short {
      text-align: center;
    }
    
    .lifes-too-short p {
      font-size: 1.85em;
			line-height: 1.75em;
    }
    
    .companies-helped {
      text-align: center;
    }
    
    .companies-helped h3 {
      margin-bottom: .5em;
    }
    
    /* .client-logos {
      margin-bottom: 6em;
      margin-top: 1.85em;
    } */
    
    .client-logos img {
      max-height: 46px;
      width: 100%;
      object-fit: contain;
    }
    
    .happier-at-work {
      background-color: #DCDEE0;
    }
    
    .happier-at-work p {
      margin-bottom: 0;
      text-align: center;
    }
    
    .circle-icon {
      border-radius: 50%;
      color: #fff;
      display: table-cell;
      height: 85px;
      margin-right: 1em;
      text-align: center;
      vertical-align: middle;
      width: 85px;
    }
    
    .circle-icon img {
      max-width: 85px;
    }
    
    .circle-icon-wrapper {
       display: table;
       margin-bottom: 1em;
       text-align: left;
       vertical-align: middle;
    }
		
		.circle-icon-wrapper.center-circle {
			margin: 0 auto;
		}
    
    .circle-icon-description {
      display: table-cell;
			font-size: 1.67em;
      padding-left: 1em;
      vertical-align: middle;
    }
    
    .buy-button {
      margin-top: 2em;
    }
    
    .buy-button button {
      font-size: 1.85em;
    }
    
    .testimonials {
      text-align: center;
    }
    
    .testimonials h3 {
			color: #30667b;
      font-weight: normal;
      font-style: italic;
      font-size: 2.67em;
      line-height: 1.2;
    }
    
    .testimonials p {
			color: #30667b;
      font-size: 1.67em;
    }
    
    /* .happier-team {
      font-size: 1.85em;
    } */
    
    .happier-team h3,
    .happier-team p,
    .happier-team .col-sm-4 {
      text-align: center;
    }
    
    .happier-team button {
      font-size: 1.85em;
      margin: 1em 0;
    }
		
		.happier-team strong {
			display: inline-block;
			font-weight: bold;
			margin-top: 1em;
      font-size: 1.67em;
		}
    .happier-team p {
      font-size: 1.67em;
		}
		
		.happier-team a.btn {
			margin-top: 2em;
		}
    
    .easy-to-use h3 {
      text-align: center;
    }
    
    .easy-to-use h4 {
      font-size: 1.75em;
      font-weight: normal;
      margin-bottom: 0;
    }
    
    .easy-to-use strong {
      font-size: 1.3em !important;
    }
		
		.easy-to-use .col-sm-12 p {
			padding-top: 1em;
			text-align: center;
		}
		
		.easy-to-use .col-sm-12 p strong {
			font-weight: bold;
		}
    
    .easy-to-use ul {
      margin-bottom: 2em;
      margin-top: 2em;
      padding-left: 1.25em;
    }
    
    .easy-to-use li {
      font-size: 1.4em;
      line-height: 1.75em;
      list-style: none;
      position: relative;
    }
    
    .easy-to-use li img {
      height: 15px;
      left: -20px;
      position: absolute;
      top: .5em;
      width: 15px;
    }
    
    section.investment-top {
      background-color: #DCDEE0;
      margin-bottom: 0;
      width: 100%;
    }
		
    section.investment-bottom {
      background-color: #DCDEE0;
      margin-bottom: 2em;
      margin-top: 0;
      width: 100%;
    }
    
    .row.investment p,
    .row.investment h2 {
      text-align: center;
    }
    
    .row.investment h2 {
      font-size: 2.8em;
    }
    
    .row.investment p {
      font-size: 1.85em;
    }
    
    .row.whats-included .second-header {
			margin-bottom: .5em;
    }
    
    .row.whats-included ul {
      font-size: 1.85em;
    }
    
    .row.whats-included .bonus {
			font-size: 1.85em;
			font-weight: bold;
      margin-bottom: .2em;
      margin-top: 1.85em;
      text-align: left;
      text-transform: uppercase;
    }
    
    .row.whats-included .price {
			color: #30667b;
      font-size: 3.8em;
      margin-bottom: .4em;
    }

    .row.whats-included button {
      font-size: 1.85em;
    }
		
		.investment-bottom .col-sm-8.offset-sm-2 {
			text-align: center;
		}
    
    section.different-top {
      width: 100%;
    }
		
    section.different-bottom {
      width: 100%;
    }
		
		.different-bottom strong {
			font-weight: bold;
		}
		
		.different {
			padding-bottom: 0;
		}
    
    .different h3 {
      text-align: center;
    }
    
    .different p {
      font-size: 1.85em;
      margin-bottom: 0;
    }
    
    .different .buy-button {
      font-size: 1em;
      text-align: center;
    }
    
    .bonus-details .circle {
      background-color: #48a9ac;
      border-radius: 50%;
      color: #fff;
      font-size: 1.85em;
      font-weight: bold;
      height: 8em;
      margin: 0 auto;
      padding: .5em;
      text-align: center;
      width: 8em;
    }
    
    .bonus-details .circle span {
      font-size: .8em;
      position: relative;
      top: 30%;
      transform: perspective(1px) translateY(-50%);
    }
    
    footer {
      background-color: #656768;
      color: #fff;
      font-size: 1.85em;
      padding: 2em 0 4em;
      text-align: center;
      width: 100%;
    }
    
    footer a,
    footer a:hover,
    footer a:link,
    footer a:active,
    footer a:visited {
      color: #fff;
    }
    
    .btn.watch-btn,
    .btn.buy-btn {
      background-color: #f79424;
      border-color: #f79424;
      border-radius: 3px;
      font-size: 22px !important;
      padding: .5em 4em;
    }
    
    .btn-primary.watch-btn:not(:disabled):not(.disabled):active,
    .btn-primary.buy-btn:not(:disabled):not(.disabled):active {
        background-color: #c26b0a !important;
        border-color: #c26b0a !important;
    }
    .btn-primary.watch-btn:not(:disabled):not(.disabled):active:focus,
    .btn-primary.buy-btn:not(:disabled):not(.disabled):active:focus,
    .btn-primary.buy-btn:focus,
    .btn-primary.watch-btn:focus {
      box-shadow: 0 0 0 0.2rem rgba(194, 107, 10,.5) !important;
    }

    .international {
      text-align: center;
    }
    
    .international p {
    }
    
    .international a,
    .international a:hover,
    .international a:link,
    .international a:active,
    .international a:visited {
      color: #000;
      text-decoration: underline;
    }
    @media (min-width: 992px) and (max-width: 1200px) {
      .stress-less p {
        font-size: 1.3em;
      }
    }
    @media (min-width: 992px) {
      .btn.watch-btn {
        font-size: 30px !important;
      }
    }
    @media (max-width: 992px) {
      .stress-less .image-col{
        margin-bottom: 2em;
      }
      .btn.watch-btn {
        font-size: 25px !important;
      }
      .main-header-content {
        box-sizing: border-box;
        padding: 2em;
      }
      
      .main-header-content h1 {
        font-size: 4em;
        line-height: 1em;
      }
      
      .main-header-content h2 {
        font-size: 2.5em;
      }
      
      .btn.watch-btn {
        padding: .5em 1em;
      }
      .testimonials h3 {
        font-size: 2em;
      }
      .engagement-column {
        padding: 25px 8px !important;
      }
    }
    @media (max-width: 576px) {
      .btn.watch-btn {
        padding: .5em 4em;
        font-size: 22px !important;
      }
      .row {
        padding-left: 15px;
        padding-right: 15px;
      }
      
      .stress-less img {
        margin-bottom: 1em;
      }

      .happier-at-work h3 {
        text-align: center;
      }
      
      .bonus-details .circle {
        margin-bottom: 1em;
      }
      
      /* #video-container iframe {
        height: auto;
        max-width: 100%;
      } */
			
			.col-sm-12.engagement-column.light span {
				display: block;
				width: 100%;
			}
			
			.col-sm-12.engagement-column.light img {
				display: inline-block;
				height: auto;
				margin: 0 auto;
			}
      .main-header-content {
          padding: 0;
      }
      .main-header-content h1 {
        font-size: 2.9em;
        line-height: 1.2;
      }
      .main-header-content h2 {
        font-size: 1.85em; !important;
        line-height: 1.2;
      }
      h2 {
        font-size: 2.9em;
        line-height: 1.2;
      }
    }

    @media (max-width: 360px) {
      h2 {
          font-size: 2.1em !important;
      }
      .main-header-content {
          padding: 0;
      }
      .main-header-content h1 {
        font-size: 2.1em;
        line-height: 1em;
      }
      .main-header-content h2 {
        font-size: 1.67em !important;
        line-height: 1.2;
      }
      .btn.watch-btn, .btn.buy-btn {
          font-size: 20px !important;
      }
      .testimonials h3 {
        font-size: 1.67em;
      }
      .testimonials p {
        font-size: 1em;
      }
      p, .circle-icon-description, .row.whats-included ul, .bonus-details .circle {
        font-size: 1em !important;
      }
      p.price {
          font-size: 2em !important;
      }
      .bonus-details  {
        margin: 0 !important;
      }
      footer .text {
        font-size: 20px !important;
      }
    }
      

		.whats-included {
			background-color: #DCDEE0;
		}
		
		.investment-divider {
			/* background: url(/wp-content/themes/happybrainsciencecom/img/11_image_investment@144x.jpg) top left; */
			background-size: cover !important;
			margin: 0;
			padding: 0;
			min-height: 30rem;
			width: 100%;
    }
    .topleft .investment-divider {
      background-position: top left !important;
    }
    @media (max-width: 992px) {
      .investment-divider {
        background-size: cover !important;
        background-position: center center !important;
      }
      .smallbgmobile .investment-divider {
        padding-bottom: 56%;
        min-height: auto;
      }
      .twentyone .investment-divider {
        background-position: 21% !important;
      }
    }
		
		.different-divider {
			/* background: url(/wp-content/themes/happybrainsciencecom/img/12_game_deck_different.jpg) top left; */
			background-size: cover;
			margin: 0;
			padding: 0;
			min-height: 30rem;
			width: 100%;
		}
    .video-wrap {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      max-width: 1920px;
      margin: 0 auto;
    }
    .video-wrap iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        max-height: 1080px;
        /* min-height: 293px; */
    }
  </style>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/homepage.css">
  <style type="text/css">
    .main-header .btn:hover {
      color: #fff;
    }
    .main-header .btn {
      text-decoration: none;
    }
    .main-header h2 {
      margin-bottom: 1em;
    }
    .main-header {
      height: calc(100vh - 123.52px) !important;
    }
    @media (max-width: 480px) {
      .main-header, .main-header .h-100 {
        min-height: 350px !important;
      }
    }
    .happier-team strong {
      display: inline-block;
      margin-top: 1em;
      font-size: 1.67em;
      font-weight: bold !important;
      letter-spacing: 1px !important;
    }
    .stress-less h4 {
      letter-spacing: 1px;
    }
    .stress-less h3 {
      margin-bottom: 1.85em;
      text-align: center;
    }
    .stress-less img {
      max-width: 100%;
    }
    .stress-less h4 {
      font-size: 1.67em;
      font-weight: bold;
    }
    .stress-less p {
      font-size: 1.5em;
      margin-bottom: 2em;
    }
    .stress-less .buy-button p {
      margin-top: 2em;
      text-align: center;
    }
    .stress-less .buy-button button {
      font-size: 1.25em;
    }
    .testimonial-text {
      color: #fff !important;
      font-size: 2.34em !important;
      font-weight: 300 !important;
      font-style: italic;
    }
    @media (max-width: 480px) {
      .testimonial-text {
        font-size: 1.5em !important;
      }
    } 
    .testimonial-author {
      color: #fff !important;
    }
    .investment, section.investment-top {
      background-color: initial;
    }
    .bonus strong {
      font-weight: 700 !important;
    }
    .row.whats-included .price {
      font-size: 2.8em;
    }
    @media (min-width: 992px) {
      .row.investment h2 {
        font-size: 3.34em;
      }
    }
    @media (max-width: 480px) {
      .row.whats-included .price, .row.investment h2 {
          font-size: 2em!important;
      }
    }
    footer a, footer p {
      font-size: 1em;
    }
  </style>

</head>
<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <div id="main-nav" class="navbar-container">
      <nav class="navbar navbar-expand-lg navbar-light pt-4 pb-4">
          <div class="container">
              <?php 
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logoUrl = wp_get_attachment_url( $custom_logo_id , 'full' );
              ?>
              <a class="navbar-brand fade-page" href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img class="main-logo" src="<?php echo $logoUrl; ?>" alt="<?php bloginfo( 'name' ); ?>" style="width: 235px; height: 65.53px;">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <?php
                    wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'           => 4,
                    'container'       => 'ul',
                    'menu_id'   		=> 'menu-primary',
                    'menu_class'      => 'navbar-nav ml-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                  ?>
                <!-- <form class="form-inline my-2 my-lg-0 search-form" action="/?s=">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path fill="#495057" d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->

                  <form class="form-inline my-2 my-lg-0 search-form" action="/" method="get">
                      <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path fill="#495057" d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>
                      <input class="form-control mr-sm-2" placeholder="Search" aria-label="Search" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>

                <?php
                    wp_nav_menu( array(
                    'theme_location'  => 'contact',
                    'depth'           => 1,
                    'container'       => 'ul',
                    'menu_id'   		=> 'contact-menu',
                    'menu_class'      => 'navbar-nav mobile-contact',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
              </div>
          </div>
      </nav>
    </div>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>

    <!-- <section id="gameHero" class="main-header row no-padding h-100">
      <div class="container h-100">
        <div class="row no-padding h-100">
          <div class="col-sm-12 my-auto">
            <div class="main-header-content">
              <h1 class="title">Play your way to <br>happiness at work</h1>
              <h2 class="subtitle">A revolutionary game that builds thriving teams.</h2>
              <p><a href="#game-video" class="btn btn-primary watch-btn">Watch the Video</a></p>
            </div>
          </div>
        </div>
      </div>
    </section> 

    <div class="row no-padding engagement-column light p-2">
        <div class="container">
            <div class="row no-padding">
                    <div class="col-md-3 m-auto py-1">
                        <span>Boost Engagement</span>
                    </div>
                    <div class="col-md-1 m-auto py-1">
                        <img src="/wp-content/themes/happybrainsciencecom/img/2_icon_boost_engagement@144x.png">
                    </div>
                    <div class="col-md-3 m-auto py-1">
                        
                        <span>Be Happier At Work</span>
                    </div>
                    <div class="col-md-1 m-auto py-1">
                        <img src="/wp-content/themes/happybrainsciencecom/img/3_icon_be_happier_at_work@144x.png">
                    </div>
                    <div class="col-md-3 m-auto py-1">
                        <span>Get More Done</span>
                    </div>
            </div>
        </div>
    </div> -->
    
    <!-- <div class="container">
      <div class="row lifes-too-short">
        <div class="col-sm-12">
          <h2>Life's too short to be miserable at work</h2>
          <p>Managing unhappy people is exhausting. Office politics kills productivity.<br>You and your team deserve better.</p>
        </div>
        <div class="col-sm-12 buy-button my-auto text-center pt-5">
          <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a>
        </div>
      </div>
    </div> -->
    
    <!-- <div class="row stress-less-wrapper light-blue">
      <div class="container">
        <div class="row stress-less p-4">
          <div class="col-12 text-center">
            <h2>Stress less and build a thriving team</h2>
          </div>
          <div class="col-lg-6 image-col">
            <img src="https://www.happybrainscience.com/wp-content/uploads/2015/11/JG-Game-Shot-11-1080x1080-2.jpg" alt="Image of happy people using game">
          </div>
          <div class="col-xl-5 offset-xl-1 col-lg-6">
            <h4>Work better together</h4>
            <p>Avoid persistent "people problems" with a fun, science-based tool to help your team communicate and connect.</p>
            
            <h4>Play your way to productivity</h4>
            <p>Research shows that happier brains are 12-25% more productive.</p>
            
            <h4>Impress your team</h4>
            <p>Ditch the egg toss or spaghetti tower. Make your next off-site meeting or brainstorming session a total hit.</p>
          </div>
          <div class="col-sm-12 buy-button my-auto text-center pt-4">
            <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a>
          </div>
        </div>
      </div>
    </div> -->
    
    <!-- <div class="container">
      <div class="row companies-helped">
        <div class="col-sm-12 text-center">
          <h2>We've helped these companies thrive from 9-5</h2>
        </div>
        <div class="col-sm-12 client-logos">
          <div class="row no-padding">
            <div class="col-lg-2 col-4 mb-5">
              <img src="/wp-content/themes/happybrainsciencecom/img/logos/nbc.png">
            </div>
            <div class="col-lg-2 col-4 mb-5">
              <img src="/wp-content/themes/happybrainsciencecom/img/logos/dreamworks.png">
            </div>
            <div class="col-lg-2 col-4 mb-5">
              <img src="/wp-content/themes/happybrainsciencecom/img/logos/nike.png">
            </div>
            <div class="col-lg-2 col-4 mb-5">
              <img src="/wp-content/themes/happybrainsciencecom/img/logos/intel.png">
            </div>
            <div class="col-lg-2 col-4 mb-5">
              <img src="/wp-content/themes/happybrainsciencecom/img/logos/hp.png">
            </div>
            <div class="col-lg-2 col-4 mb-5">
              <img src="/wp-content/themes/happybrainsciencecom/img/logos/kaiser.png">
            </div>
          </div>
        </div>
      </div>
    </div> -->
    
    <!-- <div class="row happier-at-work">
      <div class="container">
        <div class="row p-3">
          <div class="col-md-6">
            <h2>Everyone can be happier at work. Science says so.</h2>
          </div>
          <div class="col-md-6">
            <div class="circle-icon-wrapper mb-5">
              <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/5_icon_neuroscience@144x.png"></span>
              <span class="circle-icon-description">Our game is 100% grounded in positive psychology and neuroscience</span>
            </div>
            <div class="circle-icon-wrapper mb-5">
              <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/6_icon_corporations@144x.png"></span>
              <span class="circle-icon-description">100’s of happier corporations</span>
            </div>
            <div class="circle-icon-wrapper mb-5">
              <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/7_icon_people@144x.png"></span>
              <span class="circle-icon-description">10,000+ happier, healthier people</span>
            </div>
          </div>
          <div class="col-sm-12 buy-button my-auto text-center pt-4">
              <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a>
          </div>
        </div>
      </div>
    </div> -->
    
    <!-- <div class="row testimonial-wrapper" style="background-color: #30667b;">
      <div class="container">
        <div class="row testimonials p-3">
          <div class="col-sm-12 text-center pb-4"> 
            <img class="testimonial-headshot" src="https://www.happybrainscience.com/wp-content/uploads/2020/12/quote5_andy_144px.png" alt="">
          </div>
          <div class="col-sm-12">
            <h3 class="testimonial-text">"I was skeptical, but after just a few minutes we were talking and laughing—and yes, tears were shed. I’d recommend this tool to anyone who wants a happier team."</h3>
            <p class="testimonial-author">Liz Dahlager, Vice President of Sales & Marketing</p>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="container">
      <div class="row happier-team">
        <div class="col-sm-12 text-center">
          <h2>Just 3 Steps to a Happier Team</h2>
        </div>
        <div class="col-md-4 text-center">
          <div class="circle-icon-wrapper center-circle">
            <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/8_icon_game@144x.png"></span>
          </div>
          <strong>Buy the Game</strong>
          <p>Get started in just 5 minutes. Each game takes just 5 minutes too!</p>
        </div>
        <div class="col-md-4 text-center">
          <div class="circle-icon-wrapper center-circle">
            <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/9_icon_talking@144x.png"></span>
          </div>
          <strong>Get Your Team Talking</strong>
          <p>With cutting-edge strategies to resolve problems and relieve stress.</p>
        </div>
        <div class="col-md-4 text-center">
          <div class="circle-icon-wrapper center-circle">
            <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/10_icon_love_work@144x.png"></span>
          </div>
          <strong>Love Work Again</strong>
          <p>Enjoy more high-fives and <em>heck yeah’s</em> from happy colleagues.</p>
        </div>
        <div class="col-sm-12 buy-button my-auto text-center pt-4">
              <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a>
          </div>
      </div>
    </div> -->
    
    <!-- <div class="row video-wrapper light-blue p-0">
      <div class="container">
        <div id="video-container" class="row easy-to-use">
          <div class="col-sm-12 text-center">
            <h2 class="mb-0">Easy to use and works for any business</h2>
          </div>
          <div class="col-lg-5 pt-5">
            <h4>A powerful happiness-boosting tool based on cutting-edge brain science.</h4>
            <ul>
              <li><img src="/wp-content/themes/happybrainsciencecom/img/checkbox-new.png">Revitalize relationships</li>
              <li><img src="/wp-content/themes/happybrainsciencecom/img/checkbox-new.png">Flow to Goals</li>
              <li><img src="/wp-content/themes/happybrainsciencecom/img/checkbox-new.png">Subdue Stress</li>
              <li><img src="/wp-content/themes/happybrainsciencecom/img/checkbox-new.png">Practice Positivity</li>
            </ul>
          </div>
          <div id="game-video" class="offset-lg-1 col-lg-6 pt-5">
            <div class="video-wrap">
                <iframe id="ytplayer" type="text/html" width="720" height="405" src="https://www.youtube.com/embed/werVgAiRtNc?modestbranding=1&playsinline=1" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-sm-12 pt-5">
            <p><strong>Think corporate facilitator meets life coach, in a box.</strong></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row testimonial-wrapper" style="background-color: #48a9ac;">
      <div class="container">
        <div class="row testimonials p-3">
          <div class="col-sm-12 text-center pb-4"> 
            <img class="testimonial-headshot" src="https://www.happybrainscience.com/wp-content/uploads/2020/12/quote5_andy_144px.png" alt="">
          </div>
          <div class="col-sm-12">
            <h3 class="testimonial-text">"Choose Happiness @ Work was a resounding success. In fact, if our group's laughter disturbed any of our office members, I apologize – but my team really had fun. The game served as a great team building exercise, as well as an opportunity to touch on some of the 'soft responsibilities' that relate to solving problems at work."</h3>
            <p class="testimonial-author">David Yokom, M.Sc, P.Eng<br> Queens University</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row investment">
      <section class="investment-top">
        <div class="container">
          <div class="col-sm-12">
            <h2>What's my investment?</h2>
            <p>How much is an unhappy workplace costing you? How many hours do you waste managing interpersonal problems? How many of your team-building efforts fall flat — in spite of all your hard work?</p>
          </div>
        </div>
      </section>
    </div>
		
    <div class="row no-padding">
			<section class="investment-divider">
				&nbsp;
			</section>
		</div>
		
    <div class="row whats-included">
      <section class="investment-bottom">
        <div class="container">
          <div class="col-sm-12">
            <h2 class="second-header">What’s included in Choose Happiness @ Work?</h2>
            <ul>
              <li>50+ common workplace scenarios</li>
              <li>100+ unique science-based solutions</li>
              <li>Detailed instructions on how to play and maximize engagement</li>
              <li>Each box serves up to 10 players (bulk discounts available for larger groups)</li>
              <li>19 additional game variations (ideal for team building, brainstorming and more!)</li>
            </ul>
          
            <p class="bonus"><strong>As a bonus, you'll also get:</strong></p>
            <ul>
              <li>7 facilitation strategies and a facilitator's guide</li>
              <li>Exclusive access to online resources and a database of scientific sources</li>
            </ul>
          </div>
        
          <div class="col-sm-12 text-center">
            <p class="price"><s>$195</s> Now $99!</p>
            <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a>
          </div>
        </div>
      </section>
    </div>

    <div class="row testimonial-wrapper" style="background-color: #fab142;">
      <div class="container">
        <div class="row testimonials p-3">
          <div class="col-sm-12 text-center pb-4"> 
            <img class="testimonial-headshot" src="https://www.happybrainscience.com/wp-content/uploads/2020/12/quote4_sivasailam_144px.png" alt="">
          </div>
          <div class="col-sm-12">
            <h3 class="testimonial-text">"We used Choose Happiness @ Work at our training last week and it went great! The managers were a little unsure at first, but as the game rolled on there was so much laughing and discussing going on, it was awesome! The participants didn't want to stop playing, and since then we have loaned out our copies to some of our departments to play with other teams."</h3>
            <p class="testimonial-author">Ian Wiggins, MA HRM, SPHR, SHRM-SCP & Senior Human Resources Generalist Wauna Credit Union</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row different mb-5">
        <section class="different-top">
          <div class="col-sm-12 text-center">
            <h2>What makes This Game So Different?</h2>
          
            <p>Choose Happiness @ Work is revolutionary because it’s the only game designed to boost happiness at work that’s 100% grounded in positive psychology and neuroscience. It’s a fun, effective tool that’s proven to build happy, thriving teams.</p>
          </div>
        </section>
      </div>
    </div>
		
    <div class="row no-padding different">
      <section class="different-divider">
				&nbsp;
			</section>
		</div>

    <div class="container">
      <div class="row different">
        <section class="different-bottom">
          <div class="col-sm-12 mb-5">
            <p><strong>We spend more time with work colleagues than anyone else in our lives.</strong> Shouldn’t you and your team enjoy your time together? We think so.</p>
          </div>
          
          <div class="col-sm-12 mb-5">
            <p><strong>We’ve worked in unhappy offices too.</strong> And we know how exhausting it is to deal with difficult people—along with Everything Else on your plate.</p>
          </div>

          <div class="col-sm-12 mb-5">
            <p>The good news is this: everyone has the potential to be happier at work. Even <em>you-know-who</em>.</p>
          </div>

          <div class="col-sm-12 mb-5">
            <p><strong>We’ve spent the last 30 years studying the science of happiness.</strong> We’re total happiness geeks. Lucky for you, we’ve distilled all that peer-reviewed brain science into a powerful little game that’ll give your team a booster-shot of happiness.</p>
          </div>     

          <div class="col-sm-12 mb-5">
            <p><strong>Imagine being the leader who finally gets your team talking and thriving together.</strong></p>
          </div>
        
          <div class="col-sm-12 buy-button my-auto text-center pt-4">
            <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a>
          </div>
        </section>
      </div>
    </div>
    
    <div class="container">
      <div class="row bonus-details mt-5 mb-2">
        <div class="col-lg-4 mb-3">
          <div class="circle"><span>30-Day Money-Back Guarantee</span></div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="circle"><span>Special Rates for Bulk Orders</span></div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="circle"><span>Free Shipping within the U.S.</span></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row pt-0 pb-4 international">
        <div class="col-sm-12">
          <p>Ordering outside the United States or Canada? Have other questions? Please visit one of our <a href="https://www.happybrainscience.com/international-distributors/">International Distributors</a> or <a href="https://www.happybrainscience.com/contact/">contact us</a>.</p>
        </div>
      </div>
    </div> -->
    
    <div class="row no-padding">
      <footer>
        <div class="col-sm-12 mb-5 mt-5">
          <p>
            <a class="text" href="https://www.happybrainscience.com/contact/">CONTACT</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://twitter.com/scottcrab">
              <i class="fab fa-twitter-square"></i>
            </a> 
            <a href="https://www.facebook.com/pages/Happy-Brain-Science/244551702277956">
              <i class="fab fa-facebook-square"></i>
            </a> 
            <a href="https://www.youtube.com/user/HappyBrainScience?sub_confirmation=1">
              <i class="fab fa-youtube-square"></i>
            </a> 
            <a href="https://www.linkedin.com/in/sccrabtree/">
              <i class="fab fa-linkedin"></i>
            </a>
          </p>
        </div>
        <div class="col-sm-12">
          <p class="text">Copyright &copy 2020 Happy Brain Science. All rights reserved.</p>
        </div>
      </footer>
    </div>

  </div>

    <?php wp_footer(); ?>

</body>
</html>