<?php
/*
Template Name: training
*/
// Rest of code
?>
<?php
//title
global $title;
$title = "やさしい日本語研修 | ZENKEN介護";

//description
global $description;
$description = "日本人スタッフが海外人材とよりスムーズにコミュニケーションが取れるようになるZENKEN介護の「やさしい日本語研修」を紹介します。「やさしい日本語」を学ぶことで、海外⼈材を受け⼊れる介護の現場をより円滑に、働きやすい環境を作ることができます。";

//bodyに定義するページID
global $pageID;
$pageID = "training";

//cssファイル名
global $css;
$css = "l-training.css";
?>

<?php get_header(); ?>
<div class="pankuzu-wrapper">
  <?php the_breadcrumb() ?>
</div>
<div class="visArea_lower training">
  <div class="mainArea">
    <div class="mainArea__inner">
      <div class="fukidasi">
        海外人材とよりスムーズに<br />
        コミュニケーションが取れるようになる
      </div>
      <h1 class="sitename">やさしい日本語研修</h1>
    </div>
  </div>
</div>
<div class="contents">
  <div class="l-intro">
    <div class="l-inner">
      <h2 class="intro-catch">
        <span class="strong">やさしい日本語</span>とは
      </h2>
      <div class="intro-text">
        普段使われている言葉を、外国人にもわかるように簡単にした日本語のことです。<br>
        日本人スタッフが「やさしい日本語」を学ぶことで、介護の現場をより円滑に回すことができるほか、<br>
        海外人材にとっても働きやすい環境を作ることができます。
      </div>
      <div class="cardBox">
        <div class="card">
          <img class="pc" src="<?= get_template_directory_uri() ?>/img/training-intro-card01.png" alt="point1">
          <img class="sp" src="<?= get_template_directory_uri() ?>/img/training-intro-card01_sp.png" alt="point1">
          <div class="card__text no1">
            日本人が普段何気なく使っている日本語表現の難解さを知り、海外人材にわかりやすく伝えるための工夫や考え方を学ぶ。
            <div class="point">POINT <span>1</span></div>
          </div>
        </div>

        <div class="card">
          <img class="pc" src="<?= get_template_directory_uri() ?>/img/training-intro-card02.png" alt="point2">
          <img class="sp" src="<?= get_template_directory_uri() ?>/img/training-intro-card02_sp.png" alt="point2">
          <div class="card__text no2">
            介護現場で使われる多様な言い回しや指示のしかたなどの統一につながり、海外人材とのコミュニケーションがスムーズになる。
            <div class="point">POINT <span>2</span></div>
          </div>
        </div>
        <div class="card">
          <img class="pc" src="<?= get_template_directory_uri() ?>/img/training-intro-card03.png" alt="point3">
          <img class="sp" src="<?= get_template_directory_uri() ?>/img/training-intro-card03_sp.png" alt="point3">
          <div class="card__text no3">
            海外人材と日本人スタッフ双方のストレスが軽減。業務も効率化され、環境改善にもつながっていく。
            <div class="point">POINT <span>3</span></div>
          </div>
        </div>
      </div>
      <div class="intro-lastText">
        <div class="intro-lastText--inner">
          「やさしい日本語」が生まれたのは、阪神・淡路大震災後のことです。震災当時、外国人が日本語を理解できず、必要な情報を得られなかったために、適切な行動をとれなかったことをきっかけとして考案されました。<br>
          以降、地域の生活情報や観光情報を伝える際にも用いられています。<br>
          また現在では、<span>海外人材が働く環境づくりにも有用である</span>と注目され、文化庁がやさしい日本語研修のガイドラインを公表するなど、<span>国全体で推進されている施策</span>です。
        </div>
      </div>
    </div><!-- /.l-inner -->
  </div><!-- /.l-intro -->
  <div class="l-leading">
    <div class="l-inner">
      <div class="flowIntroBox">
        <div class="flowIntroText">
          <h2>
            <img src="<?= get_template_directory_uri() ?>/img/logo.svg" alt="<?php bloginfo('name'); ?>"><span class="visually-hidden">ZENKEN介護</span>
            の<br />やさしい日本語研修の内容
          </h2>
          <p>（トライアルコース 60分の場合）</p>
        </div>
        <div class="flowIntroImg">
          <img src="<?= get_template_directory_uri() ?>/img/frowIntroImg.png" alt="優しい日本語研修の内容">
        </div>
      </div>
      <div class="flowArea">
        <p class="flowAreaText">研修内容はお客さまのご要望に合わせて<br class="sp_br">カスタマイズします。<br>
          お気軽にご相談ください。</p>
        <div class="box">
          <div class="num">
            <img class="pc" src="<?= get_template_directory_uri() ?>/img/step_num_01.png" alt="STEP01" />
            <img class="sp" src="<?= get_template_directory_uri() ?>/img/step_num_01_sp.png" alt="STEP01" />
          </div>
          <div class="txt_box">
            <h3 class="ttl01">自分の日本語を見直す</h3>
            <p class="txt">まずは私たち日本人が、普段どんな言葉を使い、どのように表現しているかを客観的に見直すことから始めます。</p>
          </div>
        </div>
        <div class="box">
          <div class="num">
            <img class="pc" src="<?= get_template_directory_uri() ?>/img/step_num_02.png" alt="STEP02" />
            <img class="sp" src="<?= get_template_directory_uri() ?>/img/step_num_02_sp.png" alt="STEP02" />
          </div>
          <div class="txt_box">
            <h3 class="ttl01">日本語の難しさを考える</h3>
            <p class="txt">日本人とのコミュニケーションで、外国人が何に戸惑い、難しさを感じているか、考えてみます。</p>
          </div>
        </div>
        <div class="box">
          <div class="num">
            <img class="pc" src="<?= get_template_directory_uri() ?>/img/step_num_03.png" alt="STEP03" />
            <img class="sp" src="<?= get_template_directory_uri() ?>/img/step_num_03_sp.png" alt="STEP03" />
          </div>
          <div class="txt_box">
            <h3 class="ttl01">介護現場での<br class="sp_br">コミュニケーションを学ぶ</h3>
            <p class="txt">介護現場で使われる指示のことば、確認のしかたなど、伝え方の工夫を学びます。</p>
          </div>
        </div>
        <div class="box">
          <div class="num">
            <img class="pc" src="<?= get_template_directory_uri() ?>/img/step_num_04.png" alt="STEP04" />
            <img class="sp" src="<?= get_template_directory_uri() ?>/img/step_num_04_sp.png" alt="STEP04" />
          </div>
          <div class="txt_box">
            <h3 class="ttl01">弱みを強みに変える</h3>
            <p class="txt">介護の現場で日本語がわからないことを生かす方法を考えます。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="l-inner part02">
      <div class="headArea">
        <h2 class="ttl">やさしい日本語研修の講師</h2>
        <p>研修は介護福祉⼠や介護の現場経験者など、介護に深く関わった経験のある日本語教師が担当します。</p>
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
      <div class="lower_bnr">
        <div class="lower_bnr-box">
          <div class="lower_bnr-list">
            <div class="lower_bnr_image">
              <img class="pc" src="<?= get_template_directory_uri() ?>/img/lower_bnr.png" alt="日本語スタッフのためのやさしい日本語研修" />
              <img class="sp" src="<?= get_template_directory_uri() ?>/img/lower_bnr_sp.png" alt="日本語スタッフのためのやさしい日本語研修" />
            </div>
            <div class="lower_bnr-body">
              <div class="lower_bnr-body__ttl">
                <span>日本人スタッフ</span>のための<br><span class="blue">やさしい日本語研修</span>
              </div>
              <div class="btn-internal form"><a href="/form/shiryo/">今すぐ資料ダウンロード</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sec l-voice">
    <div class="sec__inner">
      <div class="balloonArea">
        <h2 class="box__title"><span>受講者</span>の声</h2>
      </div>
      <div class="block">
        <div class="box col2">
          <div class="box_voice-icon">
            <img src="<?= get_template_directory_uri() ?>/img/box__voice01.png" alt="受講者の声" />
          </div>
          <div class="box-head">
            <h3 class="catch">きちんと「伝わる」コミュニケーションをとれるようになった</h3>
          </div>
          <div class="box-body">
            <p>「やさしい日本語」を理解し、実践する事で、それぞれが持つ「当たり前」や「思い込み」から来る誤解・すれ違いを少なくする事ができると感じました。国籍問わず、日本人でもそれぞれにとっての常識や当たり前の違いがある中で、「やさしい日本語」が普及すると誰にとってもやさしい環境になると思います。ぜひ実践していきたいです。</p>
            <p class="customerName">金子機械株式会社<br>市村明奈様</p>
          </div>
        </div>
        <div class="box col2">
          <div class="box_voice-icon">
            <img src="<?= get_template_directory_uri() ?>/img/box__voice02.png" alt="受講者の声" />
          </div>
          <div class="box-head">
            <h3 class="catch">毎回新たな学びを得られる、<br>実りある研修</h3>
          </div>
          <div class="box-body">
            <p>外国人介護職を育成するには日本人スタッフのどんな協力が必要か、分かりやすく学ぶことができました。やさしい日本語研修は何度受けても毎回刺激を受けます。介護現場で日本人スタッフが話す時、質問なのか、迷いなのか、愚痴なのかが分からないことが多々あります。聞きたいこと、伝えたいことを頭で整理した上で、やさしい日本語を使う訓練が必要だと思いました。</p>
            <p class="customerName">神奈川県社会福祉士会<br>木村有孝様</p>
          </div>
        </div>
        <div class="box col2">
          <div class="box_voice-icon">
            <img src="<?= get_template_directory_uri() ?>/img/box__voice03.png" alt="受講者の声" />
          </div>
          <div class="box-head">
            <h3 class="catch">「日本語のどこが難しいのか」を<br>理解できた</h3>
          </div>
          <div class="box-body">
            <p>どういう言葉が外国籍の人にとってわかりにくいのかが、よく理解できました。特に「●●しかできない」「●分前に来てください。」「オノマトペ＋してください」「どうぞ」等。<br>また、言葉だけではなく、違いを受け入れる・理解することも大切だという事も理解できました。介護の世界だけではなく、外国籍の人が働く場であれば、どこにでも共有する点だと感じました。日頃外国籍の人と日本語で会話をすることが多いので、本日学んだことを心がけたいと思います。</p>
            <p class="customerName">横浜国立大学　留学生就職支援<br class="sp_br">コーディネーター<br>増田 克子様</p>
          </div>
        </div>
        <div class="box col2">
          <div class="box_voice-icon">
            <img src="<?= get_template_directory_uri() ?>/img/box__voice04.png" alt="受講者の声" />
          </div>
          <div class="box-head">
            <h3 class="catch">海外人材から「選ばれる」企業に<br>なるために必要な研修だった</h3>
          </div>
          <div class="box-body">
            <p>日本人に対する日本語教育という新たな取り組みは今後さらに発展していくと思いました。外国籍の人材が増えていくことで、選ばれる企業になるためにも本研修の取り組みは重要だと感じました。ありがとうございました。</p>
            <p class="customerName">社会福祉法人 至福の会 <br>遠藤 敏様</p>
          </div>
        </div>
      </div>
      <div class="lower_bnr">
        <div class="lower_bnr-box">
          <div class="lower_bnr-list">
            <div class="lower_bnr_image">
              <img class="pc" src="<?= get_template_directory_uri() ?>/img/lower_bnr.png" alt="日本語スタッフのためのやさしい日本語研修" />
              <img class="sp" src="<?= get_template_directory_uri() ?>/img/lower_bnr_sp.png" alt="日本語スタッフのためのやさしい日本語研修" />
            </div>
            <div class="lower_bnr-body">
              <div class="lower_bnr-body__ttl">
                <span>日本人スタッフ</span>のための<br><span class="blue">やさしい日本語研修</span>
              </div>
              <div class="btn-internal form"><a href="/form/shiryo/">今すぐ資料ダウンロード</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
<?php get_footer(); ?>