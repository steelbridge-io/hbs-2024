<?php
/**
 * Template Name: Choose Happiness At Work
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

    <?php if ( have_rows( 'chaw_header' ) ) : ?>
	    <?php while ( have_rows( 'chaw_header' ) ) : the_row(); ?>
      <section id="gameHero" class="main-header row no-padding h-100" style="background-image: url('<?php echo get_sub_field( 'background_image' ); ?>');">
          <div class="container h-100">
          <div class="row no-padding h-100">
              <div class="col-sm-12 my-auto">
              <div class="main-header-content">
                  <h1 class="title"><?php echo get_sub_field( 'title' ); ?></h1>
                  <h2 class="subtitle"><?php echo get_sub_field( 'subtitle' ); ?></h2>
                  <?php $button = get_sub_field( 'button' ); ?>
                  <?php if ( $button ) : ?>
                      <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary watch-btn"><?php echo esc_html( $button['title'] ); ?></a>
                  <?php endif; ?>
              </div>
              </div>
          </div>
          </div>
      </section>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_features' ) ) : ?>
	  <?php while ( have_rows( 'chaw_features' ) ) : the_row(); ?>
      <?php if ( have_rows( 'features' ) ) : ?>
        <?php while ( have_rows( 'features' ) ) : the_row(); ?>
          <div class="row no-padding engagement-column light p-2">
              <div class="container">
                  <div class="row no-padding">
                          <div class="col-md-3 m-auto py-1">
                              <span><?php echo get_sub_field( 'feature_1' ); ?></span>
                          </div>
                          <?php $feature_icon_1 = get_sub_field( 'feature_icon_1' ); ?>
                          <?php if ( $feature_icon_1 ) : ?>
                          <div class="col-md-1 m-auto py-1">
                              <img src="<?php echo esc_url( $feature_icon_1['url'] ); ?>" alt="<?php echo esc_attr( $feature_icon_1['alt'] ); ?>" />
                          </div>
                          <?php endif; ?>
                          <div class="col-md-3 m-auto py-1">
                          <span><?php echo get_sub_field( 'feature_2' ); ?></span>
                          </div>
                          <?php $feature_icon_2 = get_sub_field( 'feature_icon_2' ); ?>
                          <?php if ( $feature_icon_2 ) : ?>
                          <div class="col-md-1 m-auto py-1">
                              <img src="<?php echo esc_url( $feature_icon_2['url'] ); ?>" alt="<?php echo esc_attr( $feature_icon_2['alt'] ); ?>" />
                          </div>
                          <?php endif; ?>
                          <div class="col-md-3 m-auto py-1">
                              <span><?php echo get_sub_field( 'feature_3' ); ?></span>
                          </div>
                  </div>
              </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_cta' ) ) : ?>
      <?php while ( have_rows( 'chaw_cta' ) ) : the_row(); ?>
      <div class="container">
        <div class="row lifes-too-short">
          <div class="col-sm-12">
            <h2><?php echo get_sub_field( 'title' ); ?></h2>
            <p><?php echo get_sub_field( 'subtitle' ); ?></p>
          </div>
          <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
              <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                  <?php $button = get_sub_field( 'button' ); ?>
                  <?php $theProduct = get_sub_field( 'product' ); ?>
                  <?php if ( $theProduct ) : ?>
                      <?php
                          $_pf = new WC_Product_Factory();
                          $myProduct = $_pf->get_product( $theProduct );
                      ?>
                      <?php if ( $button ) : ?>
                          <div class="col-sm-12 buy-button my-auto text-center pt-5">
                              <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                          </div>
                      <?php endif; ?>
                  <?php else: ?>
                      <?php if ( $button ) : ?>
                          <div class="col-sm-12 buy-button my-auto text-center pt-5">
                          <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary buy-btn"><?php echo esc_html( $button['title'] ); ?></a>
                          </div>
                      <?php endif; ?>
                  <?php endif; ?>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_game_benefits' ) ) : ?>
      <?php while ( have_rows( 'chaw_game_benefits' ) ) : the_row(); ?>
      <div class="row stress-less-wrapper light-blue">
        <div class="container">
          <div class="row stress-less p-4">
              <div class="col-12 text-center">
                  <h2><?php echo get_sub_field( 'title' ); ?></h2>
              </div>
              <div class="col-lg-6 image-col">
                  <?php $image = get_sub_field( 'image' ); ?>
                  <?php if ( $image ) : ?>
                      <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                  <?php endif; ?>
              </div>
              <?php if ( have_rows( 'benefits_list' ) ) : ?>
                  <div class="col-xl-5 offset-xl-1 col-lg-6">
                      <?php while ( have_rows( 'benefits_list' ) ) : the_row(); ?>
                          <h4> <?php echo get_sub_field( 'benefit_title' ); ?></h4>
                          <p><?php echo get_sub_field( 'benefit_description' ); ?></p>
                      <?php endwhile; ?>
                  </div>
              <?php endif; ?>
              <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
                  <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                      <?php $button = get_sub_field( 'button' ); ?>
                      <?php $theProduct = get_sub_field( 'product' ); ?>
                      <?php if ( $theProduct ) : ?>
                          <?php
                              $_pf = new WC_Product_Factory();
                              $myProduct = $_pf->get_product( $theProduct );
                          ?>
                          <?php if ( $button ) : ?>
                              <div class="col-sm-12 buy-button my-auto text-center pt-5">
                                  <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                              </div>
                          <?php endif; ?>
                      <?php else: ?>
                          <?php if ( $button ) : ?>
                              <div class="col-sm-12 buy-button my-auto text-center pt-5">
                              <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary buy-btn"><?php echo esc_html( $button['title'] ); ?></a>
                              </div>
                          <?php endif; ?>
                      <?php endif; ?>
                  <?php endwhile; ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_logos_row' ) ) : ?>
      <?php while ( have_rows( 'chaw_logos_row' ) ) : the_row(); ?>
        <?php if ( have_rows( 'feature_in' ) ) : ?>
          <?php while ( have_rows( 'feature_in' ) ) : the_row(); ?>
              <div class="container">
                  <div class="row companies-helped">
                      <div class="col-sm-12 text-center">
                          <h2><?php echo get_sub_field( 'title' ); ?></h2>
                      </div>
                      <?php if ( have_rows( 'company_logos' ) ) : ?>
                          <div class="col-sm-12 client-logos">
                              <div class="row no-padding">
                              <?php while ( have_rows( 'company_logos' ) ) : the_row(); ?>
                                  <?php $company_url = get_sub_field( 'company_url' ); ?>
                                      <?php $company_logo = get_sub_field( 'company_logo' ); ?>
                                      <?php if ( $company_url ) : ?>
                                          <?php if ( $company_logo ) : ?>
                                              <div class="col-md-2 col-6 my-auto mobile-space-bottom">
                                                  <a href="<?php echo esc_url( $company_url['url'] ); ?>" target="<?php echo esc_attr( $company_url['target'] ); ?>">
                                                  <img src="<?php echo esc_url( $company_logo['url'] ); ?>" alt="<?php echo esc_attr( $company_logo['alt'] ); ?>">
                                                  </a>
                                              </div>
                                          <?php endif; ?>
                                      <?php else : ?>
                                          <?php if ( $company_logo ) : ?>
                                              <div class="col-md-2 col-6 my-auto mobile-space-bottom">
                                              <img src="<?php echo esc_url( $company_logo['url'] ); ?>" alt="<?php echo esc_attr( $company_logo['alt'] ); ?>">
                                              </div>
                                          <?php endif; ?>
                                  <?php endif; ?>
                              <?php endwhile; ?>
                              </div>
                          </div>
                      <?php endif; ?>
                  </div>
              </div>
          <?php endwhile; ?>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_game_features' ) ) : ?>
      <?php while ( have_rows( 'chaw_game_features' ) ) : the_row(); ?>
      <div class="row happier-at-work">
        <div class="container">
            <div class="row p-3">
                <div class="col-md-6">
                    <h2><?php echo get_sub_field( 'title' ); ?></h2>
                </div>
                <?php if ( have_rows( 'features' ) ) : ?>
                    <div class="col-md-6">
                        <?php while ( have_rows( 'features' ) ) : the_row(); ?>
                            <div class="circle-icon-wrapper mb-5">
                            <?php $feature_logo = get_sub_field( 'feature_logo' ); ?>
                                <?php if ( $feature_logo ) : ?>
                                    <span class="circle-icon"><img src="<?php echo esc_url( $feature_logo['url'] ); ?>" alt="<?php echo esc_attr( $feature_logo['alt'] ); ?>" /></span>
                                <?php endif; ?>
                                <span class="circle-icon-description"><?php the_sub_field( 'feature_text' ); ?></span>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
                <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                    <?php $button = get_sub_field( 'button' ); ?>
                    <?php $theProduct = get_sub_field( 'product' ); ?>
                    <?php if ( $theProduct ) : ?>
                        <?php
                            $_pf = new WC_Product_Factory();
                            $myProduct = $_pf->get_product( $theProduct );
                        ?>
                        <?php if ( $button ) : ?>
                            <div class="col-sm-12 buy-button my-auto text-center pt-5">
                                <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if ( $button ) : ?>
                            <div class="col-sm-12 buy-button my-auto text-center pt-5">
                            <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary buy-btn"><?php echo esc_html( $button['title'] ); ?></a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_testimonial' ) ) : ?>
      <?php while ( have_rows( 'chaw_testimonial' ) ) : the_row(); ?>
      <div class="row testimonial-wrapper" style="background-color: <?php the_sub_field( 'background_color' ); ?>">
        <div class="container">
            <div class="row testimonials p-3">
            <?php $author_image = get_sub_field( 'author_image' ); ?>
            <?php if ( $author_image ) : ?>
                <div class="col-sm-12 text-center pb-4">
                    <img class="testimonial-headshot" src="<?php echo esc_url( $author_image['url'] ); ?>" alt="<?php echo esc_attr( $author_image['alt'] ); ?>" />
                </div>
            <?php endif; ?>
            <div class="col-sm-12">
                <h3 class="testimonial-text"><?php the_sub_field( 'testimonial_text' ); ?></h3>
                <p class="testimonial-author"><?php the_sub_field( 'author' ); ?></p>
            </div>
            </div>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_steps' ) ) : ?>
      <?php while ( have_rows( 'chaw_steps' ) ) : the_row(); ?>
      <div class="container">
        <div class="row happier-team">
            <div class="col-sm-12 text-center">
              <h2><?php the_sub_field( 'title' ); ?></h2>
            </div>
            <?php if ( have_rows( 'steps' ) ) : ?>
                <?php while ( have_rows( 'steps' ) ) : the_row(); ?>
                    <div class="col-md-4 text-center">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                            <div class="circle-icon-wrapper center-circle">
                                <span class="circle-icon"> <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" /></span>
                            </div>
                        <?php endif; ?>
                        <strong><?php the_sub_field( 'title' ); ?></strong>
                        <p><?php the_sub_field( 'description' ); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
                <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                    <?php $button = get_sub_field( 'button' ); ?>
                    <?php $theProduct = get_sub_field( 'product' ); ?>
                    <?php if ( $theProduct ) : ?>
                        <?php
                            $_pf = new WC_Product_Factory();
                            $myProduct = $_pf->get_product( $theProduct );
                        ?>
                        <?php if ( $button ) : ?>
                            <div class="col-sm-12 buy-button my-auto text-center pt-5">
                                <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if ( $button ) : ?>
                            <div class="col-sm-12 buy-button my-auto text-center pt-5">
                            <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary buy-btn"><?php echo esc_html( $button['title'] ); ?></a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_game_video' ) ) : ?>
      <?php while ( have_rows( 'chaw_game_video' ) ) : the_row(); ?>
      <div class="row video-wrapper p-0 light-blue">
        <div class="container">
            <div id="video-container" class="row easy-to-use">
            <div class="col-sm-12 text-center">
                <h2 class="mb-0"><?php the_sub_field( 'title' ); ?></h2>
            </div>
            <div class="col-lg-5 pt-5">
                <h4><?php the_sub_field( 'subtitle' ); ?></h4>
                <?php if ( have_rows( 'features' ) ) : ?>
                    <ul>
                    <?php while ( have_rows( 'features' ) ) : the_row(); ?>

                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/checkbox-new.png"><?php the_sub_field( 'feature_text' ); ?></li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                </ul>
            </div>
            <div id="game-video" class="offset-lg-1 col-lg-6 pt-5">
                <div class="video-wrap">
                    <iframe id="ytplayer" type="text/html" width="720" height="405" src="<?php the_sub_field( 'video' ); ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-12 pt-5">
                <p><strong><?php the_sub_field( 'bottom_text' ); ?></strong></p>
            </div>
            </div>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_testimonial_2' ) ) : ?>
      <?php while ( have_rows( 'chaw_testimonial_2' ) ) : the_row(); ?>
      <div class="row testimonial-wrapper" style="background-color: <?php the_sub_field( 'background_color' ); ?>">
        <div class="container">
            <div class="row testimonials p-3">
            <?php $author_image = get_sub_field( 'author_image' ); ?>
            <?php if ( $author_image ) : ?>
                <div class="col-sm-12 text-center pb-4">
                    <img class="testimonial-headshot" src="<?php echo esc_url( $author_image['url'] ); ?>" alt="<?php echo esc_attr( $author_image['alt'] ); ?>" />
                </div>
            <?php endif; ?>
            <div class="col-sm-12">
                <h3 class="testimonial-text"><?php the_sub_field( 'testimonial_text' ); ?></h3>
                <p class="testimonial-author"><?php the_sub_field( 'author' ); ?></p>
            </div>
            </div>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_simple_text' ) ) : ?>
      <?php while ( have_rows( 'chaw_simple_text' ) ) : the_row(); ?>
      <div class="row investment block-simpletext">
        <section class="investment-top">
          <div class="container">
              <div class="col-sm-12">
                  <h2><?php the_sub_field( 'title' ); ?></h2>
                  <p><?php the_sub_field( 'description' ); ?></p>
              </div>
          </div>
        </section>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_image_divider' ) ) : ?>
      <?php while ( have_rows( 'chaw_image_divider' ) ) : the_row(); ?>
        <?php if ( get_sub_field( 'background_image' ) ) : ?>
          <div class="row no-padding">
              <section class="investment-divider" style="background: url(<?php the_sub_field( 'background_image' ); ?>);"></section>
          </div>
        <?php endif ?>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_game_includes' ) ) : ?>
      <?php while ( have_rows( 'chaw_game_includes' ) ) : the_row(); ?>
      <div class="row whats-included">
        <section class="investment-bottom">
            <div class="container">
            <div class="col-sm-12">
                <?php the_sub_field( 'text' ); ?>
            </div>
            <div class="col-sm-12 text-center">
                <p class="price"><?php the_sub_field( 'price' ); ?></p>
                <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
                    <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                        <?php $button = get_sub_field( 'button' ); ?>
                        <?php $theProduct = get_sub_field( 'product' ); ?>
                        <?php if ( $theProduct ) : ?>
                            <?php
                                $_pf = new WC_Product_Factory();
                                $myProduct = $_pf->get_product( $theProduct );
                            ?>
                            <?php if ( $button ) : ?>
                                <div class="col-sm-12 buy-button my-auto text-center pt-0">
                                    <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if ( $button ) : ?>
                                <div class="col-sm-12 buy-button my-auto text-center pt-0">
                                <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary buy-btn"><?php echo esc_html( $button['title'] ); ?></a>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            </div>
        </section>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_testimonial_3' ) ) : ?>
      <?php while ( have_rows( 'chaw_testimonial_3' ) ) : the_row(); ?>
      <div class="row testimonial-wrapper" style="background-color: <?php the_sub_field( 'background_color' ); ?>">
        <div class="container">
            <div class="row testimonials p-3">
            <?php $author_image = get_sub_field( 'author_image' ); ?>
            <?php if ( $author_image ) : ?>
                <div class="col-sm-12 text-center pb-4">
                    <img class="testimonial-headshot" src="<?php echo esc_url( $author_image['url'] ); ?>" alt="<?php echo esc_attr( $author_image['alt'] ); ?>" />
                </div>
            <?php endif; ?>
            <div class="col-sm-12">
                <h3 class="testimonial-text"><?php the_sub_field( 'testimonial_text' ); ?></h3>
                <p class="testimonial-author"><?php the_sub_field( 'author' ); ?></p>
            </div>
            </div>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( have_rows( 'chaw_simple_text_2' ) ) : ?>
    <?php while ( have_rows( 'chaw_simple_text_2' ) ) : the_row(); ?>
      <div class="row investment block-simpletext">
        <section class="investment-top">
          <div class="container">
              <div class="col-sm-12">
                  <h2><?php the_sub_field( 'title' ); ?></h2>
                  <p><?php the_sub_field( 'description' ); ?></p>
              </div>
          </div>
        </section>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php if ( have_rows( 'chaw_image_divider_2' ) ) : ?>
    <?php while ( have_rows( 'chaw_image_divider_2' ) ) : the_row(); ?>
      <?php if ( get_sub_field( 'background_image' ) ) : ?>
        <div class="row no-padding">
            <section class="investment-divider" style="background: url(<?php the_sub_field( 'background_image' ); ?>);"></section>
        </div>
      <?php endif ?>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php if ( have_rows( 'chaw_game_paragraphs' ) ) : ?>
    <?php while ( have_rows( 'chaw_game_paragraphs' ) ) : the_row(); ?>
      <div class="container">
          <div class="row different">
              <section class="different-bottom">
              <?php if ( have_rows( 'paragraphs' ) ) : ?>
                  <?php while ( have_rows( 'paragraphs' ) ) : the_row(); ?>
                      <div class="col-sm-12 mb-5">
                          <?php the_sub_field( 'paragraph' ); ?>
                      </div>
                  <?php endwhile; ?>
              <?php endif; ?>

              <?php if ( have_rows( 'call_to_action_button' ) ) : ?>
                  <?php while ( have_rows( 'call_to_action_button' ) ) : the_row(); ?>
                      <?php $button = get_sub_field( 'button' ); ?>
                      <?php $theProduct = get_sub_field( 'product' ); ?>
                      <?php if ( $theProduct ) : ?>
                          <?php
                              $_pf = new WC_Product_Factory();
                              $myProduct = $_pf->get_product( $theProduct );
                          ?>
                          <?php if ( $button ) : ?>
                              <div class="col-sm-12 buy-button my-auto text-center pt-5">
                                  <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow"><?php echo esc_html( $button['title'] ); ?></a>
                              </div>
                          <?php endif; ?>
                      <?php else: ?>
                          <?php if ( $button ) : ?>
                              <div class="col-sm-12 buy-button my-auto text-center pt-5">
                              <a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn btn-primary buy-btn"><?php echo esc_html( $button['title'] ); ?></a>
                              </div>
                          <?php endif; ?>
                      <?php endif; ?>
                  <?php endwhile; ?>
              <?php endif; ?>
              </section>
          </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php if ( have_rows( 'chaw_3_circles' ) ) : ?>
    <?php while ( have_rows( 'chaw_3_circles' ) ) : the_row(); ?>
      <?php if ( have_rows( 'circles' ) ) : ?>
          <div class="container">
              <div class="row bonus-details mt-5 mb-2">
              <?php while ( have_rows( 'circles' ) ) : the_row(); ?>
                  <div class="col-lg-4 mb-3">
                      <div class="circle">
                          <span><?php the_sub_field( 'title' ); ?></span>
                      </div>
                  </div>
              <?php endwhile; ?>
              </div>
          </div>
      <?php endif; ?>
      <div class="container">
          <div class="row pt-0 pb-5 international">
              <div class="col-sm-12">
              <?php the_sub_field( 'subtext' ); ?>
              </div>
          </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

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
