<!-- ヘッダー読み出し -->
<?php get_header(); ?>


<div class="container">
  <div class="row bg2">
    <div class="col col-md-12">
    <h3>Musica Todo El Mundo</h3>
    <article>世界の音楽と日々の生活を</article>
    </div>
  </div>
  
  <div class="row bg2">
    <!-- ナビバー -->
    <div class="col col-md-3">
      <div class="panel panel-default">
        <div id="news" class="panel-body">
          <ul>
            <li>プロデューサー別</li>
            <li>特集アーティスト</li>
            <li>楽器別</li>
            <li>国別</li>
            <li>レーベル</li>
            <li>年代</li>
          </ul>
          <ul>
            <li>ルーツを巡る</li>
            <li>リズムを巡る</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- //ナビバー -->
    
    <!-- メインコンテンツ -->
    <div class="col col-md-9">
      <div class="panel panel-default">
        <div id="news" class="panel-body">
        <h3>お知らせ</h3>

        <hr />

        <?php $newslist = get_posts( array(
		  'category_name' => 'news', 
		  'posts_per_page' => 10 //取得記事件数
		));
		  foreach( $newslist as $post ):
		  setup_postdata( $post );
		?>
        <p><?php the_time('Y/n/j'); ?>
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
        </p><?php
		  endforeach;
		  wp_reset_postdata();
		?>                             
        </div>
        </div>
      <div class="panel panel-default">
        <div id="news" class="panel-body">
        <h3>新着記事</h3>

        <hr />

        <?php $newslist = get_posts( array(
		  'posts_per_page' => 10 //取得記事件数
		));
		  foreach( $newslist as $post ):
		  setup_postdata( $post );
		?>
        <p><?php the_time('Y/n/j'); ?>
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
        </p><?php
		  endforeach;
		  wp_reset_postdata();
		?>                             
        </div>
        </div>
    </div>
</div>
</div>
<!-- フッター読み出し -->
<?php get_footer(); ?>