<?php
/**
 * Plugin name: Short_2
 * Description: Structure de plugin utilisant plusieurs fichiers permettant d'afficher une addresse.
 * Author: RBC
 * Plugin URI: https://github.com/e2194579
 */
function sh2_31w_enqueue()
{
    $version_css = filemtime(plugin_dir_path(__FILE__) . "style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) . "script/message.js");

    wp_enqueue_style('sh2_31w_css', plugin_dir_url(__FILE__) .  "style.css", array(), $version_css);
    wp_enqueue_script('sh2_31w_js', plugin_dir_url(__FILE__) . "script/message.js", array(), $version_js, true);
}
add_action('wp_enqueue_scripts', 'sh2_31w_enqueue');

function genere_adresse(){
    $contenu = "<code class='code_adr' style='display:none'>3800 Rue Sherbrooke E, Montréal, QC H1X 2A2";
    $content = get_the_content();
    $contentsub = substr($content, 0, 0);
    $contenu .= $contentsub;
    $contenu .= "</code>";
    $contenu .= "<button class='btn'>OK</button>";
   
    return $contenu;
 }

 add_shortcode('adresse', 'genere_adresse');
