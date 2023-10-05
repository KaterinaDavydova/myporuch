<?php

$args = array(
    'category_name' => 'reports',
    'post_type' => 'post'
);

// запрос
$query = new WP_Query( $args ); ?>

<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="media-item">
                                            <div class="media-cover">
                                                <a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail();?> </a>                                            </div>
                                            <h5><?php the_title();?></h5>
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
	<?php endwhile; ?>
	<!-- конец цикла -->

	<!-- пагинация -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'немає актуальних постів' ); ?></p>
<?php endif; ?>