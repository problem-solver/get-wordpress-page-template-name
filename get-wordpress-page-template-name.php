<?php
//get post id
$post_id = get_the_ID();

//get template name from post id
$template_file = get_post_meta( $post_id, '_wp_page_template', true );
$templates_array = array_flip(wp_get_theme()->get_page_templates());
$template_name = array_search($template_file,$templates_array);
echo $template_name;
?>