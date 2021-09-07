<ul class="commentlist">
    <?php
    $comments = get_comments(array(
        'post_id' => 62,
        'status' => 'approve'
    ));
    wp_list_comments(array(
        'per_page' => 3,
        'reverse_top_level' => false
    ), $comments);
    ?>
</ul>