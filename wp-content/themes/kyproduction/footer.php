<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

<section id="flow">
  <div class="sec bg-color">
    <div class="wrap txt-c">
      <div class="sec bg-fff">
        <p class="ttl-sub fadein">ENTRY<span>エントリー</span></p>
        <h2 class="ttl2 fadein">まずはKYプロダクションの<br class="pc">LINE@を登録</h2>
        <p class="sp-txt-c fadein">私たちに興味を持ってくださった方は、まずKYプロダクションが運営しているLINE＠にご登録ください。<br class="pc">週一回で社内情報やイベント情報をメルマガで配信いたします。</p>
        <ul class="flex mt-3">
          <li>
            <img src="<?php echo $wp_url; ?>/lib/images/common/flow01.svg" alt="流れのアイコン01">
            <p class="mt-1">LINE@に登録</p>
          </li>
          <li>
            <img src="<?php echo $wp_url; ?>/lib/images/common/flow02.svg" alt="流れのアイコン02">
            <p class="mt-1">メルマガを確認</p>
          </li>
          <li>
            <img src="<?php echo $wp_url; ?>/lib/images/common/flow03.svg" alt="流れのアイコン03">
            <p class="mt-1">イベントに参加</p>
          </li>
          <li>
            <img src="<?php echo $wp_url; ?>/lib/images/common/flow04.svg" alt="流れのアイコン04">
            <p class="mt-1">面談の申込</p>
          </li>
        </ul>
        <img class="txt-c mt-5" src="<?php echo $wp_url; ?>/lib/images/common/line_btn.svg" alt="ラインボタン">
      </div>
    </div>
  </div>
</section>

<section id="link" class="flex">
  <div class="txt-c">
    <h2 class="ttl2 fff">アロマエステ事業部</h2>
    <p class="txt-l fff">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
    <div class="btn">
      <a href="<?php echo $wp_url; ?>/aroma">VIEW MORE</a>
    </div>
  </div>
  <div class="txt-c">
    <h2 class="ttl2 fff">Webプロモーション事業部</h2>
    <p class="txt-l fff">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
    <div class="btn">
      <a href="<?php echo $wp_url; ?>/promotion">VIEW MORE</a>
    </div>
  </div>
</section>

<!-- フッター -->
<footer id="footer" class="sec">
  <img src="<?php echo $wp_url; ?>/lib/images/common/logo_blue.svg" alt="ロゴ" class="mb-1">
  <div class="flex link-wrap">
    <div class="gray">
    <p>FOLLOW US / <a href="" target="_blank">LINE@</a></p>
    <p>© KY-PRODUCTION Co.,Ltd.</p>
    </div>
    <div class="txt-r pc">
      <ul class="flex mb-1">
        <li><a href="<?php echo $home; ?>/company">会社概要</a></li>
        <li><a href="<?php echo $home; ?>/interview">インタビュー</a></li>
        <li><a href="<?php echo $home; ?>/working">働き方について</a></li>
        <li><a href="<?php echo $home; ?>/training">研修内容</a></li>
        <li><a href="<?php echo $home; ?>/salary">給与について</a></li>
      </ul>
      <ul class="flex">
        <li><a href="<?php echo $home; ?>/aroma">アロマエステ事業部</a></li>
        <li><a href="<?php echo $home; ?>/promotion">WEBプロモーション事業部</a></li>
        <li><a href="<?php echo $home; ?>/sitemap">サイトマップ</a></li>
        <li><a href="<?php echo $home; ?>/privacy-policy">プライバシーポリシー</a></li>
      </ul>
    </div>
  </div>
</footer>
<!-- フッター終了 -->
<?php wp_footer(); ?>
<script src="<?php echo $wp_url; ?>/lib/js/jquery.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/fade.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<script>
// Scroll event
$(window).on('load scroll', function() {
  var s = $(window).scrollTop();
  if (s >= 100) {
    $('#header').addClass('scroll-on');
  } else {
    $('#header').removeClass('scroll-on');
  }
});


//グローバルメニュー
$('.nav-button').on('click',function(){
  if( $(this).hasClass('active') ){
    $(this).removeClass('active');
    $('.nav-wrap').addClass('close').removeClass('open');
  }else {
    $(this).addClass('active');
    $('.nav-wrap').addClass('open').removeClass('close');
  }
});

//フェードイン
jQuery(function(){
    jQuery(window).scroll(function (){
        jQuery('.fadein').each(function(){
            var elemPos = jQuery(this).offset().top;
            var scroll = jQuery(window).scrollTop();
            var windowHeight = jQuery(window).height();
            if (scroll > elemPos - windowHeight + 0){
                jQuery(this).addClass('scrollin');
            }
        });
    });
    jQuery(window).scroll();
  });

//ローディング
$('head').append(
    '<style type="text/css">#container { display: none; } #fade, #loader { display: block; }</style>'
);

jQuery.event.add(window,"load",function() { // 全ての読み込み完了後に呼ばれる関数
    var pageH = $("#container").height();

    $("#fade").css("height", pageH).delay(900).fadeOut(800);
    $("#loader").delay(600).fadeOut(300);
    $("#container").css("display", "block");
});
</script>
</div>
</main>
</body>
</html>
