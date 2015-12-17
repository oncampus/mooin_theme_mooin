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
 * A popup layout for the Bootstrapbase theme.
 *
 * @package   theme_bootstrapbase
 * @copyright 2012 Bas Brands, www.basbrands.nl
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php
    // If on desktop, then hide the header/footer.
    $hideclass = '';
    $devicetype = core_useragent::get_device_type();
    if($devicetype !== 'mobile' and $devicetype !== 'tablet') {
        // We can not use the Bootstrap responsive css classes because popups are phone sized on desktop.
        $hideclass = 'hide';
    }
?>
<section id="mooin-site-wrapper">
<header role="banner" class="navbar navbar-static-top moodle-has-zindex"> <?php /* class="navbar navbar-static-top moodle-has-zindex <?php echo $hideclass; ?>" */ ?>
	<nav role="navigation" class="navbar-inner">
        <div class="oc_inner_layout">
		   <div class="inner_content">
            <a id="logo" class="brand" href="<?php echo $CFG->wwwroot;?>">&nbsp;</a> <?php /* echo format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID))); */?>
			<?php /*
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a> */ ?>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                    <li class="navbar-text"><?php echo $OUTPUT->user_menu(); ?></li>
                </ul>
            </div>
		  </div>
        </div>
    </nav>
</header>


<div id="page" class="container-fluid">
  
    <div id="page-content>
        <section id="region-main" class="container-fluid oc_contain_layout"> <?php /* class="span12" */ ?>
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
    </div>
</div>
	<?php echo $OUTPUT->blocks('side-footer' , 'container-fluid oc_contain_layout'); ?>
<footer id="page-footer"> <?php /* class="<?php echo $hideclass; ?>" */ ?>
		<?php /*
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
        <?php
        echo $OUTPUT->login_info();
        echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
        ?>
		*/ ?>
		<?php include('footer.php');?>
</footer>
</section>
<?php echo $OUTPUT->standard_end_of_body_html(); ?>    
<script src="../theme/mooin/js/jquery.fitvids.js"></script>
	<script>
	  $(document).ready(function(){
		$(".fitvid").fitVids();
	  });
	</script>

</body>
</html>
