<?php
/*
Template Name: shiryo
*/
// Rest of code
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- favicon -->
  <link rel="icon" href="<?= get_template_directory_uri() ?>/img/favicon.ico">
	<!-- pre -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/common.css">
  <!-- js -->
  <link rel="dns-prefetch" href="https://ajax.googleapis.com">
	<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/js/slick.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/js/common.js" type="text/javascript"></script>
  <title>form</title>
  <?php get_header();?>
  <?php wp_head() ?>
</head>

<body id="form">
	<div class="pankuzu-wrapper">
		<?php the_breadcrumb() ?>
	</div>
	<div class="visArea_form lower">
		<div class="mainArea">
			<div class="mainArea__inner">
				<div class="sitename">お問い合わせ</div>
			</div>
		</div>
	</div>
	<div id="contents-wrapper" class="form">
		<div class="contents">
			<div class="stepBox">
				<ul class="step">
					<li class="active">
						<p class="num">01</p>
						<p>入力</p>
					</li>
					<li></li>
					<li class="">
						<p class="num">02</p>
						<p>確認</p>
					</li>
					<li></li>
					<li class="">
						<p class="num">03</p>
						<p>送信</p>
					</li>
				</ul>
			</div>
			<div class="form_inner">
				<div class="form_inputBox">
					<div class="form-head">
						<div class="head__inner">
							<div class="form-tit">お問い合わせフォーム</div>
							<p>下記フォームをご入力の上、お問い合わせください。</p>
						</div>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="106cf86" title="お問い合わせ入力"]'); ?>
				</div>
			</div>
		</div>
	</div>
	<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
	<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>

</html>