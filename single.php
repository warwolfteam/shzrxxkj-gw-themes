<?php get_header();?>
<div class="banner">
    <img src="<?php echo get_template_directory_uri();?>/images/12.jpg" alt="images">
</div><!-- .banner -->
<div class="fenlei">
    <?php get_sidebar();?>
    <div class="contentr">
        <div class="mianbaoxie">
            您现在的位置:<?php lingfeng_breadcrumbs();?>
        </div><!-- .mianbaoxie -->
        <div class="postlist">
            <?php if(have_posts()):while(have_posts()):the_post();?>
            <?php setPostViews( get_the_ID() );?>
                <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                <div class="xuxian"></div><!-- .xuxian -->
                <div class="postmeta">
                    <span>发表于:<?php the_time('Y-m-d');?></span>
                    <span>分类:<?php the_category(',');?></span>
                    <span>浏览数:<?php echo getPostViews(get_the_ID())?></span>
                    <span><?php edit_post_link();?></span>
                </div><!-- .postmeta -->
                <div class="postcontent">
                    <?php the_content();?>
                </div><!-- .postcontent -->
            <?php endwhile;?>
            <?php endif;?>
            <div class="pinglun">
                <?php //comments_template();?>
            </div><!-- .pinglun -->
        </div><!-- .postlist -->
    </div><!-- .contentr -->
    <div class="clear"></div><!-- .clear -->
</div><!-- .fenlei -->
<?php get_footer();?>