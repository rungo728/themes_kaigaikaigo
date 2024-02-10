<?php
/*
Template Name: india-lp
*/
// Rest of code
?>
<?php
//title　記事名
global $title;
$title = single_post_title('', false);

//description
global $description;
$description = "";

//bodyに定義するページID
global $pageID;
$pageID = "india-lp";

//cssファイル名
global $css;
$css = "india-lp.css";
?>


<?php get_header(); ?>

<div class="pankuzu-wrapper">
	<?php the_breadcrumb() ?>
</div>

<div class="l-mv india">
  <div class="l-mv__inner">
		<div class="l-mv__box">
			<div class="logoWrap">
				<div class="logoTxt">インド政府機関との協働プロジェクト</div>
				<div class="logoImg">
					<img src="<?= get_template_directory_uri() ?>/img/logo_lp.png" alt="ロゴ">
				</div>
			</div>
			<div class="imgArea sp">
				<img src="<?= get_template_directory_uri() ?>/img/mv_bg_sp.png" alt="背景">
			</div>
			<!-- ヘッダー -->
			<?php
			//フィールド名を指定する。
			$field = get_field('インド人特定技能人材ヘッダー設定値');
			if ($field) {
				echo $field;
			}
			?>
			<!-- ヘッダー -->
			<div class="btn-internal">
				<a href="#introduce">今すぐ紹介可能な人材を見る</a>
			</div>
		</div>
  </div>
	<div class="l-mv__bottom">
		<div class="sec sec__bottom">
			<div class="sec__inner">
				<div class="bottomArea">
					<div class="catchTtl">Zenkenの<br>インド介護人材採用なら</div>
					<div class="circle pc">
						<div class="circle-1">
							<div class="catch">質</div>
							<p class="txt">誰を採っても<br>知識と技術あり</p>
						</div>
						<div class="circle-2">
							<div class="catch">数</div>
							<p class="txt">圧倒的な<br>登録人材数</p>
						</div>
						<div class="circle-3">
							<div class="catch">定着</div>
							<p class="txt">介護福祉士<br>資格取得も支援</p>
						</div>
					</div>
					<div class="circle sp">
						<div class="circleCenter">
							<div class="circle-1">
								<div class="catch">質</div>
								<p class="txt">誰を採っても<br>知識と技術あり</p>
							</div>
						</div>
						<div class="circleWrap">
							<div class="circle-2">
								<div class="catch">数</div>
								<p class="txt">圧倒的な<br>登録人材数</p>
							</div>
							<div class="circle-3">
								<div class="catch">定着</div>
								<p class="txt">介護福祉士<br>資格取得も支援</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="l-mv__banner">
			<div class="lower-bottom part02">
				<div class="heading_inner">
					<div class="frame-wrap">
						<div class="frame type-c">
							<div class="txtArea">
								<div class="frame-head">
									<div class="headTtl"><span class="small">Zenkenの</span><br><span>インド人介護人材支援サービス</span><br>に関する資料ダウンロードはこちら</div>
								</div>
								<div class="frame-body">
									<p class="btn-internal">
										<a href="<?php echo home_url(); ?>/form/shiryo/?type=india">いますぐ資料ダウンロード</a>
									</p>
								</div>
							</div>
							<div class= "imgWrap">
								<div class="imgTxt">
								今なら<br>「海外介護職員<br class="sp_br">雇用ガイドブック」<br>無料進呈中！
								</div>
								<div class="img_box">
									<img class="pc" src="<?=get_template_directory_uri()?>/img/catchbook02.png" alt="海外介護職員雇用ガイドブック" />
									<img class="sp" src="<?=get_template_directory_uri()?>/img/catchbook02_sp.png" alt="海外介護職員雇用ガイドブック" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</div><!-- /.l-mv -->
<div id="contents-wrapper" class="content-india">
	<div class="contents">
		<div class="l-answer part01">
			<div class="sec__inner">
				<div class="qaArea">
					<div class="qsubTtl">どんな人材がとれるの？</div>
					<div class="aTtl">誰を採用しても<br>介護の<span>知識と技術を備えた </span>人材！</div>
				</div>
				<div class="answerImgWrap">
					<div class="answerImgBox">
						<img src="<?= get_template_directory_uri() ?>/img/answerSample1.png" alt="">
						<div class="answerImgText">
							<div class="tag">全員</div>
							<div class="answerCatch">看護の大学・短大卒業生</div>
							<p class="answerTxt">ご紹介するのは、2年制/3年制大学の看護学科を卒業した人材や、NSDC開発の介護カリキュラムを修了した人材のみ。どの人材も、看護知識と技術を基礎から実践まで習得済みです。</p>
							<!-- MODAL -->
							<div class="modalBtn pc">
								<a href="#modal01" class="modalBox">具体的な習得スキル</a>
							</div>
							<div class="modalBtn sp">
								<a href="#modal02" class="modalBox">具体的な習得スキル</a>
							</div>
							<div id="modal02" class="modal_content">
									<div class="boxArea">
											<dl class="makerList">
													<dt>全員</dt>
													<dd><span>看護の大学・短大卒業生</span></dd>
													<dd>
															<ul>
																	<li>介護知識<br>看護学科の授業で介護にも役立つ知識を習得済み</li>
																	<li>介護技術<br>看護学科の実践授業で介護現場でも役立つ介護技能を習得済み</li>
																	<li>インド公認看護資格<br>国が公認している看護資格を取得済み</li>
															</ul>
													</dd>
											</dl>
									</div>
									<div class="modaal-close"><img src="<?= get_template_directory_uri() ?>/img/btn_close.png" alt="CLOSE"></div>
							</div>
						</div>
					</div>
					<div class="answerImgBox">
						<img src="<?= get_template_directory_uri() ?>/img/answerSample2.png" alt="">
						<div class="answerImgText">
							<div class="tag">全員</div>
							<div class="answerCatch">国を上げて<br>全面バックアップ</div>
							<p class="answerTxt">インド政府機関であるNSDCI全面協力のもと、全寮制の日本語研修センターで日本語能力試験N4と特定技能介護試験の合格を目指すための教育を始め、日本の商習慣研修も定期開催。</p>
							<div class="modalBtn pc">
								<a href="#modal01" class="modalBox">具体的な支援内容</a>
							</div>
							<div class="modalBtn sp">
								<a href="#modal03" class="modalBox">具体的な支援内容</a>
							</div>
							<div id="modal03" class="modal_content">
								<div class="boxArea">
										<dl class="makerList">
												<dt>全員</dt>
												<dd><span>国を上げて全面バックアップ</span></dd>
												<dd>
														<ul>
																<li>学習施設<br>寮での生活支援と学習の場を提供</li>
																<li>職業訓練<br>日本で介護職として働くための訓練</li>
																<li>奨学金制度<br>受験料など特定技能取得のための費用サポート</li>
														</ul>
												</dd>
										</dl>
								</div>
								<div class="modaal-close"><img src="<?= get_template_directory_uri() ?>/img/btn_close.png" alt="CLOSE"></div>
							</div>
							<!-- /.modal_content -->
						</div>
					</div>
					<div class="answerImgBox">
						<img src="<?= get_template_directory_uri() ?>/img/answerSample3.png" alt="">
						<div class="answerImgText">
							<div class="tag">全員</div>
							<div class="answerCatch">日本語読み書き・会話まで徹底指導</div>
							<p class="answerTxt">日本語能力試験N4と特定技能介護試験のどちらにも合格し、介護施設への内定決定後も、日本入国直前まで、当社とNSDCIの協業により、日本語能力向上のための研修を実施します。</p>
							<div class="modalBtn pc">
								<a href="#modal01" class="modalBox">具体的な指導品質</a>
							</div>
							<div class="modalBtn sp">
								<a href="#modal04" class="modalBox">具体的な指導品質</a>
							</div>
							<div id="modal04" class="modal_content"> 
								<div class="boxArea">
									<dl class="makerList">
											<dt>全員</dt>
											<dd><span>日本語読み書き・会話まで徹底指導</span></dd>
											<dd>
													<ul>
															<li>学習内容<br>体系的なカリキュラム</li>
															<li>学習時間<br>1日6時間×6日を8～9ヶ月</li>
															<li>講師の質<br>半世紀以上にわたり語学教育事業を行っているZenkenの日本語講師を含めた、日本語指導歴が豊富な日本人講師</li>
													</ul>
											</dd>
									</dl>
								</div>
								<div class="modaal-close"><img src="<?= get_template_directory_uri() ?>/img/btn_close.png" alt="CLOSE"></div>
							</div>
							<!-- /.modal_content -->
						</div>
					</div>
					<div id="modal01" class="modal_content">
							<div class="boxArea">
									<dl class="makerList">
											<dt>全員</dt>
											<dd><span>大学・短大の看護学科卒業生</span></dd>
											<dd>
													<ul>
															<li>介護知識<br>看護学科の授業で介護にも役立つ知識を習得済み</li>
															<li>介護技術<br>看護学科の実践授業で介護現場でも役立つ介護技能を習得済み</li>
															<li>インド公認看護資格<br>国が公認している看護資格を取得済み</li>
													</ul>
											</dd>
									</dl>
									<dl class="makerList">
											<dt>全員</dt>
											<dd><span>国を上げて全面バックアップ</span></dd>
											<dd>
													<ul>
															<li>学習施設<br>寮での生活支援と学習の場を提供</li>
															<li>職業訓練<br>日本で介護職として働くための訓練</li>
															<li>奨学金制度<br>受験料など特定技能取得のための費用サポート</li>
													</ul>
											</dd>
									</dl>
									<dl class="makerList">
											<dt>全員</dt>
											<dd><span>日本語読み書き・会話まで徹底指導</span></dd>
											<dd>
													<ul>
															<li>学習内容<br>体系的なカリキュラム</li>
															<li>学習時間<br>1日6時間×6日を8～9ヶ月</li>
															<li>講師の質<br>半世紀以上にわたり語学教育事業を行っているZenkenの日本語講師を含めた、日本語指導歴が豊富な日本人講師</li>
													</ul>
											</dd>
									</dl>
							</div>
							<div class="modaal-close"><img src="<?= get_template_directory_uri() ?>/img/btn_close.png" alt="CLOSE"></div>
					</div>
					<!-- /.modal_content -->
				</div>
			</div>
		</div>
		<div class="l-introduce" id="introduce">
			<div class="sec__head">
				<div class="sec__inner">
					<div class="headArea">
						<h2 class="ttl">
							ご紹介可能な介護人材の一例
						</h2>
					</div>
					<!-- 紹介可能人材 -->
					<div class="boxWrapper">
						<?php $args = array(
							'numberposts' => 12,
							'post_type' => 'introducible',
							'taxonomy' => 'introducible',
							'paged' => $paged,
						);
						$posts = get_posts($args);

						if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
								<div class="boxTable col3">
									<div class="boxImg">
										<?php
										//写真
											$syasin = get_field('紹介可能人材-写真-');
										if ($syasin) {
											echo "<img src='$syasin'>";
										}
										?>
									</div>
									<?php
										$offer = get_field('紹介可能人材-内定済み-');
									?>
									<div class="boxTag" <?php if (empty($offer)) echo 'style="display: none;"'; ?>>
										<?php
										//内定あり
										if ($offer) {
												echo $offer;
										}
										?>
									</div>
									<table>
										<tbody>
											<tr>
												<th>学歴</th>
												<td>
													<?php
													//学歴
													$gakureki = get_field('紹介可能人材-学歴-');
													if ($gakureki) {
														echo $gakureki;
													}
													?>
												</td>
											</tr>
											<tr>
												<th>実習経験</th>
												<td>
													<?php
													//実習経験
													$jitumu = get_field('紹介可能人材-実習経験-');
													if ($jitumu) {
														echo $jitumu;
													}
													?>
												</td>
											</tr>
											<tr>
												<th>日本語レベル</th>
												<td>
													<?php
													//日本語レベル
													$nihongo_lv = get_field('紹介可能人材-日本語レベル-');
													if ($nihongo_lv) {
														echo $nihongo_lv;
													}
													?>
												</td>
											</tr>
											<tr>
												<th>ステータス</th>
												<td>
													<?php
													//ステータス
													$status = get_field('紹介可能人材-ステータス-');
													if ($status) {
														echo $status;
													}
													?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

							<?php endforeach; ?>
						<?php else : ?>
							<li>記事はまだありません。</li>
						<?php endif; ?>
						<!-- 紹介可能人材 -->
					</div>
					<div class="btn-internal">
						<a href="">もっと見たい方はこちら</a>
					</div>
				</div>
			</div>
		</div>
		<div class="l-example">
			<div class="sec__bottom">
					<div class="sec__inner">
						<div class="subCatch">
							…彼らはほんの一例です！
						</div>
						<div class="catch">
							<span class="sm">Zenkenのインド介護人材採用なら</span>
							<br>知識と技術を持った介護人材と<span class="marker">たくさん</span><br class="sp_br">出会える！
						</div>
						<p>一人二人ではありません。<br>何十人もの介護人材とコンスタントに出会い、<br>施設に合った人材を採用し続けることができます。</p>
					</div>
				</div>
		</div>
		<div class="l-answer part02">
			<div class="sec__inner">
				<div class="qaArea">
					<div class="qsubTtl">なんでそんなすごい人材と<br class="sp_br">たくさん出会えるの？</div>
					<div class="aTtl">インド政府機関の<br><span>NSDCIと業務提携</span>しているからです</div>
				</div>
				<div class="box box__wrapper">
					<div class="box__img">
						<img src="<?= get_template_directory_uri() ?>/img/l-answer__img-01.png" alt="">
					</div>
					<div class="box__bodyWrap">
						<div class="box__body">
							<div class="catch">世界で活躍するインド人材のキャリア支援を推進する<br class="pc_br">インド政府系機関と提携！</div>
							<p>インド国家技能開発公社（National Skill Development Corporation）の100%子会社であるNSDC International Limited（以下NSDCI）は、世界で活躍するインド人材のキャリア支援を推進するインド政府系機関。当社Zenkenは、介護分野等における特定技能人材の受入れ強化と定着促進のため、2023年3月にNSDCIとMOUを締結しました。</p>
						</div>
						<div class="box__body">
							<div class="catch">日本の介護現場で活躍する特定技能人材の<br>受入れ強化・定着支援で協働！</div>
							<p>具体的には、NSDCIがインドの首都デリー近郊の都市・グルグラムに設立した全寮制日本語研修センターで学んだ学生を、当社と協力し、特定技能介護ビザで日本に派遣。日本の介護現場で活躍するインド介護人材の育成から、日本の介護施設等への紹介、定着支援まで、雇用創出のための幅広い業務提携・協働を実現しています。</p>
						</div>
					</div>
				</div>
				<div class="box box__wrapper ct">
					<div class="box__body">
						<div class="catch">NSDC CEO兼NSDCインターナショナルMD<br>ヴェッド・マニ・ティワリ氏</div>
						<p>「インドの若者に包括的なトレーニングと雇用の機会を提供するために、このたびZenkenと提携できることを嬉しく思います。私たちNSDCインターナショナルでは、インドの若者たちのグローバルな雇用を成功させるために、日本での就労を可能とするスキル開発の重要性を強く認識しています。</p>
						<p>今回の提携は、インドと日本の文化交流を促進し、二国間関係を強化するための重要な一歩となります。インド人材は皆、厳しい語学・技能訓練を通じて、日本の職場環境で活躍するために必要な専門知識をしっかりと身につけることを目指しています。そして私たちは、そんな日本で働きたい多くのインドの若者たちの夢を実現できるよう、シームレスかつ継続的なサポートをお約束します。」 </p>
					</div>
					<div class="box__img">
						<img src="<?= get_template_directory_uri() ?>/img/l-answer__img-02.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="l-answer part03">
			<div class="sec__inner">
				<div class="qaArea">
					<div class="qsubTtl">せっかく採用できても…<br class="sp_br">ちゃんと定着してくれる？</div>
					<div class="aTtl">大充実の<span><br class="sp_br">定着支援サービス</span><br class="sp_br">を活用ください！</div>
				</div> 
				<div class="box box__wrapper">
					<div class="box__bodyWrap">
						<div class="box__body">
							<div class="catch">「介護福祉士」資格取得を強力に<br class="sp_br">バックアップ！Zenkenでしか受けられない<br><span class="pc">日本語教育プログラム</span><span class="marker forSP">日本語教育プログラム</span></div>
							<p>貴重な海外介護人材に、より長く・より活躍してもらうために…。国家資格「介護福祉士」資格の取得を力強くサポートする、質にこだわり抜いた<span>“海外介護人材専用の介護福祉士資格学習プログラム”</span>をご用意しています。</p>
						</div>
					</div>
					<div class="box__img">
						<img src="<?= get_template_directory_uri() ?>/img/l-answer__img-03.png" alt="">
					</div>
				</div>
				<div class="answerImgWrap">
					<div class="answerImgBox">
							<img src="<?= get_template_directory_uri() ?>/img/l-answer__img-04.png" alt="">
							<div class="answerImgText">
								<p class="answerCatch pc">
									<span>仲間と学ぶ「コホート学習」で</span>
									<span>挫折リスクを低減</span>
								</p>
								<p class="answerCatch sp">
									<span>仲間と学ぶ</span><br class="sp_br">
									<span>「コホート学習」で</span>
									<span>挫折リスクを低減</span>
								</p>
							</div>
					</div>
					<div class="answerImgBox">
							<img src="<?= get_template_directory_uri() ?>/img/l-answer__img-05.png" alt="">
							<div class="answerImgText">
								<p class="answerCatch pc">
									<span>レベル別コース＋試験対策</span>
									<span>無駄なく手厚く合格へ導く</span>
								</p>
								<p class="answerCatch sp">
									<span>レベル別コース＋</span><br class="sp_br">
									<span>試験対策</span>
									<span>無駄なく手厚く合格へ導く</span>
								</p>
							</div>
					</div>
					<div class="answerImgBox">
							<img src="<?= get_template_directory_uri() ?>/img/l-answer__img-06.png" alt="">
							<div class="answerImgText">
								<p class="answerCatch">
									<span>介護知識と日本語指導に</span>
									<span>精通した講師陣</span>
								</p>
							</div>
					</div>
					<div class="answerImgBox">
							<img src="<?= get_template_directory_uri() ?>/img/l-answer__img-07.png" alt="">
							<div class="answerImgText">
								<p class="answerCatch">
									<span>定期的に学習進捗を把握</span>
									<span>一人一人に寄り添う対応力</span>
								</p>
							</div>
					</div>
					<div class="answerImgBox">
							<img src="<?= get_template_directory_uri() ?>/img/l-answer__img-08.png" alt="">
							<div class="answerImgText">
								<p class="answerCatch">
									<span>語学教育に45年以上携わる</span>
									<span>当社がこだわり抜いた質</span>
								</p>
							</div>
					</div>
				</div>
				<div class="box box__wrapper">
					<div class="box__bodyWrap">
						<div class="box__body">
							<p class="answerCatch">
								<span>さらに…</span>
							</p>
							<div class="catch">受入れ施設側の日本人職員が海外人材と円滑に仕事するための<span class="pc">「やさしい日本語研修」</span><span class="marker forSP">「やさしい日本語研修」</span></div>
							<div class="box__img sp">
								<img src="<?= get_template_directory_uri() ?>/img/l-answer__img-09_sp.png" alt="">
							</div>
							<p>日本人が普段使っている言葉を外国人にもわかるよう簡単に言い換える「やさしい日本語」。日本人職員がこれを学ぶことで、意思疎通がスムーズになり、海外人材にとっても働きやすい環境を作れます。</p>
						</div>
					</div>
					<div class="box__img pc">
						<img src="<?= get_template_directory_uri() ?>/img/l-answer__img-09.png" alt="">
					</div>
				</div>
			</div>
			<div class="lower-bottom part02">
				<div class="heading_inner">
					<div class="frame-wrap">
						<div class="frame type-c">
							<div class="txtArea">
								<div class="frame-head">
									<div class="headTtl"><span class="small">Zenkenの</span><br><span>インド人介護人材支援サービス</span><br>に関する資料ダウンロードはこちら</div>
								</div>
								<div class="frame-body">
									<p class="btn-internal">
										<a href="<?php echo home_url(); ?>/form/shiryo/?type=india">いますぐ資料ダウンロード</a>
									</p>
								</div>
							</div>
							<div class= "imgWrap">
								<div class="imgTxt">
								今なら<br>「海外介護職員<br class="sp_br">雇用ガイドブック」<br>無料進呈中！
								</div>
								<div class="img_box">
									<img class="pc" src="<?=get_template_directory_uri()?>/img/catchbook02.png" alt="海外介護職員雇用ガイドブック" />
									<img class="sp" src="<?=get_template_directory_uri()?>/img/catchbook02_sp.png" alt="海外介護職員雇用ガイドブック" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="l-voice">
				<div class="sec__inner">
					<div class="headArea">
						<h2 class="ttl">
							<span>インド介護人材を採用された</span><br><span class="big">施設様の声</span>
						</h2>
					</div>
					<div class="box">
						<div class="num">▽▽▽▽●●●様（●●県▽▽市）</div>
						<div class="block__wrapper">
							<div class="block__img">
								<img src="<?= get_template_directory_uri() ?>/img/block__img-09.png" alt="">
							</div>
							<div class="block__body">
								<div class="block__textArea">
									<div class="block__catch">
									「38字以内を2行でキャッチキャッチキャッチキャッチキャッチ」
									</div>
									<p class="block__text">150文字テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="num">▽▽▽▽●●●様（●●県▽▽市）</div>
						<div class="block__wrapper">
							<div class="block__img">
								<img src="<?= get_template_directory_uri() ?>/img/block__img-09.png" alt="">
							</div>
							<div class="block__body">
								<div class="block__textArea">
									<div class="block__catch">
									「38字以内を2行でキャッチキャッチキャッチキャッチキャッチ」
									</div>
									<p class="block__text">150文字テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="lower-bottom part02">
					<div class="heading_inner">
						<div class="frame-wrap">
							<div class="frame type-c">
								<div class="txtArea">
									<div class="frame-head">
										<div class="headTtl"><span class="small">Zenkenの</span><br><span>インド人介護人材支援サービス</span><br>に関する資料ダウンロードはこちら</div>
									</div>
									<div class="frame-body">
										<p class="btn-internal">
											<a href="<?php echo home_url(); ?>/form/shiryo/?type=india">いますぐ資料ダウンロード</a>
										</p>
									</div>
								</div>
								<div class= "imgWrap">
									<div class="imgTxt">
									今なら<br>「海外介護職員<br class="sp_br">雇用ガイドブック」<br>無料進呈中！
									</div>
									<div class="img_box">
										<img class="pc" src="<?=get_template_directory_uri()?>/img/catchbook02.png" alt="海外介護職員雇用ガイドブック" />
										<img class="sp" src="<?=get_template_directory_uri()?>/img/catchbook02_sp.png" alt="海外介護職員雇用ガイドブック" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		<div class="l-attention">
			<div class="sec sec__head">
				<div class="sec__inner">
					<div class="headArea">
						<h2 class="ttl">
							なぜ<br class="sp_br"><span>インド介護人材</span><br class="sp_br">が熱いのか?
						</h2>
						<p>多言語国家でもあり、言語習得能力が高いインド人材。若年層の割合が非常に高く、海外志向が強い人材も豊富です。さらに「看護師大国」でもあり、看護の基礎知識や技術を有し、介護分野で活躍できる人材も多数存在します。<br>そんなインドと日本において、2021年に特定技能の協定が締結され、2022年に特定技能試験が開始。これからの日本の介護人材不足解消に大きく寄与するとことが予測されています。</p>
					</div>
					<div class="imgArea">
						<img class="pc" src="<?= get_template_directory_uri() ?>/img/graph01.png" alt="グラフ">
						<img class="sp" src="<?= get_template_directory_uri() ?>/img/graph01_sp.png" alt="グラフ">
						<p class="caption">引用元：United Nations, Department of Economic and Social Affairs, Population Division (2022). World Population Prospects 2022, Online Edition.</p>
					</div>
				</div>
			</div>
			<div class="sec sec__head02">
					<div class="sec__inner">
						<div class="attentionImgWrap">
							<div class="attentionImgBox">
								<img src="<?= get_template_directory_uri() ?>/img/attentionSample1.png" alt="">
								<div class="attentionImgText">
									<p class="attentionCatch">
										世界一の人口は28歳以下が半数<br>近年特定技能がスタート！
									</p>
									<p class="attentionTxt">
										世界一の人口国でありながら、平均年齢28歳(※1)と、若い人材が非常に豊富であることが特徴。近年スタートした介護職種の技能実習生や特定技能外国人への期待が高まっています。
									</p>
								</div>
							</div>
							<div class="attentionImgBox">
								<img src="<?= get_template_directory_uri() ?>/img/attentionSample2.png" alt="">
								<div class="attentionImgText">
									<p class="attentionCatch">
									看護を専門とする学生が多数！<br>海外で働きたい人材も豊富
									</p>
									<p class="attentionTxt">
									「介護は看護師の仕事」と認識されているインドには、国内に約315万人(※2)の看護師が存在しています。海外で働くことを希望する人材も多く、64万人(※3)もの看護師が国外での就職を果たしています。
									</p>
								</div>
							</div>
							<div class="attentionImgBox">
								<img src="<?= get_template_directory_uri() ?>/img/attentionSample3.png" alt="">
								<div class="attentionImgText">
									<p class="attentionCatch">
									インド東北地方は<br>日本文化との親和性が高い
									</p>
									<p class="attentionTxt">
									Zenkenがご紹介するのはインド北東部の人材中心。中国やミャンマー、ブータンなどと国境を接しており、東南アジアに近い文化を持つことが特徴で、日本での生活になじみやすいと注目されています。
									</p>
								</div>
							</div>
						</div>
						<p class="caption">
						※1出典：日本貿易進行機構(ジェトロ)地域・分析レポート<br>
						※2出典：経済産業省医療国際展開カントリーレポート<br>
						※3出典：辻田祐子編『看護師の国際労働移動―フィリピンとインドの比較』調査研究報告書 アジア 経済研究所 2018 年
						</p>
					</div>
			</div>
			<div class="sec sec__middle">
				<div class="sec__inner">
					<div class="headArea">
						<div class="imgArea">
							さらに<span class="visually-hidden">NSDCI</span>
  	          <img src="<?= get_template_directory_uri() ?>/img/nsdc_logo.png" class="logo-img" loading="lazy" alt="NSDCI" />と協業して
						</div>
						<h2 class="ttl">
						インド介護人材を<br class="sp_br"><span>選抜＆育成</span>
						</h2>
						<p>インド政府機関NSDCIと協業し、「看護大学/短大を卒業して日本で介護人材として働きたいインド人材」をスクリーニング。選抜人材だけを集めたクラスを編成し「日本での就業」に特化した実践的な日本語教育プログラムを研修します。内定後も、インド現地にて「介護福祉士」取得を目指す海外人材のための独自の教育プログラム(基礎)を研修。入国までの時間も無駄にさせません。</p>
					</div>
					<div class="box">
							<div class="num">
								STEP01.
							</div>
							<div class="box__wrapper">
								<div class="boxLeft">
									<div class="icoImg">
										<img src="<?= get_template_directory_uri() ?>/img/ico01.png" alt="">
									</div>
									<div class="borderBox">
										<div class="subCatch">看護知識と技術を<br>基礎から実践まで習得</div>
										<div class="boxName">看護大学・短大</div>
										<p class="boxTime">2年制または3年制</p>
									</div>
								</div>
								<div class="boxMiddle">
									<div class="flowImg">
										<img class="pc" src="<?= get_template_directory_uri() ?>/img/step1_flow.png" alt="">
										<img class="sp" src="<?= get_template_directory_uri() ?>/img/step1_flow_sp.png" alt="">
									</div>
									<div class="pointBox pc">
										<div class="subCatch">ここがポイント！</div>
										<p class="boxText">日本で働きたい動機、介護職に対する熱意、人柄、キャリア、資格取得への意欲、将来的なビジョンなど、日本の介護施設との親和性を確認。2度の面談で人材を厳しくスクリーニングします。</p>
									</div>
								</div>
								<div class="boxLight gr">
									<div	div class="icoImg">
										<img src="<?= get_template_directory_uri() ?>/img/ico02.png" alt="">
									</div>
									<div class="borderBox">
										<div class="subCatch">日本の介護施設との<br>親和性が高い</div>
										<div class="boxName"><span>選抜人材のみの<br class="sp_br">クラスを編成！</span></div>
										<ul class="boxList">
											<li>1.5～2か月に１クラス編成</li>
											<li>1.5～2か月に１クラス編成</li>
										</ul>
									</div>
								</div>
								<div class="boxMiddle sp">
								<div class="pointBox">
									<div class="subCatch">ここがポイント！</div>
										<p class="boxText">日本で働きたい動機、介護職に対する熱意、人柄、キャリア、資格取得への意欲、将来的なビジョンなど、日本の介護施設との親和性を確認。2度の面談で人材を厳しくスクリーニングします。</p>
									</div>
								</div>
							</div>
					</div>
					<div class="box">
							<div class="num">
								STEP 02.
							</div>
							<div class="box__wrapper">
								<div class="boxCenter">
									<div class="icoImg">
										<img src="<?= get_template_directory_uri() ?>/img/ico03.png" alt="">
									</div>
									<div class="borderBox">
										<div class="innerWrap">
											<div class="innerBox">
												<div class="subCatch">日本語や日本に関する教育に特化した<br>“日本で働く海外人材”のための独自の語学習得プログラム</div>
												<div class="boxName">日本語教育<br class="sp_br">プログラム</div>
												<p class="boxTime">約6ヶ月(約1,220時間)</p>
											</div>
											<div class="innerBox">
												<div class="innerBoxLeft">
													<div class="boxName">①日本語教育<span class="sm">(N5～N3レベル/コミュニケーション)</span></div>
													<p class="boxTime">約1,200時間</p>
												</div>
												<div class="innerBoxLight">
													<div class="boxName">②日本語実践研修 / <br class="sp_br">日本事情研修</div>
													<p class="boxTime">約20時間</p>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
					</div>
					<div class="box">
							<div class="num">
								STEP 03.
							</div>
							<div class="box__wrapper">
								<div class="boxLeft">
									<div class="icoImg">
										<img src="<?= get_template_directory_uri() ?>/img/ico04.png" alt="">
									</div>
									<div class="borderBox">
										<div class="subCatch">「介護福祉士」取得を目指す海外人材のための日本語教育プログラム</div>
										<div class="boxName">
											<span class="visually-hidden">ZENKENNIHONGO介護</span>
              				<p class="sitename"><img src="<?= get_template_directory_uri() ?>/img/logo.png" alt="ロゴ" /><br>基礎研修</p>
										</div>
										<p class="boxTime">約3ヶ月(約32時間)</p>
										<div class="pointBox">
										<div class="subCatch">ここがポイント！</div>
											<p class="boxText">日本で働きたい動機、介護職に対する熱意、人柄、キャリア、資格取得への意欲、将来的なビジョンなど、日本の介護施設との親和性を確認。2度の面談で人材を厳しくスクリーニングします。</p>
										</div>
									</div>
								</div>
								<div class="boxLight">
									<div	div class="icoImg">
										<img src="<?= get_template_directory_uri() ?>/img/ico05.png" alt="">
									</div>
									<div class="borderBox">
										<div class="subCatch">海外介護人材のスムーズな入国・入職を一人ひとりサポート</div>
										<div class="boxName">入国前オリエンテーション</div>
										<p class="boxTime">随時</p>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
			<div class="sec sec__bottom">
				<div class="sec__inner">
					<div class="attentionImgBox">
						<div class="attentionImgText">
							<p class="attentionCatch">
								<span class="sm">だからZenkenインド介護人材は</span><br>
								<span>人材の「質」が違います!</span>
							</p>
						</div>
						<img class="pc" src="<?= get_template_directory_uri() ?>/img/attentionSample4.png" alt="">
						<img class="sp" src="<?= get_template_directory_uri() ?>/img/attentionSample4_sp.png" alt="">
					</div>
				</div>
			</div>
			<div class="lower-bottom part02">
				<div class="heading_inner">
					<div class="frame-wrap">
						<div class="frame type-c">
							<div class="txtArea">
								<div class="frame-head">
									<div class="headTtl"><span class="small">Zenkenの</span><br><span>インド人介護人材支援サービス</span><br>に関する資料ダウンロードはこちら</div>
								</div>
								<div class="frame-body">
									<p class="btn-internal">
										<a href="<?php echo home_url(); ?>/form/shiryo/?type=india">いますぐ資料ダウンロード</a>
									</p>
								</div>
							</div>
							<div class= "imgWrap">
								<div class="imgTxt">
								今なら<br>「海外介護職員<br class="sp_br">雇用ガイドブック」<br>無料進呈中！
								</div>
								<div class="img_box">
									<img class="pc" src="<?=get_template_directory_uri()?>/img/catchbook02.png" alt="海外介護職員雇用ガイドブック" />
									<img class="sp" src="<?=get_template_directory_uri()?>/img/catchbook02_sp.png" alt="海外介護職員雇用ガイドブック" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="l-company">
			<div class="l-company__wrapper">
				<div class="company block sec__inner">
					<div class="headArea">
						<h2 class="ttl">
							<span>インド介護人材採用サービスを提供する</span><br>Zenkenとは？
						</h2>
					</div>
					<div class="block__wrapper">
						<div class="block__img-05">
							<img src="<?= get_template_directory_uri() ?>/img/block__img-05.png" alt="語学に教育に特化して45年以上だから質に自信があります">
						</div>
						<div class="block__header">
							<div class="block__title">語学教育に特化して45年以上<br>だから質に自信があります</div>
							<div class="block__textArea">

								<p class="block__text">当社が語学教育事業を始めたのは1975年。外国人の就職に特化した日本語学校の運営や、日本語企業研修など、その実績は多岐にわたります。<br>また登録支援機関であるため、特定技能外国人の日本語学習支援におけるノウハウも豊富。介護における日本語学習なら、当社にお任せください。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="company sec__inner">
				<div class="company-catch">
					Zenkenが運営する介護施設では<br>海外介護人材を積極的に採用しています。
				</div>
				<div class="companyWrap">
					<p class="companyText">
						<span class="small">だから、同じ介護施設運営事業者として</span><br><span>採用から受け入れ、教育、育成の<br class="sp_br">リアル</span>がわかります
					</p>
					<div class="companySample">
						<p class="companySampleText">
							Zenkenの介護分野におけるロールモデル施設では多くの海外介護人材が活躍しています。
						</p>
						<div class="companyImgWrap slider">
							<div class="companyImgBox">
								<img src="<?= get_template_directory_uri() ?>/img/companySample1.png" alt="">
								<div class="companyImgText">
									<p class="companyName">全研リビング久喜　壱番館</p>
									<p class="companyAddress">埼玉県久喜市本町5-10-26</p>
								</div>
							</div>
							<div class="companyImgBox">
								<img src="<?= get_template_directory_uri() ?>/img/companySample2.png" alt="">
								<div class="companyImgText">
									<p class="companyName">全研リビング久喜　壱番館</p>
									<p class="companyAddress">埼玉県久喜市本町5-10-26</p>
								</div>
							</div>
							<div class="companyImgBox">
								<img src="<?= get_template_directory_uri() ?>/img/companySample3.png" alt="">
								<div class="companyImgText">
									<p class="companyName">全研リビング久喜　壱番館</p>
									<p class="companyAddress">埼玉県久喜市本町5-10-26</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="l-flow">
			<div class="flow sec__inner">
				<div class="headArea">
          <h2 class="ttl">
						ワンストップサポートの導入の流れ
          </h2>
        </div>
				<div class="l-flow__block">
					<div class="item">
						<div class="item__wrapper">
							<div class="num">
								STEP01
							</div>
							<div class="subttl">お問い合わせ</div>
							<div class="item-text">
								フォームまたはお電話にてお気軽にお問い合わせください。
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item__wrapper">
							<div class="num">
								STEP02
							</div>
							<div class="subttl">無料相談の実施</div>
							<div class="item-text">
								担当者が無料相談を実施し、お客さまのご状況やお悩みをヒアリングいたします。
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item__wrapper">
							<div class="num">
								STEP03
							</div>
							<div class="subttl">ご契約</div>
							<div class="item-text">
								人材紹介や受け入れサポートなど実施事項に応じて契約を締結いたします。
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item__wrapper">
							<div class="num">
								STEP04
							</div>
							<div class="subttl">人材紹介・各種サポート実施</div>
							<div class="item-text">
								お客さまの抱える悩み、問題を解決できるようサポートいたします。
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	  <div class="l-question">
      <div class="qa sec__inner">
        <div class="headArea">
          <h2 class="ttl">
						よくある質問
          </h2>
        </div>
        <div class="qaArea">
          <div class="item">
            <div class="acc_btn is-open">
              <div class="q_txt">「特定技能」と「技能実習」の違いはなんですか？</div>
            </div>
            <div class="txt_box">
              <p class="a_txt">特定技能は「人手不足を解消するために」設置された制度で、技能実習は「海外人材の本国への技能移転」を目的とした制度です。<br>特定技能のほうが就労上の制限が少ないものの、これを取得するには、指定の試験に合格しなくてはいけません。入職時から一定の技能水準が必要です。<br class="sp_br">さらには活動内容、受入れ人数枠・人員基準への算定、受け入れコストなど様々な差があります。まずはお気軽にお問い合わせください。</p>
            </div>
          </div>
          <div class="item">
            <div class="acc_btn">
              <div class="q_txt">採用選考時には通訳が必要？</div>
            </div>
            <div class="txt_box">
              <p class="a_txt">10分前後の動画レッスンと復習や課題などで、1日30分〜60分程度と考えていただければよいと思います。ただし、介護福祉士対策については動画レッスンが長い場合があるので、自主学習の時間も長くなることが予想されます。</p>
            </div>
          </div>
          <div class="item">
            <div class="acc_btn">
              <div class="q_txt">ご入居様やご家族が不安に思うのでは？</div>
            </div>
            <div class="txt_box">
              <p class="a_txt">同じ教育プログラムに参加する個々の学習者同士が互いに学び合い、共同学習を進めるラーニング手法です。アメリカで広まり、近年では日本でも定着しはじめている教育方法です。一人で学習を進めるのではなく、同じ目標を持つ学習者同士が学び合うことで、モチベーションの維持にもつながります。コホート学習について詳しくはこちらをご覧ください。</p>
            </div>
          </div>
          <div class="item">
            <div class="acc_btn">
              <div class="q_txt">入職する海外人材は即戦力として働いてもらえますか？</div>
            </div>
            <div class="txt_box">
              <p class="a_txt">はい、可能です。受講者の学習進捗状況として、動画の視聴日時、時間、ライブ授業の出席状況、授業での様子をご報告いたします。</p>
            </div>
          </div>
					<div class="item">
            <div class="acc_btn">
              <div class="q_txt">人材紹介の場合、入社までどのくらいの時間がかかりますか？</div>
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
<?php include(STYLESHEETPATH . '/inc/lower_bottom_lp.php'); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>