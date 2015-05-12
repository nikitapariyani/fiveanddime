<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package fiveanddime
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					<div class="promises col-md-4">
                                            <div class="title">1,60,000+ Styles 1,000+ Brands</div>
                                            <p>We have the largest collection of the latest fashion and lifestyle products in India!</p>
                                        </div>
                                        <div class="promises col-md-4">
                                            <span class="sprite originalpromise"></span>
                                            <img src="<?php echo get_template_directory_uri();?>/includes/images/" alt="..."/>
                                            <p>All our products are brand new, 100% original and are checked for quality before shipping.</p>
                                 
                                        </div>
                                        <div class="promises col-md-4">
                                            <div class="title">Free 30-Day <br> Returns</div>
                                            <p>Our easy and simple return process is sure to delight you. Right at your doorstep.</p>
                                        </div>
                                    </div><!-- close .site-info -->
                                        <div class="copyrights">
                                            <p>Copyright 2015. Maestro WordPress Theme by Tenderfoots Team.</p>
                                        </div>
				

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>