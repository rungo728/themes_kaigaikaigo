/*==============================================
  header menu
==============================================*/
$(function () {
  $(".hbMenu,.overlay").click(function () {
    $("#headerArea").toggleClass("hb-open");
  });
  $(function () {
    let menuBtn = $(".hbMenu");
    menuBtn.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 400) {
        menuBtn.fadeIn();
      } else {
        menuBtn.fadeOut();
      }
    });
  });

  //アンカーリンクを押したとき(aタグのhref属性の値に「#」が含まれている場合)
  $(".g-nav a[href *= '#']").click(function () {
    $("#headerArea").toggleClass("hb-open");
  });
});

/*==============================================
  slick
==============================================*/
$(function () {
  var windowWidth = $(window).width();
  var slidesToShow = windowWidth < 480 ? 1 : 3;

  $(".sec07_slider").slick({
    autoplay: false,
    infinite: true,
    slidesToShow: slidesToShow,
    slidesToScroll: 1,
    speed: 800,
    autoplaySpeed: 5000,
    arrows: true,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    dots: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    pauseOnDotsHover: false,
    cssEase: "linear",
  });
});
$(document).ready(function () {
  if ($(window).width() <= 480) {
    // 480px以下の場合にスライダーを有効化
    $(".slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true, // ドットナビゲーションを表示
      customPaging: function (slider, i) {
        return '<button class="custom-dot"></button>';
      },
      centerMode: true, // 中央に表示
    });
  } else {
    // 480pxより大きい場合は通常の表示を維持
  }
});

// ウィンドウのリサイズ時にスライダーの状態を再評価
$(window).resize(function () {
  if ($(window).width() <= 480) {
    if (!$(".slider").hasClass("slick-initialized")) {
      // 未初期化の場合にスライダーを有効化
      $(".slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        customPaging: function (slider, i) {
          return '<button class="custom-dot"></button>';
        },
        centerMode: true, // 中央に表示
        variableWidth: true, // 可変幅に設定
      });
    }
  } else {
    // 480pxより大きい場合はスライダーが初期化されていれば破棄
    if ($(".slider").hasClass("slick-initialized")) {
      $(".slider").slick("unslick");
    }
  }
});

/*==============================================
 アコーディオン
==============================================*/
$(function () {
  $(".sec06 .acc_btn" && ".l-question .acc_btn").on("click", function () {
    $(this).next().slideToggle(500);
    $(this).toggleClass("is-open");
  });
});

/*==============================================
  smoothScroll 
==============================================*/
$(function () {
  // #で始まるアンカーをクリックした場合に処理
  $('a[href^="#"]:not(.modalBox)').click(function () {
    // スクロールの速度
    var scrollSpeed = 400; // ミリ秒
    // アンカーの値取得
    var href = $(this).attr("href");
    // 移動先を取得
    var target = $(href === "#" || href === "" ? "html" : href);
    // 移動先を数値で取得
    var position = target.offset().top - $("header").outerHeight() - 50;
    console.log(position);
    // スムーススクロール
    $("body,html").animate({ scrollTop: position }, scrollSpeed, "swing");
    return false;
  });
});

/*==============================================
  ID付きURLをふんできた時の表示位置調整
==============================================*/
$(function () {
  // URLにIDが付いていたら
  if (location.hash) {
    console.log(location.hash);
    //130px下にずらす
    var headerHight = 130;
    //ターゲットの位置を取得
    var targetId = location.hash;
    var target = $(targetId).offset().top - headerHight;
    //移動
    $("html, body").animate({ scrollTop: target }, 0);
  }
});
// 問い合わせフォーム入力エラーの場合一番上まで戻る;
document.addEventListener(
  "wpcf7invalid",
  function () {
    var position = $(".form_inputBox").offset().top; //ここはエラーが出た最上段を指定する。
    $("html, body").animate(
      {
        scrollTop: position,
      },
      700
    );
  },
  false
);
// URLコピーボタン
window.onload = function () {
  document.getElementById("copy-page").onclick = function () {
    $(document.body).append('<textarea id="copyTarget" style="position:absolute; left:-9999px; top:0px;" readonly="readonly">' + location.href + "</textarea>");
    let obj = document.getElementById("copyTarget");
    let range = document.createRange();
    range.selectNode(obj);
    window.getSelection().addRange(range);
    document.execCommand("copy");
    document.getElementById("cAction").innerHTML = "URLをコピーする";
  };
};
// 追尾バナー
$(window).scroll(function () {
  var hH = $(window).height();
  if ($(this).scrollTop() > hH) {
    $(".index-banner_pc").fadeIn();
  } else {
    $(".index-banner_pc").fadeOut();
  }
});
// MODAL
$(function () {
  $(".modalBox").modaal({
    background: "#000",
    overlay_opacity: "0.7",
    background_scroll: "false",
  });
});
