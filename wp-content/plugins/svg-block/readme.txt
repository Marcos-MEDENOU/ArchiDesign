=== SVG Block ===
Contributors:      Mr2P
Tags:              Gutenberg, block, SVG, image, icon
Requires PHP:      7.0.0
Requires at least: 5.9.0
Tested up to:      6.1
Stable tag:        1.1.8
License:           GPL-3.0
License URI:       https://www.gnu.org/licenses/gpl-3.0.html

Display an SVG image as a block, which can be used for displaying icons, dividers, buttons...

== Description ==

This SVG block allows you to display SVG images as inline HTML markup. You can choose an icon from the icon library with more than 3000 icons or you can upload or input your custom SVG images directly in the block's setting.

## Features

* Accessibility ready with 'img' role, automatically generates title and description from settings.
* Automatically sanitize SVG markup to make it safe and lightweight.
* Include almost all settings to customize the SVG image.
* Include a collection of common non-rectangular dividers.
* An icon library included icons from "Bootstrap Icons", "Ionicons", "Dashicons" and new "WordPress Icons".

## Video tutorials

How to create an icon with custom styles using the icon library:
[youtube https://www.youtube.com/watch?v=WJZXLyMXK0c]

How to create a non-rectangular background section:
[youtube https://www.youtube.com/watch?v=nVs4WzKFa7s]

If this plugin is useful for you, please do a quick review and [rate it](https://wordpress.org/support/plugin/svg-block/reviews/#new-post) on WordPress.org to help it spread to more people. I would very much appreciate it.

Please check out my other plugins if you're interested:

* [Content Blocks Builder](https://wordpress.org/plugins/content-blocks-builder) - A tool to create blocks, patterns or variations easily for your site directly on the Block Editor.
* [Block Enhancements](https://wordpress.org/plugins/block-enhancements) - A plugin to add more useful features to blocks likes: icon, box-shadow, transform...
* [Icon separator](https://wordpress.org/plugins/icon-separator) - A tiny block just like the core/separator block but with the ability to add an icon to it.
* [Meta Field Block](https://wordpress.org/plugins/display-a-meta-field-as-block) - A block to display a meta field or an ACF field as a block. It can also be used in the Query Loop block.
* [Counting Number Block](https://wordpress.org/plugins/counting-number-block) - A block to display a number that has the number-counting effect.
* [Breadcrumb Block](https://wordpress.org/plugins/breadcrumb-block) - A simple breadcrumb trail block that supports JSON-LD structured data.

The plugin is developed using @wordpress/create-block.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/svg-block` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress


== Frequently Asked Questions ==

= What problem does this plugin solve? =

It helps to input inline SVG images as blocks easily and safely.

= When should we use this plugin? =

- When you need to quickly input some icons. It bundles with more than 3000 icons from some popular icons library such as "WordPress", "Dashicons", "Ionicons", and "Bootstrap icons".
- Or you need to use an SVG image as a divider, or separator. It also bundles with some common non-rectangular dividers like tilts, curves, triangles...
- You can also use it as an image block but for SVG format only like images from undraw.co.

= Why needs this plugin? =

It's super easy to use. It's accessibility-ready. It comes with lots of additional features like responsive width and height, responsive spacing (padding and margin), responsive justify alignment, flip, revert, responsive border, border-radius, box-shadow builder...

= Who needs this plugin? =

Anyone can use this plugin.

== Screenshots ==

1. Create an arrow background section

2. Add an icon and add styling to it

3. Create a curve background section

4. Use the responsive height feature

5. Use the SVG block as the image block

6. Block's settings

7. Block's placeholder

== Changelog ==

= 1.1.8 =
*Release Date - 27 October 2022*

* DEV - Allow clear color for the ColorGradientControl

= 1.1.7 =
*Release Date - 04 October 2022*

* FIX - placeholder's style is not loading in the site editor

= 1.1.6 =
*Release Date - 03 October 2022*

* FIX - Focus on the search box on the first load

= 1.1.5 =
*Release Date - 29 September 2022*

* REFACTOR - Redesign the placeholder for the block
* DEV - Add divider icons to the icon library
* REFACTOR - Using a data store for the icon library
* FIX - Remove empty style variables and add deprecated for them

= 1.1.4 =
*Release Date - 18 September 2022*

* FIX - Compatibility issue with the Gutenberg plugin
* DEV - Refactor for localization

= 1.1.3 =
*Release Date - 31 August 2022*

* DEV - Add stack context

= 1.1.2 =
*Release Date - 30 August 2022*

* DEV - Change the default value for box-shadow
* FIX - Reset icon lists by clicking on the reset search button

= 1.1.1 =
*Release Date - 27 July 2022*

* FIX - The block makes the page in 'dirty' state

= 1.1.0 =
*Release Date - 26 July 2022*

* DEV - Allow the ability to turn the block into a button with text & icon
* DEV - Add 'auto' value to the options of width and height
* DEV - Double click on the icon on the modal to insert the icon

= 1.0.13 =
*Release Date - 01 July 2022*

* DEV - Add box-sizing as border-box by default

= 1.0.12 =
*Release Date - 30 Jun 2022*

* FIX - Convert inline style to style object

= 1.0.11 =
*Release Date - 19 Jun 2022*

* DEV - Update SDK
* DEV - Refactor icon library modal
* DEV - Allow uploading SVG files

= 1.0.10 =
*Release Date - 12 May 2022*

* REFACTOR Update sdk

= 1.0.9 =
*Release Date - 30 April 2022*

* FIX - Missing color slug

= 1.0.8 =
*Release Date - 30 April 2022*

* DEV - Upgrade color format

= 1.0.7 =
*Release Date - 28 April 2022*

* DEV - Add title to block registration in JS

= 1.0.6 =
*Release Date - 21 April 2022*

* DEV - Optimize code for performance

= 1.0.5 =
*Release Date - 19 April 2022*

* REFACTOR - Move the PanelColorGradientSettings out of PanelBody

= 1.0.4 =
*Release Date - 15 April 2022*

* DEV - Icon library modal: focus the search box on open, press enter to insert icon

= 1.0.3 =
*Release Date - 12 April 2022*

* FIX - Remove old cached icons due to storage limitation issue.

= 1.0.2 =
*Release Date - 10 April 2022*

* DEV - Update icons pack

= 1.0.1 =
*Release Date - 07 April 2022*

* FIX - Fix typo issue

= 1.0.0 =
*Release Date - 05 April 2022*
