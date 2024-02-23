<?php
$flexible_content = get_field('flexible_content');
if ( is_array($flexible_content) ) :
  foreach ( $flexible_content as $key => $block ) : ?>
    <div class="fc_block fc_block--<?php echo $block['acf_fc_layout']; ?>">
    <?php
    switch ($block['acf_fc_layout']) {
      case 'large_font_block': ?>

          <div class="large_font_block--content">
		      <?php
		      echo $block['content'];
		      if (isset($block['add_a_link_to_the_end'][0])) {
			      $linkToggle = $block['add_a_link_to_the_end'][0];
			      if ($linkToggle == 'Yes') {
				      echo " " . acf_link(array($block['link_text'], $block['link_destination'], ''));
			      }
		      }
		      ?>
          </div>
        <!--
        <div class="large_font_block--content">
          <?php /*echo $block['content'];
          $linkToggle = $block['add_a_link_to_the_end'][0];
          if ( $linkToggle == 'Yes' ) :
            echo " " . acf_link( array( $block['link_text'], $block['link_destination'], '') );
          endif;
          */ ?>
        </div>
        -->
        
       
      
      
      
        <?php
        break;
      case 'three_columns_block':
        $heading_image_toggle = $block['display_header_image_for_columns'];
        if ( $block['header_for_all_three'] !== '' ) :
          $three_cols_heading_class = 'three_cols--heading';
          $three_cols_heading_class .= ( $heading_image_toggle == 'Yes' ? ' three_cols--heading__imgs' : '' );
          ?>
          <div class="<?php echo $three_cols_heading_class; ?>">
            <?php echo $block['header_for_all_three']; ?>
          </div>
        <?php
        endif;
        $three_cols_class = 'three_cols';
        $three_cols_class .= ( $heading_image_toggle == 'Yes' ? ' three_cols__heading_imgs' : '' );
        ?>
        <div class="<?php echo $three_cols_class; ?>">
        <?php
        foreach ( $block['columns'] as $key => $column ) :
        ?>
          <div class="three_cols--col">
            <?php
            if ( $heading_image_toggle == 'Yes' && is_array($column['column_heading_image']) ) :
              echo acf_image( array( $column['column_heading_image'], 'three_cols--col--heading_img', '' ) );
            endif;
            ?>
            <h4 class="three_cols--col--heading">
              <?php echo $column['heading']; ?>
            </h4>
            <div class="three_cols--col--content">
              <?php echo $column['content']; ?>
            </div>
            <?php echo acf_link( array($column['cta_text'], $column['cta_destination'], 'three_cols--col--cta') ); ?>
          </div>
        <?php endforeach; ?>
        </div><!-- .three_cols -->
        <?php if ( $block['cta_below_all_three'] !== '' ) : ?>
          <div class="three_cols--cta">
            <?php echo $block['cta_below_all_three']; ?>
          </div>
        <?php endif; ?>
        <?php
        break;
      case 'featured_content':
        if ( $block['image'] !== '' ) :
          echo acf_image( array( $block['image'], 'featured_content--image', '' ) );
        endif; ?>
        <div class="featured_content--content">
          <?php echo $block['text_content']; ?>
        </div>
        <?php
        break;
      case 'text_block':
        echo $block['content'];
        break;
      case 'quote':
        // print_r($block);
        ?>
        <div class="featured_quote">
          <div class="featured_quote--image_wrap">
            <?php echo acf_image( array( $block['image'], 'featured_quote--image', 'thumbnail' ) ); ?>
          </div>
          <div class="featured_quote--content_wrap">
            <div class="featured_quote--text_content">
              <?php echo $block['text_content']; ?>
            </div>
            <div class="featured_quote--attribution_wrap">
              <div class="featured_quote--attribution">
                <?php echo $block['attribution']; ?>
              </div>
              <?php echo acf_link( array( $block['cta_text'], $block['cta_destination'], 'featured_quote--cta_button' ) ); ?>
            </div>
          </div>
        </div>
        <?php
        break;
      case 'team_member':
        // print_r($block);
        ?>
        <div class="flexible_team_member_wrap">
          <div class="flexible_team_member">
            <div class="flexible_team_member--image_wrap">
              <?php echo acf_image( array( $block['headshot'], 'flexible_team_member--image', '' ) ); ?>
            </div>
            <div class="flexible_team_member--content_wrap">
              <h2 class="flexible_team_member--name">
                <?php echo $block['name']; ?>
              </h2>
              <h3 class="flexible_team_member--title">
                <?php echo $block['title']; ?>
              </h3>
              <?php if ( $block['text_content'] != '' ) : ?>
              <p class="flexible_team_member--text_content">
                <?php echo $block['text_content']; ?>
              </p>
              <?php endif; ?>
              <?php echo acf_link( array( $block['cta_text'], $block['cta_destination'], 'flexible_team_member--cta_button' ) ); ?>
            </div>
          </div>
        </div>
        <?php
        break;
      default:
        # code...
        break;
    }
    ?>
    </div><!-- .fc_block -->
  <?php
  endforeach;
endif;
?>