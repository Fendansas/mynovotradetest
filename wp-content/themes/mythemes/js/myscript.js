function myscript() {
    jQuery(function ($) {
        $(document).ready(function ($) {
            var form = $(".form-container").serialize();

            $('form').bind('submit', function (e) {
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
                    error: function () {
                    }
                });

                delName.value = '';
                delComment.value = '';
            });


        });

    });
}