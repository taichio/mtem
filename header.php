<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nutty Western's Official Website">
    <meta name="author" content="Taichi">
    
    <!-- styles -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- fav and touch icons -->
    <?php wp_enqueue_script('test', get_bloginfo('template_directory') . 'dist/js/bootstrap.min.js', array('jquery')); ?>
    <?php wp_head(); ?>
    
    <script>
    //スムーズスクロール
    jQuery(function(){
    // #で始まるアンカーをクリックした場合に処理
    jQuery('a[href^=#]').click(function() {
    // スクロールの速度
    var speed = 700; // ミリ秒
    // アンカーの値取得
    var href= jQuery(this).attr("href");
    // 移動先を取得
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    // 移動先を数値で取得
    var position = target.offset().top;
    // スムーススクロール
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
    });
    });

    </script>
  </head>

  <body>
  <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">Musica Todo El Mundo</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <li><a href="about.html">About</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">カテゴリ<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">プロデューサー別</a></li>
              <li><a href="#">特集アーティスト</a></li>
              <li><a href="#">楽器別</a></li>
              <li><a href="#">国別</a></li>
              <li><a href="#">レーベル</a></li>
              <li><a href="#">年代</a></li>
            </ul>
          </li>
        </ul> 
        <!-- ログイン時 -->
        <p class="navbar-text pull-right">Twitter</p>
        <p class="navbar-text pull-right">contact</p>
        </div>
    </div>
  <!-- //Fixed navbar -->
<!--  <header id="home" class="jumbotron masthead"> -->
  <div class="home" id="home">
    <div class="container">
  </div>