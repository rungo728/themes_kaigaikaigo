<?php
/*
Template Name: form
*/
// Rest of code
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- pre -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/common.css">
  <!-- js -->
  <link rel="dns-prefetch" href="https://ajax.googleapis.com">
	<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="<?=get_template_directory_uri()?>/js/slick.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/js/common.js" type="text/javascript"></script>
  <title>form</title>
  <?php get_header();?>
</head>


<body id="form">
	<div class="pankuzu-wrapper">
		<?php the_breadcrumb() ?>
	</div>
	<div class="visArea_form lower">
		<div class="mainArea">
			<div class="mainArea__inner">
				<div class="sitename">ZENKEN介護<br>資料ダウンロード</div>
			</div>
		</div>
	</div>
	<div id="contents-wrapper" class="form">
		<div class="contents">
			<div class="form_contactArea">
				<div class="frame-wrap">
					<div class="frame type-c part02">
						<div class="txtArea">
							<div class="txt_box">資料ダウンロードいただいた方全員に<br><span>海外介護職員雇用ガイドブック</span>を<br>無料進呈中！</div>
						</div>
						<div class="img_box">
							<img class="pc" src="<?=get_template_directory_uri()?>/img/catchbook-part03.png" alt="海外介護職員雇用ガイドブック" />
							<img class="sp" src="<?=get_template_directory_uri()?>/img/catchbook-part03_sp.png" alt="海外介護職員雇用ガイドブック" />
						</div>
					</div>
				</div>
			</div>
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
							<div class="form-tit">お申し込みフォーム</div>
							<p>下記フォームをご入力の上、お申し込みください。</p>
						</div>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="8d46d5c" title="資料ダウンロード"]'); ?>
				</div>
			</div>
		</div>
	</div>
	<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
	<?php get_footer(); ?>
</body>

</html>