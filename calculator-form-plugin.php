<?php
/**
 * Plugin Name: Calculator Form Plugin
 * Plugin URI: https://your-website.com/calculator-form-plugin
 * Description: A WordPress plugin that provides a shortcode to embed a visa points calculator form on any page or post.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://your-website.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: calculator-form-plugin
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

class CalculatorFormPlugin {
    
    /**
     * Plugin version
     */
    const VERSION = '1.0.0';
    
    /**
     * Plugin instance
     */
    private static $instance = null;
    
    /**
     * Get plugin instance
     */
    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Constructor
     */
    private function __construct() {
        $this->init_hooks();
    }
    
    /**
     * Initialize hooks
     */
    private function init_hooks() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_shortcode('calculator_form', array($this, 'render_calculator_form'));
        
        // Admin hooks
        add_action('admin_menu', array($this, 'add_admin_menu'));
        register_activation_hook(__FILE__, array($this, 'activate'));
        register_deactivation_hook(__FILE__, array($this, 'deactivate'));
    }
    
    /**
     * Enqueue scripts and styles
     */
    public function enqueue_scripts() {
        // Only enqueue on pages that have the shortcode
        if ($this->has_shortcode_on_page()) {
            wp_enqueue_style(
                'calculator-form-style',
                plugin_dir_url(__FILE__) . 'assets/css/calculator-form.css',
                array(),
                self::VERSION
            );
            
            wp_enqueue_script(
                'calculator-form-script',
                plugin_dir_url(__FILE__) . 'assets/js/calculator-form.js',
                array('jquery'),
                self::VERSION,
                true
            );
        }
    }
    
    /**
     * Check if shortcode exists on current page
     */
    private function has_shortcode_on_page() {
        global $post;
        
        if (is_a($post, 'WP_Post') && has_shortcode($post->post_content, 'calculator_form')) {
            return true;
        }
        
        return false;
    }
    
    /**
     * Render calculator form shortcode
     */
    public function render_calculator_form($atts) {
        $atts = shortcode_atts(array(
            'title' => 'Skilled Nominated Visa (subclass 190)',
            'description' => 'Note: Points criteria are assessed at the time of invitation.'
        ), $atts);
        
        ob_start();
        include plugin_dir_path(__FILE__) . 'templates/calculator-form.php';
        return ob_get_clean();
    }
    
    /**
     * Add admin menu
     */
    public function add_admin_menu() {
        add_options_page(
            'Calculator Form Settings',
            'Calculator Form',
            'manage_options',
            'calculator-form-settings',
            array($this, 'admin_page')
        );
    }
    
    /**
     * Admin page content
     */
    public function admin_page() {
        ?>
        <div class="wrap">
            <h1>Calculator Form Settings</h1>
            <div class="card">
                <h2>How to Use</h2>
                <p>To display the calculator form on any page or post, use the following shortcode:</p>
                <code>[calculator_form]</code>
                <p>You can also customize the title and description:</p>
                <code>[calculator_form title="Custom Title" description="Custom description"]</code>
            </div>
        </div>
        <?php
    }
    
    /**
     * Plugin activation
     */
    public function activate() {
        // Add any activation tasks here
        flush_rewrite_rules();
    }
    
    /**
     * Plugin deactivation
     */
    public function deactivate() {
        // Add any deactivation tasks here
        flush_rewrite_rules();
    }
}

// Initialize the plugin
CalculatorFormPlugin::get_instance();