<div class="large-8 columns clearfix" role="main">
				
	<?php if (is_category()) { ?>
		<h1 class="archive_title h2">
			<span><?php _e("Posts Categorized:", "bonestheme"); ?></span> <?php single_cat_title(); ?>
		</h1>
	<?php } elseif (is_tag()) { ?> 
		<h1 class="archive_title h2">
			<span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
		</h1>
	<?php } elseif (is_author()) { ?>
		<h1 class="archive_title h2">
			<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php get_the_author_meta('display_name'); ?>
		</h1>
	<?php } elseif (is_day()) { ?>
		<h1 class="archive_title h2">
			<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
		</h1>
	<?php } elseif (is_month()) { ?>
	    <h1 class="archive_title h2">
	    	<span><?php _e("Monthly Archives:", "bonestheme"); ?>:</span> <?php the_time('F Y'); ?>
	    </h1>
	<?php } elseif (is_year()) { ?>
	    <h1 class="archive_title h2">
	    	<span><?php _e("Yearly Archives:", "bonestheme"); ?>:</span> <?php the_time('Y'); ?>
	    </h1>
	<?php } ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
		
		<header>
			
			<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			
			<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
		
		</header> <!-- end article header -->
	
		<section class="post_content">
		
			<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
		
			<?php the_excerpt(); ?>
	
		</section> <!-- end article section -->
		
		<footer>
			
		</footer> <!-- end article footer -->
	
	</article> <!-- end article -->
	
	<?php endwhile; ?>	
	
	<?php do_action('prso_pagination'); ?>
				
	
	<?php else : ?>
	
	<article id="post-not-found">
	    <header>
	    	<h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>
	    </header>
	    <section class="post_content">
	    	<p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
	    </section>
	    <footer>
	    </footer>
	</article>
	
	<?php endif; ?>

</div> <!-- end #main -->