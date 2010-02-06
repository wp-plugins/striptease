<?php

/*

Plugin Name: StripTease
Description: Strip "#more" fragments from "Read More" teaser links.
Plugin URI: http://guyfisher.com/builder/striptease/
Author: Guy M. Fisher
Author URI: http://guyfisher.com/
Version: 1.1

Copyright (c) 2005 by Guy M. Fisher <guyfisher@yahoo.com>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA

For a summary of your rights under the GNU General Public License,
please visit http://creativecommons.org/licenses/GPL/2.0/

*/

function striptease_more_link( $more_link, $more_link_text ) {
	global $id;
	return str_replace( "#more-$id", '', $more_link );
}
add_filter( 'the_content_more_link', 'striptease_more_link', 10, 2 );

?>
