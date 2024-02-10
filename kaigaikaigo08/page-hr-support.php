<?php
/*
Template Name: training
*/
// Rest of code
?>
<?php
//title
global $title;
$title = "海外介護人材の紹介から受け入れまでをフルサポート | ZENKEN介護";

//description
global $description;
$description = "採用から定着、研修までワンストップでサポート。「海外人材スタッフを採用したいが、初めてのことで不安……」ZENKEN介護は人材不足に悩む介護事業者さまを徹底サポート＆フォローします。";

//bodyに定義するページID
global $pageID;
$pageID = "support";

//cssファイル名
global $css;
$css = "l-hr-support.css";
?>
<?php get_header(); ?>
<div class="pankuzu-wrapper">
	<?php the_breadcrumb() ?>
</div>
<div class="visArea_support lower">
	<div class="mainArea">
		<div class="mainArea__inner">
			<h1>
				<div class="subTitArea">
					<p class="mainArea__subtit">
						海外人材の採用から定着、研修まで<br>ワンストップでサポート
					</p>
				</div>
				<div class="siteNameArea">
					<p class="sitename">ZENKEN介護の海外人材紹介</p>
				</div>
			</h1>
			<div class="stepBox support">
				<ul class="step">
					<li class="">
						<p class="num">現地教育</p>
					</li>
					<li></li>
					<li class="">
						<p class="num">採用</p>
					</li>
					<li></li>
					<li class="">
						<p class="num">受け入れ・<br>手続き支援</p>
					</li>
					<li></li>
					<li class="">
						<p class="num">異文化理解<br>研修</p>
					</li>
					<li></li>
					<li class="">
						<p class="num">やさしい<br>日本語研修</p>
					</li>
					<li></li>
					<li class="">
						<p class="num">定着<br>フォロー</p>
					</li>
					<li></li>
					<li class="">
						<p class="num">日本語<br>教育</p>
					</li>
					<li></li>
					<li class="">
						<p class="num">資格取得<br>講座</p>
					</li>
				</ul>
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
<div id="contents-wrapper" class="support">
	<div class="contents">
		<div class="sec l-feature">
			<div class="sec__inner">
				<div class="headArea">
					<div class="subTitArea">
						<p class="mainArea__subtit">
							海外人材スタッフを採用したいが、<br class="sp_br">初めてのことで不安……
						</p>
					</div>
					<h2 class="ttl">
						<span>人材確保に悩む介護事業者さまを<br class="sp_br">徹底的にサポート</span><br>
						<span class="siteName">ZENKEN介護</span><span class="sm">の</span><br class="sp_br">ワンストップサポートの特長
					</h2>
				</div>
				<div class="block">
					<div class="block__inner">
						<div class="block__wrapper">
							<div class="block__header">
								<h3 class="block__catch">
									海外で介護職を志す人材へ<br>日本語教育を実施し、<br><span>即戦力へと育成</span>
								</h3>
								<div class="block__img-01 sp">
									<img src="<?= get_template_directory_uri() ?>/img/support__img-01_sp.png" alt="即戦力へと育成">
								</div>
							</div>
							<div class="block__img-01 pc">
								<img src="<?= get_template_directory_uri() ?>/img/support__img-01.png" alt="即戦力へと育成">
							</div>
						</div>
						<div class="block__text">
							主に介護や看護専門の学校を卒業した人材を対象として、丁寧な日本語教育と特定技能介護の試験対策を実践。基本的な日本語の読み書きや発話表現ができるレベルまでサポートしています。<br>インドネシアでは学修堂（※1）と独占契約を、インドではNSDC（※2）の子会社であるNSDCIと業務提携を結び、即戦力を育成しています。
						</div>
						<p class="caption">
							※1：1987年から運営されている老舗の日本語塾<br>※2：インド国家技能開発公社
						</p>
					</div>
				</div>
				<div class="block part02">
					<div class="block__inner">
						<div class="block__wrapper">
							<div class="block__img-02 pc">
								<img src="<?= get_template_directory_uri() ?>/img/support__img-02.png" alt="日本語教育プログラム">
							</div>
							<div class="block__header">
								<h3 class="block__catch">
									「介護福祉士」資格取得を<br>サポートする<br><span>日本語教育プログラム</span>
								</h3>
								<div class="block__img-02 sp">
									<img src="<?= get_template_directory_uri() ?>/img/support__img-02_sp.png" alt="日本語教育プログラム">
								</div>
							</div>
						</div>
						<div class="block__text">
							海外介護人材に日本で長く働いてもらうには「介護福祉士」国家試験に合格する必要があります。<br>Zenkenでは、介護福祉士資格取得をフォローする日本語教育プログラム「ZENKEN NIHONGO 介護」をご用意しています。
						</div>
						<p class="btn-internal page-in">
							<a href="<?php echo home_url(); ?>/nihongo">詳しくはこちら</a>
						</p>
					</div>
				</div>
				<div class="block part03">
					<div class="block__inner">
						<div class="block__wrapper">
							<div class="block__header">
								<h3 class="block__catch">
									日本人スタッフへも<br>多彩な研修を実施し、<br><span>働きやすい環境をつくる</span>
								</h3>
								<div class="block__img-01 sp">
									<img src="<?= get_template_directory_uri() ?>/img/support__img-03_sp.png" alt="働きやすい環境をつくる">
								</div>
							</div>
							<div class="block__img-01 pc">
								<img src="<?= get_template_directory_uri() ?>/img/support__img-03.png" alt="働きやすい環境をつくる">
							</div>
						</div>
						<div class="block__text">
							海外人材とともに働く現場スタッフに対し、異文化理解や言い換え技術をレクチャーする「やさしい日本語研修」の提供など、スタッフ様向けの海外人材受け入れ研修を実施。施設全体の円滑なコミュニケーション促進と、人材の定着・戦力化をサポートします。
						</div>
						<div class="trialContents">
							<p class="trialBtn pc"><a href="<?php echo home_url(); ?>/training">やさしい日本語研修はこちら</a></p>
							<div class="inner">
								<p class="deco">ポイント！</p>
								<div class="trialCatch">
									<span class="size-m">海外人材の定着</span>には<br class="sp_br"><span class="size-l blue">「やさしい日本語研修」</span><br class="sp_br">がカギ
								</div>
								<div class="trialText">海外人材を受け入れる施設の日本人スタッフが「やさしい日本語」を学び、海外人材とスムーズなコミュニケーションをとることで、外国人にとっても日本人にとっても働きやすい職場を実現。海外人材の定着率向上に寄与します。</div>
								<p class="trialBtn sp"><a href="<?php echo home_url(); ?>/training">詳しく見る</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="sec__bottom">
					<div class="frame-wrap">
						<div class="frame type-b col3">
							<div class="frame-head">
								<img src="<?= get_template_directory_uri() ?>/img/support__img-04.png" alt="海外人材＆受け入れ施設における生活支援">
							</div>
							<div class="frame-body">
								<h3 class="catch">
									海外人材＆受け入れ施設に<br>おける<span>生活支援</span>
								</h3>
								<p class="body_txt">「入社がゴール」ではなく、定着して活躍することを目的とし、来日後の生活や就労上の困りごとや相談に対してもきめ細かくサポートします。</p>
							</div>
						</div>
						<div class="frame type-b col3">
							<div class="frame-head">
								<img src="<?= get_template_directory_uri() ?>/img/support__img-05.png" alt="受け入れ手続き・就労フローをサポート">
							</div>
							<div class="frame-body">
								<h3 class="catch">
									受け入れ手続き・<br>就労フローを<span>サポート</span>
								</h3>
								<p class="body_txt">求人票の作成から雇用契約、申請書類準備、住居の手配まで細かくフォロー。<br>海外人材の受け入れが初めての方も安心です。</p>
							</div>
						</div>
						<div class="frame type-b col3">
							<div class="frame-head">
								<img src="<?= get_template_directory_uri() ?>/img/support__img-06.png" alt="Zenkenは実績も豊富なグローバル人材育成のプロ">
							</div>
							<div class="frame-body">
								<h3 class="catch">
									Zenkenは実績も豊富な<br><span>グローバル人材育成のプロ</span>
								</h3>
								<p class="body_txt">Zenkenは、1975年の創業以来、グローバル人材を育成する語学教育事業、日本語学校運営、海外人材の紹介事業を展開してきました。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sec l-shiryo">
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
		<div class="sec l-facility">
			<div class="sec__inner">
				<div class="headArea">
					<h2 class="ttl">
						<span class="big">ワンストップサポート</span>を<br class="sp_br">提供できる理由
					</h2>
				</div>
				<div class="bodyArea">
					<div class="facility-catch">
						Zenkenが運営する介護施設では<br />
						海外介護人材を積極的に採用しています。
					</div>
					<div class="facilityWrap">
						<p class="facilityText">
							このため、同じ介護施設運営事業者として、<br>採用から育成までに必要なサポートや<br class="sp_br">お困りごとがわかるのです。
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
			</div>
		</div><!-- /.l-facility -->
		<div class="sec l-leading">
			<div class="flow sec__inner">
				<div class="headArea">
					<h2 class="ttl">
						ワンストップサポートの<br class="sp_br">導入の流れ
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
							<p class="txt">フォームまたはお電話にてお気軽にお問い合わせください。</p>
						</div>
					</div>
					<div class="box">
						<div class="num">
							<img class="pc" src="<?= get_template_directory_uri() ?>/img/num_02.png" alt="STEP02" />
							<img class="sp" src="<?= get_template_directory_uri() ?>/img/num_02_sp.png" alt="STEP02" />
						</div>
						<div class="txt_box">
							<h3 class="ttl01">無料相談の実施</h3>
							<p class="txt">担当者が無料相談を実施し、お客さまのご状況やお悩みをヒアリングいたします。</p>
						</div>
					</div>
					<div class="box">
						<div class="num">
							<img class="pc" src="<?= get_template_directory_uri() ?>/img/num_03.png" alt="STEP03" />
							<img class="sp" src="<?= get_template_directory_uri() ?>/img/num_03_sp.png" alt="STEP03" />
						</div>
						<div class="txt_box">
							<h3 class="ttl01">ご契約</h3>
							<p class="txt">人材紹介や受け入れサポートなど実施事項に応じて契約を締結いたします。</p>
						</div>
					</div>
					<div class="box">
						<div class="num">
							<img class="pc" src="<?= get_template_directory_uri() ?>/img/num_04.png" alt="STEP04" />
							<img class="sp" src="<?= get_template_directory_uri() ?>/img/num_04_sp.png" alt="STEP04" />
						</div>
						<div class="txt_box">
							<h3 class="ttl01">人材紹介・各種サポート実施</h3>
							<p class="txt">お客さまの抱える悩み、問題を解決できるようサポートいたします。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <?php include(STYLESHEETPATH . '/inc/slider.php'); ?> -->
	<div class="sec l-question">
		<div class="qa sec__inner">
			<div class="headArea">
				<h2 class="ttl">
					ワンストップサポートの<br class="sp_br">よくある質問
				</h2>
			</div>
			<div class="qaArea">
				<div class="item">
					<div class="acc_btn is-open">
						<h3 class="q_txt">「特定技能」と「技能実習」の違いはなんですか？</h3>
					</div>
					<div class="txt_box">
						<p class="a_txt">特定技能は「人手不足を解消するために」設置された制度で、技能実習は「海外人材の本国への技能移転」を目的とした制度です。<br>特定技能のほうが就労上の制限が少ないものの、これを取得するには、指定の試験に合格しなくてはいけません。入職時から一定の技能水準が必要です。<br>さらには活動内容、受入れ人数枠・人員基準への算定、受け入れコストなど様々な差があります。まずはお気軽にお問い合わせください。</p>
					</div>
				</div>
				<div class="item">
					<div class="acc_btn">
						<h3 class="q_txt">採用選考時には通訳が必要？</h3>
					</div>
					<div class="txt_box">
						<p class="a_txt">不要です。<br>当社のインドネシアスタッフやバイリンガルスタッフが間に立ち、面接・選考時の通訳をはじめ、お客様と海外人材両方のコミュニケーション窓口となりますので、ご安心ください。</p>
					</div>
				</div>
				<div class="item">
					<div class="acc_btn">
						<h3 class="q_txt">ご入居様やご家族が不安に思うのでは？</h3>
					</div>
					<div class="txt_box">
						<p class="a_txt">海外人材は、単純な言葉でのコミュニケーションだけでなく、目を見て話す、真剣に耳を傾ける、ボディランゲージを使うなど、丁寧かつ懸命なコミュニケーションを行います。彼らのそうした姿勢や人柄を微笑ましく見守り、自らも楽しんでコミュニケーションされるご入居者さまが多く、ご家族もこうした環境をポジティブに受け入れてくださるケースがほとんどです。</p>
					</div>
				</div>
				<div class="item">
					<div class="acc_btn">
						<h3 class="q_txt">入職する海外人材は即戦力として働いてもらえますか？</h3>
					</div>
					<div class="txt_box">
						<p class="a_txt">特定技能の海外人材は、日本語や生活習慣に加え、介護の知識・技能の基礎を学んでいます。入職したその日から即戦力となることが可能です。</p>
					</div>
				</div>
				<div class="item">
					<div class="acc_btn">
						<h3 class="q_txt">人材紹介の場合、入社までどのくらいの時間がかかりますか？</h3>
					</div>
					<div class="txt_box">
						<p class="a_txt">当社の人材を海外から採用する場合は最短5ヵ月程度、国内に住んでいる海外人材を採用する場合は約4ヵ月程度かかります。早めの準備をおすすめいたします。</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
<?php get_footer(); ?>