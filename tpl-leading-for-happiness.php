<?php
/**
 * Template Name: Leading for happiness
 *
 */

// Dequeue Styles

function project_dequeue_unnecessary_styles() {
  wp_dequeue_style( 'happybrainsciencecom-style' );
  wp_deregister_style( 'happybrainsciencecom-style' );
}
add_action( 'wp_print_styles', 'project_dequeue_unnecessary_styles' );

$_pf = new WC_Product_Factory();
$myProduct = $_pf->get_product('17741');
?>

<?php get_header(); ?>

    <section id="leadingHero" class="leading-hero row no-padding" style="background-image: url('/wp-content/themes/happybrainsciencecom/img/leading/hero-bg.png');">
      <div class="container h-100">
        <div class="row no-padding h-50 pt-5 pb-5">
            <div class="hero-content col-lg-6 my-auto text-white">
                <h1 class="hero-title mb-0">Leading for Happiness</h1>
                <h2 class="hero-subtitle">Coaching Group</h2>
            </div>
            <div id="hero-video" class="col-lg-6 my-auto">
                <div class="video-wrap">
                    <div class="video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/-HDisxiF51o" data-target="#myModal">
                        <img src="/wp-content/themes/happybrainsciencecom/img/leading/video_thumb_470@2x.png" style="width: 100%;">
                        <img class="play-btn" src="/wp-content/themes/happybrainsciencecom/img/leading/play-button@4x.png">
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>  
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="separator" style="background-image: url('/wp-content/themes/happybrainsciencecom/img/leading/dots-light.svg');"></div>
        <div class="row no-padding h-50 session-row pt-5 pb-5">
            <div class="session-content my-auto w-100">
                <h3 class="session-title font-weight-bold text-center w-100 mb-2">INSIGHT. CONNECTION. INSPIRATION.</h3>
                <h3 class="session-description text-center w-100 mb-3 mx-auto">Get the benefits of a coaching group & mastermind in this exclusive program for managers!</h3>
                <h3 class="session-date font-weight-bold text-center w-100 text-white mb-0">8 Sessions, March 3 - June 9, 2021</h3>
            </div>
        </div>
      </div>
    </section> 

    <div class="container">
        <div class="row simple-text">
            <div class="col-12 text-center">
                <h2>A unique, time-sensitive opportunity for up to 8 managers</h2>
            </div>
            <div class="col-12 mb-4">
                <p>Are you a manager looking to increase your team's creativity, productivity, and resilience in the face of challenges? This group can be your guide! Happy Brain Science has facilitated two prior Leading for Happiness coaching groups, and the <a href="https://www.happybrainscience.com/happy-coaching-client-testimonials/" target="_blank">results</a> have been amazing.</p>
            </div> 
            <div class="col-12 light-blue-text mb-4">
                <p><b>By joining Leading for Happiness, you’ll:</b></p>
                <ul>
                    <li><b>Transform your leadership</b> & empower your team</li>
                    <li><b>Increase engagement</b> & satisfaction so you can do your best work and enjoy it more</li>
                    <li><b>Steer your team thoughtfully</b> & confidently through the transitions on the horizon</li>
                </ul>
            </div>
            <div class="col-12">
                <p><b>From Feb. 10th-18th <i>only</i></b>, you're invited to register for this impactful experience. Leading for Happiness is a virtual program designed to enhance joy and meaning at work—even when the going gets tough.</p>
                <p>The group uses Scott Crabtree’s e-course, <a href="https://www.happybrainscience.com/product/thrive-9-5/" target="_blank">Thrive from 9-5: The Science of Happiness at Work</a>, to deliver actionable techniques for boosting morale and results on the job. This learning creates a foundation for participants to explore new ways of doing things, share ideas and best practices, and offer mutual support and accountability.</p>
            </div>
        </div>
    </div>
    
    <div class="row text-white" style="background-color: #f79424;">
        <div class="container">
            <div class="row pt-0 pb-0">
                <div class="col-sm-12 text-center">
                    <p>As part of our commitment to making this opportunity accessible,</p>
                    <h2>We’re offering a <b>1/3 discount</b> for managers from:</h2>
                </div>
                <div class="col-md-4 text-center">
                    <div class="circle-icon-wrapper center-circle mb-3">
                        <span class="circle-icon"> <img src="/wp-content/themes/happybrainsciencecom/img/leading/institution.svg" alt=""></span>
                    </div>
                    <p>Educational institutions</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="circle-icon-wrapper center-circle mb-3">
                        <span class="circle-icon"> 
                            <img src="/wp-content/themes/happybrainsciencecom/img/leading/non-profit.svg" alt="">
                        </span>
                    </div>
                    <p>Nonprofits</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="circle-icon-wrapper center-circle mb-3">
                        <span class="circle-icon"> <img src="/wp-content/themes/happybrainsciencecom/img/leading/agency.svg" alt=""></span>
                    </div>
                    <p>Governmental agencies</p>
                </div>                                           
            </div>
        </div>
    </div>

    <div class="row testimonial-wrapper static-testimonial" style="background-color: #30667b">
        <div class="container">
            <div class="row testimonials p-3">
                                        <div class="col-sm-12 text-center pb-4"> 
                    <img class="testimonial-headshot" src="/wp-content/themes/happybrainsciencecom/img/leading/testimonial_kathy_thurow@2x.png" alt="">
                </div>
                        <div class="col-sm-12">
                <h3 class="testimonial-text">“Your group provided a <b>safe sounding board</b> for me as my year of change was just beginning, and I appreciate it so much.”</h3>
                <p class="testimonial-author">Kathy Thurow, MBA, COPD Program Coordinator, Kaiser Permanente</p>
            </div>
            </div>
        </div>
    </div>

    <div class="container">
      <div class="row happier-team">
        <div class="col-sm-12 text-center">
          <h2 class="mb-0">If <b><i>Leading for Happiness</i></b> sounds like a good fit for you, register by the deadline of Thursday, February 18th, 2021.</h2>
        </div>
        <div class="col-sm-12 buy-button my-auto text-center pt-4">
          <!-- <a href="#" class="btn btn-primary buy-btn mt-0" target="">Register Now!</a> -->
          <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn mt-0 product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow">Register Now!</a>
        </div>
      </div>
    </div>

    <div class="row round-separator" style="background-image: url('/wp-content/themes/happybrainsciencecom/img/leading/divider.svg');">
    </div>
    <div class="row simple-text light-blue pt-0">
        <div class="container">
            <div class="row pt-0 pb-0">
              <div class="col-sm-12">
                <h2 class="mb-5 text-center">Want to learn more? Read on:</h2>
                <h3 class="text-center">Is this for me?</h3>
                <p>If you’re a smart, forward-thinking manager (of people, projects, or both), this coaching group is for you. No prior coaching experience or knowledge about the science of engagement is required. That said, your wisdom and practical experience in these and other areas will be a valued contribution to the group.</p>
                <h3 class="text-center mt-5">What are the goals?</h3>
                <p>You’ll bring your own goal(s) for our time together. The unifying theme for the group is Leading for Happiness; if your goal is to boost morale for yourself and/or those you lead, this is the group for you. That said, your goals could be as varied as:</p>
                <ul>
                  <li>Dealing with unhappy employees</li>
                  <li>Improving energy and performance at work</li>
                  <li>Helping employees cope with change</li>
                  <li>Improving negative culture in your organization</li>
                  <li>Finding your own joy at work</li>
                  <li>Boosting employee engagement</li>
                </ul>
                <p>The group is reserved for a maximum of 8 participants to cultivate a close-knit community and create a highly interactive experience. We’re not expecting everyone to have exactly the same goal, be the same kind of leader, or start at the same place. We expect to include managers from various types and sizes of organizations, with different backgrounds and experiences. Diversity is helpful and awesome.</p>
              </div>
              <div class="col-sm-12 mt-4">
                <img class="w-100" src="/wp-content/themes/happybrainsciencecom/img/leading/people.svg">
                <h3 class="orange-text mt-4 text-center">You don’t need to have your goal figured out before joining the group; we’ll work on creating and clarifying goals as needed.</h3>
              </div>
            </div>
        </div>
    </div>

    <div class="row testimonial-wrapper static-testimonial" style="background-color: #30667b">
        <div class="container">
            <div class="row testimonials p-3">
                <div class="col-sm-12 text-center pb-4"> 
                    <img class="testimonial-headshot" src="/wp-content/themes/happybrainsciencecom/img/leading/testimonial_leslie_weldon@2x.png" alt="">
                </div>
                        <div class="col-sm-12">
                <h3 class="testimonial-text">“I was able to learn from–and feel supported by–fellow leaders from a variety of organizations. I recommend a Happy Brain Science coaching group to anyone who wants to master their ability to lead <b>happy, engaged employees.</b>”</h3>
                <p class="testimonial-author">Leslie Weldon, VP</p>
            </div>
            </div>
        </div>
    </div>

    <div class="row simple-text">
        <div class="container">
            <div class="row pt-0 pb-0">
              <div class="col-sm-12">
                <h3 class="text-center">Who’s facilitating the group?</h3>
                <p>The group will be co-facilitated by <a href="https://www.happybrainscience.com/about" target="_blank"><b>Cathy Jimenez</b> and <b>Kim Menig</b></a> —two dynamic professionals representing different cultures and areas of expertise. </p>
              </div>
              <div class="col-md-6 mt-4 coach-col">
                <img class="w-100" src="/wp-content/themes/happybrainsciencecom/img/leading/cathy@2x.png">
              </div>
              <div class="col-md-6 mt-4 coach-col">
                <img class="w-100" src="/wp-content/themes/happybrainsciencecom/img/leading/kim@2x.png">
              </div>
              <div class="mt-4 col-sm-12">
                <p>They’re both excited to create a welcoming space for participants to discover and apply the science of engagement.</p>
                <p>Through coaching, speaking, and consulting, Happy Brain Science has helped hundreds of clients, including repeat organizations such as DreamWorks, Boeing, Intel, HP, Kaiser Permanente, NBC, and Nike, to thrive at work. We’d be honored and delighted to serve as your guide to the science of thriving, too.</p>
              </div>
            </div>
        </div>
    </div>

    <div class="row simple-text light-blue">
        <div class="container">
            <div class="row pt-0 pb-0">
              <div class="col-sm-12">
                <h3 class="text-center">When and how will we meet?</h3>
                <p>We'll meet over Zoom video conferencing. (It’s easy, dependable, and you can call into the meeting if you prefer.) Sessions will take place:</p>
              </div>
              <div class="col-md-6 mt-4 my-auto">
                <p><b>Every other Wednesday</b> (8 sessions)</p>
                <p><b>March 3rd - June 9th</b></p>
                <p><b>2:00-3:30pm Pacific Time</b><br>(5:00-6:30pm Eastern Time)</p>
                <p><b>We’ll meet 9 times total:</b> the 9th and final session will be scheduled flexibly with the group to incorporate bonus content based on the group’s interests</p>
              </div>
              <div class="col-md-6 mt-4 my-auto">
                <img class="w-100" src="/wp-content/themes/happybrainsciencecom/img/leading/zoom@2x.png">
              </div>
            </div>
        </div>
    </div>

    <div class="row simple-text">
        <div class="container">
            <div class="row pt-0 pb-0">
              <div class="col-12 text-center mb-4">
                <img class="section-logo" src="/wp-content/themes/happybrainsciencecom/img/leading/structure.svg">
              </div>
              <div class="col-sm-12">
                <h3 class="text-center">What is the structure of the group?</h3>
                <ul>
                  <li>First, a moment of <b>science-based mindfulness</b> to center ourselves for a great session.</li>
                  <li>Next, a round of <b>quick updates from each group member:</b> important, relevant highs and lows you want to briefly share and/or questions you have.</li>
                  <li>After that, a <b>discussion about the day’s theme</b>, using the relevant section of the Thrive from 9-5 e-course as a starting point to cross-pollinate ideas and best practices.</li>
                  <li>Usually, a <b>“deep dive” on a particular group member’s issue or goal</b>. Through facilitated conversation, members ask each other questions, provide support, and guide each other toward success. (While there’s no pressure, each group member will have an opportunity to receive the group’s support on a “deep dive” if desired.)</li>
                  <li>Finally, we wrap up with <b>“homework”</b> and any remaining questions and/or comments.</li>
                </ul>
              </div>
            </div>
        </div>
    </div>

    <div class="row simple-text light-blue">
        <div class="container">
            <div class="row pt-0 pb-0">
              <div class="col-12 text-center mb-4">
                <img class="section-logo" src="/wp-content/themes/happybrainsciencecom/img/leading/homework.svg">
              </div>
              <div class="col-sm-12">
                <h3 class="text-center">Will there be “homework” between meetings?</h3>
                <p>You will leave every session with “homework.” In most cases, the assignment before each group meeting will be to watch a video chapter of the <a href="https://www.happybrainscience.com/product/thrive-9-5/" target="_blank">e-course</a> (or read the transcript if preferred).</p>
                <p>The homework typically will take about 20 minutes to complete. You can, of course, choose to commit to additional action between sessions. Holding each other accountable is one way members help each other.</p>
              </div>
            </div>
        </div>
    </div>

    <div class="row testimonial-wrapper static-testimonial" style="background-color: #30667b">
        <div class="container">
            <div class="row testimonials p-3">
                <div class="col-sm-12 text-center pb-4"> 
                    <img class="testimonial-headshot" src="/wp-content/themes/happybrainsciencecom/img/leading/testimonial_ashrefunisa_shaik@2x.png" alt="">
                </div>
              <div class="col-sm-12">
                <h3 class="testimonial-text">“Leading for Happiness covered a lot of information, delivered in concise chunks that were easy to absorb. The structure was <b>clear, logical and effective</b>.</h3>
                <h3 class="testimonial-text">But it wasn’t just about the way it was delivered--it was also about the benefits that came from receiving <b>individual feedback</b> and interacting with the Happy Brain Science team and fellow participants. This format gave me the <b>confidence to implement new techniques</b> for team-building immediately.”</h3>
                <p class="testimonial-author">Ashrefunisa Shaik, Happiness Facilitator & Coach</p>
              </div>
            </div>
        </div>
    </div>

    <div class="row simple-text">
        <div class="container">
            <div class="row pt-0 pb-0">
              <div class="col-12 text-center mb-4">
                <img class="section-logo" src="/wp-content/themes/happybrainsciencecom/img/leading/perks.svg">
              </div>
              <div class="col-sm-12">
                <h3 class="text-center">What’s included in these groups? Any additional perks?</h3>
              </div>
              <div class="col-md-6 mt-4">
                <ul>
                  <li><b>A personalized, 1-on-1 professional <a href="https://www.happybrainscience.com/coaching/" target="_blank">coaching</a> session with Kim Menig</b> to help you maximize the benefits of your Leading for Happiness experience ($250 value; the session can be scheduled flexibly during the series, whenever you’d find it most helpful)</li>
                  <li><b>Robust support between sessions</b>, including a dedicated LinkedIn group where we’ll continue to share insights and encourage each other, and an accountability partner to help you take action and make progress toward your goals</li>
                  <li><b>25% discount on Happy Brain Science services:</b> bonus coaching with Kim Menig and/or delivery of a virtual workshop for your organization by Cathy Jimenez</li>
                  <li><b>Permanent access to the Thrive from 9-5 online course</b>—an evergreen resource that features Happy Brain Science Founder & Chief Happiness Officer Scott Crabtree teaching the science of happiness and engagement ($79 value)</li>
                </ul>
              </div>
              <div class="col-md-6 mt-4 my-auto">
                <img class="w-100" src="/wp-content/themes/happybrainsciencecom/img/leading/perks_screens@2x.png">
              </div>
            </div>
        </div>
    </div>

    <div class="row simple-text pattern-background" style="background-image: url('/wp-content/themes/happybrainsciencecom/img/leading/background-orange@4x.png');">
        <div class="container">
            <div class="row pt-0 pb-0">
              <div class="col-sm-12 text-center">
                <h3>Your investment in Leading for Happiness is <span class="blue-text">$949</span></h3>
                <p>This reflects a significant discount from past years to make the group affordable during this challenging time.</p>
              </div>
              <div class="col-12 col-lg-10 offset-lg-1 p-5 text-center orange-box text-white" style="background-color: rgba(247,148,36,.75);">
                <h2>Early Bird Discount</h2>
                <h3>From Feb. 10-12 ONLY, GET $100 off!</h3>
                <p>Use code <b>ABCABC</b> to access a discounted price of <b>$849</b> at checkout.</p>
                <p class="mt-4">We offer an <b>additional 1/3 discount</b> if you work for a nonprofit organization (including educational institutions and government agencies). If this applies to you, please use code <b>XYZXYZ</b> for a special Early Bird price of <b>$559</b> at checkout.</p>
                <!-- <a href="#" class="btn btn-primary buy-btn mt-4 blue-btn" target="">Save $100 Now!</a> -->
                <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn mt-4 blue-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow">Save $100 Now!</a>
              </div>
            </div>
        </div>
    </div>

    <div class="row simple-text text-white" style="background-color: #48A9AC;">
      <div class="container"> 
        <div class="row pt-0 pb-0 text-center">
          <div class="col-sm-12">
            <h2 class="text-white">Science suggests that a boost in happiness <b>raises productivity 10%-25%.</b></h2>
            <p>Data from <a href="https://news.gallup.com/businessjournal/547/strengths-revolution.aspx" target="_blank">Gallup</a> indicates that teams that play to their strengths are more engaged and productive. Joining this group is an investment in your success! Are you ready to choose thriving at work?</p>
          </div>
          <div class="col-lg-6 offset-lg-3">
            <a href="https://psycnet.apa.org/doiLanding?doi=10.1037%2F0033-2909.131.6.803" target="_blank">
              <img class="productivity-animation" src="https://www.happybrainscience.com/wp-content/uploads/2020/12/productivity.gif" alt="">
            </a>
          </div>
          <div class="col-sm-12 buy-button my-auto text-center pt-4">
            <!-- <a href="#" class="btn btn-primary buy-btn mt-0" target="">Get a boost for you & your team</a> -->
            <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn mt-0 product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow">Get a boost for you & your team</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row simple-text">
      <div class="container"> 
        <div class="row pt-0 pb-0 text-center">
          <div class="col-sm-12">
            <h2 class="text-center">How will we measure success?<br>Is there any guarantee?</h2>
            <p>As part of the group, you’ll create a detailed action plan to build helpful habits during our time together and sustain momentum after we wrap up. We’ll check in at various points during the group to ensure that you’re “moving the needle” in a direction that’s meaningful to you.</p>
            <p>In the highly unlikely event you put in the work but don’t get results, you’ll be entitled to a 100% refund. </p>
            <h3 class="mt-4 text-center">Your satisfaction is guaranteed!</h3>
            <p>Please join us in mastering happiness and engagement at work; <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow">register now.</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row testimonial-wrapper static-testimonial" style="background-color: #30667b">
      <div class="container">
          <div class="row testimonials p-3">
              <div class="col-sm-12 text-center pb-4"> 
                  <img class="testimonial-headshot" src="/wp-content/themes/happybrainsciencecom/img/leading/testimonial_deann_hartman@2x.png" alt="">
              </div>
            <div class="col-sm-12">
              <h3 class="testimonial-text">“I didn't know what I expected when I signed up for Leading for Happiness. The results far exceeded my expectations. I came away with <b>concrete, tangible skills</b> that helped me achieve real results. I learned that happiness isn't having a perfect life free from stress and challenges. Happiness is an attitude, a decision, a mindset.</h3>
              <h3 class="testimonial-text">The group format yielded an unexpected benefit. A group of strangers quickly became a <b>caring and supportive community</b>. It was a wonderful experience that was worth every penny!”</h3>
              <p class="testimonial-author">DeAnn Hartman, Owner, Hartmanagement, Inc.</p>
            </div>
          </div>
      </div>
    </div>

    <div class="row simple-text">
      <div class="container"> 
        <div class="row pt-0 pb-0 text-center">
          <div class="col-sm-12">
            <h2 class="text-center">What if I have other questions?</h2>
            <p>Please email us at <a href="mailto:happysupport@happybrainscience.com">happysupport@happybrainscience.com</a> or contact us <a href="https://www.happybrainscience.com/contact/" target="_blank">here</a>.</p>
            <p>We’ll be happy to answer by email or schedule a time to chat.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row simple-text pattern-background text-white" style="background-image: url('/wp-content/themes/happybrainsciencecom/img/leading/background-footer@4x.png');">
      <div class="container">
          <div class="row pt-0 pb-0">
            <div class="col-sm-12 text-center">
              <h2>How do I register?</h2>
              <h3 class="mb-0">Simply click the button below.</h3>
              <p>We’re accepting registrations (first-come, first-served) only until midnight on <b>Thursday, February 18th</b>. Thanks for registering to join us in Leading for Happiness!</p>
            </div>
            <div class="col-12 text-center">
              <!-- <a href="#" class="btn btn-primary buy-btn mt-4 blue-btn" target="">Register to join the group</a> -->
              <a href="<?php echo $myProduct->add_to_cart_url(); ?>" data-quantity="1" class="btn btn-primary buy-btn mt-4 blue-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $myProduct->get_id(); ?>" data-product_sku="<?php echo $myProduct->get_sku(); ?>" rel="nofollow">Register to join the group</a>
            </div>
          </div>
      </div>
    </div>

<?php get_footer(); ?>