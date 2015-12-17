<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle mooin Theme is using Moodle's Clean theme template to allow using 
 * Moodle's Bootstrap theme engine
 *
 * @package theme_mooin
 * @copyright 2015 Fachhochschule Lübeck
 *
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2015021900;
$plugin->requires  = 2014110400;
$plugin->component = 'theme_mooin';
$plugin->dependencies = array(
    'theme_bootstrapbase'  => 2014110400,
);
