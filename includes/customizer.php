<?php
/**
 * fiveanddime Theme Customizer
 *
 * @package fiveanddime
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fiveanddime_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
class blog_customize_textarea_control extends WP_Customize_Control {

        public $type = 'textarea';

        public function render_content() {
            ?>

            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <textarea rows="5" style="width:98%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
            </label>

            <?php
        }

    }
add_action( 'customize_register', 'fiveanddime_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function fiveanddime_customize_preview_js() {
	wp_enqueue_script( 'fiveanddime_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'fiveanddime_customize_preview_js' );

$wp_customize->add_section('fiveanddime_slider_section', array(
        'title' => __('Home Slider', 'fiveanddime'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('slide_1',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'slide_1', array(
        'label' => 'Slide 1',
        'section' => 'fiveanddime_slider_section',
        'settings' => 'slide_1',
        'priority' => 1,
            )
            )
    );
    $wp_customize->add_setting('slide_2',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'slide_2', array(
        'label' => 'Slide 2',
        'section' => 'fiveanddime_slider_section',
        'settings' => 'slide_2',
        'priority' => 3,
            )
            )
    );
    
    $wp_customize->add_setting('slide_3',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'slide_3', array(
        'label' => 'Slide 3',
        'section' => 'fiveanddime_slider_section',
        'settings' => 'slide_3',
        'priority' => 5,
            )
            )
    );
    
    ///////////////////////////////////////////////////////////////////
    
    $wp_customize->add_section('fiveanddime_home_section', array(
        'title' => __('Home Images Section', 'fiveanddime'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('home_image_1',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'home_image_1', array(
        'label' => 'Image 1',
        'section' => 'fiveanddime_home_section',
        'settings' => 'home_image_1',
        'priority' => 1,
            )
            )
    );
    $wp_customize->add_setting('home_image_2',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'home_image_2', array(
        'label' => 'Image 2',
        'section' => 'fiveanddime_home_section',
        'settings' => 'home_image_1',
        'priority' => 2,
            )
            )
    );
    
   /////////////////////////////////////////////////////////////////////////////// 
    
    $wp_customize->add_section('fiveanddime_featured_section', array(
        'title' => __('Featured Product Section', 'fiveanddime'),
        'priority' => 32,
    ));
    
    $wp_customize->add_setting('featured_section',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('featured_section', array(
        'label' => __('Section Heading', 'fiveanddime'),
        'section' => 'fiveanddime_featured_section',
        'settings' => 'featured_section',
        'priority' => 1,
    ));
     $wp_customize->add_setting('featured_image_1',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'featured_image_1', array(
        'label' => 'Image 1',
        'section' => 'fiveanddime_featured_section',
        'settings' => 'featured_image_1',
        'priority' => 2,
            )
            )
    );
    $wp_customize->add_setting('featured_heading_1',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('featured_heading_1', array(
        'label' => __('Featured Heading 1', 'fiveanddime'),
        'section' => 'fiveanddime_featured_section',
        'settings' => 'featured_heading_1',
        'priority' => 3,
    ));
     $wp_customize->add_setting('featured_image_2',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'featured_image_2', array(
        'label' => 'Image 2',
        'section' => 'fiveanddime_featured_section',
        'settings' => 'featured_image_1',
        'priority' => 4,
            )
            )
    );
    $wp_customize->add_setting('featured_heading_2',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('featured_heading_2', array(
        'label' => __('Featured Heading 2', 'fiveanddime'),
        'section' => 'fiveanddime_featured_section',
        'settings' => 'featured_heading_2',
        'priority' => 5,
    ));
     $wp_customize->add_setting('featured_image_3',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'featured_image_3', array(
        'label' => 'Image 3',
        'section' => 'fiveanddime_featured_section',
        'settings' => 'featured_image_3',
        'priority' => 6,
            )
            )
    );
    $wp_customize->add_setting('featured_heading_3',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('featured_heading_3', array(
        'label' => __('Featured Heading 3', 'fiveanddime'),
        'section' => 'fiveanddime_featured_section',
        'settings' => 'featured_heading_3',
        'priority' => 7,
    ));
    
    ///////////////////////////////////////////////////////////////////////
    
    
    $wp_customize->add_section('fiveanddime_brands_section', array(
        'title' => __('Featured Brands Section', 'fiveanddime'),
        'priority' => 33,
    ));
    
    $wp_customize->add_setting('brands_section',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('brands_section', array(
        'label' => __('Brands Section Heading', 'fiveanddime'),
        'section' => 'fiveanddime_brands_section',
        'settings' => 'brands_section',
        'priority' => 1,
    ));
    $wp_customize->add_setting('brands_desc_heading',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('brands_desc_heading', array(
        'label' => __('Brands Description Heading', 'fiveanddime'),
        'section' => 'fiveanddime_brands_section',
        'settings' => 'brands_desc_heading',
        'priority' => 2,
    ));
    $wp_customize->add_setting('brands_desc',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('brands_desc', array(
        'label' => __('Brands Description', 'fiveanddime'),
        'section' => 'fiveanddime_brands_section',
        'settings' => 'brands_desc',
        'priority' => 3,
    ));
     $wp_customize->add_setting('brand_image_1',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'brand_image_1', array(
        'label' => 'Image 1',
        'section' => 'fiveanddime_brands_section',
        'settings' => 'brand_image_1',
        'priority' => 4,
            )
            )
    );
     $wp_customize->add_setting('brand_image_2',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'brand_image_2', array(
        'label' => 'Image 2',
        'section' => 'fiveanddime_brands_section',
        'settings' => 'brand_image_2',
        'priority' => 5,
            )
            )
    );
     $wp_customize->add_setting('brand_image_3',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'brand_image_3', array(
        'label' => 'Image 3',
        'section' => 'fiveanddime_brands_section',
        'settings' => 'brand_image_3',
        'priority' => 6,
            )
            )
    );
     $wp_customize->add_setting('brand_image_4',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'brand_image_4', array(
        'label' => 'Image 4',
        'section' => 'fiveanddime_brands_section',
        'settings' => 'brand_image_4',
        'priority' => 7,
            )
            )
    );
     $wp_customize->add_setting('brand_image_5',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'brand_image_5', array(
        'label' => 'Image 5',
        'section' => 'fiveanddime_brands_section',
        'settings' => 'brand_image_5',
        'priority' => 8,
            )
            )
    );
     $wp_customize->add_setting('brand_image_6',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'brand_image_6', array(
        'label' => 'Image 6',
        'section' => 'fiveanddime_brands_section',
        'settings' => 'brand_image_6',
        'priority' => 9,
            )
            )
    );
     $wp_customize->add_setting('brand_image_7',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'brand_image_7', array(
        'label' => 'Image 7',
        'section' => 'fiveanddime_brands_section',
        'settings' => 'brand_image_7',
        'priority' => 10,
            )
            )
    );
     $wp_customize->add_setting('brand_image_8',array(
        'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'brand_image_8', array(
        'label' => 'Image 8',
        'section' => 'fiveanddime_brands_section',
        'settings' => 'brand_image_8',
        'priority' => 11,
            )
            )
    );
    
    
    /////////////////////////////////////////////////////////////////////////////
    
    $wp_customize->add_section('fiveanddime_recent_section', array(
        'title' => __('Recently Added Section', 'fiveanddime'),
        'priority' => 34,
    ));
    
    $wp_customize->add_setting('recent_section',array(
        'transport'=>'postMessage',
    ));

    $wp_customize->add_control('recent_section', array(
        'label' => __('Recently Added Section Heading', 'fiveanddime'),
        'section' => 'fiveanddime_recent_section',
        'settings' => 'recent_section',
        'priority' => 1,
    ));
}
add_action( 'customize_register', 'fiveanddime_customize_register' );
    