<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
  <section id="about" class="sec bg-color">
    <div class="wrap">
      <h2 class="main-color fadein">会社についての<br>タイトルが入ります。</h2>
      <p class="eng mb-3 main-color fadein">About title About title</p>
      <p class="main-color fadein">会社のかんたんな事業内容や活動場所についてのテキストが入ります。会社のかんたんな事業内容や活動場所についてのテキストが入ります。<br>会社のかんたんな事業内容や活動場所についてのテキストが入ります。会社のかんたんな事業内容や活動場所についてのテキストが入ります。<br>会社のかんたんな事業内容や活動場所についてのテキストが入ります。会社のかんたんな事業内容や活動場所についてのテキストが入ります。<br>会社のかんたんな事業内容や活動場所についてのテキストが入ります。会社のかんたんな事業内容や活動場所についてのテキストが入ります。</p>
      <div class="btn fadein">
        <a href="<?php echo $wp_url; ?>/aroma">VIEW MORE</a>
      </div>
    </div>
  </section>

  <section id="workstyle" class="bg-blue">
    <div class="layout01 photo-left">
      <div class="img-wrap"></div>
      <div class="sec">
      <div class="wrap">
        <p class="ttl-sub fadein">WORK style<span>働き方について</span></p>
        <h2 class="ttl2 fff txt-l fadein">10年後の自分を<br>イメージしながら働く</h2>
        <p class="fff txt-l fadein">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        <div class="btn fadein">
          <a href="<?php echo $wp_url; ?>/aroma">VIEW MORE</a>
        </div>
      </div>
      </div>
    </div>
  </section>

  <div id="interview" class="sec bg-color layout02">
    <div class="wrap">
      <div class="img-wrap fadein"><img src="<?php echo $wp_url; ?>/lib/images/top/interview01.png" alt="やり甲斐を感じながら常に前を向いて働ける"></div>
      <div class="shadow bg-fff fadein">
        <p class="ttl-sub">interview</p>
        <p class="main-color b txt-l mb-1">やり甲斐を感じながら<br>常に前を向いて働ける</p>
        <p class="gray">岩井 〇〇  30歳<br>前職　飲食店店長</p>
      </div>
    </div>
  </div>

  <section id="training">
    <div class="layout01 bg-fff photo-right">
      <div class="img-wrap sp"></div>
      <div class="sec">
      <div class="wrap">
        <p class="ttl-sub fadein">training<span>研修内容</span></p>
        <h2 class="ttl2 txt-l fadein">自分の力で稼げる<br>マネージャーを目指して</h2>
        <p class="fadein">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        <div class="btn fadein">
          <a href="<?php echo $wp_url; ?>/aroma">VIEW MORE</a>
        </div>
      </div>
      </div>
      <div class="img-wrap pc"></div>
    </div>
  </section>

  <section id="system" class="bg-blue">
    <div class="layout01">
      <div class="fadein">
        <div class="img-wrap pc"><img src="<?php echo $wp_url; ?>/lib/images/top/system_figure_pc.svg" alt="自分の力で稼げるマネージャーを目指して"></div>
        <div class="img-wrap sp"><img src="<?php echo $wp_url; ?>/lib/images/top/system_figure_sp.svg" alt="自分の力で稼げるマネージャーを目指して"></div>
      </div>
      <div class="sec">
      <div class="wrap">
      <div>
        <p class="ttl-sub fadein">Payroll system<span>給料システム</span></p>
        <h2 class="ttl2 txt-l fff fadein">頑張った分だけ稼げる<br>給与システム</h2>
        <p class="fff fadein">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        <div class="btn fadein">
          <a href="<?php echo $wp_url; ?>/aroma">VIEW MORE</a>
        </div>
      </div>
      </div>
      </div>
    </div>
  </section>
<?php get_footer();
