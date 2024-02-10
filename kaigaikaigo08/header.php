<?php
  //変数の読み込み
  global $title;
  global $description;
  global $pageID;
  global $css;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $description?>">
  <!-- 共通項目 -->
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:description" content="<?php echo $description?>" />
  <meta property="og:url" content="<?=home_url(); ?>" />
  <meta property="og:image" content=""/>
  <meta property="og:type" content="website"/>
  <meta property="og:site_name" content="ZENKEN介護" />
  
  <!-- favicon -->
  <link rel="icon" href="<?= get_template_directory_uri() ?>/img/favicon.ico">
  <!-- pre -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/foundation/slick.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/common.css">
  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/modaal.min.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/<?php echo $css ?>">


  <!-- js -->
  
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="<?= get_template_directory_uri() ?>/js/slick.min.js"></script>
  <script src="<?=get_template_directory_uri()?>/js/modaal.min.js"></script>
  <script src="<?= get_template_directory_uri() ?>/js/common.js" type="text/javascript"></script>
  <script src="<?= get_template_directory_uri() ?>/js/toc.js" type="text/javascript"></script>
  <script src="<?= get_template_directory_uri() ?>/js/jquery.matchHeight-min.js"></script>
  <script src="<?= get_template_directory_uri() ?>/js/mh.js"></script>
  <title><?php echo $title?></title>
</head>

<body id="<?php echo $pageID ?>">

<header class="l-headerArea" id="headerArea">
  <nav>
    <?php if(!is_page('privacypolicy')) : ?>
    <div class="g-nav sp">
      <div class="overlay"></div>
      <div class="hbMenu" style="display:none;">
        <div class="hbMenu__inner">
          <span></span>
          <span></span>
          <span></span>
          <p></p>
        </div>
      </div>
      <div class="g-nav__inner">
        <div class="hbForm__wrapper">
          <div class="hbForm">
            <div class="telArea">
              <p class="add_txt">お電話でのお問い合わせ</p>
              <p class="btn-tel">
                <a href="tel:03-4363-8981" target="_blank" rel="nofollow">03-4363-8981<br><span class="sm">受付時間：9:30〜18:00（平日）</span></a>
              </p>
            </div>
            <div class="contactArea">
              <p class="btn-contact">
               <a href="<?php echo home_url(); ?>/form/shiryo/"><img src="<?= get_template_directory_uri() ?>/img/header_contact_sp.png" width="235" height="66" alt="今すぐ資料ダウンロード"></a>
              </p>
            </div>
          </div>
        </div>
        <div class="hbMenu__wrapper">
          <div class="hb_menu">
            <div class="hb_menu_title first">
              <a href="<?=home_url()?>/" class="hb_menu_title_link">トップページ</a>
            </div>
          </div>
          <div class="hb_menu">
            <div class="hb_menu_title">
              <a href="<?=home_url()?>/hr-support/" class="hb_menu_title_link">海外人材紹介</a>
            </div>
          </div>
          <div class="hb_menu">
            <div class="hb_menu_title">
              <a href="<?=home_url()?>/nihongo/" class="hb_menu_title_link">日本語教育プログラム</a>
            </div>
            <ul class="hb_menu_list">
              <li class="hb_menu_list_item">
                <a href="<?=home_url()?>/nihongo/cohort" class="hb_menu_title_link">コホート学習</a>
              </li>
            </ul>
          </div>
          <div class="hb_menu">
            <div class="hb_menu_title">
              <a href="<?=home_url()?>/training/" class="hb_menu_title_link">やさしい日本語研修</a>
            </div>
          </div>
          <div class="hb_menu">
            <div class="hb_menu_title">
              <a href="<?=home_url()?>/case/" class="hb_menu_title_link">導入事例</a>
            </div>
          </div>
          <div class="hb_menu">
            <div class="hb_menu_title">
              <a href="<?=home_url()?>/column/" class="hb_menu_title_link">ZENKEN介護コラム</a>
            </div>
          </div>
          <div class="hb_menu">
            <div class="hb_menu_title">
              <a href="<?=home_url()?>/form/inquiry/" class="hb_menu_title_link">お問い合わせ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <div class="logo">
      <?php if (is_home() || is_front_page()) : ?>
        <h1><img src="<?= get_template_directory_uri() ?>/img/logo.svg" width="233" height="35" alt="<?php bloginfo('name'); ?>"></h1>
      <?php else : ?>
        <div>
          <img src="<?= get_template_directory_uri() ?>/img/logo.svg" width="233" height="35" alt="<?php bloginfo('name'); ?>">
        </div>
      <?php endif; ?>
    </div>
    <div class="listBox">
      <ul class="l-list">
        <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
        <li><a href="<?php echo home_url(); ?>/hr-support/"><span>採用・受け入れ・教育まで</span>海外人材紹介</a></li>
        <li><a href="<?php echo home_url(); ?>/nihongo/"><span>介護に特化したオリジナル</span>日本語教育プログラム</a></li>
        <li><a href="<?php echo home_url(); ?>/training/"><span>日本人スタッフのための</span>やさしい日本語研修</a></li>
      </ul>
      <ul class="r-list">
        <li class="header_contact_tel"><img src="<?= get_template_directory_uri() ?>/img/img_tel_header.svg" alt="03-4363-8981 受付時間：9:30〜18:00（平日）"></li>
        <li class="header_contact_us"><a href="<?php echo home_url(); ?>/form/shiryo/"><img src="<?= get_template_directory_uri() ?>/img/header_contact.png" width="235" height="66" alt="今すぐ資料ダウンロード"></a></li>
      </ul>
    </div>
  </nav>
</header>
<?php wp_head() ?>
