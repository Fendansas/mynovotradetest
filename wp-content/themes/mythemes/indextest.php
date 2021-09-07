<?php get_header(); ?>
<main>
    <div class="content">
        <h1>Main Content</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1> <?php the_title(); ?> </h1>
            <h4>Posted on <?php the_time('F jS Y') ?> </h4>
            <p> <?php the_content(__('(more...)')); ?> </p>

            <!--    текст    начало-->
            <?php the_field('page'); ?>
            <!--    текст конец             -->

            <!--         Изображение начало           -->
            <?php
            $image = get_field('img');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <!--       Изображение конец              -->

            <hr> <?php endwhile; else: ?>

            <p> <?php _e('Sorry no posts'); ?></p> <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</main>
<div class="delimetr"></div>
<?php get_footer(); ?>

</main>



    <div class="content">
        <h1>Main Content</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1> <?php the_title(); ?> </h1>
            <h4>Posted on <?php the_time('F jS Y') ?> </h4>
            <p> <?php the_content(__('(more...)')); ?> </p>

            <!--    текст    начало-->
            <?php the_field('page'); ?>
            <!--    текст конец             -->

            <!--         Изображение начало           -->
            <?php
            $image = get_field('img');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <!--       Изображение конец              -->

            <hr> <?php endwhile; else: ?>

            <p> <?php _e('Sorry no posts'); ?></p> <?php endif; ?>
    </div>
<?php get_sidebar(); ?>