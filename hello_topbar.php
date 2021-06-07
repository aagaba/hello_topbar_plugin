
<?php
/**
 * Plugin Name:       Hello Topbar
 * Plugin URI:        https://hello-topbar.com
 * Description:       This will add a welcome bar at the top of your page.
 * Version:           1.0
 * Author:            Alex Agaba
 * Author URI:        https://onedesignug.org/
 */

//add the bar after the opening body
add_action('wp_body_open', 'hello_tb_head');


function hello_tb_head()
{
    echo '<h3 class="tb"> Welcome to the '.get_bloginfo('name').'</h3>';
}