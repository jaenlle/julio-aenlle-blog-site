<?php

/**
 * Template Name: Portfolio Page
 *
 * @package WordPress
 * @subpackage My First Custom Theme
 * @since My First Custom Theme 1.0
 */

get_header(); ?>

     <section class="row">
           <div class="twelve columns">
               <h1 style="color: orange">Portfolio Page</h1>
               <!-- BEGIN LOOP -->
                 <?php if ( have_posts() ) {
                     while ( have_posts() ){
                         the_post(); // the_post defines our Data CONTEXT ?>

                         <h2><?php the_title(); ?></h2>
                         <p><?php the_content();</p>

                     } //end while statment
                 } //end if statement ?>

               <!-- END LOOP -->

           </div>
      </section>

 <?php get_footer(); ?>

 ?>
