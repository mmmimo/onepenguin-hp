//logoの表示
jQuery(window).on('load',function(){
    $("#splash").delay(1300).fadeOut('slow');//ローディング画面を1.5秒（1500ms）待機してからフェードアウト
    $("#splash_logo").delay(1200).fadeOut('slow');//ロゴを1.2秒（1200ms）待機してからフェードアウト
  });


  // 「テキストスライドイン1」

  function slideAnime(){
    //====右に動くアニメーションここから===
      $('.rightAnime').each(function(){
              var elemPos = $(this).offset().top-50;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
              if (scroll >= elemPos - windowHeight){
              // 右から左へ表示するクラスを付与
              // テキスト要素を挟む親要素（右側）とテキスト要素を元位置でアニメーションをおこなう
              $(this).addClass("slideAnimeRightLeft ");
              // 要素を右枠外にへ移動しCSS アニメーションで右から元の位置に移動
              $(this).children(".rightAnimeInner").addClass("slideAnimeLeftRight");
              // 子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
              }else{
              // 右から左へ表示するクラスを取り除く
              $(this).removeClass("slideAnimeRightLeft ");
              $(this).children(".rightAnimeInner").removeClass("slideAnimeLeftRight");
              }
              });
    }
  
    // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function (){
      slideAnime();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面をスクロールをしたら動かしたい場合の記述
  
    // 画面が読み込まれたらすぐに動かしたい場合の記述
    $(window).on('load', function(){
      slideAnime();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述



  // 「テキストアニメーション2」
// blurTriggerにblurというクラス名を付ける定義

function BlurTextAnimeControl() {
	$('.blurTrigger').each(function(){ //blurTriggerというクラス名が
		var elemPos = $(this).offset().top;//要素より、50px上の
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if ( scroll >= elemPos - windowHeight){
		$(this).addClass('blur');// 画面内に入ったらblurというクラス名を追記
		}
		});
}



// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
	BlurTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
	BlurTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
