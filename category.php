<?php get_header();
?>
            

            <div class="archive">
                <div class="container">
                    <div class="category">
                        <?php if ( is_category( 'media' ) ) { ?> 
                            <h2 class="category-name"><?php the_category();?></h2>
                            <p>Категорії:</p>
                            <ul><?php the_tags();?></ul>
                        <?php } else { ?>
                            <h2 class="category-name"><?php the_category();?></h2>
                        <?php }  ?>
                    </div>
                    <div class="post-items"> 
                        <?php 
                            if ( have_posts() ) {
                                while ( have_posts() ) {
                                    the_post(); ?>
                                    <?php if ( is_category( 'media' ) ) { ?>
                                            <div class="post-item">
                                                        <div class="post-cover">
                                                            <a href="<?php the_permalink() ?>"> <?php echo the_post_thumbnail();?> </a> 
                                                        </div>
                                                        <div class="post-info">
                                                            <?php if (is_tag( 'Психологія' )) { ?>
                                                                <p class="category color-browm"><?php the_tags('', '','');?></p>
                                                            <?php } else { ?>
                                                                <p class="category"><?php the_tags('', '','');?></p>
                                                            <?php } ?>
                                                            <div class="date"><p><?php echo get_the_date();?></p></div>
                                                        </div>
                                                        <div class="title">
                                                            <h4><?php the_title();?>
                                                            </h4>
                                                            <p><?php the_excerpt();?></p>
                                                        </div>
                                                    </div>
                                    <?php } else { ?>
                                        <div class="post-item">
                                            <div class="post-cover">
                                                <a href="<?php the_permalink() ?>"> <?php echo the_post_thumbnail();?> </a> 
                                            </div>
                                            <div class="title">
                                                <h4 ><?php the_title();?></h4>
                                                <?php the_excerpt();?></p>
                                            </div>
                                        </div>
                                    <?php }  ?>
                                <?php } // end while
                            } // end if
                            ?>
                    </div>
                    
                        <!-- <nav class="navigation pagination" aria-label="Записи">
                            <div class="nav-links">
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="https://site.example/news/page/2/">2</a>
                                <span class="page-numbers dots">…</span>
                                <a class="page-numbers" href="https://site.example/news/page/7/">7</a>
                            </div>
                        </nav> -->
                        <div class="button button-dark more">Загрузити більше +</div>
                    </div>
             </div>
<?php get_footer();?>