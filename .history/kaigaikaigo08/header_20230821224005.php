<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/common.css">
  <?php wp_head(); ?>
</head>
<body>
<header>
  <nav>
    <ul>
      <li class="logo"><img src="<?=get_template_directory_uri()?>/img/logo.svg" width="233" height="35" alt="<?php bloginfo ( 'name' ); ?>"></li>
      <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
      <li><a href=""><span>採用・受け入れ・教育まで</span>海外人材紹介</a></li>
      <li><a href=""><span>介護に特化したオリジナル</span>日本語教育プログラム</a></li>
      <li><a href=""><span>無料トライアル実施中！</span>やさしい日本語研修</a></li>
      <li><img src="<?=get_template_directory_uri()?>/img/img_tel_header.svg" alt="03-4363-8981 受付時間：9:30〜18:00（平日）"></li>
      <li><a href="header_contact_us">色々入る</a></li>
    </ul>
  </nav>
</header>
