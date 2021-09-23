<?php
/*
Template Name: Shop
*/

if (!function_exists('get_vd')) {
    function get_vd($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
       
    }
}





get_header();
?>
<?php

defined('ABSPATH') || exit;

// test start
$product = get_page_by_title( 'AK 47', OBJECT, 'product' );

get_vd($product);

// test end 


// Работает
$args = array(
    'post_type'  => 'product',
    'posts_per_page'  => -1,
    'meta_query' => array(
        array(
            'value' => $_GET['type'],
            'compare' => 'like'
        ),
    ),
);
global $woocommerce, $woocommerce_loop;
$products = new WP_Query($args);

// get_vd($products);

$test[] = null;

if ($products->have_posts()) { ?>

    <?php woocommerce_product_loop_start(); ?>

    <?php while ($products->have_posts()) : $products->the_post(); ?>

        <?php woocommerce_get_template_part('content', 'product'); ?>

    <?php endwhile; // end of the loop. 
    ?>

    <?php woocommerce_product_loop_end(); ?>

<?php } else echo '<h2>К сожалению в наличии нету шин подходящего типоразмера</h2>'; ?>




<?php

get_footer();

?>