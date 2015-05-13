

<?php
// Start a new query for displaying featured posts on Front Page



    $featured_post_args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'post__not_in' => get_option('sticky_posts'),
    );
    $featuredposts = new WP_Query($featured_post_args);
    ?>

<?php global $i; ?> 
<div class=" from-the-blog ">
	<div id="primary" class=" hfeed">
            <?php if ($featuredposts->have_posts()) : $i = 1; ?>
                    <?php while ($featuredposts->have_posts()) : $featuredposts->the_post(); ?>
                    <?php if(($i%3)==0){ ?>
                    <div class="col-sm-12">
                        <?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			?>
                    </div>
                    <?php } else {?>
                    <div class="col-lg-6">
                        <?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			?>
                    </div>   
                    <?php } ?>
                    
                    <?php $i+=1; ?>
		<?php endwhile; ?>
		<?php blog_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>
        </div>
</div>
                
            
	
		
    