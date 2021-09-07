
jQuery(function ($) {

        $(document).ready(function () {
                $('body').on('click', '#submit', function () {
                        console.log('hello world');

                        preventDefault();

                        //event.preventDefault();
                        //alert('123');
                        var $data = {};
// переберём все элементы input, textarea и select формы с id="myForm "
                        $('#comments').find('input,text, select').each(function() {
                                // добавим новое свойство к объекту $data
                                // имя свойства – значение атрибута name элемента
                                // значение свойства – значение свойство value элемента
                                $data[this.name] = $(this).val();
                                console.log($data);
                                alert('123')
                        });





                });
                // return false;
        });
});









console.log(1234);