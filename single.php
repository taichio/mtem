<!-- ヘッダー読み出し -->
<?php get_header(); ?>


<div class="container">
  <div class="row bg2">
    <!-- ナビバー -->
    <div class="col col-md-3">
    </div>
    <!-- //ナビバー -->
    
    <!-- メインコンテンツ -->
    <div class="col col-md-9">
      <div class="panel panel-default">
        <div id="news" class="panel-body">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <?php the_content(); ?>
        
        <p class="state"><?php echo get_the_date(); ?> <?php the_time(); ?>    カテゴリー:
        
        <?php the_category(','); ?></p>
        
        <?php endwhile; endif; ?>
                         
        </div>
        </div>
      <!-- //特集アーテイスト -->
    </div>
</div>
</div>
<!-- フッター読み出し -->
<?php get_footer(); ?>