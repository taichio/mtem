<!-- ヘッダー読み出し -->
<?php get_header(); ?>


<div class="container">
  <div class="row bg2">
    <!-- ナビバー -->
    <div class="col col-md-3">
          <div class="affix hidden-print fixed-sidebar" id="sidebar" data-spy="affix" data-offset-top="500">
            <ul class="nav nav-pills nav-stacked">
            <li><a href="#home"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li><a href="#content"><span class="glyphicon glyphicon-certificate"></span>What's the Nutty Western's</a></li>
            <li><a href="#disco"><span class="glyphicon glyphicon-headphones"></span>Sound</a></li>
            <li><a href="#video"><span class="glyphicon glyphicon-film"></span>Video</a></li>
            <li><a href="#schedule"><span class="glyphicon glyphicon-calendar"></span>Schedule</a></li>
            </ul>
          </div>
    </div>
    <!-- //ナビバー -->
    
    <!-- メインコンテンツ -->
    <div class="col col-md-9">
      <div class="panel panel-default">
        <div id="news" class="panel-body">
        <h3>Latest News</h3>


        <?php $newslist = get_posts( array(
		  'category_name' => 'news', 
		  'posts_per_page' => 10 //取得記事件数
		));
		  foreach( $newslist as $post ):
		  setup_postdata( $post );
		?>
        <?php the_time('Y/n/j'); ?>
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
        <?php
		  endforeach;
		  wp_reset_postdata();
		?>                             
        </div>
        </div>
      <!-- 特集アーティスト -->
      <div class="panel panel-default">
        <div id="content" class="box2 panel-body">
        <h3>特集アーティスト</h3>
        <p class="lead">
        Mtem-Recordsがお勧めするアーティスト記事一覧です。	
        </p>
        <!-- 特集アーテイストtable読み込み -->
        <?php get_template_part( 'table', 'index' ); ?>
        <!-- //特集アーティストtable読み込み -->
        <h3>Member</h3>
        <p>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/a-ise.jpg" />
        </p>
        <p>
        Ise      -Vox,Guitar
        Birth:1986/07/05
        バンドの発起人。
        古い音楽と酒とラーメンを愛し、
        格好つけて人生を駆け抜けたい都下のバーテンダー。 
        最近では自主レーベル"Damn Right Sounds"を設立し浮足立っている。
        エスキモーズの契約社員サポートギターとしても活動する他、
        秋田Skankin'Punk-A-BillyのHEAD SLIDERや、
        謎のセッション集団1SESSIONSのメンバーでもある。
        </p>
        </div>
      </div>
      <!-- //特集アーテイスト -->
      <div class="panel panel-default">
        <div id="disco" class="box panel-body">
        <h3>Sound</h3>
        <p>
<?php
$post_id = 18; //数字は記事のIDを入れてください
$post = get_post($post_id, 'OBJECT' , 'raw'); //指定した記事のIDの情報を取得
$post_include = apply_filters( 'the_content',$post->post_content); //記事の本文をフィルターフックで整形してます
echo $post_include; //出力します
?>      
        </p>
        </div>
      </div>
      <div class="panel panel-default">
        <div id="video" class="box panel-body">
        <h3>Video</h3>
        <p>
<?php
$post_id = 1; //数字は記事のIDを入れてください
$post = get_post($post_id, 'OBJECT' , 'raw'); //指定した記事のIDの情報を取得
$post_include = apply_filters( 'the_content',$post->post_content); //記事の本文をフィルターフックで整形してます
echo $post_include; //出力します
?>                              

        </p>
        </div>
      </div>
      <div class="panel panel-default">
        <div id="schedule" class="panel-body">
        <h3>Schedule</h3>
        <p>
<?php
$post_id = 21; //数字は記事のIDを入れてください
$post = get_post($post_id, 'OBJECT' , 'raw'); //指定した記事のIDの情報を取得
$post_include = apply_filters( 'the_content',$post->post_content); //記事の本文をフィルターフックで整形してます
echo $post_include; //出力します
?>    
        </p>
        </div>
      </div>
    </div>
</div>
</div>
<!-- フッター読み出し -->
<?php get_footer(); ?>