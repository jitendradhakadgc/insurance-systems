<?php
/*
Plugin Name: My PDF Generator
Description: A plugin to generate PDFs using TCPDF.
Version: 1.0
Author: Your Name
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Include Composer's autoloader
require_once(plugin_dir_path(__FILE__) . 'vendor/autoload.php');

// Use TCPDF namespace
//use TCPDF;

// Create a shortcode to generate PDF
function my_generate_pdf() {
    // Start output buffering
     // Start output buffering
     // Start output buffering to catch any output before PDF generation
ob_start();

// Suppress errors and fetch website content
$websiteContent = @file_get_contents('http://assistant.local/custom-pdf-template/');

if ($websiteContent === false) {
    // Handle error gracefully and stop execution
    ob_end_clean(); // Clean the output buffer before outputting the error message
    wp_die('Failed to fetch content from the URL.');
}

// Include the TCPDF library
if (!class_exists('TCPDF')) {
    require_once('path/to/tcpdf.php'); // Adjust the path as needed
}

// Create a custom TCPDF class to override the header
class CustomTCPDF extends TCPDF {
    // Disable the header
    public function Header() {
        // Do nothing to disable the header
    }
}

// Create new PDF document
$pdf = new CustomTCPDF();

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 12, PDF_MARGIN_RIGHT); // Top margin set to 12
$pdf->SetHeaderMargin(12); // Header margin set to 12
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Add a page
$pdf->AddPage();

// Combine CSS with website content
$htmlContent = $websiteContent;

// Write HTML content to PDF
$pdf->writeHTML($htmlContent, true, false, true, false, '');

// Flush the output buffer and stop buffering
//ob_end_clean();

// Output PDF (Inline display in browser)
$pdf->Output('website-content.pdf', 'I');
exit; // Make sure to exit after output to prevent any further processing


     //exit; // Stop further script execution
    // End output buffering and clean the buffer
    //ob_end_clean();
}
add_shortcode('my_pdf', 'my_generate_pdf');
// Register shortcode [my_pdf]
// Register the new template
function my_register_custom_template( $templates ) {
    $templates['custom-pdf-template.php'] = 'Custom PDF Template';
    return $templates;
}
add_filter( 'theme_page_templates', 'my_register_custom_template' );

// Load the template
function my_load_custom_template( $template ) {
    if ( get_page_template_slug() == 'custom-pdf-template.php' ) {
        $template = plugin_dir_path( __FILE__ ) . 'custom-pdf-template.php';
    }
    return $template;
}
add_filter( 'template_include', 'my_load_custom_template' );

add_filter( 'template_include', 'my_load_custom_template' );

// Enqueue scripts and styles
function my_enqueue_scripts() {
    wp_enqueue_style('my-pdf-generator-style', plugin_dir_url(__FILE__) . 'assets/style.css');
    wp_enqueue_script('my-pdf-generator-script', plugin_dir_url(__FILE__) . 'assets/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');function custom_admin_menu() {
    add_menu_page(
        'Create PDF Post', 
        'PDF Post Creator', 
        'manage_options', 
        'pdf-post-creator', 
        'pdf_post_creator_page', 
        'dashicons-media-document', 
        6 
    );
}
function enqueue_admin_scripts($hook_suffix) {
    // Check if we are on the correct admin page
    if (isset($_GET['page']) && $_GET['page'] == 'pdf-post-creator') {
        wp_enqueue_style('my-form-generator-style', plugin_dir_url(__FILE__) . 'assets/form.css');
    }
}

add_action('admin_enqueue_scripts', 'enqueue_admin_scripts');
add_action('admin_menu', 'custom_admin_menu');

function pdf_post_creator_page() {
	include plugin_dir_path(__FILE__) . '/view/pdf-post-creator-page.php';
}
function handle_pdf_post_creation() {
    if (isset($_POST['submit_pdf_post']) && check_admin_referer('save_pdf_post', 'pdf_post_nonce')) {
        $post_title = sanitize_text_field($_POST['name']);
        $post_content = sanitize_textarea_field($_POST['last_name']);
        
        $post_id = wp_insert_post(array(
            'post_title'   => $post_title,
            'post_content' => $post_content,
            'post_status'  => 'publish',
            'post_type'    => 'custom_pdf_post',
        ));
        
       
        
        wp_redirect(admin_url('admin.php?page=pdf-post-creator&message=success'));
        exit;
    }
}
add_action('admin_post_handle_pdf_post_creation', 'handle_pdf_post_creation');
