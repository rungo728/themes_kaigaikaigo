<?php
/*
Template Name: cofort
*/
// Rest of code
?>
<?php
//title
global $title;
$title = "ZENKEN NIHONGO 介護のコホート学習 | ZENKEN介護";

//description
global $description;
$description = "海外介護人材向けの日本語教育「ZENKEN NIHONGO 介護」の学習スタイル「コホート学習」をご紹介します。「ZENKEN NIHONGO 介護」は介護職に特化した日本語能力向上のためのカリキュラムをコホート学習方式で進めます。";

//bodyに定義するページID
global $pageID;
$pageID = "cohort";

//cssファイル名
global $css;
$css = "l-cohort.css";
?>
<?php get_header(); ?>

<div class="pankuzu-wrapper">
	<?php the_breadcrumb() ?>
</div>
<div class="visArea_lower cohort">
	<div class="mainArea">
		<div class="mainArea__inner">
			<h1>
				<span class="visually-hidden">ZENKENNIHONGO介護</span>
				<div class="sitename"><img src="<?= get_template_directory_uri() ?>/img/logo.png" alt="ロゴ" class="logo-img" />の<br>コホート学習</div>
			</h1>
		</div>
	</div>
</div>
<div id="contents-wrapper" class="cohort">
	<div class="contents">
		<div class="l-learning">
			<div class="sec__inner">
				<div class="sec__head">
					<div class="titArea">
						<h2 class="tit problem-catch">動画配信やオンライン授業は、<br>便利ではあるけれど…</h2>
					</div>
				</div>
				<div class="sec__body">
					<div class="block">
						<div class="box col2 problem-box-left">
							<div class="problem-box-wrapper">
								<div class="box-head">
									<h3 class="subtit"><span>ライブ授業</span>のみの学習</h3>
								</div>
								<div class="box-body">
									<div class="listArea">
										<ul>
											<li>スケジュールが拘束される</li>
											<li>授業のスピードについていけず、モチベーションが下がる</li>
											<li>時間の制約があるので十分な質疑応答ができない</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="box col2 problem-box-right">
							<div class="problem-box-wrapper">
								<div class="box-head">
									<h3 class="subtit"><span>動画視聴</span>のみの学習</h3>
								</div>
								<div class="box-body">
									<div class="listArea">
										<ul>
											<li>集中力が続かない</li>
											<li>実際に手を動かして考えるというアクティブな学習がやりにくい</li>
											<li>講師に直接質問したり、フィードバックを得る機会がない</li>
											<li>深い理解や記憶に必要な情報の反芻や消化が不十分になりがち</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="l-style">
			<div class="sec__head">
				<div class="titArea">
					<h2 class="tit"><span>受講者のモチベーションを高く保ち、<br class="sp_br">修了まで併走する</span>「コホート学習」<span class="sm">とは</span></h2>
					<p>「コホート」と呼ばれるグループ単位でオンラインコースを受ける学習スタイル。<br>同じ目標を持つ他の参加者と同じペースで学ぶことで、<br class="pc_br">高い学習効果とモチベーションの維持につながると、世界的にも注目を集めています。</p>
				</div>
			</div>
			<div class="l-feature">
				<div class="sec__inner">
					<div class="sec__body">
						<h2 class="subtit">
							<span>コホート学習</span>の特徴
						</h2>
						<div class="boxArea">
							<div class="box col3">
								<div class="imgBox">
									<img class="pc" src="<?= get_template_directory_uri() ?>/img/l-feature01.png" alt="協働学習によるモチベーション維持と学習効果がアップ">
									<img class="sp" src="<?= get_template_directory_uri() ?>/img/l-feature01_sp.png" alt="協働学習によるモチベーション維持と学習効果がアップ">
								</div>
								<h3 class="box-tit">協働学習により、<br class="pc_br">学習効果アップ・<br>モチベーション維持が可能</h3>
								<p>グループ内でのお互いに刺激を与えながら学び合ってフィードバックを受けたり、⽇々の業務で実践したりすることで理解が深まり、問題解決能⼒が促進されます。</p>
							</div>
							<div class="box col3">
								<div class="imgBox">
									<img class="pc" src="<?= get_template_directory_uri() ?>/img/l-feature02.png" alt="一緒に問題解決し知識の理解度と定着度を高められる">
									<img class="sp" src="<?= get_template_directory_uri() ?>/img/l-feature02_sp.png" alt="一緒に問題解決し知識の理解度と定着度を高められる">
								</div>
								<h3 class="box-tit">一緒に問題解決し<br>知識の理解度と定着度を<br class="pc_br">高められる</h3>
								<p>グループの学習者同士が同じ経験を共有し、同じ問題を一緒に解決することで、学びが深まり、知識の定着が促されます。また、他の学生からのフィードバックや視点により、広く深い理解を得ることができます。</p>
							</div>
							<div class="box col3">
								<div class="imgBox">
									<img class="pc" src="<?= get_template_directory_uri() ?>/img/l-feature03.png" alt="構造化されたシステムで進捗状況が把握しやすい">
									<img class="sp" src="<?= get_template_directory_uri() ?>/img/l-feature03_sp.png" alt="構造化されたシステムで進捗状況が把握しやすい">
								</div>
								<h3 class="box-tit">構造化されたシステムで<br>進捗状況が把握しやすい</h3>
								<p>コホート学習は、学生が一緒に学び、同時に進んでいくため、教育システムが構造化されています。そのため、学生一人一人の進捗状況を把握しやすく、学習支援も効果的に行うことが可能です。</p>
							</div>
						</div>
						<div class="block">
							<div class="block__inner">
								<div class="block__wrapper">
									<div class="block__header">
										<div class="title-point">ポイント！</div>
										<h3 class="block__title">コホート学習によって学習プログラムの修了率<span class="big">10%未満→97%に！</span></h3>
										<div class="block__img-01 sp">
											<img src="<?= get_template_directory_uri() ?>/img/l-feature__img-01_sp.png" alt="コホート学習によって学習プログラムの修了率10%未満→97%に！">
										</div>
										<div class="block__text">
											アメリカで注目されている短期集中のオンラインプログラム「altMBA」は、これまでの個別にオンライン講座を受けるセルフラーニング（独学）の形から、コホート型の学習方法を取り入れたことで修了率が97％になったと発表しています。従来のオンライン講座同様、自分のペースで学習できる動画レッスンの利点を残しつつ、定期的なライブ授業による受講者同士のセッション、講師からのフィードバックを組み合わせることで、学習効果を最大化させることができます。
										</div>
									</div>
									<div class="block__img-01 pc">
										<img src="<?= get_template_directory_uri() ?>/img/l-feature__img-01.png" alt="コホート学習によって学習プログラムの修了率10%未満→97%に！">
									</div>
								</div>
								<div class="box box__wrapper">
									<div class="box__img pc">
										<img src="<?= get_template_directory_uri() ?>/img/l-feature__img-02.png" alt="個別学習（動画レッスン）とライブ授業（オンラインレッスン）の融合">
									</div>
									<div class="box__body">
										<h4 class="catch">
											個別学習（動画レッスン）と<br>ライブ授業（オンラインレッスン）の融合
										</h4>
										<div class="box__img sp">
											<img src="<?= get_template_directory_uri() ?>/img/l-feature__img-02_sp.png" alt="個別学習（動画レッスン）とライブ授業（オンラインレッスン）の融合">
										</div>
										<p>ZENKEN NIHONGO 介護のカリキュラムは個人で行う動画レッスンと、グループで行うライブ授業(オンラインレッスン)で構成されています。<br>これによりグループの学習の進度を揃え、共通の目標に向かって一緒に学ぶ仲間同士で刺激を与えながら学び合うことができるため、高い学習効果を生み出します。</p>
									</div>
								</div>
								<div class="box box__wrapper fr">
									<div class="box__body">
										<h4 class="catch">
											日々の仕事で実践し<br class="sp_br">学習効果アップ
										</h4>
										<div class="box__img sp">
											<img src="<?= get_template_directory_uri() ?>/img/l-feature__img-03_sp.png" alt="日々の仕事で実践し学習効果アップ">
										</div>
										<p>レッスンで学んだことを日々の業務の中で実践することで、得た知識が定着し、学習効果をさらに上げることができます。そして実践で得た経験やそこから学んだことをライブ授業の場でアウトプットしたり、他者からフィードバックをもらうことでより学習へのモチベーションを維持することができます。</p>
									</div>
									<div class="box__img pc">
										<img src="<?= get_template_directory_uri() ?>/img/l-feature__img-03.png" alt="個別学習（動画レッスン）とライブ授業（オンラインレッスン）の融合">
									</div>
								</div>
								<div class="box box__wrapper ct">
									<div class="box__img ct pc">
										<img src="<?= get_template_directory_uri() ?>/img/l-feature__img-04.png" alt="個別学習（動画レッスン）とライブ授業（オンラインレッスン）の融合">
									</div>
									<div class="box__img ct sp">
										<img src="<?= get_template_directory_uri() ?>/img/l-feature__img-04_sp.png" alt="個別学習（動画レッスン）とライブ授業（オンラインレッスン）の融合">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="l-program">
			<div class="sec__inner">
				<div class="block">
					<div class="block__inner">
						<div class="titArea">
							<h2 class="tit">
								<span class="sm">コホート学習を取り入れた</span><br>
								<span class="visually-hidden">ZENKENNIHONGO介護</span>
								<img src="<?= get_template_directory_uri() ?>/img/logo.png" class="logo-img" loading="lazy" alt="ZENKENNIHONGO介護" /><br class="sp_br" />のカリキュラム
							</h2>
						</div>
						<div class="box__wrapper ct">
							<div class="box__img ct pc">
								<img src="<?= get_template_directory_uri() ?>/img/l-program__img-01.png" alt="個別学習（動画レッスン）とライブ授業（オンラインレッスン）の融合">
							</div>
							<div class="box__img ct sp">
								<img src="<?= get_template_directory_uri() ?>/img/l-program__img-01_sp.png" alt="個別学習（動画レッスン）とライブ授業（オンラインレッスン）の融合">
							</div>
						</div>
						<div class="box__header">
							<h3 class="box__title">受講者の声</h3>
						</div>
						<div class="box box__wrapper fl">
							<div class="box__img">
								<img src="<?= get_template_directory_uri() ?>/img/l-program__img-02.png" alt="個別学習（動画レッスン）とライブ授業（オンラインレッスン）の融合">
								<div class="box__img-name">Bella Safira Putri <br>(ベラ サフィラ プトリ)</div>
							</div>
							<div class="box__body">
								<div class="catch">
									「使える日本語」が身につく
								</div>
								<p>ZENKEN NIHONGO介護の動画レッスンはとても役に立ちます。動画で勉強してからライブ授業に参加するので、とてもわかりやすいです。ライブ授業では友達と一緒に勉強できるし、先生とみんなで介護の仕事についていろいろお話しできて楽しいです。<br>勉強を始めてから、利用者様とコミュニケーションを取る時に自分で話題をあげることができるようになりました。もっと勉強して、将来は介護福祉士の試験に合格したいです。</p>
								<p class="caption">(2023年3月来日「介護の基本」受講)</p>
							</div>
						</div>
						<div class="box box__wrapper fr">
							<div class="box__body">
								<div class="catch">
									仲間と一緒に学ぶことで頑張れた
								</div>
								<p>初めて介護の日本語を勉強するので、ZENKEN NIHONGO 介護で新しいことをたくさん学んでいます。介助のときの声がけや注意点、コミュニケーションなど、学んだことは仕事で役に立っています。少しずつ慣れて、仕事がやりやすくなりました。<br>漢字と介護の言葉はちょっと難しいですが、みんなと一緒に勉強しているので、頑張れます。動画レッスンもライブ授業も全部日本語で勉強しますが、先生の説明は、外国人にもわかりやすいです。介護福祉士の資格を取って、長く日本で働くために、がんばります。</p>
								<p class="caption">(2023年3月来日「介護の基本」受講)</p>
							</div>
							<div class="box__img">
								<img src="<?= get_template_directory_uri() ?>/img/l-program__img-03.png" alt="個別学習（動画レッスン）とライブ授業（オンラインレッスン）の融合">
								<div class="box__img-name">Maya Anggraeni<br>(マヤ アングラエニ)</div>
							</div>
						</div>
						<div class="box box__wrapper fl">
							<div class="box__img">
								<img src="<?= get_template_directory_uri() ?>/img/l-program__img-04.png" alt="個別学習（動画レッスン）とライブ授業（オンラインレッスン）の融合">
								<div class="box__img-name">Risma<br>(リスマ)</div>
							</div>
							<div class="box__body">
								<div class="catch">
									楽しんで学べる、<br class="sp_br">学びがすぐ役に立つ
								</div>
								<p>私の夢は、介護福祉士の試験に合格して、日本でプロとして長く働き続けることです。<br>介護の日本語には難しい言葉があるのですが、勉強は楽しいです。動画レッスンでは、詳しい説明があったり、例もあったり、画像もあったりして、面白くて飽きることはありません。ライブ授業では毎回違う先生に会えるので、いつも楽しみにしています。先生はみんな優しいです。例えば日本の季節や名所の話など、ZENKEN NIHONGO 介護で勉強したことは、次の日に利用者様との会話の話題になるので、役に立ちます。</p>
								<p class="caption">(2023年3月来日「介護の基本」受講)</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="l-shiryo">
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
		<div class="l-leading">
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
				<div class="btnArea">
					<p class="btn-internal page-in">
						<a href="<?php echo home_url(); ?>/nihongo">日本語教育プログラム<br>TOPに戻る</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include(STYLESHEETPATH . '/inc/lower_bottom.php'); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?> 