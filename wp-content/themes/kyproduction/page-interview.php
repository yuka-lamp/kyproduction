<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="voice" class="layout02">
<div class="sec">
<div class="wrap">
<h2 class="ttl txt-c">働く人の声</h2>
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/aroma/voice.png" alt="シフト制で、自分にあった働き方を"></div>
<div class="shadow bg-fff fadein">
<h3 class="main-color">やり甲斐を感じながら<br>常に前を向いて働ける</h3>
<p class="gray">岩井 〇〇 (30)<br>前職: 飲食店店長</p>
</div>
<p class="mt-3 txt-l">セラピスト未経験からスタートしましたが、オーナー自ら講師を務める研修を経て、セラピストとしてデビューをしました。<br>デビュー直後は何度も本番同様のモニター様を経験でき、不安なくお客様を担当することができました。セラピストの仕事は、1人のお客様を同じスタッフが担当するとてもやりがいのあるスタイルで、施術前後にお客様とお話する時間は、毎日の楽しみになっています。やりがいを感じながらセラピストという仕事に誇りを持っています。</p>
</div>
</div>
</section>
<section id="schedule" class="bg-color">
<div class="sec pb-3">
<div class="wrap">
<h2 class="ttl txt-c">1日の流れ</h2>
<p class="txt-c">セラピストの1日の流れをご紹介します。</p>
</div>
</div>
<ul>
<li class="bg">
<div class="sec bg-fff fadein">
<div class="txt-wrap wrap">
<h3 class="main-color mb-1"><span class="time gray mr-1">10:00</span>出社</h3>
<p>遅番の日は10時に出社します。シフト制なので、自分の予定を組みやすいのも嬉しいです。出社後すぐにお客様の予約が入っているので、準備を済ませたら施術を開始します。</p>
</div>
</div>
</li>
<li class="bg">
<div class="sec bg-fff fadein">
<div class="txt-wrap wrap">
<h3 class="main-color mb-1"><span class="time gray mr-1">14:00</span>ランチ</h3>
<p>遅番の日は10時に出社します。シフト制なので、自分の予定を組みやすいのも嬉しいです。出社後すぐにお客様の予約が入っているので、準備を済ませたら施術を開始します。</p>
</div>
</div>
</li>
<li class="bg">
<div class="sec bg-fff fadein">
<div class="txt-wrap wrap">
<h3 class="main-color mb-1"><span class="time gray mr-1">17:00</span>社員研修</h3>
<p>遅番の日は10時に出社します。シフト制なので、自分の予定を組みやすいのも嬉しいです。出社後すぐにお客様の予約が入っているので、準備を済ませたら施術を開始します。</p>
</div>
</div>
</li>
</ul>
</section>
</main>
<?php get_footer();
