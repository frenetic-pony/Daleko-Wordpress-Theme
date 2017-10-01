<?php
/**
 * @package Magnus
 */
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="entry-meta">
                <?php magnus_posted_on(); ?> <span>by <?php the_author(); ?></span>
            </div>
            <!-- .entry-meta -->
        </header>
        <!-- .entry-header -->

        <div class="entry-content">
            <div id='rnote' class='rnote'>In Russian&nbsp;<span style="font-size:1.3em; vertical-align:-2.5px;" class="yot"></span></div>
            <?php the_content(); ?>

            <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'magnus' ),
				'after'  => '</div>',
			) );
		?>

        </div>
        <!-- .entry-content -->

        <div class="share_btn" style="text-align:center;">
            <div style="letter-spacing:2px;font-weight: 600;text-transform: uppercase;padding-bottom: 10px;"> Share it </div>
            <div class="likely likely-big">
                <div class="facebook">Share</div>
                <div class="twitter">Tweet</div>
                <div class="vkontakte">Share</div>
                <div class="pinterest">Pin</div>
                <div class="telegram">Send</div>
            </div>
        </div>
        <footer class="entry-footer">
            <?php magnus_entry_footer(); ?>
        </footer>
        <!-- .entry-footer -->
    </article>
    <!-- #post-## -->
