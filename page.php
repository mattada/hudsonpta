<?php
  /**
   * The default page template.
   *
   * Used when a default template individual page is queried.
   */
  get_header();
?>

<section class="container homeintro">
			<div class="row">
				<div class="col-7 col-centered">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="post">
						<h1><?php the_title(); ?></h1>
						<?php
				          the_content();
				          edit_post_link( 'Edit this entry.', '<hr><p>', '</p>' );
				        ?>
					</article>
					<?php endwhile; endif; ?>
					
					
					<section class="container eventsrow">
						<?php if ( is_active_sidebar( 'events' ) ) : ?>
						  <aside class="sidebar">
						    <?php dynamic_sidebar( 'events' ); ?>
						  </aside>
						<?php endif; ?>
					</section>
		
		
		
				</div>
				<div class="col-5 col-centered">	
					        <img src="<?php bloginfo('template_url');?>/assets/img/hawk-logo.jpg" alt="hawk-logo" width="1000" height="989" style="padding:20px 0 40px;" />
				</div>
				
			</div>
		</section>
		
		
		
						
		
		<hr>
		

		
		<section class="container contact">
			<div class="row">
				<div class="col-6 col-centered">
					
					 <?php get_template_part("parts/block-support"); ?>				
					
					
					<h2>Contact us</h2>
					<a href="mailto:info@hudsonpta.com">info@hudsonpta.com</a><br>
					<a href="https://www.facebook.com/hudsonhawkpta/" >Hudson PTA on Facebook</a>
				</div>
				
				<div class="col-6 col-centered">
					
					<h2>Volunteer Opportunities</h2>
					<p>We are always looking for help with events, planning, fundraising, etc. If you would like to help please email info@hudsonpta.com or check for opportunities on signup.com.</p>
					
					<a href="http://signup.com/go/mPJiix?utm_source=group-badge-volunteer-green"><img src="//vspot.s3.amazonaws.com/groups/sharing/signup-button-choose-spot.png" alt="Click to View Volunteer Opportunities on SignUp.com"></a>
					
					
					<h2>Recent News</h2>
					<ul class="featuredpost">
					<?php
						global $post;
						$args = array( 'numberposts' => 5);
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post); ?>
						
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<?php //the_excerpt(); ?>
						</li>
						

						<?php endforeach; ?>
						</ul>
				</div>
			</div>
		</section>
		
		
		


<?php
  get_footer();
