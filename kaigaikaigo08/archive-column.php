<?php
/*
Template Name: column
*/
// Rest of code
?>
<?php
//title　記事名
global $title;
$title = "ZENKEN介護コラム";

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
<div class="visArea_lower column">
	<div class="mainArea">
		<div class="mainArea__inner">
			<h1>
				<div class="sitename"><span class="sm">介護業界、介護人材雇用・育成に役立つ情報をお届けします。</span><br>ZENKEN介護コラム</div>
			</h1>
		</div>
	</div>
</div>
<div id="contents-wrapper" class="content-case">
	<div class="contents">
		<div class="l-item">
			<div class="sec__inner">
				<div class="sec__body">
					<h2 class="subtit">
						すべての記事
					</h2>
					<div class="boxArea">
						<!--　メインカラム -->
						<?php $args = array(
							'numberposts' => 12,
							'post_type' => 'column',
							'taxonomy' => 'genre02',
							'paged' => $paged,
						);
						$posts = get_posts($args);
						if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
								<div class="box col3">
									<div class="imgBox">
										<img class="pc" src="<?= get_template_directory_uri() ?>/img/l-item01.png" alt="受講生の学習の進捗状況を一目で把握">
										<img class="sp" src="<?= get_template_directory_uri() ?>/img/l-item01_sp.png" alt="受講生の学習の進捗状況を一目で把握">
									</div>
									<h3 class="boxTit">
										<?php the_title(); ?>
									</h3>
									<p class="boxName">
										<?php
										//フィールド名を指定する。
										$field = get_field('導入事例クライアント名');
										if ($field) {
											echo $field;
										}
										?>
									</p>
									<div class="btn-internal page-in"><a href="<?php the_permalink(); ?>">詳しく見る</a></div>
								</div>
							<?php endforeach; ?>
							<!--　ページネーション -->
							<div class="pager">
								<?php global $wp_rewrite;
								$paginate_base = get_pagenum_link(1);
								if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
									$paginate_format = '';
									$paginate_base = add_query_arg('paged', '%#%');
								} else {
									$paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
										user_trailingslashit('page/%#%/', 'paged');
									$paginate_base .= '%_%';
								}
								echo paginate_links(array(
									'base' => $paginate_base,
									'format' => $paginate_format,
									'total' => $wp_query->max_num_pages,
									'mid_size' => 4,
									'current' => ($paged ? $paged : 1),
									'prev_text' => '≪',
									'next_text' => '≫',
								)); ?>
							</div>
						<?php else : ?>
							<li>記事はまだありません。</li>
						<?php endif;
						wp_reset_postdata();
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>