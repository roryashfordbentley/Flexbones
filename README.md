# Flexbones -  A Wordpress Project Boilerplate

A clean opinionated WordPress boilerplate that takes a lot of the hassle out of setting up a Wordpress site.

The WordPress core is kept completely seperate from content to allow you to stay organised.

The project has an MIT license and if you use it for anything I would love to hear about it!

## Features

### Local and Remote wp-config files

This allows you to store credential for both the local and a remote version of the site.

make sure this *is not*  stored under version control

### Custom directory Structure

There are just two folders: `wp` which is where WordPress goes and `app` which is essentially the same as `wp-config`

### Lightweight Sass Library

More than a reset but less than a framework our Sass library is modular and broken into useful sections as follows:

* globals (minimal styles that usually target element types rather than classes. e.g. forms and tables)
* project (project specific stylesheets)
* tools (mixins and functions that are not self executing)
* vendor (for dropping in 3rd party sass)

### Responsive Grid System

A version of the [Gridtacular Grid System](https://github.com/roikles/Gridtacular)

### Build Script

There is a package.json file in the root directory that is setup to watch for changes in the project.

The build script will concatenate and minify both Sass and Javascript. Files are automatically reloaded in the browser thanks to [Browsersync](https://www.browsersync.io/)

There is a very crude deployment script for moving a WordPress site to a linux server that you have *already* paired a key with.

### Enable or disable WP-API from theme customizer

Not using the WP-API? Then head to the theme customizer in wp-admin and turn it off.

### Theme Customizer Options

*Contact Details*

* Company Address details
* Phone number
* Fax Number (what year is it?!)
* Email address

*Social Media Links*

* Facebook
* Twitter
* Linkedin 
* Instagram
* Google Plus (really?!)

*Flexbones Options*

* Enable/disable admin bar
* Enable/diable oEmbed
* Enable Disable the REST API

*Usage*

`flexbones_setting('option')` e.g. `<?php echo nl2br(flexbones_setting( 'address' )); ?>`

### functions.php used to load a lib directory of functions

Rather than having a huge single PHP file we use `functions.php` to load in additional php files from the `lib` directory.

### Security

Added features to the main `.htaccess` file to prevent certain actions that could be malicious from being carried out.

Added a `.htaccess` file to the uploads folder to prevent the execution of scripts as this is a common entry point of attacks.

Please note that there is a known issue with Gravity PDF as it stores `php` templates in the uploads folder. To fix, edit the `.htaccess`
