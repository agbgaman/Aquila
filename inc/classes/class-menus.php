<?php
/**
 * Register Menus
 * 
 * @package Aquila
 */

 namespace AQUILA_Theme\Inc;

 use AQUILA_THEME\Inc\Traits\Singleton;

 class Menus {
    use Singleton;

    protected function __construct(){


        //load class.
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /**
         * Actions.
         */

        add_action( 'init',[ $this, 'register_menus'] );
    }

    public function register_menus(){
        register_nav_menus([
            'aquila-header-menu'=>esc_html__('Header Menu', ''),
            'extra-menu'=>__('Extra menu'),
        ]);
    }

 }