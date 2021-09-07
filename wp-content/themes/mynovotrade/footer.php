<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyNovoTrade
 */

?>

 <div class="footer__section">
        <div class="footer__decoration-line-1">
            
            <?php  
                for ($i = 1; $i <= 2; $i++) { ?>
                  <div class="footer__decoration-item">
                    <div class="decoration__dot">
                    <div class="dot-circle"></div>
                </div>
            </div> 
                <?php } ?>
            
        </div>

        <div class="footer__decoration-line-2">
            <?php  
                for ($i = 1; $i <= 3; $i++) { ?>
                  <div class="footer__decoration-item-reverse">
                <div class="decoration__dot">
                    <div class="dot-circle"></div>
                </div>
            </div> 
                <?php } ?>
 
        </div>

        <div class="footer__container container">
            <div class="footer__contacts">
                <div class="footer__contacts--title">
                    <h3>
                        <?php the_field('footer_contact_us', 'options'); ?></h3>
                </div>

                <div class="footer__contacts--phone">
                    <p><?php the_field('footer_tell', 'options'); ?> <a href="tel:"><?php the_field('footer_number', 'options'); ?></a></p>
                </div>

                <div class="footer__contacts--email">
                    <p><?php the_field('footer_email', 'options'); ?> <a class="white" href="mailto:support@t-revenue.uk"><?php the_field('footer_email_name', 'options'); ?></a></p>
                </div>
            </div>
            
<!--            Start-->

            <div class="footer__content">
<!--                Start-->
                <?php
    $menu_name = 'menu_header';
    $locations = get_nav_menu_locations();
    $menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );
   
    foreach ( (array) $menu_items as $key => $menu_item ){
                        
        if($menu_item->menu_item_parent === '0'){

        $items[] = $menu_item; 

           } else {
           $sub_items[] =$menu_item;
           }
 }

            foreach ( $items as $item ): ?>
                <div class="footer__content--col">
                    <div class="footer__content--col-title">
      
                    <?php echo($item->title) ; ?>
                    
                </div>
                    <ul class="footer__content--col-list">
                        <?php foreach ($sub_items as $item_sub): ?>
                    
                            <?php if ($item_sub->menu_item_parent == $item->ID): ?>

                                    
                                <li class="list-item">
                            <a href="<?php echo($item_sub->url); ?>"><?php echo($item_sub->title);?></a>
                        </li>
                            <?php endif; ?>
                       <?php endforeach; ?>
                                    </ul>
             </div>
            <?php endforeach; ?>
            </div>
<!--                end-->


            <div class="footer__partners">
                <ul class="partners-payment">
                    <li class="payment-text">
                        <p>
                            <?php the_field('footer_payments:', 'options'); ?>
                        </p>
                    </li>

                    <li class="payment-badge">
                        <img src="<?php the_field('footer_payments_visa', 'options'); ?>">
                    </li>

                    <li class="payment-badge">
                        <img src="<?php the_field('footer_payments_master-card', 'options'); ?>">
                    </li>
                </ul>

                <ul class="partners-security">
                    <li class="security-text">
                        <p>
                            <?php the_field('footer_security:', 'options'); ?>
                        </p>
                    </li>

                    <li class="security-badge">
                        <img src="<?php the_field('footer_security_img1', 'options'); ?>">
                    </li>

                    <li class="security-badge">
                        <img src="<?php the_field('footer_security_img2', 'options'); ?>">
                    </li>

                    <li class="security-badge">
                        <img src="<?php the_field('footer_security_img3', 'options'); ?>">
                    </li>

                    <li class="security-badge">
                        <img src="<?php the_field('footer_security_img4', 'options'); ?>">
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer__details">
            <div class="footer__details--text container">
                <p>
                    <?php the_field('footer_text1', 'options'); ?>
                </p>

                <p>
                    <?php the_field('footer_text2', 'options'); ?>
                </p>

                <p>
                    <?php the_field('footer_text3', 'options'); ?>
                </p>
            </div>
        </div>
    </div>
<div id="loadingDiv"><div class="loader">Loading...</div></div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://unpkg.com/globe.gl">
</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


<?php wp_footer(); ?>




</html>
