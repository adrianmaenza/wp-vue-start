<?php
wp_enqueue_style( 'wp-vue-style', get_stylesheet_uri() );
wp_enqueue_script('wp-vue-js', get_template_directory_uri() . '/js/wp-vue.js', []);