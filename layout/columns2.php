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
 * The two column layout.
 *
 * @package theme_mooin
 * @copyright 2015 Fachhochschule Lübeck
 */

// Get the HTML for the settings bits.
$html = theme_mooin_get_html_for_settings($OUTPUT, $PAGE);

$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>
<?php echo $OUTPUT->standard_top_of_body_html() ?>


<section id="mooin-site-wrapper">
  <header role="banner" class="navbar navbar-static-top <?php echo $html->navbarclass ?> moodle-has-zindex"> <?php /* class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex" */ ?>
	<nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a id="logo" class="brand" href="<?php echo $CFG->wwwroot;?>">&nbsp;</a> <?php /* echo format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID))); */?>
			<?php /*
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a> */ ?>
            <?php echo $OUTPUT->user_menu(); ?>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
  </header>

  <div id="page" class="container-fluid">
	<div id="page-content" class="row-fluid">
		<?php echo $OUTPUT->blocks('side-top', 'span12'); ?>
        <section id="region-main" class="span10"> <?php /* class="span9 <?php if ($left) { echo ' pull-right'; } ?>" */ ?>
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        <?php
        $classextra = ' desktop-first-column';
        echo $OUTPUT->blocks('side-pre', 'span2'.$classextra);
        ?>
		<?php echo $OUTPUT->blocks('side-post', 'span12'); ?>
    </div>
	<?php echo $OUTPUT->blocks('side-footer'); ?>
    <footer id="page-footer">
        <?php /*
		<div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
        <?php
        echo $html->footnote;
        echo $OUTPUT->login_info();
        echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
        ?> */ ?>
		
		<?php include('footer.php')?>
    </footer>
    <?php echo $OUTPUT->standard_end_of_body_html() ?>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://mooin.oncampus.de/theme/mooin/js/jquery.fitvids.js"></script>
<script>
	  $(document).ready(function(){
		$(".fitvid").fitVids();
	  });
</script>

</body>
</html>
