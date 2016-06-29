<?php
//Template Name: 404 Page (Page Not Found)

get_header(); ?>

    <div class="row">
        <div class="eight columns">
            <h1 class="404h1">404</h1>
            <h2 class="404h2">The page you're looking does not exist. Please use your back button, navigation links, or the search feature in the sidebar to navigate away from this page.</h2>
            <h3>Use a Search party to find it! </h3>

            <?php get_search_form(); ?>
        </div>
        <div class="four colums">
            <?php get_sidebar(); ?>
        </div>

    </div>

<?php get_footer(); ?>
