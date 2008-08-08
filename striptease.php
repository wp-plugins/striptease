<?php

/*

Plugin Name: StripTease
Description: Strip "#more" fragments from "Read More" teaser links.
Version: 1.1
Plugin URI: http://guyfisher.com/builder/striptease/
Author: Guy M. Fisher
Author URI: http://guyfisher.com/

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

function hb_striptease($the_content) {

	global $id, $permalink;

	$teaser = preg_quote("$permalink#more-$id", '/');
	$the_content = preg_replace("/$teaser/", $permalink, $the_content);

	return $the_content;

}

add_filter('the_content', 'hb_striptease');

?>
