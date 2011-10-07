<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		<div class="post" id="post-<?php the_ID(); ?>">
  			<div class="entry">
        <?php
        $theme_dir = get_site_url('AllergyAllies');
            $theme_url = get_bloginfo('template_url');
            $curr_post_id = $post->ID;
            if( $curr_post_id == '15')
              {
                echo '<h1>Looking for Allergy Relief?</h1>'."\n";
                echo '<div class="left-col">'."\n";
                echo '<a href="'.$theme_dir.'/allergysufferers"><img src="'.$theme_url.'/images/allergysufferer-link.jpg" width="220" height="354" alt="Allergysufferer Link"></a>'."\n";
                echo '<a href="'.$theme_dir.'/physicians"><img src="'.$theme_url.'/images/physicians-link.jpg" width="220" height="354" alt="Physicians Link"></a>'."\n";
                echo '</div>'."\n";
              }
                  the_content();
        ?>
  			</div>
  		</div>

		<?php endwhile; endif; ?>

<?php get_footer(); ?>
