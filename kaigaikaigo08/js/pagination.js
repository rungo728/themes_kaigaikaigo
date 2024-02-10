jQuery(document).ready(function ($) {
  //prevBtnを非表示にする。
  $(".prevBtn").hide();
  //.postBoxを取得する。
  var postBox = $(".postBox");
  //postBoxの数を取得する。
  var postBoxNum = postBox.length;
  console.log(postBoxNum);
  //0以上の場合
  if (postBoxNum > 0) {
    //12個以上の要素を非表示にする。
    postBox.slice(12).hide();
  }
  $(document).on("click", ".page-numbers", function (e) {
    e.preventDefault();
    //#listContents迄スクロールする。
    $("html, body").animate(
      { scrollTop: $("#listContents").offset().top },
      500
    );

    //クリックされたa要素の値を取得する。
    var page = $(this).text();
    // console.log("押されたリンク",page);

    //paginationのcurrentクラスを取得する。
    var current = $(".pagination .current").text();
    // console.log("現在のページ",current);

    //currentクラスを削除する。
    $(".pagination .current").removeClass("current");

    //全ての.numBtnを取得する。
    var numBtn = $(".numBtn");

    /**
     * コンテンツの表示切り替え処理群
     */
    //押された要素のテキストが数字の場合
    if ($.isNumeric(page)) {
      //押された要素にcurrentクラスを追加する。
      $(this).addClass("current");
      //postBoxの要素を非表示にする。
      postBox.hide();
      //postBoxの要素を表示する。
      postBox.slice(12 * (page - 1), 12 * page).show();
    } else {
      //押された要素が数字以外の場合
      //classを取得する。
      var btnClass = $(this).attr("class");
      // console.log("class",btnClass);
      var prevPage;
      var nextPage;
      //classの値によって処理を分岐する。
      if (btnClass.indexOf("prevBtn") != -1) {
        //prevBtnの場合
        //現在のページの前のページを取得する。
        prevPage = current - 1;
        // console.log("前のページ",prevPage);
        //numBtnのprevPage番目にcurrentクラスを追加する。
        numBtn.eq(prevPage - 1).addClass("current");
        //currentの値をprevPageにする。
        current = prevPage;
      } else if (btnClass.indexOf("nextBtn") != -1) {
        //nextBtnの場合
        //現在のページの次のページを取得する。
        nextPage = parseInt(current) + 1;
        // console.log("次のページ",nextPage);
        //numBtnのnextPage番目にcurrentクラスを追加する。
        numBtn.eq(nextPage - 1).addClass("current");
        //currentの値をnextPageにする。
        current = nextPage;
      } else {
        //prevBtnとnextBtn以外の場合
        //なにもしない。
      }
      //表示切り替え
      postBox.hide();
      postBox.slice(12 * (current - 1), 12 * current).show();
    }

    /**
     * ページネーションの表示切り替え処理群
     */
    //currentの値を取得する。
    current = $(".pagination .current").text();
    console.log("現在のページ", current);
    //最大ページ数を取得する。
    var maxPage = numBtn.length;

    //currentの値が1の場合
    if (current == 1) {
      //prevBtnを非表示にする。
      $(".prevBtn").hide();
      //nextBtnを表示する。
      $(".nextBtn").show();
    } else if (current == maxPage) {
      //currentの値がmaxPageの場合
      //prevBtnを表示する。
      $(".prevBtn").show();
      //nextBtnを非表示にする。
      $(".nextBtn").hide();
    }else{
      //currentの値が1でもmaxPageでもない場合
      //prevBtnを表示する。
      $(".prevBtn").show();
      //nextBtnを表示する。
      $(".nextBtn").show();
    }
  });
});
