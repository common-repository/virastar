<?php

/* 
The right-to-left mark (RLM) is a non-printing character used in the computerized typesetting of bi-directional text containing mixed left-to-right scripts (such as English and Russian) and right-to-left scripts (such as Arabic, Persian and Hebrew). 
It is used to change the way adjacent characters are grouped with respect to text direction.

For more information : http://en.wikipedia.org/wiki/Right-to-left_mark
 */

/*  Register right-to-left mark (RLM)  plugin for tinyMCE */
add_filter('mce_external_plugins', "rlmplugin_register");
function rlm_add_button($buttons)
{
    array_push($buttons, "separator", "rlmplugin");
    return $buttons;
}

/*  Add right-to-left mark (RLM) button for tinyMCE */
add_filter('mce_buttons', 'rlm_add_button', 0);
function rlmplugin_register($plugin_array)
{
    $plugin_array['rlmplugin'] = WP_PLUGIN_URL . "/virastar/tinyMCE/rlm_plugin.js";
    return $plugin_array;
}
