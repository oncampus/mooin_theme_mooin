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
 * Moodle mooin theme is build for www.mooin.oncampus.de and using 
 * Moodle's Bootstrap theme engine
 *
 *
 * @package   theme_mooin
 * @copyright 2015 Fachhochschule Lübeck
 * 
 */

$THEME->name = 'mooin';

/////////////////////////////////
// The only thing you need to change in this file when copying it to
// create a new theme is the name above. You also need to change the name
// in version.php and lang/en/theme_clean.php as well.
//////////////////////////////////
//
$THEME->doctype = 'html5';
$THEME->parents = array('bootstrapbase');
$THEME->sheets = array('mooin');
$THEME->supportscssoptimisation = false;
$THEME->yuicssmodules = array();
$THEME->enable_dock = true;
$THEME->editor_sheets = array();

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

/* -- > */
$THEME->plugins_exclude_sheets = array(
    'block' => array(
        'html',
    ),
    'gradereport' => array(
        'grader',
    ),
);
/* <-- */

$THEME->layouts = array(
    // Most backwards compatible layout without the blocks - this is the layout used by default.
    'base' => array(
        'file' => 'columns1.php',
        'regions' => array('side-pre', 'side-top', 'side-post', 'side-footer'),
        'defaultregion' => 'side-pre',
    ),
	 // Standard layout with blocks, this is recommended for most pages with general information.
    'standard' => array(
        'file' => 'columns1.php',
        'regions' => array('side-pre', 'side-top', 'side-post', 'side-footer'),
        'defaultregion' => 'side-pre',
    ),
	// Main course page.
    'course' => array(
        'file' => 'course.php',
        'regions' => array('side-pre', 'side-top', 'side-post', 'side-footer'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar'=>true),
    ),
	'coursecategory' => array(
        'file' => 'columns1.php',
        'regions' => array('side-pre', 'side-top','side-post', 'side-footer'),
        'defaultregion' => 'side-pre',
    ),
	// Part of course, typical for modules - default page layout if $cm specified in require_login().
    'incourse' => array(
        'file' => 'columns1.php',
        'regions' => array('side-pre', 'side-top','side-post', 'side-footer'),
        'defaultregion' => 'side-pre',
		'options' => array('nonavbar'=>false),
    ),
	// The site home page.
    'frontpage' => array(
        'file' => 'frontpage.php',
        'regions' => array('side-pre', 'side-top', 'side-post', 'side-footer'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar' => true),
    ),
	// Server administration scripts.
    'admin' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
	// My dashboard page.
    'mydashboard' => array(
        'file' => 'columns1.php',
        'regions' => array('side-pre', 'side-top', 'side-post', 'side-footer'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu' => true),
    ),
	 // My public page.
    'mypublic' => array(
        'file' => 'columns1.php',
        'regions' => array('side-pre', 'side-top', 'side-post', 'side-footer'),
        'defaultregion' => 'side-pre',
    ),
	'login' => array(
        'file' => 'columns1.php',
        'regions' => array('side-pre', 'side-top', 'side-post', 'side-footer'),
        'options' => array('langmenu' => true),
		'defaultregion' => 'side-pre',
    ),
	// Pages that appear in pop-up windows - no navigation, no blocks, no header.
    'popup' => array(
        'file' => 'popup.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nonavbar' => true),
    ),
	 // No blocks and minimal footer - used for legacy frame layouts only!
    'frametop' => array(
        'file' => 'columns1.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nocoursefooter' => true),
    ),
	// Embeded pages, like iframe/object embeded in moodleform - it needs as much space as possible.
    'embedded' => array(
        'file' => 'embedded.php',
        'regions' => array()
    ),
	// Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    // This must not have any blocks, links, or API calls that would lead to database or cache interaction.
    // Please be extremely careful if you are modifying this layout.
    'maintenance' => array(
        'file' => 'maintenance.php',
        'regions' => array(),
    ),
	// Should display the content and basic headers only.
    'print' => array(
        'file' => 'columns1.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nonavbar' => false),
    ),
	// The pagelayout used when a redirection is occuring. vorher -> redirect: file -> embedded
    'redirect' => array(
        'file' => 'popup.php',
        'regions' => array(),
    ),
	// The pagelayout used for reports.
    'report' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
	// The pagelayout used for safebrowser and securewindow.
    'secure' => array(
        'file' => 'secure.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre'
    ),
	
    // Standard layout with blocks, this is recommended for most pages with general information.
    'message-index' => array(
        'file' => 'columns1.php',
        'regions' => array('side-pre', 'side-top', 'side-post', 'side-footer'),
        'defaultregion' => 'side-pre',
    ),
);

$THEME->javascripts = array(
);
$THEME->javascripts_footer = array(
    'moodlebootstrap', 'dock'
);

if (core_useragent::is_ie() && !core_useragent::check_ie_version('9.0')) {
    $THEME->javascripts[] = 'html5shiv';
}

$THEME->hidefromselector = true;

$THEME->csspostprocess = 'theme_mooin_process_css';
$THEME->blockrtlmanipulations = array(
    'side-pre' => 'side-post',
    'side-post' => 'side-pre'
);
