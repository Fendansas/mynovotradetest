<?php
//делает так чтоб функцию мог вызвать только вордпресс
if(!defined('WP_UNINSTALL_PLUGIN')){
    die;
}


global $wpdb;

$wpdb->query("DELETE FROM $wpdb->commentmeta WHERE meta_key IN ('phone', 'title', 'rating')");

$sasposts = get_posts(array('post_type' => 'sasPost','numberposts' =>-1));
foreach ($sasposts as $sasPost){
    wp_delete_post($sasPost ->ID,true);
}

