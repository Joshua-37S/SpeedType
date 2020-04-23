<?php
/*
Plugin Name: SpeedType
Plugin URI:  https://github.com/RonanChance/SpeedType
Description: This plugin adds a speed typing test to a wordpress webpage
Version:     1.0
Author:      Ronan Chance
Author URI:  https://chancesec.com
License:     GPL3
License URI: https://github.com/RonanChance/SpeedType
*/

/* Copyright YEAR PLUGIN_AUTHOR_NAME (email : chancesec@protonmail.com)
SpeedType is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

SpeedType is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with SpeedType. If not, see (https://github.com/RonanChance/SpeedType to your plugin license).
*/

function renym_wordpress_typo_fix( $text ) {
	return str_replace( 'wordpress', 'WordPress', $text );
}
add_filter( 'the_content', 'renym_wordpress_typo_fix' );

?>
