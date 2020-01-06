<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="intro" class="sec main-color">
<div class="wrap flex">
<div class="left">
<h2 class="ttl">女性が生き生きと誇りを持ち<br>働くことができる環境</h2>
<p class="b">オイルマッサージサロンのセラピストとして活躍する女性を応援します。女性が働きながら『自分の人生を楽しむ』ことで幸せで温かい空間を作り出し、お客様に癒やしを寛ぎを提供します。</p>
</div>
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/promotion/intro_img.png" alt="頑張りが反映される給与システム"></div>
</div>
</section>
<section id="welfare" class="bg-color flex">
<div class="content">
<div class="sec txt-c">
<img class="mb-1" src="<?php echo $wp_url; ?>/lib/images/promotion/lamp.svg" alt="ランプのアイコン"><h3 class="fff">未経験でも大丈夫</h3>
<p class="ipad-txt-c fff">アットホームな雰囲気の中マンツーマンでの親切丁寧な研修があります。<br>実力あるセラピストや、オーナーが指導します。</p>
</div>
</div>
<div class="content">
<div class="sec txt-c">
<img class="mb-1" src="<?php echo $wp_url; ?>/lib/images/promotion/graf.svg" alt="レベルアップのアイコン"><h3 class="fff">経験者の方はさらにレベルアップ</h3>
<p class="ipad-txt-c fff">プロとしてのおもてなしの心や、技術面でも(各コース)<br class="pc">フェイシャルマタニティーマッサージ…etc.と多くの技術が取得できます。</p>
</div>
</div>
</section>
<section id="voice" class="bg-color layout02">
<div class="sec">
<div class="wrap">
<h2 class="ttl txt-c">働く人の声</h2>
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/promotion/voice.png" alt="シフト制で、自分にあった働き方を"></div>
<div class="shadow bg-fff fadein">
<h3 class="main-color">やり甲斐を感じながら<br>常に前を向いて働ける</h3>
<p class="gray">岩井 〇〇 (30)<br>前職: 飲食店店長</p>
</div>
<p class="mt-3 txt-l">セラピスト未経験からスタートしましたが、オーナー自ら講師を務める研修を経て、セラピストとしてデビューをしました。<br>デビュー直後は何度も本番同様のモニター様を経験でき、不安なくお客様を担当することができました。セラピストの仕事は、1人のお客様を同じスタッフが担当するとてもやりがいのあるスタイルで、施術前後にお客様とお話する時間は、毎日の楽しみになっています。やりがいを感じながらセラピストという仕事に誇りを持っています。</p>
</div>
</div>
</section>
<section id="schedule" class="">
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
<?php get_footer();
