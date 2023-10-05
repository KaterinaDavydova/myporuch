<!------posts by reports category----->
<div class="sidebar">
        <h3>інші звіти:</h3>
<div class="posts-list">
        <?php
        $args = array(
            'category_name' => 'reports',
            'post_type' => 'post',
            'posts_per_page' => 3,
            'tag' => 'yurydychna-pidtrymka',
        );

        // запрос
        $query = new WP_Query($args); ?>

        <?php if ($query->have_posts()): ?>
        <?php while ($query->have_posts()):
            $query->the_post(); ?>
        <div class="post">
            <div class="post-cover">
                <a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail(); ?> </a>
            </div>
            <h5>
                <?php the_title(); ?>
            </h5>
        </div>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php else: ?>
        <p>
            <?php esc_html_e('немає актуальних постів'); ?>
        </p>
        <?php endif; ?>
    </div>
</div>