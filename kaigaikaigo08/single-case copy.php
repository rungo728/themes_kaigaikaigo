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
	<script src="<?=get_template_directory_uri()?>/js/toc.js" type="text/javascript"></script>
  <title>ZENKEN NIHONGO 事例一覧 | 事例一覧</title>
  <?php get_header();?>
  <?php wp_head() ?>
</head>

<body id="case">
	<?php if (function_exists('bcn_display')) : ?>
	<!-- breadcrumb -->
	<div class="breadcrumb">
		<?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
	</div><!-- /breadcrumb -->
	<?php endif; ?>

	<div id="contents-wrapper" class="content-case">
		<div class="contents">
			<div class="l-point">
				<div class="sec__inner">
					<div class="sec__head">
						<div class="flowArea__wrapper">
							<div class="txtArea">
								<p class="date">2023.●.●</p>
								<div class="boxTag">日本語教育プログラム</div>
								<h1>
									<div class="siteTit">h1タイトルが入ります。<br>タイトルが入ります。<br>タイトルが入ります。</div>
								</h1>
								<p class="siteName">施設名または企業名<br>肩書き肩書き肩書き 名前名前名前</p>
							</div>
							<div class="imgArea">
								<img src="<?= get_template_directory_uri() ?>/img/dummy02.png" alt="">
							</div>
						</div>
					</div>
					<div class="sec__body">
						<div class="flowArea__wrapper">
							<div class="flowArea">
									<div class="box">
										<div class="num">
											<img class="pc" src="<?= get_template_directory_uri() ?>/img/case_num_01.png" alt="point01" />
											<img class="sp" src="<?= get_template_directory_uri() ?>/img/case_num_01_sp.png" alt="point01" />
										</div>
										<div class="txt_box">
											<p class="txt"><span class="sm">ポイント1小見出しが入ります。</span>ポイント1見出しが入ります。</p>
										</div>
									</div>
									<div class="box">
										<div class="num">
											<img class="pc" src="<?= get_template_directory_uri() ?>/img/case_num_02.png" alt="point02" />
											<img class="sp" src="<?= get_template_directory_uri() ?>/img/case_num_02_sp.png" alt="point02" />
										</div>
										<div class="txt_box">
											<p class="txt"><span class="sm">ポイント1小見出しが入ります。</span>ポイント1見出しが入ります。</p>
										</div>
									</div>
									<div class="box">
										<div class="num">
											<img class="pc" src="<?= get_template_directory_uri() ?>/img/case_num_03.png" alt="point03" />
											<img class="sp" src="<?= get_template_directory_uri() ?>/img/case_num_03_sp.png" alt="point03" />
										</div>
										<div class="txt_box">
											<p class="txt"><span class="sm">ポイント1小見出しが入ります。</span>ポイント1見出しが入ります。</p>
										</div>
									</div>
							</div>
							<div class="tableArea">
								<div class="caseTit">お客様プロフィール</div>
								<div class="caseName">施設名または企業名</div>
								<div class="caseTable">
									<table>
										<tr>
											<th>創立</th>
											<td>ダミーテキストダミーテキスト</td>
										</tr>
										<tr>
											<th>主たる事務所</th>
											<td>ダミーテキストダミーテキスト</td>
										</tr>
										<tr>
											<th>職員数</th>
											<td>ダミーテキストダミーテキスト</td>
										</tr>
										<tr>
											<th>外国籍職員数</th>
											<td>ダミーテキストダミーテキスト</td>
										</tr>
										<tr>
											<th>HP</th>
											<td>URLURLURLURLURLURLURLURL</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
				</div>
			</div>
			<div class="l-middle">
					<div class="middleArea">
					社会福祉法人　福祉楽団様は、EPAでの受入れが始まった当初の2008年に、インドネシアから初めての外国人介護士を迎え入れました。当時はまだ介護従事者を海外から迎えるという意識はほとんど定着していなかった中、どのように受入れを決めたのか、受入れ後の実態はどのようなものだったのでしょうか？
					</div>
			</div>
			<div class="l-content">
				<div class="sec__inner">
				<div class="toc_parts">
						<div class="toc_parts_inner">
								<div class="ttl">目次</div>
								<div id="toc"></div>
								<!-- /#toc -->
						</div>
				</div>
				<!-- /.toc_parts -->
				</div>
			</div>

	</div>
	<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
	<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>

</html>