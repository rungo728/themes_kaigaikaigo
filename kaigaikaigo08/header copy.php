<header>

  <nav>
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