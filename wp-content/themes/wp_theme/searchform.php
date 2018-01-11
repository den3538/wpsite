<form role="search" method="get" class="search-form" action="<?php esc_url( home_url( '/' ) )?>">
        <span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Поиск &hellip;', 'wp_theme' ) ?>" value="<?php get_search_query()?>" name="s" />
    <span class = "search-submit-wrap">
        <i class='icon-search fa fa-search' ></i>
        <input type="submit" class="search-submit" value=""  />

        </span>
</form>