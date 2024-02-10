<?php
/*
Template Name: nihongo
*/
// Rest of code
?>
<?php
//title
global $title;
$title = "海外介護人材向け日本語教育プログラム【ZENKEN NIHONGO 介護】| ZENKEN介護";

//description
global $description;
$description = "海外介護人材向けの日本語教育ならZENKEN NIHONGO 介護。コホート学習を取り入れたカリキュラム・講師の質・挫折しない仕組みで「介護福祉士」試験合格をサポート。長く働ける人材を育成します。";

//bodyに定義するページID
global $pageID;
$pageID = "nihongocontents";

//cssファイル名
global $css;
$css = "nihongo.css";
?>
<?php get_header(); ?>
<div class="pankuzu-wrapper">
  <?php the_breadcrumb() ?>
</div>
<div id="contents-wrapper" class="nihongo">
  <div class="contents">
    <div id="visArea_nihongo">
      <div class="mainArea">
        <div class="mainArea__inner">
          <h1>
            <div class="subTitArea">
              <p class="mainArea__subtit">
                「介護福祉士」資格取得を<br />
                サポートする日本語教育プログラム
              </p>
            </div>
            <div class="siteNameArea">
              <span class="visually-hidden">ZENKENNIHONGO介護</span>
              <p class="sitename"><img src="<?= get_template_directory_uri() ?>/img/logo.png" alt="ロゴ" /></p>
            </div>
          </h1>

          <div class="mainTxtBox">

            <p>
              「学習の持続性」にこだわったコホート型学習で、<br />
              能動的に学ぶ人材へと育成、効果的に学習を進めていきます。
            </p>
          </div>
          <div class="frame-wrap">
            <div class="frame type-c mv">
              <div class="txtArea">
                <div class="txt_box"><span>海外介護職員雇用ガイドブック</span><br>無料進呈中！</div>
                <div class="frame-body">
                  <p class="btn-internal">
                    <a href="/form/shiryo">今すぐ<br class="sp_br">資料ダウンロード</a>
                  </p>
                </div>
              </div>
              <div class="img_box">
                <img class="pc" src="<?= get_template_directory_uri() ?>/img/catchbook-mv.png" alt="海外介護職員雇用ガイドブック" />
                <img class="sp" src="<?= get_template_directory_uri() ?>/img/catchbook-mv_sp.png" alt="海外介護職員雇用ガイドブック" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="heading_addTxt">
      <div class="heading_inner">
        <p>
          貴重な海外介護⼈材に<br class="sp_br">⻑く活躍してもらうために…</p>
        <p>現場でのコミュニケーションに使える<br class="sp_br">日本語・介護知識・技術のレクチャーなど、<br>介護福祉士資格取得を強力にバックアップする<br class="sp_br">プログラムをご用意しています。
        </p>
      </div>
    </div>
    <div class="featureArea">
      <div class="heading_inner">
        <div class="headArea">
          <h2 class="ttl">
            <span class="small">着実に成長をサポートする</span>
            <span class="visually-hidden">ZENKENNIHONGO介護</span>
            <img src="<?= get_template_directory_uri() ?>/img/logo.png" class="logo-img" loading="lazy" alt="ZENKENNIHONGO介護" />の特長
          </h2>
        </div>
        <div class="frame-wrap">
          <div class="frame type-a col4">
            <div class="frame-head">
              <img src="<?= get_template_directory_uri() ?>/img/feature01.png" alt="仲間と学ぶ「コホート学習」を採用し挫折リスクを低減" />
            </div>
            <div class="frame-body">
              <p>仲間と学ぶ<br />「コホート学習」を<br class="sp_br">採用し<br />挫折リスクを低減</p>
              <p class="btn-internal page-in">
                <a href="#sec01">詳しく見る</a>
              </p>
            </div>
          </div>
          <div class="frame type-a col4">
            <div class="frame-head">
              <img src="<?= get_template_directory_uri() ?>/img/feature02.png" alt="レベル別コース＋試験対策で無駄なく手厚く、合格へ導く" />
            </div>
            <div class="frame-body">
              <p>レベル別コース＋<br class="sp_br">試験対策で<br class="pc_br">無駄なく<br class="sp_br">手厚く、<br class="pc_br">合格へ導く</p>
              <p class="btn-internal page-in">
                <a href="#sec02">詳しく見る</a>
              </p>
            </div>
          </div>
          <div class="frame type-a col4">
            <div class="frame-head">
              <img src="<?= get_template_directory_uri() ?>/img/feature03.png" alt="介護も日本語も熟知した講師陣現場で使える日本語が身につく" />
            </div>
            <div class="frame-body">
              <p>介護も日本語も<br class="sp_br">熟知した<br class="pc_br">講師陣<br />現場で使える日本語が<br />身につく</p>
              <p class="btn-internal page-in">
                <a href="#sec03">詳しく見る</a>
              </p>
            </div>
          </div>
          <div class="frame type-a col4">
            <div class="frame-head">
              <img src="<?= get_template_directory_uri() ?>/img/feature04.png" alt="定期的に学習進捗を把握できるから、1人ひとりに寄りそった対応が可能" />
            </div>
            <div class="frame-body">
              <p>定期的に学習進捗を<br />把握できるから、<br />1人ひとりに<br class="sp_br">寄りそった<br class="pc_br">対応が可能</p>
              <p class="btn-internal page-in">
                <a href="#sec04">詳しく見る</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sec sec01" id="sec01">
      <div class="sec__inner">
        <div class="titArea">
          <h3 class="tit"><span class="small">仲間と学ぶ「コホート学習」を採用し</span><br />挫折リスクを低減</h3>
        </div>
        <div class="block">
          <div class="block__inner">
            <div class="block__wrapper">
              <div class="block__header">
                <h4 class="block__title">日本語力と学習意欲を<br />同時に引き上げる</h4>
                <div class="block__img-01 sp">
                  <img src="<?= get_template_directory_uri() ?>/img/block__img-01_sp.png" alt="日本語力と学習意欲を同時に引き上げる" />
                </div>
                <p class="block__text">個別の動画レッスンとオンラインライブ授業をグループ単位で進めていくコホート型の学習手法です。<br class="sp_br"> 個人主導型と違い、仲間と共に目標を持って取り組める環境なので、学習意欲も高まり、自走する人材へと育てていきます。</p>
              </div>
              <div class="block__img-01 pc">
                <img src="<?= get_template_directory_uri() ?>/img/block__img-01.png" alt="日本語力と学習意欲を同時に引き上げる" />
              </div>
            </div>
            <div class="box">
              <div class="box__inner">
                <div class="box__header">
                  <div class="box__title">
                    <span class="visually-hidden">ZENKENNIHONGO介護</span>
                    <img src="<?= get_template_directory_uri() ?>/img/logo.png" class="logo-img" loading="lazy" alt="ZENKENNIHONGO介護" /><br class="sp_br" />のコホート学習とは
                  </div>
                  <p>個別学習でインプットを行い、仲間と受けるライブ授業を通してアウトプットする。<br class="sp_br">このサイクルで、日本語力とモチベーションを効率的かつ着実に向上させます。</p>
                </div>
                <div class="box__img">
                  <img class="pc" src="<?= get_template_directory_uri() ?>/img/study01.png" alt="ZENKENNIHONGO介護のコホート学習とは" />
                  <img class="sp" src="<?= get_template_directory_uri() ?>/img/study01_sp.png" alt="ZENKENNIHONGO介護のコホート学習とは" />
                </div>
                <div class="btn-internal page-in">
                  <a href="<?php echo home_url(); ?>/nihongo/cohort/">コホート学習について<br class="sp_br" />詳しく知りたい方はこちら</a>
                </div>
              </div>
            </div>
            <div class="block__wrapper" id="sec01_02">
              <div class="block__img-02">
                <img class="pc" src="<?= get_template_directory_uri() ?>/img/block__img-02.png" alt="日本語力と学習意欲を同時に引き上げる" />
                <img class="sp" src="<?= get_template_directory_uri() ?>/img/block__img-02_sp.png" alt="日本語力と学習意欲を同時に引き上げる" />
              </div>
              <div class="block__header">
                <div class="block__title">語学教育に特化して45年以上<br />だから質に自信があります</div>
                <div class="block__textArea">
                  <div class="block__catch">
                    <span class="small">介護×日本語学習なら</span>
                    <span class="visually-hidden">ZENKENNIHONGO介護</span>
                    <img class="logo-catch" src="<?= get_template_directory_uri() ?>/img/logo.png" class="logo-img" loading="lazy" alt="ZENKENNIHONGO介護" />
                  </div>
                  <p class="block__text">当社が語学教育事業を始めたのは1975年。外国人の就職に特化した日本語学校の運営や、日本語企業研修など、その実績は多岐にわたります。<br>また登録支援機関であるため、特定技能外国人の日本語学習支援におけるノウハウも豊富。介護における日本語学習なら、当社にお任せください。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="subTitArea">
          <div class="subTit">Zenkenが運営する介護施設では<br />海外介護人材を積極的に採用しています。</div>
          <p>だから、同じ介護施設運営事業者として、<br />採用から受け入れ、教育、育成のリアルがわかります。</p>
        </div>
      </div>
      <div class="sec__bottom">
        <div class="heading_addTxt">
          <div class="heading_inner">
            <p>Zenkenの介護分野における<br class="sp_br" />フラグシップ施設では<br />多くの海外介護人材が活躍しています。</p>
          </div>
        </div>
        <div class="frame-wrap">
          <div class="frame type-b col3">
            <div class="frame-head">
              <img src="<?= get_template_directory_uri() ?>/img/training01.jpg" alt="仲間と学ぶ「全研リビング久喜壱番館" />
            </div>
            <div class="frame-body">
              <p class="info">全研リビング久喜　壱番館</p>
              <p>埼玉県久喜市本町5-10-26</p>
            </div>
          </div>
          <div class="frame type-b col3">
            <div class="frame-head">
              <img src="<?= get_template_directory_uri() ?>/img/training02.jpg" alt="仲間全研リビング久喜　弐番館" />
            </div>
            <div class="frame-body">
              <p class="info">全研リビング久喜　弐番館</p>
              <p>埼玉県久喜市本町5-10-25</p>
            </div>
          </div>
          <div class="frame type-b col3">
            <div class="frame-head">
              <img src="<?= get_template_directory_uri() ?>/img/training03.jpg" alt="全研リビング久喜　参番館" />
            </div>
            <div class="frame-body">
              <p class="info">全研リビング久喜　参番館</p>
              <p>埼玉県久喜市鷲宮6-5-19</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sec sec02" id="sec02">
      <div class="sec__inner">
        <div class="titArea">
          <h3 class="tit"><span class="small">レベル別コース＋試験対策で</span><br />無駄なく手厚く、合格へ導く</h3>
        </div>
        <div class="block">
          <div class="block__inner">
            <div class="block__wrapper">
              <div class="block__header">
                <h4 class="block__title">レベルに合わせた4種類のコースで<br />来日から受検まで伴走</h4>
                <div class="block__img-01 sp">
                  <img src="<?= get_template_directory_uri() ?>/img/block__img-03_sp.png" alt="レベルに合わせた4種類のコースで来日から受検まで伴走" />
                </div>
                <p class="block__text">「生活日本語」「介護の基本」「介護福祉士対策」「介護福祉士対策（演習）」と、4種類のコースを用意しています。<br class="sp_br">来日直後から介護福祉士資格受検の試験対策まで、受講者のレベルに合ったコースを選択可能。効率的に学習を進めることができます。</p>
              </div>
              <div class="block__img-01 pc">
                <img src="<?= get_template_directory_uri() ?>/img/block__img-03.png" alt="レベルに合わせた4種類のコースで来日から受検まで伴走" />
              </div>
            </div>
            <div class="box">
              <div class="box__inner">
                <div class="box__header">
                  <h4 class="box__title">レベル別コースの<br class="sp_br" />年間スケジュール</h4>
                  <p class="scroll sp">▼横にスクロールできます</p>
                </div>
                <div class="box__img scroll">
                  <img class="pc" src="<?= get_template_directory_uri() ?>/img/study02.png" alt="レベル別コースの年間スケジュール" />
                  <img class="sp" src="<?= get_template_directory_uri() ?>/img/study02_sp.png" alt="レベル別コースの年間スケジュール" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sec sec03" id="sec03">
      <div class="sec__inner">
        <div class="titArea">
          <h3 class="tit"><span class="small">介護も日本語も熟知した講師陣</span><br />現場で使える日本語が身につく</h3>
          <p>授業は介護福祉⼠や介護の現場経験者など、介護に深く関わった経験のある日本語教師が担当。<br class="sp_br">だから現場で使える日本語が身につきます。</p>
        </div>
        <div class="balloonArea">
          <h4 class="box__title">講師紹介</h4>
        </div>
        <div class="block">
          <div class="box col2">
            <div class="box__teather-icon">
              <img src="<?= get_template_directory_uri() ?>/img/box__teather01.png" alt="井上くみ子" />
            </div>
            <div class="box-head">
              <h3 class="ttl">井上 くみ子</h3>
            </div>
            <div class="box-body">
              <p>一般社団法人やさしい日本語普及連絡会代表補佐、介護福祉士、『入門・やさしい日本語』特別認定講師、日本語教育能力検定合格、地域日本語教育コーディネーター、多文化子育ての会Coconico代表、手話サポーター。介護現場の経験、国内外での日本語教育の経験をもとに、日本語指導や外国人支援活動に携わっている。介護施設のみならず、学校や役所、企業などへ向むけ、やさしい日本語と海外人材教育や多文化共生をテーマとした講演・研修も精力的に行っている。</p>
            </div>
          </div>
          <div class="box col2">
            <div class="box__teather-icon">
              <img src="<?= get_template_directory_uri() ?>/img/box__teather02.png" alt="西 ちかこ" />
            </div>
            <div class="box-head">
              <h3 class="ttl">西 ちかこ</h3>
            </div>
            <div class="box-body">
              <p>介護福祉士、社会福祉士、精神保健福祉士、介護支援相談員。ほか、日本語教員養成課程（大学）および、日本語教師養成講座修了。『入門・やさしい日本語』認定講師。介護の現場経験・知識が豊富であるほか、海外人材への日本語教育の指導歴も持つ。特に介護現場における理念、コミュニケーションや業務など、即戦力となる日本語指導を得意としている。</p>
            </div>
          </div>
          <div class="box col2">
            <div class="box__teather-icon">
              <img src="<?= get_template_directory_uri() ?>/img/box__teather03.png" alt="高橋 華奈" />
            </div>
            <div class="box-head">
              <h3 class="ttl">高橋 華奈</h3>
            </div>
            <div class="box-body">
              <p>日本語教師養成講座・介護職員初任者研修修了、日本語教育能力検定試験合格、『入門・やさしい日本語』認定講師。EPA介護福祉士候補者の「訪日後日本語研修」および「介護福祉士国家試験対策講座」に携わっている。家族の在宅介護も経験している。</p>
            </div>
          </div>
          <div class="box col2">
            <div class="box__teather-icon">
              <img src="<?= get_template_directory_uri() ?>/img/box__teather04.png" alt="清水 広美" />
            </div>
            <div class="box-head">
              <h3 class="ttl">清水 広美</h3>
            </div>
            <div class="box-body">
              <p>日本語教師養成講座修了、日本語教育能力検定試験合格、『入門・やさしい日本語』認定講師。ホームヘルパー２級、実務者研修修了、介護の日本語教師養成講座修了。EPA介護福祉士候補者や定住者への介護の日本語指導経験あり。20年以上海外にて日本語教育に関わってきた経験を活かし、日本語教師養成講座として「異文化コミュニケーション」科目も指導している。</p>
            </div>
          </div>
        </div>
        <div class="balloonArea part02">
          <h4 class="box__title">実際の<br class="sp_br">動画教材はこちら！</h4>
        </div>
        <div class="teaching-material-area">
          <div class="teaching-material-video">
            <video controls="" poster="<?= get_template_directory_uri() ?>/img/movie_poster.png">
              <source src="<?= get_template_directory_uri() ?>/img/teaching_material.mp4" type="video/mp4" />
            </video>
          </div>
        </div>
      </div>
    </div>
    <div class="sec sec04" id="sec04">
      <div class="sec__inner">
        <div class="titArea">
          <h3 class="tit"><span class="small">定期的に学習進捗を把握できるから、</span><br />1人ひとりに寄りそった<br class="sp_br" />対応が可能</h3>
        </div>
        <div class="block">
          <div class="block__inner">
            <div class="block__wrapper">
              <div class="block__header">
                <h4 class="block__title">受講者の学習進捗状況を<br />定期的に施設担当者に報告</h4>
                <div class="block__img-01 sp">
                  <img src="<?= get_template_directory_uri() ?>/img/block__img-04_sp.png" alt="受講者の学習進捗状況を定期的に施設担当者に報告" />
                </div>
                <p class="block__text">動画レッスンの視聴状況やライブ授業の出席状況、ライブ授業での様子、定期テストの受験状況や成績(介護福祉士対策のみ)を定期的に報告します。<br>また、介護福祉士取得に向けての意欲も把握可能。個人に合わせたサポートに役立ちます。</p>
              </div>
              <div class="block__img-01 pc">
                <img src="<?= get_template_directory_uri() ?>/img/block__img-04.png" alt="受講者の学習進捗状況を定期的に施設担当者に報告" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contactArea">
        <div class="frame-wrap">
          <div class="frame type-c part02">
            <div class="txtArea">
              <div class="txt_box"><span>海外介護職員雇用ガイドブック</span><br>無料進呈中！</div>
              <div class="frame-body">
                <p class="btn-internal">
                  <a href="/form/shiryo">今すぐ資料ダウンロード</a>
                </p>
              </div>
            </div>
            <div class="img_box">
              <img class="pc" src="<?= get_template_directory_uri() ?>/img/catchbook-part02.png" alt="海外介護職員雇用ガイドブック" />
              <img class="sp" src="<?= get_template_directory_uri() ?>/img/catchbook-part02_sp.png" alt="海外介護職員雇用ガイドブック" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sec sec05">
      <div class="flow sec__inner">
        <div class="headArea">
          <h2 class="ttl">
            <span class="visually-hidden">ZENKENNIHONGO介護</span>
            <img src="<?= get_template_directory_uri() ?>/img/logo.png" class="logo-img" loading="lazy" alt="ZENKENNIHONGO介護" /><br class="sp_br" />の導入の流れ
          </h2>
        </div>
        <div class="flowArea">
          <div class="box">
            <div class="num">
              <img class="pc" src="<?= get_template_directory_uri() ?>/img/num_01.png" alt="STEP01" />
              <img class="sp" src="<?= get_template_directory_uri() ?>/img/num_01_sp.png" alt="STEP01" />
            </div>
            <div class="txt_box">
              <h3 class="ttl01">お問い合わせ</h3>
              <p class="txt">まずはお気軽にお問い合わせください。</p>
            </div>
          </div>
          <div class="box">
            <div class="num">
              <img class="pc" src="<?= get_template_directory_uri() ?>/img/num_02.png" alt="STEP02" />
              <img class="sp" src="<?= get_template_directory_uri() ?>/img/num_02_sp.png" alt="STEP02" />
            </div>
            <div class="txt_box">
              <h3 class="ttl01">お打ち合わせ</h3>
              <p class="txt">授業の内容や学習の進め方、学習進捗状況のご報告方法などをご説明したうえで、料金のお見積もりをいたします。</p>
            </div>
          </div>
          <div class="box">
            <div class="num">
              <img class="pc" src="<?= get_template_directory_uri() ?>/img/num_03.png" alt="STEP03" />
              <img class="sp" src="<?= get_template_directory_uri() ?>/img/num_03_sp.png" alt="STEP03" />
            </div>
            <div class="txt_box">
              <h3 class="ttl01">ご利用のお申し込み</h3>
              <p class="txt">担当者よりご利用方法のご案内をいたします。</p>
            </div>
          </div>
          <div class="box">
            <div class="num">
              <img class="pc" src="<?= get_template_directory_uri() ?>/img/num_04.png" alt="STEP04" />
              <img class="sp" src="<?= get_template_directory_uri() ?>/img/num_04_sp.png" alt="STEP04" />
            </div>
            <div class="txt_box">
              <h3 class="ttl01">アカウント/ID発行</h3>
              <p class="txt">学習は語学学習プラットフォームTALENTを利用して行います。お申込みいただいた受講生全員にIDを発行いたします。</p>
            </div>
          </div>
          <div class="box">
            <div class="num">
              <img class="pc" src="<?= get_template_directory_uri() ?>/img/num_05.png" alt="STEP05" />
              <img class="sp" src="<?= get_template_directory_uri() ?>/img/num_05_sp.png" alt="STEP05" />
            </div>
            <div class="txt_box">
              <h3 class="ttl01">学習ガイダンス</h3>
              <p class="txt">受講生に向けて、授業スケジュールと学習の進め方についてご説明します。</p>
            </div>
          </div>
          <div class="box">
            <div class="num">
              <img class="pc" src="<?= get_template_directory_uri() ?>/img/num_06.png" alt="STEP06" />
              <img class="sp" src="<?= get_template_directory_uri() ?>/img/num_06_sp.png" alt="STEP06" />
            </div>
            <div class="txt_box">
              <h3 class="ttl01">レッスン開始</h3>
              <p class="txt">動画によるレッスンとオンラインライブ授業を開始します。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
     <?php include(STYLESHEETPATH . '/inc/slider.php'); ?>
    <div class="sec sec06 l-question">
      <div class="qa sec__inner">
        <div class="headArea">
          <h2 class="ttl">
            <span class="visually-hidden">ZENKENNIHONGO介護</span>
            <img src="<?= get_template_directory_uri() ?>/img/logo.png" class="logo-img" loading="lazy" alt="ZENKENNIHONGO介護" /><br class="sp_br" />のよくある質問
          </h2>
        </div>
        <div class="qaArea">
          <div class="item">
            <div class="acc_btn is-open">
              <div class="q_txt">個別学習で視聴する動画は、1本あたりどれくらいの長さですか？</div>
            </div>
            <div class="txt_box">
              <p class="a_txt">1年目は働きながら毎日無理なく学習が進められるように、動画レッスンで使用する動画は10分前後の長さになっています。2年目から始まる介護福祉士対策は内容によって動画レッスンの長さが異なりますが。5～20分程度になっています。</p>
            </div>
          </div>
          <div class="item">
            <div class="acc_btn">
              <div class="q_txt">動画レッスンを含め、自主学習にはどれくらいの時間を考えておけばよいでしょうか？</div>
            </div>
            <div class="txt_box">
              <p class="a_txt">10分前後の動画レッスンと復習や課題などで、1日30分〜60分程度と考えていただければよいと思います。ただし、介護福祉士対策については動画レッスンが長い場合があるので、自主学習の時間も長くなることが予想されます。</p>
            </div>
          </div>
          <div class="item">
            <div class="acc_btn">
              <div class="q_txt">コホート学習とはなんですか？</div>
            </div>
            <div class="txt_box">
              <p class="a_txt">同じ教育プログラムに参加する個々の学習者同士が互いに学び合い、共同学習を進めるラーニング手法です。アメリカで広まり、近年では日本でも定着しはじめている教育方法です。一人で学習を進めるのではなく、同じ目標を持つ学習者同士が学び合うことで、モチベーションの維持にもつながります。コホート学習について詳しくはこちらをご覧ください。</p>
            </div>
          </div>
          <div class="item">
            <div class="acc_btn">
              <div class="q_txt">学習者の学習進捗状況を確認することはできますか？</div>
            </div>
            <div class="txt_box">
              <p class="a_txt">はい、可能です。受講者の学習進捗状況として、動画の視聴日時、時間、ライブ授業の出席状況、授業での様子をご報告いたします。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / .contents page -->
<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
</div>
<?php get_footer(); ?>