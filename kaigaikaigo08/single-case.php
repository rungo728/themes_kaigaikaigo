<?php
//title　記事名
global $title;
$title = single_post_title('', false);

//description
global $description;
$description = "";

//bodyに定義するページID
global $pageID;
$pageID = "case";

//cssファイル名
global $css;
$css = "case.css";
?>


<?php get_header(); ?>

<div class="pankuzu-wrapper">
	<?php the_breadcrumb() ?>
</div>

<div id="contents-wrapper" class="content-case">
	<div class="contents">
		<?php the_content(); ?>
	</div>
</div>
<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>