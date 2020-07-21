<?php get_header();?>
    <div class="slider">
      <ul class="bxslider">
        <li><img src="<?php echo get_template_directory_uri()?>/images/4.jpg" /></li>
        <li><img src="<?php echo get_template_directory_uri()?>/images/4.jpg" /></li>
      </ul>
    </div><!-- .slider -->
    <div class="content">
      <div class="module xinxi02">
        <?php
          $my_term = get_term_by('name', '新闻动态', 'category');
          $my_term_id = $my_term->term_id;
        ?>
        <h2>
          新闻动态
        </h2>
        <ul>
          <?php
            $my_query = new WP_Query(array(
                'cat' => $my_term_ID,
                'posts_per_page' => 10,
              ));
          ?>
          <li class="imgsuo">
            <?php if($my_query->have_posts()):while($my_query->have_posts()):$my_query->the_post();?>
              <a href="<?php the_permalink();?>""><img src="<?php echo get_template_directory_uri();?>/images/baidu.png" alt="baidu"></a>
              <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
              <?php echo lingfeng_strimwidth(get_the_content(), 34);?>
              <div class="clear"></div>
            <?php endwhile;?>
            <?php endif;?>
          </li>
          <?php
            $my_query = new WP_Query(array(
                'category__in' => array($my_term_ID,7,8),
                'posts_per_page' => 10,
                'offset' => 1,
              ));
          ?>
          <?php if($my_query->have_posts()):while($my_query->have_posts()):$my_query->the_post();?>
            <li>
              <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </li>
          <?php endwhile;?>
          <?php endif;?>
        </ul>
      </div><!-- .xinxi02 -->
      <div class="module xinxi03">
        <h2>企业荣誉</h2>
        <div class="rongyu">
          <ul class="chuzhi-bxslider">
            <li><img src="<?php echo get_template_directory_uri();?>/images/ry001.jpg" /></li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/ry001.jpg" /></li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/ry001.jpg" /></li>
          </ul>
        </div><!-- .rongyu -->
      </div><!-- .xinxi03 -->
      <div class="module xinxi04">
        <?php
          $my_term = get_term_by('name','产品中心','category');
          $my_term_id = $my_term->term_id;
          $my_term_link = get_term_link($my_term_id,'category');
        ?>
        <h2>产品展示</h2>
        <ul>
            <?php
              $my_query = new WP_Query(array(
                'cat'=>$my_term_id,
                'posts_per_page'=>10,
              ));
            ?>
            <?php if($my_query->have_posts()):while(
              $my_query->have_posts()):$my_query->the_post();?>
              <li>
                <a href="<?php the_permalink();?>">
                  <?php if ( has_post_thumbnail() ) : ?>
                     <?php the_post_thumbnail( 'thumbnail' ); ?>
                  <?php endif; ?>
                </a>
                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
              </li>
            <?php endwhile;?>
            <?php endif;?>
        </ul>
      </div><!-- .xinxi04 -->
      <div class="module xinxi05">
        <?php
          $my_term = get_term_by('name','公司新闻','category');
          $my_term_id = $my_term->term_id;
          $my_term_link = get_page_link($my_term_id,'category');
        ?>
        <h2>公司新闻</h2>
        <ul>
          <?php
            $my_query = new WP_Query(array(
              'cat'=>$my_term_id,
              'posts_per_page'=>10
            ));
          ?>
          <?php if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
          <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div><!-- .xinxi05 -->
      <div class="clear"></div>
    </div><!-- .content -->
<?php get_footer();?>