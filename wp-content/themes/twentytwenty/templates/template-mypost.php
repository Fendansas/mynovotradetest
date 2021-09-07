<?php
/**
 * Template Name: My post
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */



get_header();
?>




<main id="site-content" role="main">

<?php

if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );
    }
}

?>
<!--    -----------Form start---------------->
    <form action="./" method="post">
        <label for="name">Имя</label>
        <input type="text" name="name" id="name">

        <label for="comment">Комментарий</label>
        <textarea required placeholder="Что думаете?" name="comment" id="comment"></textarea>

        <button type="submit">Опубликовать</button>
    </form>
<!--    --------------Form and-------------------->
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
