<?php
/**
 * @package Magnus
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>

	<?php if ( has_post_thumbnail() ) :
		$image_id = get_post_thumbnail_id();
		$url = wp_get_attachment_image_src( $image_id, 'magnus-large' );
	?>

	<div class="section-image" style="background-image: url(<?php echo esc_attr( $url[0] ); ?>);">

	<?php else: ?>

	<div class="section-image">

	<?php endif; ?>

	</div><!-- .section-image -->

	<div class="section-inner">
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			<?php if ( 'post' == get_post_type() ) : ?>
			<?php ?>
			<div class="entry-subtitle">
				<?php the_excerpt() ?>
			</div><!-- .entry-subtitle -->
			<div class="entry-meta">
				<?php magnus_posted_on(); ?>&nbsp<?php the_category(' '); ?>
			</div><!-- .entry-meta -->

			<?php endif; ?>
		</header><!-- .entry-header -->
	</div><!-- .section-inner -->

</article><!-- #post-## -->
