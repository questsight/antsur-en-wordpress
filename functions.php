<?php

show_admin_bar( false );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'excerpt_more', function( $more ) {
  return '...';
});

if ( ! function_exists( 'questsight_setup' ) ) :
	function questsight_setup() {
		load_theme_textdomain( 'questsight', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'header' => esc_html__( 'Header Menu', 'questsight' ),
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-background', apply_filters( 'questsight_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo', array(
			'height'      => 157,
			'width'       => 118,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'questsight_setup' );

function questsight_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'questsight_content_width', 640 );
}
add_action( 'after_setup_theme', 'questsight_content_width', 0 );


function questsight_scripts() {
	wp_enqueue_style( 'questsight-style', get_stylesheet_uri() );
  wp_enqueue_style('questsight-common-css', get_template_directory_uri() . '/assets/css/common.min.css', array(), null, false);
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script('questsight-common-js', get_template_directory_uri() . '/assets/js/common.min.js', array( 'jquery' ), null, true);
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'questsight_scripts' );

//доп.настройки
function wpschool_api_add_admin_menu( ) {
    add_options_page( 'Сontact details', 'Сontact details', 'manage_options', 'wpschool-settings-page', 'wpschool_api_options_page' );
}
add_action( 'admin_menu', 'wpschool_api_add_admin_menu' );

function wpschool_api_settings_init( ) {
    register_setting( 'wpschoolCustom', 'wpschool_api_settings' );
    add_settings_section(
        'wpschool_api_wpschoolCustom_section',
        __( 'Footer', 'wordpress' ),
        'wpschool_api_settings_section_callback',
        'wpschoolCustom'
    );

    add_settings_field(
        'wpschool_api_text_field_0',
        __( 'E-mail', 'wordpress' ),
        'wpschool_api_text_field_0_render',
        'wpschoolCustom',
        'wpschool_api_wpschoolCustom_section'
    );

    add_settings_field(
        'wpschool_api_select_field_1',
        __( 'Phone number', 'wordpress' ),
        'wpschool_api_select_field_1_render',
        'wpschoolCustom',
        'wpschool_api_wpschoolCustom_section'
    );
}

function wpschool_api_text_field_0_render( ) {
    $options = get_option( 'wpschool_api_settings' );
    ?>
    <input type='text' name='wpschool_api_settings[wpschool_api_text_field_0]' value='<?php echo $options['wpschool_api_text_field_0']; ?>'>
    <?php
}

function wpschool_api_select_field_1_render( ) {
    $options = get_option( 'wpschool_api_settings' );
    ?>
    <input type='text' name='wpschool_api_settings[wpschool_api_text_field_1]' value='<?php echo $options['wpschool_api_text_field_1']; ?>'>
    <?php
}

function wpschool_api_settings_section_callback( ) {
    echo __( '', 'wordpress' );//можно добавить описание
}

function wpschool_api_options_page( ) {
    ?>
    <form action='options.php' method='post'>
        <h2>Сontact details</h2>
        <?php
        settings_fields( 'wpschoolCustom' );
        do_settings_sections( 'wpschoolCustom' );
        submit_button();
        ?>
    </form>
    <?php
}
add_action( 'admin_menu', 'wpschool_api_add_admin_menu' );
add_action( 'admin_init', 'wpschool_api_settings_init' );

//Изображения в формате webp
function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';

    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );