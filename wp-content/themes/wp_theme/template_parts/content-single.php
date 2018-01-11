<article id = "post-<?php the_ID(); ?>" <?php post_class("blog_post"); ?>>
    <h4>  <?php the_title();?>  </h4>

    <div class="blog_category">
        <ul>
            <li> <?php the_category(",");?>  </li>
        </ul>
    </div>

    <div class="blog_text">
        <ul>
            <li> | </li>
            <li> <?php esc_html_e("Post By :" , "wp_theme"); ?>  <?php the_author_posts_link();?> </li>
            <li> | </li>
            <li>  <?php the_time("j F Y");?> </li>
        </ul>
    </div>

    <div class="blog_post_img">
         <?php the_post_thumbnail();?>
    </div>
    <!--Выводит контент-->
    <?php
     the_content();
    /*the_excerpt();*/
    ?>



</article>