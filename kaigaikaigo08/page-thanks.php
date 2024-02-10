<?php
/*
Template Name: thanks
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
				<div class="sitename">ZENKEN介護<br>資料ダウンロード</div>
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
					<li class="active">
						<p class="num">02</p>
						<p>確認</p>
					</li>
					<li></li>
					<li class="active">
						<p class="num">03</p>
						<p>送信</p>
					</li>
				</ul>
			</div>
			<div class="form_inner">
				<div class="form_inputBox">
					<div class="form-head">
						<div class="head__inner">
							<div class="form-tit">送信完了</div>
							<p class="form-txt">ZENKEN介護の資料ダウンロードにお申し込みいただき、<br class="pc_br">誠にありがとうございます。<br>以下のボタンより資料をダウンロードしてください。</p>
							<div class="btn-internal download"><a href="<?=get_template_directory_uri()?>/img/download01.pdf" download>ZENKEN 介護<br />資料ダウンロード</a></div>
							<p class="form-txt">なお、ご入力いただいたメールアドレス宛に、<br>「海外介護職員雇用ガイドブック」のダウンロードURLを記載したメールを<br class="pc_br">お送りしております。 こちらもご確認いただきますようお願い申し上げます。</p>
							<div class="btn-internal top">
								<a href="/">トップページに戻る</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>

</html>