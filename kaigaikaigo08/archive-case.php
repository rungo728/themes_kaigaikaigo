<?php
/*
Template Name: caseList
*/
// Rest of code
?>
<?php
//title　記事名
global $title;
$title = "導入事例 記事一覧";

//description
global $description;
$description = "";

//bodyに定義するページID
global $pageID;
$pageID = "case";

//cssファイル名
global $css;
$css = "l-case.css";

//ページ数
global $pages_num;
$count_custom = wp_count_posts('case');
$pages_num = $count_custom->publish;

//最大表示件数
global $max_pagesNum;
$max_pagesNum = 12;

?>


<?php get_header(); ?>
<div class="pankuzu-wrapper">
	<?php the_breadcrumb() ?>
</div>
<div class="visArea_lower case">
	<div class="mainArea">
		<div class="mainArea__inner">
			<h1>
				<div class="sitename">導入事例</div>
			</h1>
		</div>
	</div>
</div>
<div id="contents-wrapper" class="content-case">
	<div class="contents" id="listContents">
		<div class="genre-nav">
			<div class="genre-nav__text">カテゴリごとに<br class="pc_br">一覧を見る</div>
			<div class="linkArea">
				<div class="genre-nav__link gr"><a href="<?php echo esc_url(home_url('/case/nihongo')); ?>">日本語教育<br class="sp_br">プログラム</a></div>
				<div class="genre-nav__link or"><a href="<?php echo esc_url(home_url('/case/hr-support')); ?>">海外人材<br class="sp_br">紹介</a></div>
				<div class="genre-nav__link bl"><a href="<?php echo esc_url(home_url('/case/training')); ?>">やさしい<br class="sp_br">日本語研修</a></div>
			</div>
		</div><!-- /genre-nav -->
		<div class="l-item">
			<div class="sec__inner">
				<div class="sec__body">
					<div class="subtit">
							すべての記事
					</div>
					<div class="boxArea">
						<!--　メインカラム -->
						<?php $args = array(
							'numberposts' => -1,
							'post_type' => 'case',
							'taxonomy' => 'case',
							'paged' => $paged,
						);
						$posts = get_posts($args);
						$count = 1;
						if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
								<div class="box col3 postBox" id=<?php
																	//ループ番目の数字を取得
																	echo "result_" . $count++;
																	?>>
									<div class="imgBox">
										<img  src="<?php
																//アイキャッチ画像があれば表示
																if (has_post_thumbnail()) {
																	$image_id = get_post_thumbnail_id();
																	$image_url = wp_get_attachment_image_src($image_id, true);
																	echo $image_url[0];
																} else {
																	echo "https://placehold.jp/500x300.png";
																}
																?>
										?>" alt="<?php
													the_title();
													?>のサムネイル">
									</div>
									<div class="<?php
																$terms = get_the_terms($post->ID, 'cases');
																foreach ($terms as $term) {
																		if ($term->name == "やさしい日本語研修") {
																				echo "tag blue";
																		} elseif ($term->name == "日本語教育プログラム") {
																				echo  "tag green";
																		} elseif ($term->name == "海外人材紹介") {
																				echo  "tag orange";
																		}
																}
																?>">
										<?php
										//タクソノミーの表示
										$terms = get_the_terms($post->ID, 'cases');
										foreach ($terms as $term) {
											echo $term->name;
										}
										?>
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
					</div>
					<!--　ページネーション -->
					<?php include(STYLESHEETPATH . '/inc/pagination.php'); ?>

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