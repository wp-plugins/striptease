=== StripTease ===

Contributors: guyfisher
Tags: anchor, excerpt, filter, link, more, navigation, permalink, quicktag, teaser
Requires at least: 1.5
Tested up to: 2.9
Stable tag: 1.1

Strips the "#more" fragments from teaser links so they link to full posts.

== Description ==

The StripTease plugin is a simple filter that strips fragment identifiers from teaser links so that they link to full posts.

When the `<--more-->` quicktag is used to break up a long post, WordPress displays the text that comes before it as a "teaser" followed by a link to the rest of the post.

By default, WordPress replaces the `<!--more-->` quicktag with an HTML anchor element and adds a matching fragment identifier to the teaser link. When a reader follows the link, the single-post page is loaded and the browser "jumps" to the anchor. This jump can be disorienting, and some bloggers prefer to link their teasers to the full post instead of the anchor.

Unfortunately, the only way to change the default teaser links is to hack the WordPress source code. Even if you're comfortable with hacking your source files, you'll have to remember to do it every time you upgrade your WordPress installation.

That's where the StripTease plugin comes in. It does the hacking for you!

== Installation ==

1. Place the `striptease.php` plugin file in your WordPress plugins directory.
2. Activate the StripTease plugin on your WordPress plugins administration panel.
3. Once it's activated, StripTease will immediately begin stripping your teaser links.

== Frequently Asked Questions ==

= Why would I use this plugin? =

If you create teasers for your posts with the `<!--more-->` quicktag, and you want those teasers to link to the full post instead of jumping to the unread text, you should use the StripTease plugin.

= How do I configure this plugin? =

The StripTease plugin doesn't require any configuration. Once it's activated, it will immediately begin stripping fragment identifiers from your teaser links.

= Do I have to use "Pretty Permalinks" with this plugin? =

No, you don't. StripTease will work with WordPress's default querystring permalinks, as well as its rewrite-based pretty permalinks.

== Example ==

StripTease automatically changes your teaser links from this:

	http://guyfisher.com/2005/09/striptease/#more-6

To this:

	http://guyfisher.com/2005/09/striptease/
