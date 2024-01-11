<?php
function ud_enqueue_scripts()
{
    reg();
    enq();
}
function reg()
{
    /**
     * Registering Styles
     */


    wp_register_style(
        'md-bootstrap',
        get_theme_file_uri('assets/css/bootstrap.min.css')
    );
    wp_register_style(
        'md-fontawsome',
        get_theme_file_uri('assets/fontawesome/css/all.min.css')
    );
    wp_register_style(
        'md-theme',
        get_theme_file_uri('assets/css/templatemo-style.css')
    );

    wp_register_script(
        'md-plugins',
        get_theme_file_uri('assets/js/plugins'),
        null,
        null,
        true
    );
}
function enq()
{
    /**
     * Enqueue Styles
     */
    wp_enqueue_style('md-bootstrap');
    wp_enqueue_style('md-fontawsome');
    wp_enqueue_style('md-theme');
    /**
     * Enqueue Scripts
     */
    //wp_enqueue_script('md-plugins');
    wp_add_inline_script(
        'md-plugins',
        "$(window).on('load', function() {
            $('body').addClass('loaded');
        });"
    );
}
