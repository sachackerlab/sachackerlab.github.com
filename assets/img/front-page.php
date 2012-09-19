<?php get_header(); ?>


  <!--<div class="page-header">
        <h1><?php the_title(); ?></h1>
      </div> -->
      <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?> homepage" role="main">
        <div class="extraneous-non-semantic-markup">
          <?php
              $herocheck = get_field('show_hero_unit');
              if($herocheck)
              {  ?>
          
          <div id="hero" <?php
          if(get_field('hero_unit_background'))
          {
            echo 'style="background-color:' . get_field('hero_unit_background') . '"';
          }
          
          ?>>
            <h1><?php the_field('hero_unit_title'); ?></h1>
            <p><?php the_field('hero_unit_slogan'); ?></p>
            <a class="btn btn-custom btn-large pull-right" href="<?php the_field('hero_unit_button_link'); ?>" title="<?php the_field('hero_unit_button_text'); ?>"><?php the_field('hero_unit_button_text'); ?></a>
          </div>
          <?php }
          //var_dump($herocheck);
          ?>

        <h2 class="slogan">
        &#35;hackerLab &#123; disruptive&#58; 100&#37;&#59; tech&#58; 100&#37;&#59; community&#58; 100&#37;&#125;
        </h2> 

        <h2 class="quickformh">Join the collaboration and create something great!</h2>
        <?php echo do_shortcode('[contact-form-7 id="3516" title="Quick Capture"]'); ?>

         

        
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>



        <!-- <div class="logoCluster">
          <h3>Sponsors</h3>
          <a href="http://www.synergex.com/" title="Synergex" target="_blank">
            <img alt="Synergex" src="<?php echo get_template_directory_uri(); ?>/img/logos/sponsors_synergex.png" width="161" height="49">
          </a>

          <a href="http://www.bizjournals.com/sacramento/" title="Sacramento Business Journal" target="_blank">
            <img alt="Sacramento Business Journal" src="<?php echo get_template_directory_uri(); ?>/img/logos/sponsors_businessjournal.png" width="218" height="49">
          </a>
        </div> -->

        <div class="logoCluster">
          <h2>Partners</h2>  
          <!--<a href="http://dweebden.org/" title="Dweeb Den Sacramento Hacker Space" target="_blank">
            <img alt="Dweeb Den Sacramento Hacker Space" src="<?php// echo get_template_directory_uri(); ?>/img/logos/partners_dweeb.png" width="173" height="69">
          </a>-->

          <a href="http://www.meetup.com/gamedeveloper/" title="The Sacramento Game Development Meetup Group" target="_blank">
            <img alt="The Sacramento Game Development Meetup Group" src="<?php echo get_template_directory_uri(); ?>/img/logos/partners_gamedev.png" width="74" height="69">
          </a>

          <a href="http://www.sarta.org/" title="Sarta" target="_blank">
            <img alt="Sarta" src="<?php echo get_template_directory_uri(); ?>/img/logos/partners_sarta.png" width="159" height="69">
          </a>

        </div>  
        
      </div><!-- /.extraneous-non-semantic-markup -->
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>