<form  id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="cd-form [ cd-flow ]">
    <h2 class="visually-hidden">Search form</h2>
    <div class="cd-form--inline">
        <input type="text" class="search-field" name="q" placeholder="Enter search term" value="<?php echo get_search_query(); ?>">
        <input type="submit" value="Search" class="cd-button cd-button--small cd-button--submit">
    </div>
</form>
