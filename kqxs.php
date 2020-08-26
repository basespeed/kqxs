<?php
/**
 * Plugin Name:   Kết quả sổ số
 * Plugin URI:    https://takecare.vn
 * Description:   Design by Takecare
 * Author:        Thanh Tung
 * Author URI:    https://takecare.vn
 * Version:       1.1
 * Text Domain:   kqxs
 *
 * @package   kqxs
 * @category  Core
 * @author    Thanh Tung
 * @copyright Copyright (c) 2020, Thanh Tung.
 * @license   https://takecare.vn/gioi-thieu
 * @since     1.1
 */

class KQSX{
    private static $instance;

    public static function getInstance(){
        if (!isset(self::$instance) && !(self::$instance instanceof KenhSanGo)) {
            self::$instance = new KQSX();
            self::$instance->setup();
            self::$instance->update();
            self::$instance->EnqueueScript();
            self::$instance->PHP_DOM();
            self::$instance->Controller();
            self::$instance->OPTION_PAGE();
            self::$instance->PostType();
            self::$instance->CMB2();
            self::$instance->METABOX();
            self::$instance->Shortcode();
        }

        return self::$instance;
    }

    public function setup(){
        if (!defined('DIR')) {
            define('DIR', plugin_dir_path(__FILE__));
        }

        if (!defined('URL')) {
            define('URL', plugin_dir_url(__FILE__));
        }
    }

    public function EnqueueScript(){
        /**
         * Never worry about cache again!
         */
        function load_scripts($hook) {
            //wp_enqueue_script( 'pure_js', plugins_url( 'assets/js/js.js', __FILE__ ), array(), $js_ver );
            wp_register_style( 'load_css',    plugins_url( 'assets/css/style.css',    __FILE__ ), false,   1.0 );
            wp_enqueue_style ( 'load_css' );

        }
        add_action('wp_enqueue_scripts', 'load_scripts',100);

        function admin_load_scripts($hook) {
            wp_enqueue_script( 'pure_js', plugins_url( 'assets/js/admin.js', __FILE__ ), array(), 1.0 );
            wp_register_style( 'admin_css',    plugins_url( 'assets/css/admin.css',    __FILE__ ), false,   1.0 );
            wp_enqueue_style ( 'admin_css' );

        }
        add_action('admin_init', 'admin_load_scripts',100);
    }

    public function update(){
        include_once DIR . 'inc/update/update.php';
    }

    public function Controller(){
        include_once DIR . "inc/controller.php";
    }

    public function OPTION_PAGE(){
        include_once DIR . "inc/main.php";
    }

    public function PHP_DOM(){
        include_once DIR . "inc/simple_html_dom.php";
    }

    public function PostType(){
        include_once DIR . "/inc/post_type.php";
    }

    public function CMB2(){
        include_once DIR . "/inc/CMB2/init.php";
    }

    public function METABOX(){
        include_once DIR . "/inc/kqxs_field.php";
    }

    public function Shortcode(){
        include_once DIR . "/inc/shortcode.php";
    }



}

function getKQSX(){
    return KQSX::getInstance();
}

getKQSX();

var_dump('check update plugin v.1.1');


