<?php
/**
 * Template Name: Full width
 */
?>

<?php
// Dequeue Styles
function project_dequeue_unnecessary_styles() {
  wp_dequeue_style( 'happybrainsciencecom-style' );
  wp_deregister_style( 'happybrainsciencecom-style' );
}
add_action( 'wp_print_styles', 'project_dequeue_unnecessary_styles' );
?>

<?php get_header(); ?>

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

<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>