<?php get_header(); ?>

<?php get_template_part('template_parts/breadcrumbs');?>


<section class="post_blog_bg primary-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-8">
                    <!--есть ли посты-->
                    <?php if ( have_posts() ) :
                        /*пока есть посты*/
                        while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part('template_parts/content','search');?>

                        <?php endwhile; ?>
                        <!--не найдены результаты поиска-->
                        <?php  else: ?>

                        <?php get_template_part('template_parts/content','none');?>

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



