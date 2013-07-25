<?php
/**
 * Template Name: Driver Application
 *
 * @package Flint
 */

get_header(); ?>

	<div id="primary" class="content-area span12">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <p>You may save your progress and come back at anytime.</p>
          </header><!-- .entry-header -->
          
          <div class="entry-content">
						<?php if ( is_user_logged_in() ) {
							$united_states = array('AL','AK','AZ','AR','CA','CO','CT','DE','FL','GA','HI','ID','IL','IN','IA','KS','KY','LA','ME','MD','MA','MI','MN','MS','MO','MT','NE','NV','NH','NJ','NM','NY','NC','ND','OH','OK','OR','PA','RI','SC','SD','TN','TX','UT','VT','VA','WA','WV','WI','WY'); ?>
              
							<div class="accordion" id="app-accordion">
              
                <div class="accordion-group">
                
                  <?php get_template_part ( 'app' , 'basic' ) ?>
                  
                </div><!-- .accordion-group -->
                
                <div class="accordion-group">
                
                  <?php get_template_part ( 'app' , 'driver' ) ?>
                  
                </div><!-- .accordion-group -->
                
							</div><!-- .accordion -->
            <?php } /* if ( is_user_logged_in() ) */
						else { ?>
              <p>Please login or register an account before accessing the driver application.</p>
              <a class="btn" href="<?php echo wp_login_url( get_permalink() ); ?>">Login</a>
              <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/wp-login.php?action=register&redirect_to=wp-login.php?redirect_to=driverapp' ) ); ?>">Register</a>
            <?php } /* else */ ?>
          </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
