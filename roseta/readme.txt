=== Roseta ===

Contributors: Cryout Creations
Requires at least: 4.5
Tested up to: 6.6
Stable tag: 1.3.0.1
Requires PHP: 5.6
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html

A fast, clean and highly customizable theme. It's beautiful and multi-purpose - use it for your blog, online portfolio, business website or WooCommerce store. It's lightweight, mobile friendly and responsive, created with SEO in mind (taking full advantage of microformats and Schema.org microdata that search engines love). Some of the amazing features include:  Responsive / WooCommerce / RTL / Translation Ready / Google Fonts / Gutenberg support / Regular updates. Some of the many customizable aspects include: Layouts (Wide and Boxed) / Site widths / Header elements / Featured images / Colors / Post metas / Widgets areas / Landing page elements / Slider / Typography / Masonry bricks / Socials and much more.

Copyright 2019-24 Cryout Creations
https://www.cryoutcreations.eu/

== License ==

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see http://www.gnu.org/copyleft/gpl.html


== Third Party Resources ==

Roseta WordPress Theme bundles the following third-party resources:

HTML5Shiv, Copyright Alexander Farkas (aFarkas)
Dual licensed under the terms of the GPL v2 and MIT licenses
Source: https://github.com/aFarkas/html5shiv/

FitVids, Copyright Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
Licensed under the terms of the WTFPLlicense
Source: http://fitvidsjs.com/

Select2, Copyright Kevin Brown, Igor Vaynberg, and Select2 contributors
Licensed under the terms of the MIT license.
Source: https://github.com/select2/select2

== Bundled Fonts ==

Icomoon icons, Copyright Keyamoon.com
Licensed under the terms of the GPL license
Source: https://icomoon.io/#icons-icomoon

Zocial CSS social buttons, Copyright Sam Collins
Licensed under the terms of the MIT license
Source: https://github.com/smcllns/css-social-buttons

Entypo+ icons, Copyright Daniel Bruce
Licensed under the terms of the CC BY-SA 4.0 license
Source: http://www.entypo.com/faq.php

== Bundled Images ==

The following bundled images are released into the public domain under Creative Commons CC0:

Header images:
https://pxhere.com/en/photo/723046
https://pxhere.com/en/photo/1081678

The rest of the bundled images are created by Cryout Creations and released with the theme under GPLv3


== Changelog ==

= 1.3.0.1 =
*Release date - 18.09.2024*

* Fixed XSS vulnerability allowing the output of unsanitized user names set by rogue editors/contributors
* Fixed comments markup inconsistency (itemprop='discussionURL' visible)

= 1.3.0 =
*Release Date - 2022.05.28*

* Added 'roseta_box_readmore' filter for landing page featured boxes read more texts
* Added support for using the associated featured images as header images on the static home and blog pages and on WooCommerce's main shop page
* Added configuration hint for header image when the theme's slider / banner image is active on the homepage
* Improved Safari mobile browser detection for iPhones and iPads (for better handling of rendering quirks in social apps)
* Improved single posts fixed next/previous navigation by moving it to hookable roseta_fixed_nav_links() function and limiting links to same taxonomy
* Improved JS compatibility with ShiftNav plugin
* Improved compatibility with script name collision in deferring check by increasing specificity
* Improved compatibility with sub-optimal SSI configurations
* Fixed portfolio type lists displaying slugs instead of properly formatted names
* Fixed featured images using the incorrect width in 3 post columns / left sidebar only configuration
* Updated to Cryout Framework 0.8.6.3:
	* Added static blog page detection function (for featured images in header)
	* Added Polylang support for featured boxes category filtering (thanks to espasso)
	* Improved PHP 8 compatibility
	* Expanded hint control styling to apply in the Site Identity panel
	* Fixed fatal error on Customize screen due to inconsistent handling of empty categories since WordPress 6.0
	* Fixed 'Disable' and 'All Categories' options not available in category selector options on sites with no categories defined

= 1.2.2 =
*Release Date - 2021.02.05*

* Removed lazy loading functionality from featured images as it sometimes interferes with image sizes
* Fixed images sometimes not appearing when lazy loading images set to animated
* Added click-navigation to target panels in header content and site identity hints

= 1.2.1 =
*Release Date - 2021.01.12*

* Fixed block editor galleries layout
* Fixed back to top button animation styling when using child themes
* Improved preloader handling when JavaScript is broken on the site or disabled in browser
* Added option to disable animation for lazy loaded images
* Added lazy loading for featured images and landig page elements
* Optimized frontend.js structure

= 1.2.0 =
*Release Date - 2020.12.28*

* Renamed landing page 'static image' element to 'banner image' for clarity
* Fixed block editor font sizes using the incorrect 'regular' slug
* Fixed absolute next/previous post nav not working
* Fixed "Inherit General Font" option not working as expected
* Fixed team members photos having a weird aspect ratio after Team Members plugin update
* Fixed text indent option adding identation to icons (including shortcodes)
* Redesigned H5 / H6 headings appearance
* Fixed header image being included on homepage even when not active and visible
* Improved main navigation fallback markup
* Cleaned up and optimized frontend scripts, including for WordPress 5.5/5.6 jQuery updates
* Removed all padding/margins from before/after content and top/bottom inner widget areas
* Fixed search form overlapping mobile menu elements with small general font sizes
* Improved comment placeholder/label option functionality
* Extended posts animation option to apply to landing page animations as well
* Fixed header titles vertical misalignment on landing page with specific configurations
* Improved support for menu customizations plugins
* Fixed left sidebar navigation not being displayed when there are no widgets assigned
* Fixed preloader feature sometimes failing with WordPress 5.6
* Updated to Cryout Framework 0.8.5.6:
	* Added echo parameters to cryout_schema_microdata() and cryout_font_select() functions
	* Improved breadcrumbs compatibility with plugins that filter section titles and add HTML markup
	* Improved JS code to remove jQuery deprecation notices since WordPress 5.6
	* Changed custom post type label in breadcrumbs from singular_name to name
	* Better cleaning of weights in font enqueues
	* Fixed multi-font choices failing to apply correctly
	* Added the ability to inherit the general font on all other font control options
	* Fixed color selector malfunction since WordPress 5.3
	* Fixed Select2 selectors no longer working with WordPress 5.6 on Firefox
	* Removed PHP and WP versions checks as these are now handled by WordPress
	* Additional sanitization and even more sanitization changes to comply with current wp.org requirements

= 1.1.1 =

* Fixed disabling the main navigation doesn't work as intended due to some elements still taking up space

= 1.1.0 =
* Added 'wp_body_open' action hook support for WordPress 5
* Added 'roseta_header_image' and 'roseta_header_image_url' filters to allow custom control over featured images in header functionality
* Added integrated socials menu support in the header (no longer requiring the manual use of the socials widget)
* Added option to disable default pages navigation and improved mobile menu functionality to hide toggler when main navigation is empty
* Added visibility on scroll functionality on the fixed menu on mobile devices
* Adjusted featured boxes animated 2 styling
* Moved header overlay color options to the correct Colors > Header panel
* Updated fixed menu styling to account for WordPress admin bar responsiveness breakpoints changes
* Improved list bullets styling in landing page text areas
* Improved dark color schemes support for HTML select elements
* Improved main navigation usability on tables by adding the option to force the mobile menu activation
* Improved mobile menu dark color schemes support by using non-link texts to use the configured menu text color
* Improved landing page icon blocks responsiveness
* Fixed testimonials section responsiveness when displayed on one column layout
* Fixed breadcrumbs missing link on home icon on WooCommerce pages
* Fixed animated featured boxes displaying an extra bottom margin when the 'read more' button is not used
* Fixed Gutenberg lists displaying bullets outside of content on landing page sections
* Fixed header video not being horizontally centered
* Fixed 'hide title' option not working with content titles
* Fixed static slider images larger than the screen being distorted instead of crop to fit the screen
* Fixed top menu not being scrollable and floating left on mobile devices
* Fixed paragraph indentation option not working and limited to inner-content only
* Fixed back-to-top button sometimes failing to display on short pages
* Removed leftover styling that was making the captions sometimes jump on display in the featured boxes sections when text was longer than the available space
* Improved keyboard navigation accessibility:
	* Added 'skip to content' link
	* Added focus support for post featured images, landing page featured boxes, landing page portfolio, main navigation search form
	* Converted menu close element to button
* Updated to Cryout Framework 0.8.4.1:
	* Optimized options migration check to reduce calls
	* Fixed 'Too few arguments' warning in breadcrumbs on Polylang multi-lingual sites
	* Removed news feed from theme's about page per TRT requirements - https://themes.trac.wordpress.org/ticket/73150#comment:3

= 1.0.7 =
* Multiple fixes for older IEs
* Improved Google Fonts functionality to load all weights for the general font
* Improved footer widgets responsiveness when set to center align
* Improved content spacing on single pages/posts when comment form is not displayed
* Updated to Cryout Framework 0.8.2:
	* Activated Select2 funcitonality on font selector controls
	* Fixed RTL issues with color controls, toggle controls, half/third width selectors, number slider

= 1.0.6 =
* Improved icon blocks icon selector by adding search functionality and making the icons visible on all browsers
* Optimized WooCommerce checkout page and products pages responsiveness
* Cleaned up some duplicate styling in custom-style.php
* Fixed sidebars splitting in two columns on smaller screens
* Fixed normalized tags not using uniform sizes
* Updated to Cryout Framework 0.8.1
	* Added Select2 functionality to icon-select controls

= 1.0.5 =
* Fixed content background color option not applying to the block editor
* Fixed headings color not applying to the block editor
* Improved block editor styling support for dark backgrounds
* Improved translations support for the framework second textdomain with Loco Translate

= 1.0.4 =
* Improved footer content alinment on mobile
* Fixed site title missing line height
* Fixed color fade on mobile top menu
* Fixed landing page text areas layouts not alternating properly
* Fixed slider and static slider captions, landing page section titles and description not being properly horizontally aligned on older browsers (IE 11)
* Fixed main navigation placement when set to over header image
* Rewrote frontend scripts

= 1.0.3.1 =
* Fixed missing background color for the fixed main menu

= 1.0.3 =
* Adjusted top section so that it disappears when no branding, top widgets or top menu are active
* Adjusted static slider caption text to use the overlay text-color option
* Fixed header titles disappearing on small screens (under 640px)
* Fixed missing background color for the fixed single post navigation
* Fixed menu when set to "over header image" not behaving properly
* Updated screenshot

= 1.0.2 =
* Added line-height option for header titles
* Added maximum width constraint to header titles and static slider caption
* Improved support for larger site logos
* Adjusted comment reply form styling
* Fixed deferring functionality applying to some dashboard scripts
* Fixed $content_width not being defined in the dashboard
* Fixed main navigation submenus not being visible under certain conditions
* Removed 'Not found' section on landing page when no posts are available

= 1.0.1 =
* Fixed header image not visible when set to 'contained' mode
* Added option to disable header image size requirements

= 1.0.0.1 =
* Reupload of 1.0.0 due to missing cryout/controls.php file

= 1.0.0 =
* Finalized suggested fonts list
* Update theme options to use the newly added controls
* Added additional font variant and line height options for some typography elements
* Fixed editor styles option doesn't apply to the block editor
* Updated to Cryout Framework 0.8.0:
	* Added 'numberslider', 'toggle', 'selecthalf', 'selectthird', 'description', 'spacer' controls

= 0.9 =
* First release
