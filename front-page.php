<?php get_header(); ?>
<section id="style-switcher" style="left: -185px;">
    <h2>Navigation <a href="#"><span></span></a></h2>
    <?php wp_nav_menu(
                                    array(
					'theme_location' => 'side-nav',
                                        'container_id'=>'Side Navigation',
					'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
					'menu_class' => 'nav navbar-nav',
					'fallback_cb' => '',
					'menu_id' => 'main-menu',
					'walker' => new wp_bootstrap_navwalker()
                                    )
                                    ); ?>
</section>
<div id="front-page-content">
<div class="login-section">
    <div class="col-md-8">
    <ul class="menu">
                    <li id="item-1" class="col-md-6"><a href="<?php echo do_shortcode('[woocommerce_my_account order_count="12"]'); ?>">
                            <?php
                                if ( is_user_logged_in() ) {
                                        echo 'My Account';
                                } else {
                                        echo 'Login / Register';
                                }
                                ?></a></li>
			<?php  if ( is_user_logged_in() ) { ?>
			<li id="item-2"class="col-md-6"><a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
			<?php } ?>
    </ul></div>
    <div class="col-md-4">
    <?php get_search_form( ); ?>
        </div>
</div> 
<div class="home">
<div class="slider-area col-md-8">
   
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <?php if ( get_theme_mod('slide_1') ) {  ?>
        <img src="<?php echo get_theme_mod('slide_1'); ?>" />
        <?php } else {  ?>
      <img src="<?php echo get_template_directory_uri();?>/includes/images/image-1.png" alt="...">
      <?php }?>
      
    </div>
    <div class="item">
        <?php if ( get_theme_mod('slide_2') !='' ) {  ?>
        <img src="<?php echo get_theme_mod('slide_2'); ?>" />
        <?php } else {  ?>
        <img src="<?php echo get_template_directory_uri();?>/includes/images/image-2.jpg" alt="...">
      <?php }?>
      
    </div>
    <div class="item">
        <?php if ( get_theme_mod('slide_2') ) {  ?>
        <img src="<?php echo get_theme_mod('slide_2'); ?>" />
        <?php } else {  ?>
      <img src="<?php echo get_template_directory_uri();?>/includes/images/image-3.png" alt="...">
      <?php }?>
      
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
	
</div>
<div class="home-section col-md-4">
    <div class="home-image">
        <?php if ( get_theme_mod('home_image_1') ) {  ?>
        <a href="#"><img src="<?php echo get_theme_mod('home_image_1'); ?>" /></a>
        <?php } else {  ?>
        <a href="#"><img  src="<?php echo get_template_directory_uri();?>/includes/images/image-4.jpg" alt="..."></a>
      <?php }?> 
    </div>
    <div class="home-image">
        <?php if ( get_theme_mod('home_image_2') ) {  ?>
        <a href="#"><img src="<?php echo get_theme_mod('home_image_2'); ?>" /></a>
        <?php } else {  ?>
      <a href="#"><img src="<?php echo get_template_directory_uri();?>/includes/images/image-6.jpg" alt="..."></a>
      <?php }?> 
    </div>
</div>
    </div>

<div class="featured-products">
    <div class="products-title">
        <div class="title1">
        <?php if ( get_theme_mod('featured_section')) {  ?>
          <h2><?php echo (get_theme_mod('featured_section')); ?></h2>
          <?php } else { ?>
          <h2><span class="line">
		</span>
		<span class="text">
			FEATURED PRODUCTS
		</span></h2>
         <?php }?>
        </div>
    </div>
 <div class="featured-products-section">
    <div class="col-lg-4"> 
         <div class="men-category category">
             <?php if ( get_theme_mod('featured_image_1') ) {  ?>
            <a href="#"><img src="<?php echo get_theme_mod('featured_image_1'); ?>" /></a>
            <?php } else {  ?>
            <img src="<?php echo get_template_directory_uri();?>/includes/images/image-14.jpg">
            <?php }?>
            <figcaption>
                <?php if ( get_theme_mod('featured_heading_1')) {  ?>
                <h4><?php echo (get_theme_mod('featured_heading_1')); ?></h4>
                <?php } else { ?>
                <h4>MEN SECTION</h4>
                <?php }?>
            </figcaption>
         </div>
    </div>
    <div class="col-lg-4"> 
        <div class="women-category category">
            <?php if ( get_theme_mod('featured_image_2') ) {  ?>
            <a href="#"><img src="<?php echo get_theme_mod('featured_image_2'); ?>" /></a>
            <?php } else {  ?>
            <img src="<?php echo get_template_directory_uri()?>/includes/images/image-15.jpg">
            <?php }?>
            <figcaption>
                <?php if ( get_theme_mod('featured_heading_2')) {  ?>
                <h4><?php echo (get_theme_mod('featured_heading_2')); ?></h4>
                <?php } else { ?>
                <h4>WOMEN SECTION</h4>
                <?php }?>
            </figcaption>
        </div>
    </div>
    <div class="col-lg-4"> 
        <div class="kids-category category">
            <?php if ( get_theme_mod('featured_image_3') ) {  ?>
            <a href="#"><img src="<?php echo get_theme_mod('featured_image_3'); ?>" /></a>
            <?php } else {  ?>
            <img src="<?php echo get_template_directory_uri()?>/includes/images/image-16.jpg">
            <?php }?>
            <figcaption>
                <?php if ( get_theme_mod('featured_heading_3')) {  ?>
                <h4><?php echo (get_theme_mod('featured_heading_3')); ?></h4>
                <?php } else { ?>
                <h4>KIDS SECTION</h4>
                <?php }?>
            </figcaption>
        </div>
    </div>
</div>
</div>
<div class="featured-brands">
    <div class="brands-title">
        <div class="title1">
        <?php if ( get_theme_mod('brands_section')) {  ?>
          <h2><?php echo (get_theme_mod('brands_section')); ?></h2>
          <?php } else { ?>
          <h2><span class="line">
		</span>
		<span class="text">
			FEATURED BRANDS
		</span></h2>
         <?php }?>
        </div>
    </div>
</div>
    <div class="brands-slider">
        <div class="col-md-4">
            <?php if ( get_theme_mod('brands_desc_heading')) {  ?>
            <h1><?php echo (get_theme_mod('brands_desc_heading')); ?></h1>
            <?php } else { ?>
            <h1> SUMMER BONANZA!!</h1>
            <?php }?>
            <?php if ( get_theme_mod('brands_desc')) {  ?>
            <h1><?php echo (get_theme_mod('brands_desc')); ?></h1>
            <?php } else { ?>
            <p><b> Get upto 40% off on top brands,Offers till 20th May,2015.Grab the special offers today!!</b></p>
            <?php }?>
        </div>
        <div class="cat-flex col-md-8">    
        <div class="flexslider">
        <ul class="slides">
            <li>
                <?php if ( get_theme_mod('brand_image_1') ) {  ?>
                <a href="#"><img src="<?php echo get_theme_mod('brand_image_1'); ?>" /></a>
                <?php } else {  ?>
                <img src="<?php echo get_template_directory_uri();?>/includes/images/image-7.jpg" alt="..."/>
                <?php } ?>
            </li>
            <li>
                <?php if ( get_theme_mod('brand_image_2') ) {  ?>
                <a href="#"><img src="<?php echo get_theme_mod('brand_image_2'); ?>" /></a>
                <?php } else {  ?>
                <img src="<?php echo get_template_directory_uri();?>/includes/images/image-8.jpg" alt="..."/>
                <?php } ?>
            </li>
            <li>
                <?php if ( get_theme_mod('brand_image_3') ) {  ?>
                <a href="#"><img src="<?php echo get_theme_mod('brand_image_3'); ?>" /></a>
                <?php } else {  ?>
                <img src="<?php echo get_template_directory_uri();?>/includes/images/image-9.jpg" alt="..."/>
                <?php } ?>
            </li>
            <li>
                <?php if ( get_theme_mod('brand_image_4') ) {  ?>
                <a href="#"><img src="<?php echo get_theme_mod('brand_image_4'); ?>" /></a>
                <?php } else {  ?>
                <img src="<?php echo get_template_directory_uri();?>/includes/images/image-10.jpg" alt="..."/>
                <?php } ?>
            </li>
            <li>
                <?php if ( get_theme_mod('brand_image_5') ) {  ?>
                <a href="#"><img src="<?php echo get_theme_mod('brand_image_5'); ?>" /></a>
                <?php } else {  ?>
                <img src="<?php echo get_template_directory_uri();?>/includes/images/image-5.jpg" alt="..."/>
                <?php } ?>
            </li>
            <li>
                <?php if ( get_theme_mod('brand_image_6') ) {  ?>
                <a href="#"><img src="<?php echo get_theme_mod('brand_image_6'); ?>" /></a>
                <?php } else {  ?>
                <img src="<?php echo get_template_directory_uri();?>/includes/images/image-11.jpg" alt="..."/>
                <?php } ?>
            </li>
            <li>
                <?php if ( get_theme_mod('brand_image_7') ) {  ?>
                <a href="#"><img src="<?php echo get_theme_mod('brand_image_7'); ?>" /></a>
                <?php } else {  ?>
                <img src="<?php echo get_template_directory_uri();?>/includes/images/image-12.jpg" alt="..."/>
                <?php } ?>
            </li>            
            <li>
                <?php if ( get_theme_mod('brand_image_8') ) {  ?>
                <a href="#"><img src="<?php echo get_theme_mod('brand_image_8'); ?>" /></a>
                <?php } else {  ?>
                <img src="<?php echo get_template_directory_uri();?>/includes/images/image-4.jpg" alt="..."/>
                <?php } ?>
            </li>
        </ul>
    </div>
    </div>
</div>
    
<section id="recent-products">

    <div class="recent-products-title">
        <div class="title1">
        <?php if ( get_theme_mod('recent_section')) {  ?>
          <h2><?php echo (get_theme_mod('recent_section')); ?></h2>
          <?php } else { ?>
          <h2><span class="line">
		</span>
		<span class="text">
			RECENTLY ADDED
		</span></h2>
         <?php }?>
        </div>
    </div>
    
    <div class="recent-flex">    
        <div class="flexslider">
        <ul class="slides">
            <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 20 ,'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                    <li class="span3">    

                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>

                            <h3><?php the_title(); ?></h3>

                        	   <span class="price"><?php echo $product->get_price_html(); ?></span>

                        </a>

                        <?php //woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                    </li><!-- /span3 -->
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        </ul>
        </div>
    </div>
</section><!-- /recent -->
</div>

<?php  get_footer(); ?>
