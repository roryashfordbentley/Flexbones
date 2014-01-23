<?php

/**
 * Functions php pulls required files from the lib folder
 * for better organisation and editing.
 */

$root = 'lib';

get_template_part($root . '/theme-setup');
get_template_part($root . '/filters');
get_template_part($root . '/menus');
get_template_part($root . '/scripts');
get_template_part($root . '/styles');