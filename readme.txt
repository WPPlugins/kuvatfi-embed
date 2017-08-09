=== Plugin Name ===
Contributors: kuvatfi
Donate link: http://kuvat.fi/
Tags: embed, kuvat.fi, kuvatfi
Requires at least: 3.0.1
Tested up to: 4.5.1
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin is for embedding a folders, photos or videos from the Kuvat.fi photo sharing service.

== Description ==

= Overview =
This plugin is for embedding a folders, photos or videos from the [Kuvat.fi](http://kuvat.fi) photo sharing service.

Kuvat.fi creates a great looking photo site from your photos. It's easy to use and you can use it with your web browser, tablets and mobile devices. We're based in Finland and have been running for 10 years.

= Usage example =
`[kuvat width=1 height=1 bgcolor=0 thumbstrip=0 captions=0]http://demo.kuvat.fi/kuvat/[/kuvat]`

= Parameters =
*	**width**: The desired width of the embedded view. Required. Possible values:
	*	1: Responsive width that fills the entire available horizontal space
	*	A width in pixels (eg. *760*)
*	**height**: The desired height of the embedded view. Required. Possible values
	*	1: Responsive height determined by the aspect ratio of the most used ratio in the embedded folder. Requires `width=1`.
	*	A height in pixels (eg. *420*)
*	**bgcolor**: This sets the background color and theme for the browser. Possible values:
	*	0: Dark gray (default)
	*	1: Black
	*	2: Light gray
*	**thumbstrip**: If set to 1, a film strip of the other photos in the same folder is shown. Possible values:
	*	0: Disabled (default)
	*	1: Enabled
*	**captions**: If set to 1, the caption of the current photo is displayed if the photo has one. By default, this will show multiple lines of text on a shaded background over the image. Possible values:
	*	0: Disabled (default)
	*	1: Enabled
*	**captionbg**: If set, caption will change to a single line of text on a background color that you can define. Possible values:
	*	A hex string (*eg. #0066c9*)
	*	An rgba color (*eg. rgba(0,102,201,0.8)*)
*	**captiontext**: This will change the text color when used in combination with `captionbg`. The default text color is white. Possible values:
	*	A hex string (*eg. #ffffff*)
	*	An rgba color (*eg. rgba(255,255,255,0.8)*)

== Installation ==

1. Upload `kuvatfi.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. This is the basic embedded view with a dark theme and thumbnail strip enabled below the current photo.

== Frequently Asked Questions ==

= Where can I learn more about this service? =

For more information, please visit our [home page](http://kuvat.fi).

== Changelog ==

= 1.1 =
*	Added support for responsive dimensions for the embedded view
	*	Enable with `width=1` and `height=1` arguments
*	Added support for captions
	*	Enable with the `captions` argument (*eg. `[kuvat captions=1]http://demo.kuvat.fi/kuvat/[/kuvat]`*)
	*	Change the appearance of the caption with `captionbg` and `captiontext` arguments
*	Fixed an error on old PHP versions
*	Removed a conflict with other oembed providers

= 1.0 =
*	Initial release.

== Upgrade Notice ==

= 1.1 =
*	Added support for responsive dimensions, optional captions, fixed an error on older PHP versions and removed a conflict with other oembed providers.

= 1.0 =
*	Initial release.
