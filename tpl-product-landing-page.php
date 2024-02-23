<?php
/**
 * Template Name: Product Landing Page
 *
 */

$_pf = new WC_Product_Factory();
$product = $_pf->get_product('2429');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Choose Happiness @ Work</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/45aecde154.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">
  <style type="text/css">
		body, html {
			font-weight: 300;
		}

    section.main-header {
			background: url(/wp-content/themes/happybrainsciencecom/img/1_image_masthead@144x.png) top left;
			background-size: cover;
			color: #fff;
      display: table;
      height: 100vh;
      width: 100%;
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
      display: table-cell;
      text-align: center;
      vertical-align: middle;
    }
    
    h1 {
      font-size: 5em;
      line-height: 1.5em;
      margin-bottom: .5em;
    }
    
    h2 {
      font-size: 3.5em;
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
      font-size: 1.5em;
			font-weight: bold;
      margin-bottom: 0;
      padding: 2em;
    }
		
		.engagement-column img {
			display: inline-block;
			margin: 1em 3em;
			max-height: 4.5em;
		}
    
    .lifes-too-short {
      text-align: center;
    }
    
    .lifes-too-short p {
      font-size: 1.5em;
			line-height: 1.75em;
    }
		
		.stress-less {
			padding-bottom: 30px;
			padding-top: 0;
		}
    
    .stress-less h3 {
      margin-bottom: 1.5em;
      text-align: center;
    }
    
    .stress-less img {
      max-width: 100%;
    }

    .stress-less h4 {
      font-size: 1.5em;
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
    
    .companies-helped {
      text-align: center;
    }
    
    .companies-helped h3 {
      margin-bottom: .5em;
    }
    
    .client-logos {
      margin-bottom: 6em;
      margin-top: 1.5em;
    }
    
    .client-logos img {
      background-color: #fff;
      height: 46px;
      max-height: 46px;
      padding: 0 2em;
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
      height: 150px;
      margin-right: 1em;
      text-align: center;
      vertical-align: middle;
      width: 150px;
    }
    
    .circle-icon img {
      max-width: 150px;
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
			font-size: 1.5em;
      padding-left: 1em;
      vertical-align: middle;
    }
    
    .buy-button {
      margin-top: 2em;
    }
    
    .buy-button button {
      font-size: 1.5em;
    }
    
    .testimonials {
      text-align: center;
    }
    
    .testimonials h3 {
			color: #30667b;
      font-weight: normal;
      font-style: italic;
      margin: 1em 1em .5em;
      font-size: 1.5em;
    }
    
    .testimonials p {
			color: #30667b;
      font-size: 1.1em;
    }
    
    .happier-team {
      font-size: 1.5em;
    }
    
    .happier-team h3,
    .happier-team p,
    .happier-team .col-sm-4 {
      text-align: center;
    }
    
    .happier-team button {
      font-size: 1.5em;
      margin: 1em 0;
    }
		
		.happier-team strong {
			display: inline-block;
			font-weight: bold;
			margin-top: 1em;
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
      font-size: 1.6em;
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
		
		.investment {
			background-color: #DCDEE0;
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
      font-size: 1.5em;
    }
    
    .row.whats-included .second-header {
			margin-bottom: .5em;
    }
    
    .row.whats-included ul {
      font-size: 1.5em;
    }
    
    .row.whats-included .bonus {
			font-size: 1.5em;
			font-weight: bold;
      margin-bottom: .2em;
      margin-top: 1.5em;
      text-align: left;
      text-transform: uppercase;
    }
    
    .row.whats-included .price {
			color: #30667b;
      font-size: 3.8em;
      margin-bottom: .4em;
    }

    .row.whats-included button {
      font-size: 1.5em;
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
      font-size: 1.5em;
      margin-bottom: 2em;
    }
    
    .different .buy-button {
      font-size: 1em;
      text-align: center;
    }
    
    .bonus-details .circle {
      background-color: #48a9ac;
      border-radius: 50%;
      color: #fff;
      font-size: 1.5em;
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
      font-size: 1.5em;
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
      border-radius: 0;
      font-size: 22px !important;
      padding: .5em 4em;
    }
    
    .btn.watch-btn {
      font-size: 30px !important;
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
    
    @media (max-width: 576px) {
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
      
      .stress-less img {
        margin-bottom: 1em;
      }
      
      .client-logos img {
        height: auto;
        margin-bottom: 1em;
        max-width: 175px;
      }

      .happier-at-work h3 {
        text-align: center;
      }
      
      .bonus-details .circle {
        margin-bottom: 1em;
      }
      
      #video-container iframe {
        height: auto;
        max-width: 100%;
      }
			
			.col-sm-12.engagement-column.light span {
				display: block;
				width: 100%;
			}
			
			.col-sm-12.engagement-column.light img {
				display: inline-block;
				height: auto;
				margin: 0 auto;
			}
    }

		.whats-included {
			background-color: #DCDEE0;
		}
		
		.investment-divider {
			background: url(/wp-content/themes/happybrainsciencecom/img/11_image_investment@144x.png) top left;
			background-size: cover;
			margin: 0;
			padding: 0;
			min-height: 30rem;
			width: 100%;
		}
		
		.different-divider {
			background: url(/wp-content/themes/happybrainsciencecom/img/12_game_image_different@144x.png) top left;
			background-size: cover;
			margin: 0;
			padding: 0;
			min-height: 30rem;
			width: 100%;
		}
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row no-padding">
      <div class="col-sm-12">
        <section class="main-header">
          <div class="main-header-content">
            <h1>Play your way to happiness at work</h1>
            <h2>A revolutionary game that builds thriving teams.</h2>
            <p><a href="#video-container" class="btn btn-primary watch-btn">Watch the Video</a></p>
          </div>
        </section>
      </div>
    </div>
    
    <div class="row no-padding">
      <div class="col-sm-12 engagement-column light">
        <span>Boost Engagement</span>

				<img src="/wp-content/themes/happybrainsciencecom/img/2_icon_boost_engagement@144x.png">

        <span>Be Happier At Work</span>

				<img src="/wp-content/themes/happybrainsciencecom/img/3_icon_be_happier_at_work@144x.png">

        <span>Get More Done</span>
      </div>
    </div>
    
    <div class="row lifes-too-short">
      <div class="col-sm-12">
        <h3>Life's too short to be miserable at work</h3>
        <p>Managing unhappy people is exhausting. Office politics kills productivity.<br>You and your team deserve better.</p>
        <br>
        <p><a href="<?php echo $product->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a></p>
      </div>
    </div>
    
    <div class="row stress-less">
      <div class="col-sm-12">
        <h3>Stress less and build a thriving team</h3>
      </div>
      <div class="col-sm-5 offset-sm-1">
        <img src="https://www.happybrainscience.com/wp-content/uploads/2015/11/JG-Game-Shot-11-1080x1080-2.jpg" alt="Image of happy people using game">
      </div>
      <div class="col-sm-5">
        <h4>Work better together</h4>
        <p>Avoid persistent "people problems" with a fun, science-based tool to help your team communicate and connect.</p>
        
        <h4>Play your way to productivity</h4>
        <p>Research shows that happier brains are 12-25% more productive.</p>
        
        <h4>Impress your team</h4>
        <p>Ditch the egg toss or spaghetti tower. Make your next off-site meeting or brainstorming session a total hit.</p>
      </div>
      
      <div class="col-sm-12 buy-button">
        <p><a href="<?php echo $product->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a></p>
      </div>
    </div>
    
    <div class="row no-padding companies-helped">
      <div class="col-sm-12">
        <h3>We've helped these companies thrive from 9-5</h3>
      </div>
      <div class="col-sm-12 client-logos">
        <img src="/wp-content/themes/happybrainsciencecom/img/logos/nbc.png">
        <img src="/wp-content/themes/happybrainsciencecom/img/logos/dreamworks.png">
        <img src="/wp-content/themes/happybrainsciencecom/img/logos/nike.png">
        <img src="/wp-content/themes/happybrainsciencecom/img/logos/intel.png">
        <img src="/wp-content/themes/happybrainsciencecom/img/logos/hp.png">
        <img src="/wp-content/themes/happybrainsciencecom/img/logos/kaiser.png">
      </div>
    </div>
    
    <div class="row happier-at-work">
      <div class="col-sm-3 offset-sm-2">
        <h2>Everyone can be happier at work. Science says so.</h2>
      </div>
      <div class="col-sm-5 offset-sm-1">
        <div class="circle-icon-wrapper">
          <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/5_icon_neuroscience@144x.png"></span>
          <span class="circle-icon-description">Our game is 100% grounded in positive psychology and neuroscience</span>
        </div>
        <div class="circle-icon-wrapper">
          <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/6_icon_corporations@144x.png"></span>
          <span class="circle-icon-description">100’s of happier corporations</span>
        </div>
        <div class="circle-icon-wrapper">
          <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/7_icon_people@144x.png"></span>
          <span class="circle-icon-description">10,000+ happier, healthier people</span>
        </div>
      </div>
      <div class="col-sm-12">
        <p class="buy-button"><a href="<?php echo $product->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a></p>
      </div>
    </div>
    
    <div class="row testimonials">
      <div class="col-sm-10 offset-sm-1">
        <h3>"I was skeptical, but after just a few minutes we were talking and laughing—and yes, tears were shed. I’d recommend this tool to anyone who wants a happier team."</h3>
        <p>Liz Dahlager, Vice President of Sales & Marketing</p>
      </div>
    </div>
    
    <div class="row happier-team">
      <div class="col-sm-12">
        <h3>Just 3 Steps to a Happier Team</h3>
      </div>
      <div class="col-sm-4">
        <div class="circle-icon-wrapper center-circle">
          <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/8_icon_game@144x.png"></span>
        </div>
        <strong>Buy the Game</strong>
        <p>Get started in just 5 minutes. Each game takes just 5 minutes too!</p>
      </div>
      <div class="col-sm-4">
        <div class="circle-icon-wrapper center-circle">
          <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/9_icon_talking@144x.png"></span>
        </div>
        <strong>Get Your Team Talking</strong>
        <p>With cutting-edge strategies to resolve problems and relieve stress.</p>
      </div>
      <div class="col-sm-4">
        <div class="circle-icon-wrapper center-circle">
          <span class="circle-icon"><img src="/wp-content/themes/happybrainsciencecom/img/10_icon_love_work@144x.png"></span>
        </div>
        <strong>Love Work Again</strong>
        <p>Enjoy more high-fives and <em>heck yeah’s</em> from happy colleagues.</p>
      </div>
      <div class="col-sm-12">
        <p><a href="<?php echo $product->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a></p>
      </div>
    </div>
    
    <div id="video-container" class="row easy-to-use">
      <div class="col-sm-12">
        <h3>Easy to use and works for any business</h3>
      </div>
      <div class="col-sm-5 offset-sm-1">
        <h4>A powerful happiness-boosting tool based on cutting-edge brain science.</h4>
        <ul>
          <li><img src="/wp-content/themes/happybrainsciencecom/img/checkbox-new.png">Revitalize relationships</li>
          <li><img src="/wp-content/themes/happybrainsciencecom/img/checkbox-new.png">Flow to Goals</li>
          <li><img src="/wp-content/themes/happybrainsciencecom/img/checkbox-new.png">Subdue Stress</li>
          <li><img src="/wp-content/themes/happybrainsciencecom/img/checkbox-new.png">Practice Positivity</li>
        </ul>
      </div>
      <div class="col-sm-5">
        <iframe class="youtube-player" type="text/html" width="512" height="288" src="https://www.youtube.com/embed/werVgAiRtNc?version=3&amp;rel=1&amp;fs=1&amp;autohide=2&amp;showsearch=0&amp;showinfo=1&amp;iv_load_policy=1&amp;wmode=transparent" allowfullscreen="true" style="border:0;"></iframe>
      </div>
			<div class="col-sm-12">
        <br>
				<p><strong>Think corporate facilitator meets life coach, in a box.</strong></p>
			</div>
    </div>
		
		<div class="row testimonials bottom-padding">
      <div class="col-sm-10 offset-sm-1">
        <h3>"Choose Happiness @ Work was a resounding success. In fact, if our group's laughter disturbed any of our office members, I apologize – but my team really had fun. The game served as a great team building exercise, as well as an opportunity to touch on some of the 'soft responsibilities' that relate to solving problems at work."</h3>
        <p>David Yokom, M.Sc, P.Eng Queens University</p>
      </div>
		</div>
    
    <div class="row investment">
      <section class="investment-top">
        <div class="col-sm-8 offset-sm-2">
          <h2>What's my investment?</h2>
          <p>How much is an unhappy workplace costing you? How many hours do you waste managing interpersonal problems? How many of your team-building efforts fall flat —in spite of all your hard work?</p>
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
        <div class="col-sm-10 offset-sm-1">
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
      
        <div class="col-sm-8 offset-sm-2">
          <p class="price"><s>$195</s> Now $99!</p>
          <p><a href="<?php echo $product->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a></p>
        </div>
      </section>
    </div>
		
    <div class="row testimonials">
      <div class="col-sm-10 offset-sm-1">
        <h3>"We used Choose Happiness @ Work at our training last week and it went great! The managers were a little unsure at first, but as the game rolled on there was so much laughing and discussing going on, it was awesome! The participants didn't want to stop playing, and since then we have loaned out our copies to some of our departments to play with other teams."</h3>
        <p>Ian Wiggins, MA HRM, SPHR, SHRM-SCP &amp; Senior Human Resources Generalist Wauna Credit Union</p>
      </div>
    </div>
    
    <div class="row different">
      <section class="different-top">
        <div class="col-sm-10 offset-sm-1">
          <h3>What makes This Game So Different?</h3>
        
          <p>Choose Happiness @ Work is revolutionary because it’s the only game designed to boost happiness at work that’s 100% grounded in positive psychology and neuroscience. It’s a fun, effective tool that’s proven to build happy, thriving teams.</p>
				</div>
			</section>
		</div>
		
    <div class="row no-padding different">
      <section class="different-divider">
				&nbsp;
			</section>
		</div>

    <div class="row different">
      <section class="different-bottom">
        <div class="col-sm-10 offset-sm-1">        
          <p><strong>We spend more time with work colleagues than anyone else in our lives.</strong> Shouldn’t you and your team enjoy your time together? We think so.</p>
        
          <p><strong>We’ve worked in unhappy offices too.</strong> And we know how exhausting it is to deal with difficult people—along with Everything Else on your plate.</p>
        
          <p>The good news is this: everyone has the potential to be happier at work. Even <em>you-know-who</em>.</p>
        
          <p><strong>We’ve spent the last 30 years studying the science of happiness.</strong> We’re total happiness geeks. Lucky for you, we’ve distilled all that peer-reviewed brain science into a powerful little game that’ll give your team a booster-shot of happiness.</p>

          <p><strong>Imagine being the leader who finally gets your team talking and thriving together.</strong></p>
        </div>
      
        <div class="col-sm-10 offset-sm-1 buy-button">
          <p style="text-align: center;"><a href="<?php echo $product->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>" aria-label="Add “Purchase Choose Happiness @ Work” to your cart" rel="nofollow">Buy the game</a></p>
        </div>
      </section>
    </div>
    
    <div class="row bonus-details">
      <div class="col-sm-4">
        <div class="circle"><span>30-Day Money-Back Guarantee</span></div>
      </div>
      <div class="col-sm-4">
        <div class="circle"><span>Special Rates for Bulk Orders</span></div>
      </div>
      <div class="col-sm-4">
        <div class="circle"><span>Free Shipping within the U.S.</span></div>
      </div>
    </div>

    <div class="row no-padding international">
      <div class="col-sm-12">
        <p>Ordering outside the United States or Canada? Have other questions? Please visit one of our <a href="https://www.happybrainscience.com/international-distributors/">International Distributors</a> or <a href="https://www.happybrainscience.com/contact/">contact us</a>.</p>
      </div>
    </div>
    
    <div class="row no-padding">
      <footer>
        <p><a href="https://www.happybrainscience.com/contact/">CONTACT</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/scottcrab"><i class="fab fa-twitter-square"></i></a> <a href="https://www.facebook.com/pages/Happy-Brain-Science/244551702277956"><i class="fab fa-facebook-square"></i></a> <a href="https://www.youtube.com/user/HappyBrainScience?sub_confirmation=1"><i class="fab fa-youtube-square"></i></a> <a href="https://www.linkedin.com/in/sccrabtree/"><i class="fab fa-linkedin"></i></a></p>
				<p>Copyright &copy 2020 Happy Brain Science. All rights reserved.</p>
      </footer>
    </div>
  </div>
</body>
</html>