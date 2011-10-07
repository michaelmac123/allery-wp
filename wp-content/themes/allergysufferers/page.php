<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php
					//Contact phone number from Options Page in DB
						$contact_phone = get_option('contact_phone');

					//If page is index or home, display alt title
					$theme_dir = get_site_url('AllergyAllies');
					$theme_url = get_bloginfo('template_url');
					$curr_post_id = strtolower($post->post_name);
					if($curr_post_id == 'index' || $curr_post_id == 'home'){
						echo "<h1>Looking for Allergy Relief?</h1>";
					}else{
						echo "<h1>";
						the_title();
					}
						echo "</h1>";
						echo '<div class="physician-link"><a href="'.$theme_dir.'/physicians">Are you a Physician? Learn More</a></div>';
						echo '<div class="phone-number"><p>Call Us: '.$contact_phone.'</p></div>';

					//If page is index display large image links
					if( $curr_post_id == 'index')
						{
							echo '<div class="left-col">'."\n";
							echo '<a href="'.$theme_dir.'/allergysufferers"><img src="'.$theme_url.'/images/allergysufferer-link.jpg" width="220" height="354" alt="Allergysufferer Link" border="0"></a>'."\n";
							echo '<a href="'.$theme_dir.'/physicians"><img src="'.$theme_url.'/images/physicians-link.jpg" width="220" height="354" alt="Physicians Link" border="0"></a>'."\n";
							echo '</div>'."\n";
						}
						the_content();
				?>
			</div>
		</div>

		<?php endwhile; endif; ?>



<?php get_footer(); ?>