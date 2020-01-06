<?php
error_reporting(0); // エラーの非表示
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
 ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- favicon -->
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/reset.css">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/style.css">
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.10.0/css/all.css">
<link href="https://fonts.googleapis.com/css?family=Teko:400,600&display=swap" rel="stylesheet">
<!-- script -->
</head>

<body>
<main>
<div id="loader">
  <p>LOADING...</p>
</div>
<div id="fade"></div>
<div id="container">
<!-- ヘッダー -->
<header id="header" class="flex <?php if (is_home() || is_front_page()) {
    echo 'nav01';
} else {
    echo 'nav02';
} ?>">
  <h1>
  <a href="<?php echo $home; ?>/">
  <img src="<?php echo $wp_url; ?>/lib/images/common/<?php if (is_home() || is_front_page()) {
      echo 'logo_white.svg';
  } else {
      echo 'logo_blue.svg';
  } ?>" alt="KYプロダクションロゴ">
  </a>
  </h1>
<div class="btn-wrap">
<a class="nav-button">
  <span></span>
  <span></span>
  <span></span>
</a>
</div>
<nav class="nav-wrap pc-flex">
<ul class="nav">
  <li><a href="<?php echo $wp_url; ?>/company">会社概要</a></li>
  <li><a href="<?php echo $wp_url; ?>/interview">インタビュー</a></li>
  <li><a href="<?php echo $wp_url; ?>/working">働き方について</a></li>
  <li><a href="<?php echo $wp_url; ?>/training">研修内容</a></li>
  <li><a href="<?php echo $wp_url; ?>/salary">給与について</a></li>
  <li><a href="<?php echo $wp_url; ?>/contact"><i class="far fa-envelope"></i>CONTACT</a></li>
</ul>
</nav>
</header>
<!-- ヘッダー終了 -->

<!-- メインビジュアル開始 -->
<?php if (is_home() || is_front_page()): ?>
<section id="mv">
  <div class="wrap">
    <div class="callout">
    <div class="fadein"><p  class="ttl"><span>Challenge</span><span>your</span><span>potential.</span></p></div>
    <h2>ジブンの可能性を試す</h2>
    </div>
  </div>
<div class="callout-square"></div>
  <div class="movie-wrap pc"><a href="https://youtu.be/SUpK0RDy9MI"><img src="<?php echo $wp_url; ?>/lib/images/top/movie.png" alt="動画サムネイル"></a></div>
</section>

<?php else: ?>
<section id="sub-mv" class="fadein">
  <div class="<?php echo attribute_escape( $post->post_name ); ?> bg-img">
  <div class="callout">
    <div class="wrap">
      <h2 class="fff b"><?php echo get_the_title(); ?> </h2>
    </div>
  </div>
  <div class="callout-square"></div>
  </div>
</section>
<?php endif; ?>

<!-- メインビジュアル終了 -->

<!-- パンくず開始 -->
<?php
if (!is_home() && !is_front_page()) {
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
}
?>
<!-- パンく終了 -->

<!-- メインコンテンツ -->
