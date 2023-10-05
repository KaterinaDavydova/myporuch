<?php get_header(); ?>




<div class="page container">
    <div class="article">
        <h1 class="title">
            <?php the_title(); ?>
        </h1>
        <div class="cover">
            <?php echo the_post_thumbnail(); ?>
        </div>
        <div class="sub-title">
            <?php the_excerpt(); ?>
        </div>
        <div class="content">
            <?php the_content(); ?>
        </div>

        <div class="date">
            <p><?php echo get_the_date(); ?></p>
        </div>


        <?php if (in_category('media')) {

            include('sidebar-media.php');

        } else {
            include('sidebar-reports.php');

        }

        ?>
    </div>
</div>

<?php get_footer(); ?>