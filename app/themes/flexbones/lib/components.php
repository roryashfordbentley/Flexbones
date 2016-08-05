<?php
/**
 * get components
 *
 * checks that a component exists and returns the component
 * if it exists.
 *
 */

function get_component($component){

    if(empty($component)){
        echo '<div style="background: #f00; color: white;"><strong>Missing Argument.</strong> Pass the name of the component folder e.g. "header"</div>';
        return false;
    }

    $component_path = get_stylesheet_directory() . '/components/' . $component . '/index.php';

    if(!file_exists($component_path) ){
        echo '<div style="background: #f00; color: white;"><strong>Component '. $component .' does not exist.</strong> Check the name and path are correct. Path = '. $component_path .'</div>';
        return false;
    }

    require_once( get_stylesheet_directory() . '/components/' . $component . '/index.php');

    return true;
}