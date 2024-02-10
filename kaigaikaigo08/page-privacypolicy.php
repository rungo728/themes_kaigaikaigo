<?php
/*
Template Name: inquiry
*/
// Rest of code
?>
<?php
//title
global $title;
$title = "プライバシーポリシー";

//description
global $description;
$description = "";

//bodyに定義するページID
global $pageID;
$pageID = "privacypolicy";

//cssファイル名
global $css;
$css = "form.css";
?>
<?php get_header(); ?>
<div class="visArea_form privacypolicy">
	<div class="mainArea">
		<div class="mainArea__inner">
			<div class="sitename">Zenken Global Careerの<br class="sp_br">プライバシーポリシー</div>
		</div>
	</div>
</div>
<div id="contents-wrapper" class="privacypolicy">
	<div class="contents">
		<div class="sec__inner">
			<div class="summaryBox">
				<div class="box__inner">
					<p>Zenken Global Careerの運営会社であるZenken株式会社（以下「当社」）が取得した個人情報は以下の目的以外には<br class="pc_br">一切使用しません。<br />・当社の提供するサービスに関連する資料の送付 <br />・当社のサービスに関するお知らせやセミナーのご案内 <br />・当社の新サービスのご案内<br />上記で明示した利用目的以外の利用が発生する場合には、その都度、改めて同意を取得します。</p>
					<p>また、取得した個人情報を当社と契約関係にある第三者の企業に当社サービスの調査・分析の目的で提供する場合があります。</p>
					<p>上記当社の利用目的、第三者提供、<br class="sp_br" /><a href="https://www.zenken.co.jp/privacypolicy/" target="_blank">個⼈情報保護ポリシー</a>、<a href="https://www.zenken.co.jp/privacypolicy/treatment/" target="_blank">個⼈情報のお取り扱いについて</a><br class="pc_br" />同意するとして送信してください。</p>
					<p>なお、個人情報の当社への提供は、ご自身の判断にてお願いしていますが、当社の業務上、<br>必要な情報をいただけない場合には、当社から十分なサービスをご提供できない場合があります。</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>