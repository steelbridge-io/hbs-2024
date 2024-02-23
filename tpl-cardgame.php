<?php
/**
 * Template Name: Card Game
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

        <style>
        .game-body {
          padding: 60px 15px;
        }
        /* unvisited link */
        .game-body a:link {
          color: #fab142;
        }

        /* visited link */
        .game-body a:visited {
          color: #fab142;
        }

        /* mouse over link */
        .game-body a:hover {
          color: #fab142;
        }

        /* selected link */
        .game-body a:active {
          color: #fab142;
        }

        .game-body h1
        {
          text-align: center;
          font-family: Helvetica, Arial;
          font-size: 40px;
          font-weight: normal;
          font-weight: 700;
          color: #48A9AC;
        }

        .game-body h2
        {
          text-align: center;
          font-family: Helvetica, Arial;
          font-size: 28px;
          font-weight: normal;
          font-weight: 100;
          color: #48A9AC;
        }

        .game-body p
        {
          text-align: center;
          font-family: Helvetica, Arial;
          font-size: 1.2em;
          font-weight: normal;
          font-weight: 400;
          line-height: 1.5em;
          color: #475560;
        }

        .gamecontainer
        {
          position: relative;
          margin-left: auto;
          margin-right: auto;
          text-align: center;
          color: black;
          width: 382px;
          max-width: 100%;
          word-wrap: break-word;
          font-family:Arial;
        }

        .gamecontainerMobile
        {
          position: relative;
          margin-left: auto;
          margin-right: auto;
          text-align: center;
          color: black;
          width: 764px;
          word-wrap: break-word;
          font-family:Arial;
        }


        .game-body .titleText
        {
          position: absolute;
          top: 10px;
          left: 50%;
          transform: translateX(-50%);
          font-size: 17px;
          font-weight: bold;
          line-height: 1;
        }

        .game-body .titleTextMobile
        {
          position: absolute;
          top: 7px;
          left: 50%;
          transform: translateX(-50%);
          font-size: 32px;
        }

        .game-body .mainText
        {
          position: absolute;
          top: 45px;
          left: 50%;
          transform: translateX(-50%);
          font-size: 14px;
          line-height: 1.4;
        }

        .game-body .mainTextMobile
        {
          position: absolute;
          top: 88px;
          left: 50%;
          transform: translateX(-50%);
          font-size: 28px;
          font-family: Arial, sans-serif;
        }


        .game-body .subText
        {
          position: absolute;
          top: 226px;
          left: 50%;
          transform: translateX(-50%);
          font-size: 11px;
          font-family: Arial, sans-serif;
          line-height: 1.4;
        }

        .game-body .subTextMobile
        {
          position: absolute;
          top: 416px;
          left: 50%;
          transform: translateX(-50%);
          font-size: 24px;
          font-family: Arial, sans-serif;
        }

        .game-body .socialIcons img
        {
          width: 50px;
          height: 50px;
        }
        </style>
        <div class="game-body" style="background-color:#D7E8EA;">
          <h1><?php echo get_field( 'title' ); ?></h1>
          <h2><?php echo get_field( 'subtitle' ); ?></h2>
          <p><?php echo get_field( 'description' ); ?></p>

          <?php $card_link = get_field( 'card_link' ); ?>
          <?php if ( $card_link ) : ?>
            <a href="<?php echo esc_url( $card_link['url'] ); ?>" target="<?php echo esc_attr( $card_link['target'] ); ?>">
              <div class="gamecontainer" id="soloSolutionCard">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cardgame/SolutionCardFrontBlank_rounded.png" alt="Solution card" id="cardImage" width="220" height="330">  <!-- Orig image size: 408 x 600-->
                <div class="titleText" id="titleText"></div>
                <div class="mainText" id="mainText"></div>
                <div class="subText" id="subText" ></div>
              </div>
            </a>
          <?php else : ?>
            <div class="gamecontainer" id="soloSolutionCard">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cardgame/SolutionCardFrontBlank_rounded.png" alt="Solution card" id="cardImage" width="220" height="330">  <!-- Orig image size: 408 x 600-->
              <div class="titleText" id="titleText"></div>
              <div class="mainText" id="mainText"></div>
              <div class="subText" id="subText" ></div>
            </div>
          <?php endif; ?>

          <!-- Later, we will have scenario text, but commenting out for now <p id="scenarioText" onclick="dealCards()"></p> -->
          <!-- Later, we will have scenario sub text, but commenting out for now <p id="scenarioSubText" onclick="dealCards()"></p>   -->
          <!-- Replacing this with just linking "science-based" <p>Check out the <b> <a href="https://www.happybrainscience.com/scientific-sources/" target="_blank">brain science</a> behind these tips. </b></p> -->
          <!-- unnecessary, and causes more work. They can use the reload button on the browser. <p>If you would like a different random happiness tip, please <a href="DailyHappinessBoost.htm">reload</a> this page.</p> -->

          <br>  <!-- line break before social share buttons -->

          <!-- I got these buttons from simplesharebuttons.com -->
          <div class="gamecontainer socialIcons">

            <!-- Facebook -->
            <a id="facebook-share" href="https://www.facebook.com/sharer.php?u=https://www.happybrainscience.com/daily-happiness-boost/" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook"/></a>

            <!-- Twitter -->
            <a id="twitter-share" href="https://twitter.com/intent/tweet?url=https://www.happybrainscience.com/daily-happiness-boost/&text=How about a happiness boost?" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/twitter.png" display=block alt="Twitter"/></a>

            <!-- LinkedIn -->
            <a id="linkedin-share" href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.happybrainscience.com/daily-happiness-boost/" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn"/></a>

            <!-- Email -->
            <a id="email-share" href="mailto:?Subject=Daily Happiness Boost&Body=I%20thought%20you%20might%20like%20a%20random%20happiness%20boost!%20 https://www.happybrainscience.com/daily-happiness-boost/" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/email.png" display=block alt="Email"/></a>

          </div>
        </div>

        <script>
        var solutionTitles = [];
        var solutionMainTexts = [];
        var solutionSubTexts = [];
        <?php if ( have_rows( 'card_content' ) ) : ?>
        <?php while ( have_rows( 'card_content' ) ) : the_row(); ?>
        solutionTitles.push('<?php echo get_sub_field( 'title' ); ?>');
        solutionMainTexts.push('<?php echo get_sub_field( 'main_text' ); ?>');
        solutionSubTexts.push('<?php echo get_sub_field( 'subtext' ); ?>');
        <?php endwhile; ?>
        <?php endif; ?>
        </script>

        <!-- load Javascript from RandSolGen.js -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/RandSolGen.js"></script>

<?php get_footer(); ?>
