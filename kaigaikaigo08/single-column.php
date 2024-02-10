<?php
/*
Template Name: column
*/
// Rest of code
?>
<?php
//title　記事名
global $title;
$title = single_post_title('', false);

//description
global $description;
$description = "";

//bodyに定義するページID
global $pageID;
$pageID = "column";

//cssファイル名
global $css;
$css = "column.css";
?>


<?php get_header(); ?>

<div class="pankuzu-wrapper">
	<?php the_breadcrumb() ?>
</div>

<div id="contents-wrapper" class="content-column">
	<div class="contents cf">
		<div id="page">
			<h1><?php echo get_the_title(); ?></h1>
			<div class="l-genre">
				<div class="sec__inner">
					<div class="sec__head">
						<div class="flowArea__wrapper">
							<div class="txtArea">
								<p class="date">
									<?php echo get_the_date('Y.m.d'); ?>
								</p>
								<div class="date-tag-wrap">
									<div class="date-title">ジャンル</div>
									<div class="date-tags">
										<div class="tags-inline">
											<!--記事に設定されてるタグが出る-->
											<?php echo get_the_term_list($post->ID,'column_tag','<div class="tags-inline-list">','','</div>'); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="imgArea">
								<img src="<?php 
								//アイキャッチ画像があれば表示
								if (has_post_thumbnail()) {
									$image_id = get_post_thumbnail_id ();
									$image_url = wp_get_attachment_image_src ($image_id, true);
									echo $image_url[0];
								} else {
									echo "https://placehold.jp/500x300.png";
								}
								?>" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php the_content(); ?>
			<?php include(STYLESHEETPATH . '/inc/related-articles_column.php'); ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php include(STYLESHEETPATH . '/inc/footer-banner.php'); ?>
<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>