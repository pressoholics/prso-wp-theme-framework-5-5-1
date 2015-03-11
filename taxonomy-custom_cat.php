<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>

<div class="row">
	<div id="main" class="large-8 columns clearfix" role="main">
					
		<h1 class="archive_title h2"><span><?php _e("Posts Categorized:", "bonestheme"); ?></span> <?php single_cat_title(); ?></h1>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			
			<header>
				
				<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				
				<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php echo get_the_term_list( get_the_ID(), 'custom_cat', "" ) ?>.</p>
			
			</header> <!-- end article header -->
		
			<section class="post_content">
			
				<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
			
				<?php the_excerpt('<span class="read-more">Read More &raquo;</span>'); ?>
		
			</section> <!-- end article section -->
			
			<footer>
				
			</footer> <!-- end article footer -->
		
		</article> <!-- end article -->
		
		<?php endwhile; ?>	
		
		<?php do_action('prso_pagination'); ?>
					
		
		<?php else : ?>
		
		<article id="post-not-found">
		    <header>
		    	<h1>No Posts Yet</h1>
		    </header>
		    <section class="post_content">
		    	<p>Sorry, but the requested resource was not found on this site.</p>
		    </section>
		    <footer>
		    </footer>
		</article>
		
		<?php endif; ?>
	
	</div> <!-- end #main -->
</div>

<?php get_sidebar(); // sidebar 1 ?>

<?php get_footer(); ?>