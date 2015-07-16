$(function() {
    $(document).ready(function(){
        $(".button-collapse").sideNav();
        $('input#email').characterCounter();

        $('.anchor').on('click', function(){
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 1000);
            return false;
        });

        $(document).ready(function(){
            $('#create').on('click', function(){
                $('#modal1').openModal({
                    dismissible: false
                });
            });
        });

    });
});