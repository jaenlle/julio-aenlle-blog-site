<?php
/* Template Name: Search Page */
get_header(); ?>

    <div class="row">
      <div class="twelve columns">
          <?php if( have_posts() ) :?>
            <h1>
                <?php printf(
                    __('Search Results for: %s'),
                    '<span>' . get_search_query() . '</span>' );
                ?>
            </h1>
            <?php
            while (have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content();
            endwhile;//End While
           else : ?>
            <h1>Nothing Found</h1>
            <img src="http://julioaenlle.net/jaenllewordpress/wp-content/uploads/2016/06/scale.jpg" alt="sad panda" />
            <p>Sorry, but nothing matched your search criteria. Please try again.</p>
          <?php endif; ?><!-- End If -->
      </div>

    </div>

<?php get_footer(); ?>
