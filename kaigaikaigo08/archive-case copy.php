<?php
/*
Template Name: case
*/
// Rest of code
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="海外介護人材向けの日本語教育「ZENKEN NIHONGO 介護」の学習スタイル「コホート学習」をご紹介します。「ZENKEN NIHONGO 介護」は介護職に特化した日本語能力向上のためのカリキュラムをコホート学習方式で進めます。" />
  <!-- favicon -->
  <link rel="icon" href="<?= get_template_directory_uri() ?>/img/favicon.ico">
	<!-- pre -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!-- css -->
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/slick.css">
  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/normalize.css">
  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/common.css">
  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/case.css">
  <!-- js -->
  <link rel="dns-prefetch" href="https://ajax.googleapis.com">
	<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/js/slick.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/js/common.js" type="text/javascript"></script>
  <title>ZENKEN NIHONGO 事例一覧 | 事例一覧</title>
  <?php get_header();?>
  <?php wp_head() ?>
</head>

<body id="case">
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
		<div class="contents">
			<div class="genre-nav">
				<div class="genre-nav__text">カテゴリごとに<br>一覧を見る</div>
				<div class="linkArea">
					<div class="genre-nav__link"><a href="">日本語教育プログラム</a></div>
					<div class="genre-nav__link or"><a href="">海外人材紹介</a></div>
					<div class="genre-nav__link bl"><a href="">やさしい日本語研修</a></div>
				</div>
      </div><!-- /genre-nav -->
			<div class="l-item">
				<div class="sec__inner">
					<div class="sec__body">
							<h2 class="subtit">
								すべての記事
							</h2>
							<div class="boxArea">
								<div class="box col3">
									<div class="imgBox">
										<img class="pc" src="<?=get_template_directory_uri()?>/img/l-item01.png" alt="受講生の学習の進捗状況を一目で把握">
										<img class="sp" src="<?=get_template_directory_uri()?>/img/l-item01_sp.png" alt="受講生の学習の進捗状況を一目で把握">
									</div>
									<div class="boxTag">日本語教育プログラム</div>
									<h3 class="boxTit">受講生の学習の進捗状況を一目で把握</h3>
									<p class="boxName">社会福祉法人　福祉楽団<br>ケアチームジョブマネージャー 上野様</p>
									<div class="btn-internal page-in"><a href="">詳しく見る</a></div>
								</div>
								<div class="box col3">
									<div class="imgBox">
										<img class="pc" src="<?=get_template_directory_uri()?>/img/l-item01.png" alt="受講生の学習の進捗状況を一目で把握">
										<img class="sp" src="<?=get_template_directory_uri()?>/img/l-item01_sp.png" alt="受講生の学習の進捗状況を一目で把握">
									</div>
									<div class="boxTag">日本語教育プログラム</div>
									<h3 class="boxTit">受講生の学習の進捗状況を一目で把握</h3>
									<p class="boxName">社会福祉法人　福祉楽団<br>ケアチームジョブマネージャー 上野様</p>
									<div class="btn-internal page-in"><a href="">詳しく見る</a></div>
								</div>
								<div class="box col3">
									<div class="imgBox">
										<img class="pc" src="<?=get_template_directory_uri()?>/img/l-item01.png" alt="受講生の学習の進捗状況を一目で把握">
										<img class="sp" src="<?=get_template_directory_uri()?>/img/l-item01_sp.png" alt="受講生の学習の進捗状況を一目で把握">
									</div>
									<div class="boxTag">日本語教育プログラム</div>
									<h3 class="boxTit">受講生の学習の進捗状況を一目で把握</h3>
									<p class="boxName">社会福祉法人　福祉楽団<br>ケアチームジョブマネージャー 上野様</p>
									<div class="btn-internal page-in"><a href="">詳しく見る</a></div>
								</div>
								<div class="box col3">
									<div class="imgBox">
										<img class="pc" src="<?=get_template_directory_uri()?>/img/l-item01.png" alt="受講生の学習の進捗状況を一目で把握">
										<img class="sp" src="<?=get_template_directory_uri()?>/img/l-item01_sp.png" alt="受講生の学習の進捗状況を一目で把握">
									</div>
									<div class="boxTag">日本語教育プログラム</div>
									<h3 class="boxTit">受講生の学習の進捗状況を一目で把握</h3>
									<p class="boxName">社会福祉法人　福祉楽団<br>ケアチームジョブマネージャー 上野様</p>
									<div class="btn-internal page-in"><a href="">詳しく見る</a></div>
								</div>
								<div class="box col3">
									<div class="imgBox">
										<img class="pc" src="<?=get_template_directory_uri()?>/img/l-item01.png" alt="受講生の学習の進捗状況を一目で把握">
										<img class="sp" src="<?=get_template_directory_uri()?>/img/l-item01_sp.png" alt="受講生の学習の進捗状況を一目で把握">
									</div>
									<div class="boxTag">日本語教育プログラム</div>
									<h3 class="boxTit">受講生の学習の進捗状況を一目で把握</h3>
									<p class="boxName">社会福祉法人　福祉楽団<br>ケアチームジョブマネージャー 上野様</p>
									<div class="btn-internal page-in"><a href="">詳しく見る</a></div>
								</div>
								<div class="box col3">
									<div class="imgBox">
										<img class="pc" src="<?=get_template_directory_uri()?>/img/l-item01.png" alt="受講生の学習の進捗状況を一目で把握">
										<img class="sp" src="<?=get_template_directory_uri()?>/img/l-item01_sp.png" alt="受講生の学習の進捗状況を一目で把握">
									</div>
									<div class="boxTag">日本語教育プログラム</div>
									<h3 class="boxTit">受講生の学習の進捗状況を一目で把握</h3>
									<p class="boxName">社会福祉法人　福祉楽団<br>ケアチームジョブマネージャー 上野様</p>
									<div class="btn-internal page-in"><a href="">詳しく見る</a></div>
								</div>
							</div>
					</div>
				</div>
			</div>
	</div>
	<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
	<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>

</html>