<!--Отображение постов-->
<?php get_header(); ?>

<?php get_template_part('template_parts/breadcrumbs');?>


<section class="post_blog_bg primary-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-8">
                    <?php if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part('template_parts/content','single');
                            if ( comments_open() || get_comments_number() ) {
                                comments_template();
                            }
                                ?>
                        <?php endwhile; else: ?>
                    <?php endif; ?>


                    <?php wpsite_pagination(); ?>

                </div>

                <!--Sidebar-->

                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

