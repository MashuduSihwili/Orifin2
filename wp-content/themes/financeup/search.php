<?php
/**
 * The template for displaying search results pages.
 *
 * @package financeup
 */

get_header(); 
get_template_part('index','banner'); ?>
<div class="clearfix"></div>
<main id="content">
  <div class="container">
    <div class="row">
      <div class="<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'9' ); ?> col-md-9">
          <?php 
		global $i;
		if ( have_posts() ) : ?>
		<h2><?php printf( __( "Search Results for: %s", 'financeup' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		<?php while ( have_posts() ) : the_post();  
		 get_template_part('content','');
		 endwhile; else : ?>
		<h2><?php _e('Nothing Found','financeup'); ?></h2>
		<div class="">
		<p><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.','financeup' ); ?>
		</p>
		<div class="serchbox">
		<?php get_search_form(); ?>
		</div>
		</div><!-- .blog_con_mn -->
		<?php endif; ?>
      </div>
	  <aside class="col-md-3">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</main>
<?php
get_footer();
?>