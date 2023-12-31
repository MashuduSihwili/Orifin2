<?php $financeup_news_enable = get_theme_mod('financeup_news_enable');
	if($financeup_news_enable){
	$news_background = get_theme_mod('news_background');
	$financeup_overlay_news_color_control = get_theme_mod('financeup_overlay_news_color_control','');
?>
<!--==================== BLOG SECTION ====================-->
<section id="blog" class="ta-blog-section" style="background-image:url('<?php echo esc_url($news_background);?>');">
	<div class="overlay" style="background:<?php echo $financeup_overlay_news_color_control;?>">
    <div class="container">
      <div class="row">
        <div class="col-md-12 wow fadeInDown animated padding-bottom-50 text-center">
          <div class="ta-heading">
            <?php $financeup_news_title = esc_attr(get_theme_mod('financeup_news_title'));
          
            if( !empty($financeup_news_title) ):
              echo '<h3 class="ta-heading-inner">'.$financeup_news_title.'</h3>';
            endif;
             ?>

          <?php   $financeup_news_subtitle = esc_attr(get_theme_mod('financeup_news_subtitle'));

            if( !empty($financeup_news_subtitle) ):

              echo '<p>'.$financeup_news_subtitle.'</p>';

          endif; ?>
          </div>
        </div>
      </div>
      <div class="clear"></div>
	  <div class="row">
      <?php 
		$financeup_latest_loop = new WP_Query( array( 'post_type' => 'post', 'order' => 'DESC','ignore_sticky_posts' => true) );
		$i=1;
			if ( $financeup_latest_loop->have_posts() ) :
				while ( $financeup_latest_loop->have_posts() ) : $financeup_latest_loop->the_post();?>
      
			  <div class="col-md-4 wow pulse animated">
		        <div class="ta-blog-post-box"> 
		        	<?php if ( has_post_thumbnail() ) : ?>
		        	<a class="ta-blog-thumb" href="<?php echo esc_url(get_permalink()) ?>" title="<?php the_title_attribute('echo=0'); ?>">
		            	<?php the_post_thumbnail(); ?>
					</a>
					<?php  endif; ?>
					<article class="small">    	
			          	<span class="ta-blog-date">
			          		<span class="h3"><?php echo get_the_date('j'); ?></span>
			          		<span><?php echo get_the_date('M'); ?></span> 
			          	</span>
			            <h2 class="title">
			            	<a href="<?php echo esc_url(get_permalink()) ?>" title="<?php the_title_attribute('echo=0'); ?>"><?php the_title(); ?></a>
			            </h2>
			            <div class="ta-blog-category"> 
			            	<i class="fa fa-folder-o"></i>&nbsp; 
			              		<?php $cat_list = get_the_category_list();
								if(!empty($cat_list)) { ?>
			              		<?php the_category(', '); ?>
			              	
			              <?php } ?>
			              	<a class="margin-left-10" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>">
			              		<i class="fa fa-user"></i>&nbsp; <?php _e('by','financeup'); the_author(); ?>
			              	</a> 
			            </div>
			            <?php the_excerpt(); ?>
		          	</article>
		        </div>
		      </div>
		<?php  
			if($i==3)
			  { 
			     echo '<div class="clearfix"></div>';
				 $i=0;
			  }$i++;
			  wp_reset_postdata();
			endwhile; endif; wp_reset_postdata();  ?>
    </div>
    <!-- .container --> 
  </div>
 </div> 
</section>
<?php }?>