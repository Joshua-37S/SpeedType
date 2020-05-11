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

function print_a_word() {
  $file = "Wordlist.txt";
  $words = "";
  for ($x = 0; $x <= 50; $x++) {
  // Convert the text fle into array and get text of each line in each array index
  $file_arr = file($file);
  // Random index number
  $rand_index = rand(0, 9999);
  // random text from a line. The line will be a random number within the indexes of the array
  $rand_text = $file_arr[$rand_index];
  // echo out the random word
  $rand_text = str_replace("\n", " ", $rand_text);
  $words .= $rand_text;
  }
  echo $words;
}

print_a_word();

?>
