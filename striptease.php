<?php

/*

Plugin Name: StripTease
Plugin URI: http://guyfisher.com/builder/striptease/
Description: Strips the "#more" fragment from the end of "Read More" teaser links.
Author: Guy Fisher
Author URI: http://guyfisher.com/
Version: 2.0

Copyright © 2010 Guy M. Fisher

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

*/

function striptease_more_link( $more_link ) {
	global $id;
	return str_replace( "#more-$id", '', $more_link );
}
add_filter( 'the_content_more_link', 'striptease_more_link' );

?>
