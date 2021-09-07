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
//wp_deregister_script('jquery');
//wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, null);
//wp_enqueue_script('jquery');


wp_deregister_script('jquery');

?>
<!--<script type="text/javascript" src="jquery.js"></script>-->
<!--<script type="text/javascript" src="--><?//=get_stylesheet_directory_uri()?><!--/ajax.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <main class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1> Название </h1>
            <h2> <?php the_title(); ?> </h2>
            <h1> Статья </h1>
            <h2> <?php the_field('comment'); ?> </h2>


            <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                        <div class="col-auto d-none d-lg-block">
                            <!--         Изображение начало           -->
                            <?php
                            $image = get_field('img');
                            if (!empty($image)): ?>
                                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                            <!--       Изображение конец              -->
                        </div>
                    </div>
                </div>
            </div>
            <hr> <?php endwhile; else: ?>

            <p> <?php _e('Sorry no posts'); ?></p> <?php endif; ?>
    </main>
    <!--    -----------Form start---------------->

<h3>Оставте  свой отзыв</h3>
<div id="comments">
<form class="form-container recall-form-validate" action="<?=get_stylesheet_directory_uri()?>/create.php" method="post">
    <p><input style="display: none" type="text" name="link"  value="<?=get_permalink(); ?>"/></p>
    <p>Name:
        <input type="text" name="author_name" id="author_name" /></p>
    <p>Comment:
        <textarea required placeholder="Что думаете?" name="comment" id="comment"></textarea></p>
    <input id= "submit" name="submit" type="submit" value="Добавить">
</form>

<h2>Коментарии</h2>


<?php
include "viewcomments.php";
myViewcommets();
?>

</div>
<script>
  //  myscript();
jQuery(function ($) {
        $(document).ready(function ($) {
            var form = $(".form-container").serialize();

            $('form').bind('submit', function(e){
                e.preventDefault();

                var Comment = $("#comment").val();
                var author_name = $("#author_name").val();

                var Comment1 = '<p>' + Comment + '</p>';
                var author_name1 = '<p>' + author_name + '</p>';


                var delName = document.getElementById('author_name');
                var delComment = document.getElementById('comment');

                form = $(this);
                $.ajax({
                    url: $(this).attr('action'),
                    data: form.serialize(),
                    type: "post",
                    success: function (data) {
                        $("#comments").append(Comment1);

                        $("#comments").append(author_name1);

                    },
                    error: function () {}
                });

                delName.value = '';
                delComment.value = '';
            });


        });

    });
</script>





    <!--    --------------Form and-------------------->
    </main><!-- #site-content -->
<?php
//get_permalink();
//var_dump(get_permalink());
//?>



<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
<!-----------------------------Create comment in db START------------------------------>
<?php
 class Comments
 {
     public static function createComment($options)
     {
         $db = Db::getConnection($options);
         echo 'connect to db ';

         $result = $db->prepare('INSERT INTO comments (link, author_name, comment) VALUES (:link, :author_name, :content, :comment)');
         $result->bindParam(":link", $options['link'], PDO::PARAM_STR);
         $result->bindParam(":author_name", $options['author_name'], PDO::PARAM_STR);
         $result->bindParam(":comment", $options['comment'], PDO::PARAM_STR);
         $res = $result->execute();
         if ($res) {
             echo 2;
             return $db->lastInsertId();
         } else {
             var_dump($result->errorInfo());
         }
         return 0;
     }

 }



class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password'] );

        return $db;
    }
}

?>

<!-----------------------------Create comment in db End------------------------------>