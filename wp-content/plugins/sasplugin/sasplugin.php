<?php
/**
 * Classic Editor
 *
 * Plugin Name: Sas plugin
 * Plugin URI:  https://github/fendnasas.com
 * Description: My plugin
 * Version:     1.0
 * Author:      Sergey
 * Author URI:  https://github/fendnasas.com
 * Text Domain: sasplugin
 */

//делает так чтоб функцию мог вызвать только вордпресс
if (!defined('ABSPATH')) {
    die;
}

class SasPlugin
{



    public function register(){

        add_action('init', [$this, 'custom_post_type']);

        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_front']);

        //Load template подгружаю свою страничку
        add_filter('template_include', [$this,'review_template']);

        // подключаю меню для админа
        add_action('admin_menu', [$this, 'add_admin_menu']);

        // подключаем ссылку на настройки в описании
        add_filter('plugin_action_links_'.plugin_basename(__FILE__),[$this, 'add_plugin_settings_link']);

        add_action('admin_init',[$this,'setting_init']);

//        _________________________
        add_filter('comment_form_default_fields', [$this,'extend_comment_custom_default_fields']);

        add_action( 'comment_form_logged_in_after', [$this,'extend_comment_custom_fields'] );
        add_action( 'comment_form_after_fields', [$this,'extend_comment_custom_fields']);

        add_action( 'comment_post', [$this,'save_extend_comment_meta_data'] );

        add_filter( 'preprocess_comment', [$this,'verify_extend_comment_meta_data'] );

        add_filter( 'comment_text', [$this,'modify_extend_comment']);

        add_action( 'wp_enqueue_scripts', [$this,'check_count_extend_comments'] );
//        _________________________
    }


    static function activation()
    {
        flush_rewrite_rules();

    }
    static function deactivation (){
        flush_rewrite_rules();
    }


    // добавляю админское меню для плагина
    public function add_admin_menu(){
        add_menu_page(
            esc_html__('Sasplugin Settings Page', 'sasplugn'),
            esc_html__('Sasplugin', 'sasplugn'),
            'manage_options',
            'sasplugin_settings',
            [$this, 'sasplugin_page'],
            'dashicons-twitch',
            100
        );
    }

    //Sasplugin Admin HTML
    public function sasplugin_page(){
        require_once plugin_dir_path(__FILE__).'admin/admin.php';
    }
    //Добавляю в описание плагина ссылку на настройки
    public function add_plugin_settings_link($link){
        $custom_link = '<a href="admin.php?page=sasplugin_settings">'.esc_html__('Settings', 'sasplugin').'</a>';
        array_push($link, $custom_link);
        return $link;
    }

    public function setting_init(){
        register_setting('plugin_settings','booking_settings_options');

        add_settings_section('sasplugin_settings_section', esc_html__('Settings','sasplugin'), [$this, 'settings_section_html'],'sasplugin_settings');

        add_settings_field('posts_per_page', esc_html__('Posts per page','sasplugin'), [$this, 'posts_per_page_html'], 'sasplugin_settings', 'sasplugin_settings_section');

        //add_settings_field('title_for_rooms', esc_html__('Archive page title','sasplugin'), [$this, 'title_for_rooms_html'], 'sasplugin_settings', 'sasplugin_settings_section');

    }

    //Settings section html
    public function settings_section_html(){
        echo esc_html__("Hello, my plugin!", 'sasplugin');

    }

    //Settings fields HTML
    public function posts_per_page_html(){
        $options = get_option('sasplugin_settings_section'); ?>

        <input type="text" name="sasplugin_settings_options[posts_per_page]" value="<?php echo isset($options['posts_per_page']) ? $options['posts_per_page'] : "";  ?>" />

        <?php

    }

    //Проверяю есть ли стозднанная страница пользователем если нету то подгружаю свою,
    // метод вызываю этот метод в register.
    public function review_template($template){

        if(is_post_type_archive('saspost')){
            $theme_files = ['archive-room.php','sasplugin/archive-room.php'];
            $exist = locate_template( $theme_files, false);
            if($exist != ''){
                return $exist;
            } else {
                return plugin_dir_path(__FILE__).'templates/archive-room.php';
            }
        }
        return $template;
    }




    //Enqueue Admin
    public function enqueue_admin(){
        wp_enqueue_style('sasPluginStyle', plugins_url('/assets/admin/styles.css', __FILE__));
        wp_enqueue_script('sasPluginScript', plugins_url('/assets/admin/scripts.js', __FILE__));
    }

    //Enqueue Front
    public function enqueue_front(){
        wp_enqueue_style('sasPluginStyle', plugins_url('/assets/front/styles.css', __FILE__));
        wp_enqueue_script('sasPluginScript', plugins_url('/assets/front/scripts.js', __FILE__));
    }

    function custom_post_type()
    {
        register_post_type('saspost',
            [
                'public' => true,
                'has_archive' => true,
                'rewrite' => ['slug' => 'sasposts'],//меняем названеи ссылки
                'label' => esc_html__('SasPost', 'sasplugin'),
                'supports' => ['title', 'editor', 'thumbnail']
            ]
        );
    }

//    ________________________________________


    function extend_comment_custom_default_fields($fields) {

        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );

        $fields[ 'author' ] = '<p class="comment-form-author">'.
            '<label for="author">' . __( 'Name' ) . '</label>'.
            ( $req ? '<span class="required">*</span>' : '' ).
            '<input id="author" name="author" type="text" value="'. esc_attr( $commenter['comment_author'] ) .
            '" size="30" tabindex="1"' . $aria_req . ' /></p>';

        $fields[ 'email' ] = '<p class="comment-form-email">'.
            '<label for="email">' . __( 'Email' ) . '</label>'.
            ( $req ? '<span class="required">*</span>' : '' ).
            '<input id="email" name="email" type="text" value="'. esc_attr( $commenter['comment_author_email'] ) .
            '" size="30"  tabindex="2"' . $aria_req . ' /></p>';

        $fields[ 'url' ] = '<p class="comment-form-url">'.
            '<label for="url">' . __( 'Website' ) . '</label>'.
            '<input id="url" name="url" type="text" value="'. esc_attr( $commenter['comment_author_url'] ) .
            '" size="30"  tabindex="3" /></p>';

        $fields[ 'phone' ] = '<p class="comment-form-phone">'.
            '<label for="phone">' . __( 'Phone' ) . '</label>'.
            '<input id="phone" name="phone" type="text" size="30"  tabindex="4" /></p>';

        return $fields;
    }

    // Добавляем поля для всех пользователей

    function extend_comment_custom_fields() {

        echo '<p class="comment-form-title">'.
            '<label for="title">' . __( 'Comment Title' ) . '</label>'.
            '<input id="title" name="title" type="text" size="30"/></p>';

        echo '<p class="comment-form-rating">'.
            '<label for="rating">'. __('Rating') . '<span class="required">*</span></label>
			  <span class="commentratingbox">';

        for( $i=1; $i <= 5; $i++ ){
            echo '
		<label class="commentrating" style="display:inline-block;">
			<input type="radio" name="rating" id="rating" value="'. $i .'"/> '. $i .'   
		</label>';
        }

        echo'</span></p>';
    }


    function save_extend_comment_meta_data( $comment_id ){

        if( !empty( $_POST['phone'] ) ){
            $phone = sanitize_text_field($_POST['phone']);
            add_comment_meta( $comment_id, 'phone', $phone );
        }

        if( !empty( $_POST['title'] ) ){
            $title = sanitize_text_field($_POST['title']);
            add_comment_meta( $comment_id, 'title', $title );
        }

        if( !empty( $_POST['rating'] ) ){
            $rating = intval($_POST['rating']);
            add_comment_meta( $comment_id, 'rating', $rating );
        }

    }

    // Проверяем, заполнено ли поле "Рейтинг"

    function verify_extend_comment_meta_data( $commentdata ) {

        // ничего не делаем если это ответ на комментарий
        if ( isset( $_REQUEST['action'] ) && $_REQUEST['action'] === 'replyto-comment' ) {
            return $commentdata;
        }

        if ( empty( $_POST['rating'] ) || ! (int)$_POST['rating'] ) {
            wp_die( __( 'Error: You did not add a rating. Hit the Back button on your Web browser and resubmit your comment with a rating.' ) );
        }

        return $commentdata;
    }

    // Отображение содержимого метаполей во фронт-энде

    function modify_extend_comment( $text ){
        global $post;

        if( $commenttitle = get_comment_meta( get_comment_ID(), 'title', true ) ) {
            $commenttitle = '<strong>' . esc_attr( $commenttitle ) . '</strong><br/>';
            $text = $commenttitle . $text;
        }

        if( $commentrating = get_comment_meta( get_comment_ID(), 'rating', true ) ) {

            $commentrating = wp_star_rating( array (
                'rating' => $commentrating,
                'echo'=> false
            ));

            $text = $text . $commentrating;
        }

        return $text;
    }


    function check_count_extend_comments(){
        global $post;

        if( isset($post) && (int)$post->comment_count > 0 ){
            require_once ABSPATH .'wp-admin/includes/template.php';
            add_action('wp_enqueue_scripts', function(){
                wp_enqueue_style('dashicons');
            });

            $stars_css = '
		.star-rating .star-full:before { content: "\f155"; }
		.star-rating .star-empty:before { content: "\f154"; }
		.star-rating .star {
			color: #0074A2;
			display: inline-block;
			font-family: dashicons;
			font-size: 20px;
			font-style: normal;
			font-weight: 400;
			height: 20px;
			line-height: 1;
			text-align: center;
			text-decoration: inherit;
			vertical-align: top;
			width: 20px;
		}
		';

            wp_add_inline_style( 'dashicons', $stars_css );
        }



    }
    


//    ________________________________________

}

if (class_exists('SasPlugin')) {
    $sasPlugin = new SasPlugin();
    $sasPlugin->register();
}

register_activation_hook(__FILE__, array( $sasPlugin, 'activation'));
register_deactivation_hook(__FILE__, array( $sasPlugin, 'deactivation'));








