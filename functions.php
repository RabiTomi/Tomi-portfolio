<?php
function portfoliotheme() {
    wp_enqueue_style("portfoliotheme", get_template_directory_uri() . "/style.css");
    
}
add_action("wp_enqueue_scripts", "portfoliotheme");

function acf_remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "acf_remove_gutenberg");


function portfolio_load_resources() {
    
    wp_enqueue_style("roboto-font", "https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap");
    wp_enqueue_style("handwritten-font", "https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap");
    
}
add_action("wp_enqueue_scripts", "portfolio_load_resources");