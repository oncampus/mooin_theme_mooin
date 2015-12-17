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
 * The one column layout.
 *
 * @package theme_mooin
 * @copyright 2015 Fachhochschule Lübeck
 */

// Get the HTML for the settings bits.
$html = theme_mooin_get_html_for_settings($OUTPUT, $PAGE);

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


		<a id="moochub-open" class="see-partner" onclick="document.getElementById('partner-banner').style.display= 'block'; 
		document.getElementById('moochub-open').style.visibility= 'hidden';"></a>
<?php
echo "
<div id='partner-banner' class='oc_inner_layout clearfix'>
			<div class='moochub-banner-left'>
			   <a href='https://mooin.oncampus.de/mod/page/view.php?id=949' alt='moochub'title='MOOChub - Zusammenschluss verschiedener MOOC-Portale' id='moochub-logo-moochub' target='_blank'></a>
			</div>
			<div class='moochub-banner-right'>
			  <a href='https://mooin.oncampus.de/?redirect=0#was_ist_mooin' alt='mooin' title='mooin - MOOChub-Partner Deutschland' id='moochub-logo-mooin'></a>
			  <a href='http://imoox.at/' alt='imoox' title='iMooX - MOOChub-Partner Österreich' id='moochub-logo-imoox' target='_blank'></a>
		</div>";
		?>
		<a id="moochub-close" class="see-partner" onclick="document.getElementById('partner-banner').style.display= 'none';
		document.getElementById('moochub-open').style.visibility= 'visible';"></a>
</div>

<section id="mooin-site-wrapper">

<header role="banner" class="navbar navbar-static-top<?php echo $html->navbarclass ?> moodle-has-zindex"> <?php /* navbar-fixed-top */ ?>
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
            <?php echo $OUTPUT->user_menu(); ?>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
		  </div>
        </div>
    </nav>
</header>

<div id="page">
	<?php /*
    <header id="page-header" class="clearfix">
        <?php echo $html->heading; ?>
        <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>
	*/ ?>
    <div id="page-content">
		<?php echo $OUTPUT->blocks('side-top', 'container-fluid oc_contain_layout'); ?>
        <section id="region-main" class="container-fluid oc_contain_layout">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
		<?php echo $OUTPUT->blocks('side-post', 'container-fluid oc_contain_layout'); ?>
		<?php echo $OUTPUT->blocks('side-pre', 'container-fluid oc_contain_layout'); ?>
    </div>
</div>
<?php echo $OUTPUT->blocks('side-footer', 'container-fluid oc_contain_layout'); ?>
<footer id="page-footer">
		<?php /*
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
        <?php
        echo $html->footnote;
        echo $OUTPUT->login_info();
        echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
        ?>
		*/ ?>
		
    <?php include('footer.php')?>
</footer>
</section>

  <script src="../theme/mooin/js/jquery.fitvids.js"></script>
	<script>
	  $(document).ready(function(){
		$(".fitvid").fitVids();
	  });
	</script>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
