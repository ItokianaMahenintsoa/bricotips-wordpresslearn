<?php
function bricotips_child_enqueue_styles()
{

    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_directory_uri() . '/css/theme.css',
        array(),
        filemtime(get_stylesheet_directory() . '/css/theme.css')
    );

    wp_enqueue_style('image-titre-widget', get_stylesheet_directory_uri() . '/css/widgets/image-titre-widget.css', array(), filemtime(get_stylesheet_directory() . '/css/widgets/image-titre-widget.css'));
}
add_action('wp_enqueue_scripts', 'bricotips_child_enqueue_styles');


// On créer une class Widget Image_Titre_Widget dans un fichier à part pour pas surcharger le functions.php
require_once(__DIR__ . '/widgets/ImageTitreWidget.php');



function register_widgets()
{
    //On enregistre le widget avec la class Image_Titre_Widget
    register_widget('Image_Titre_Widget');
}
//On demander à wordpress de charger des widget selon la fonction register_widgets()
add_action('widgets_init', 'register_widgets');
