<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
if (have_posts()): the_post();

// 記事情報
$t = get_the_title();
$p = get_the_permalink();
$id = get_the_ID();
$time = get_the_time('Y-m-d');
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $i_l = get_the_post_thumbnail_url(get_the_ID(), 'full');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
    $i_l = $wp_url.'/lib/images/no-img-2.png';
}
// カテゴリー
$category = get_the_category();
// タグ
$tags = get_the_tags();
?>
<section class="sec">
<div id="single-wrap" class="wrap main-wrap">
<article id="main-content" class="post-main">
<h2 class="postttl"><?php echo $t; ?></h2>
<div class="meta">
<time class="color-sky" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
<?php foreach ($category as $key => $val): ?>
<span class="ml-1 single-cat color-white bg-sky"><?php echo $val->cat_name; ?></span>
<?php endforeach; ?>
</div>
<div class="i-catch">
<img src="<?php echo $i; ?>" srcset="<?php echo $i; ?> 1x,<?php echo $i_l; ?> 2x" alt="<?php echo $t; ?>">
</div>
<div class="post-inner mb-3">
<?php the_content(); ?>
</div>
<?php if ($tags != ''): ?>
<div class="single-tags">
<h3>この記事のタグ</h3>
<ul>
<?php foreach ($tags as $key => $tag): ?>
<li>
<a href="<?php echo $home.'/tag/'.$tag->slug; ?>"><i class="fas fa-tag"></i> <?php echo $tag->name; ?></a>
</li>
<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>

<div class="sns-share mt-3 mb-3">
<p class="mb-1 txt-c sns-share-str">この記事が気に入ったら<span>SNSでシェアしよう！</span></p>
<ul class="txt-c">
<li class="fb">
<a href="https://www.facebook.com/sharer.php?src=bm&u=<?php echo $p; ?>&t=<?php echo $t; ?>" target="_blank">
<img src="<?php echo $wp_url; ?>/lib/images/sns/ico_fb.png" alt="フェイスブックでシェアする">
</a>
</li>
<li class="tw">
<a href="https://twitter.com/intent/tweet?url=<?php echo $p; ?>&text=<?php echo $t; ?>" target="_blank">
<img src="<?php echo $wp_url; ?>/lib/images/sns/ico_tw.png" alt="ツイッターでシェアする">
</a>
</li>
<li class="li">
<a href="https://line.me/R/msg/text/?<?php echo $t.'%0A'.$p?>" target="_blank">
<img src="<?php echo $wp_url; ?>/lib/images/sns/ico_line.png" alt="LINEでシェアする">
</a>
</li>
<li class="ht">
<a href="http://b.hatena.ne.jp/entry/panel/?url=<?php echo $p; ?>&btitle=<?php echo $t; ?>" target="_blank">
<img src="<?php echo $wp_url; ?>/lib/images/sns/ico_hatena.png" alt="はてなブックマークに追加する">
</a>
</li>
</ul>
</div>

<section id="relation-post">
<h3 class="ttl3">関連記事</h3>
<ul class="post-list">
<?php
$catkwds = [];
foreach ($category as $cat) {
    $catkwds[] = $cat->term_id;
}
$args = array(
  'post_type' => 'post',
  'posts_per_page' => '4',
  'cat' => '-549',
  'post__not_in' =>array($id),
  'category__in' => $catkwds,
  'orderby' => 'rand',
);
$my_query = new WP_Query($args);
while ($my_query->have_posts()) : $my_query->the_post();
$p = get_the_permalink();
$t = get_the_title();
$time = get_the_time('Y-m-d');
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
    $i_l = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
    $i_l = $wp_url.'/lib/images/no-img-2.png';
}
$category = get_the_category();
?>
<li>
<a href="<?php echo $p; ?>">
<img src="<?php echo $i; ?>" srcset="<?php echo $i; ?> 1x,<?php echo $i_l; ?> 2x" alt="<?php echo $t; ?>">
<div class="txt">
<?php foreach ($category as $key => $val): ?>
<span class="d-i-block color-white bg-sky mr-05"><?php echo $val->cat_name; ?></span>
<?php endforeach; ?>
<h3><?php echo $t; ?></h3>
<div class="meta">
<time datetime="<?php echo $time; ?>"><?php echo $time; ?></time>
</div>
</div>
</a>
</li>
<?php endwhile; wp_reset_postdata(); ?>
</ul>
</section>
</article>
<!-- サイドバー -->
<?php get_sidebar(); ?>
</div>
</section>
<?php endif; get_footer();