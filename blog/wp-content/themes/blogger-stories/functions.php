<?php 
// Get customizer options
require_once get_template_directory() . '/vendor/autoload.php';
use SuperbThemesCustomizer\CustomizerControls;

// New color variables
if(method_exists(CustomizerControls::class, "OverwriteDefault")) {
	CustomizerControls::OverwriteDefault(CustomizerControls::COLOR_SCHEME_PRIMARY, "#eda435");
	CustomizerControls::OverwriteDefault(CustomizerControls::COLOR_SCHEME_PRIMARY_DARK, "#c6882a");
	CustomizerControls::OverwriteDefault(CustomizerControls::COLOR_SCHEME_SECONDARY, "#eda435");
	CustomizerControls::OverwriteDefault(CustomizerControls::COLOR_SCHEME_SECONDARY_DARK, "#c6882a");
	CustomizerControls::OverwriteDefault(CustomizerControls::COLOR_SCHEME_TERTIARY, "#eda435");
	CustomizerControls::OverwriteDefault(CustomizerControls::COLOR_SCHEME_TERTIARY_DARK, "#c6882a");
	CustomizerControls::OverwriteDefault(CustomizerControls::COLOR_SCHEME_BACKGROUND, "#ffffff");
	CustomizerControls::OverwriteDefault(CustomizerControls::COLOR_SCHEME_LIGHT_3, "#a0816a");
	CustomizerControls::OverwriteDefault(CustomizerControls::COLOR_SCHEME_FOREGROUND, "#101010");
	CustomizerControls::OverwriteDefault(CustomizerControls::COLOR_SCHEME_DARK_2, "#646464");
	CustomizerControls::OverwriteDefault(CustomizerControls::BLOGFEED_SHOW_READMORE_BUTTON, "1");
	CustomizerControls::OverwriteDefault(CustomizerControls::BLOGFEED_COLUMNS_STYLE, CustomizerControls::BLOGFEED_TWO_COLUMNS_MASONRY);
}

// Get stylesheet
add_action( 'wp_enqueue_scripts', 'blogger_stories_enqueue_styles' );
function blogger_stories_enqueue_styles() {
	wp_enqueue_style( 'blogger-stories-parent-style', get_template_directory_uri() . '/style.css' ); 
} 



//Dequeue old font
function blogger_stories_dequeue_fonts() {
    wp_dequeue_style( 'petite-stories-fonts' );
        wp_deregister_style( 'petite-stories-fonts' );
}
add_action( 'wp_print_styles', 'blogger_stories_dequeue_fonts' );




// New fonts
function blogger_stories_enqueue_assets() {
    // Include the file.
    require_once get_theme_file_path('webfont-loader/wptt-webfont-loader.php');
    // Load the webfont.
    wp_enqueue_style(
        'blogger-stories-fonts',
        wptt_get_webfont_url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap'),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'blogger_stories_enqueue_assets');

