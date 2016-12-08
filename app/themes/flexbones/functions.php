<?php

/**
 * Functions are all located in the lib folder
 */

$root = 'lib';

get_template_part($root . '/theme-setup');
get_template_part($root . '/theme-customization');
get_template_part($root . '/helpers');
get_template_part($root . '/filters');
get_template_part($root . '/menus');
get_template_part($root . '/scripts');
get_template_part($root . '/cpts');
get_template_part($root . '/taxonomies');