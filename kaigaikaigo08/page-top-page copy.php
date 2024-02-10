<?php
/*
Template Name: top-page
*/
// Rest of code
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Zenken介護は、海外介護人材の紹介から受け入れ、日本語教育、国家資格取得、日本人スタッフの研修までをワンストップでフルサポート。人材不足、定着に悩む介護施設の課題を解決します。" />
  <!-- favicon -->
  <link rel="icon" href="<?= get_template_directory_uri() ?>/img/favicon.ico">
  <!-- pre -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/common.css">
  <!-- js -->
  <link rel="dns-prefetch" href="https://ajax.googleapis.com">
  <link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?= get_template_directory_uri() ?>/js/slick.min.js"></script>
  <script src="<?= get_template_directory_uri() ?>/js/common.js" type="text/javascript"></script>
  <title>ZENKEN介護 | 海外介護人材紹介から日本語教育まで。海外介護人材の悩みをすべて解決！</title>
</head>

<body id="home">

  <?php get_header(); ?>
  <div class="l-mv">
    <div class="l-mv-inner">
      <h2><span>海外介護人材の<br class="sp">悩み</span><br>すべて解決！</h2>
      <p>現地教育から採用、受け入れ、<br>
        日本語教育、国家資格取得まで。<br>
        海外介護人材の課題を<br class="sp">ワンストップで解決します。</p>
    </div>
  </div><!-- /.l-mv -->
  <div class="l-intro">
    <div class="l-inner">
      <h2 class="intro-catch"><span class="mark01">2025年問題とその先を見据えて・・・</span><br>
        <span class="line01">海外介護人材の確保</span><small>と</small><br class="sp">
        <span class="line02">質の高い日本語教育</span><small>が</small><span class="big">必要です。</span>
      </h2>
      <div class="box">
        <p>日本の人口の年齢別比率が劇的に変化し「超高齢化社会」となる2025年、<span class="mark01">介護職員は32万人不足する</span>と言われています。さらに2040年にはその数が69万人にのぼり、介護業界の深刻な人材不足が懸念されています。<br>
          ZENKEN介護は、豊富な海外人材ネットワークと、語学学校・介護施設の運営で培ったノウハウをもとに、介護施設運営事業者様が直面するあらゆる課題をサポート。業界が抱える問題を解決していきます。<br>
          海外での介護人材の育成から採用、受け入れ・定着フォロー支援、そして介護福祉士資格取得のための日本語教育まで…ワンストップで対応可能です。</p>
        <img class="pc" src="<?= get_template_directory_uri() ?>/img/img_caution_pc.png" alt="">
        <img class="sp" src="<?= get_template_directory_uri() ?>/img/img_caution_sp.png" alt="">
      </div>
    </div><!-- /.l-inner -->
  </div><!-- /.l-intro -->
  <div class="l-problem">
    <div class="l-inner">
      <h2 class="problem-catch">介護現場の抱える悩み</h2>
      <div class="problem-box-wrapper">
        <div class="problem-box-left">
          <div class="problem-box-left-inner">


            <h3>海外介護人材を<br><span>採用したい</span>事業者</h3>
            <ul>
              <li>そもそも、どのようにして海外人材を<br class="sp">採用するのかわからない</li>
              <li>海外人材の能力にどうしても不安を感じる</li>
              <li>施設の日本人スタッフが受け入れてくれるか不安</li>
              <li>受け入れ前後の手続きが多く手が回らない</li>
              <li>日々の業務に追われ、海外人材の育成にかける<br class="pc">時間が取れない</li>
            </ul>
          </div>
        </div>
        <div class="problem-box-right">
          <div class="problem-box-right-inner">
            <h3>海外介護人材を<br><span>採用している</span>事業者</h3>
            <ul>
              <li>長く働いてもらいたいが、どのように<br>育成すれば良いかわからない</li>
              <li>現場で使える日本語力が身についていない</li>
              <li>シフトの関係からなかなか日本語学習が進まない</li>
              <li>海外人材の学習習慣がつかない</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.l-problem -->
  <div class="l-eightFeature">
    <p class="l-outerCatch">
      現地教育から採用、受け入れ、教育まで<br />
      海外介護人材の課題をワンストップで解決
    </p>
    <div class="l-inner">
      <h2 class="eightFeature-catch">
        <span>ZENKEN介護</span>
        <img src="<?= get_template_directory_uri() ?>/img/eightFeatureCatch.png" alt="8つ">
        <span>の特徴</span>
      </h2>
      <div class="eightFeature-box-wrapper">
        <div class="card card01">
          <div class="imgWrap">
            <img src="<?= get_template_directory_uri() ?>/img/eightFeature01.png" alt="">
          </div>
          <p>海外で介護現場での<br />即戦⼒を育成</p>
          <div class="btn">
            <a href="/hr-support/">詳しく見る</a>
          </div>
        </div>
        <div class="card card02">
          <div class="imgWrap">
            <img src="<?= get_template_directory_uri() ?>/img/eightFeature02.png" alt="">
          </div>
          <p>「介護福祉士」<br />資格取得をサポート</p>
          <div class="btn">
            <a href="/nihongo">詳しく見る</a>
          </div>
        </div>
        <div class="card card03">
          <div class="imgWrap">
            <img src="<?= get_template_directory_uri() ?>/img/eightFeature03.png" alt="">
          </div>
          <p>日本人スタッフへの<br class="sp" />異文化<br class="pc" />理解・<br class="sp" />やさしい日本語研修</p>
          <div class="btn">
            <a href="/training/">詳しく見る</a>
          </div>
        </div>
        <div class="card card04">
          <div class="imgWrap">

            <img src="<?= get_template_directory_uri() ?>/img/eightFeature04.png" alt="">
          </div>
          <p>
            語学教育に特化して45年以上だから質に自信があります
          </p>
          <div class="btn">
            <a href="/nihongo/#sec01_02">詳しく見る</a>
          </div>
        </div>
        <div class="card card05">
          <div class="imgWrap">

            <img src="<?= get_template_directory_uri() ?>/img/eightFeature05.png" alt="">
          </div>
          <p>コホート学習を<br class="sp" />取り入れた<br />挫折させない日本語学習</p>
          <div class="btn">
            <a href="/nihongo/cohort/">詳しく見る</a>
          </div>
        </div>
        <div class="card card06">
          <div class="imgWrap">

            <img src="<?= get_template_directory_uri() ?>/img/eightFeature06.png" alt="">
          </div>
          <p>体系的なオリジナル<br />日本語教育<br class="sp" />カリキュラム</p>
          <div class="btn">
            <a href="/nihongo#sec02">詳しく見る</a>
          </div>
        </div>
        <div class="card card07">
          <div class="imgWrap">

            <img src="<?= get_template_directory_uri() ?>/img/eightFeature07.png" alt="">
          </div>
          <p>専門的かつ介護経験<br class="sp" />豊富な日本語講師陣</p>
          <div class="btn">
            <a href="/nihongo#sec03">詳しく見る</a>
          </div>
        </div>
        <div class="card card08">
          <div class="imgWrap">

            <img src="<?= get_template_directory_uri() ?>/img/eightFeature08.png" alt="">
          </div>
          <p>学習効果がわかる！<br />学習進捗報告</p>
          <div class="btn">
            <a href="/nihongo#sec04">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.l-eightFeature -->
  <div class="l-table">
    <div class="l-inner">
      <h2 class="table-catch">
        ZENKEN介護ができること
      </h2>
      <p class="sp scrollInfo">▼横にスクロールできます</p>
      <div class="table-wrap">
        <table>
          <tbody>
            <tr>
              <td colspan="2" class="notView"></td>
              <th class="zenken">ZENKEN介護</th>
              <th>N社</th>
              <th>A社</th>
              <th>O社</th>
            </tr>
            <tr>
              <td rowspan="7" class="vertical-orange">
                <img src="<?= get_template_directory_uri() ?>/img/vertical-text--kaigai.png" alt="海外人材採用">
              </td>
              <th>海外での育成</th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td></td>
              <td></td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
            </tr>
            <tr>
              <th>海外での現場実習</th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td></td>
              <td></td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
            </tr>
            <tr>
              <th>人材紹介</th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
            </tr>
            <tr>
              <th>手続きフォロー</th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
            </tr>
            <tr>
              <th>受け入れ・生活フォロー</th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
            </tr>
            <tr>
              <th>
                <p>やさしい日本語研修</p>
                <a href="<?php echo home_url(); ?>/training/">詳しく</a>
              </th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td></td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td></td>
            </tr>
            <tr>
              <th>介護施設運営</th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td rowspan="6" class="vertical-green">
                <img src="<?= get_template_directory_uri() ?>/img/vertical-text--nihongo.png" alt="日本語教育プログラム">
              </td>
              <th>通期開催</th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td></td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
            </tr>
            <tr>
              <th>介護福祉士試験対策</th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td></td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
            </tr>
            <tr>
              <th>
                <p>コホート学習</p>
                <a href="<?php echo home_url(); ?>/nihongo/cohort">詳しく</a>

              </th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th>オンライン授業</th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td></td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
            </tr>
            <tr>
              <th>動画授業</th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
            </tr>
            <tr>
              <th>学習進捗報告</th>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-orange-check.png" alt="">
              </td>
              <td></td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
              <td>
                <img src="<?= get_template_directory_uri() ?>/img/table-gray-check.png" alt="">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div><!-- /.l-table -->
  <div class="l-facility">
    <div class="l-inner">
      <h2 class="facility-catch">
      Zenkenが運営する介護施設では<br />
        海外介護人材を積極的に採用しています。
      </h2>
      <div class="facilityWrap">
        <p class="facilityText">
          だから、同じ介護施設運営事業者として、<br />
          採用から受け入れ、教育、育成の<br class="sp" />リアルがわかります。
        </p>
        <div class="facilitySample">
          <p class="facilitySampleText">Zenkenの介護分野における<br class="sp" />フラグシップ施設では<br />
            多くの海外介護人材が活躍しています。</p>
          <div class="facilityImgWrap">
            <div class="facilityImgBox">
              <img src="<?= get_template_directory_uri() ?>/img/facilitySample1.png" alt="">
              <div class="facilityImgText">
                <p class="facilityName">全研リビング久喜 壱番館</p>
                <p class="facilityAddress">埼玉県久喜市本町5-10-26</p>
              </div>
            </div>
            <div class="facilityImgBox">
              <img src="<?= get_template_directory_uri() ?>/img/facilitySample2.png" alt="">
              <div class="facilityImgText">
                <p class="facilityName">全研リビング久喜 弐番館</p>
                <p class="facilityAddress">埼玉県久喜市本町5-10-25</p>
              </div>
            </div>
            <div class="facilityImgBox">
              <img src="<?= get_template_directory_uri() ?>/img/facilitySample3.png" alt="">
              <div class="facilityImgText">
                <p class="facilityName">全研リビング久喜 参番館</p>
                <p class="facilityAddress">埼玉県久喜市鷲宮6-5-19</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.l-facility -->
  <div class="l-userFlows">
    <div class="userFlowsLeft">
      <div class="userFlowsLeftWrap">
        <p class="fukidasi left">これから</p>
        <p class="userFlowsText">海外介護人材を<br class="pc" />
          <span>採用したい</span><br class="sp" />事業者様はこちら
        </p>
        <p class="btn-internal or">
          <a href="https://zenken-career.jp/kaigo/" target="_blank">海外人材ワンストップサービス</a>
        </p>
      </div>
    </div>
    <div class="userFlowsRight">
      <div class="userFlowsRightWrap">
        <p class="fukidasi right">すでに</p>
        <p class="userFlowsText">海外介護人材を<br class="pc" />
          <span>採用している</span><br class="sp" />事業者様はこちら
        </p>
        <p class="btn-internal">
          <a href="/nihongo">日本語教育プログラム</a>
        </p>
      </div>
    </div>
  </div><!-- /.l-userFlows -->
  <div class="l-trial">
    <div class="trialContents">
      <p class="deco" style="display: none;">無料トライアル実施中！</p>
      <p class="trialBtn" style="display: none;">
        <a href="/training">
          詳しく見る
        </a>
      </p>
      <div class="inner">
        <h2 class="trialCatch"><span class="size-m">日本人スタッフ</span>のための<br /><span class="size-l brue">やさしい日本語研修</span></h2>
        <p class="trialText">
          受け入れ施設の日本人スタッフと外国人スタッフの<br class="pc" />
          コミュニケーションを円滑にし、外国人にとっても<br class="pc" />
          日本人にとっても働きやすい職場環境を実現します。
        </p>
      </div>

    </div>
  </div>
  <!-- <?php include(STYLESHEETPATH . '/inc/slider.php'); ?> -->
  <?php include(STYLESHEETPATH . '/inc/Instagram.php'); ?>
  <?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
  <?php get_footer(); ?>
</body>

</html>