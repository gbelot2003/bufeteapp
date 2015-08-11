(function() {
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
                $('select').material_select();

                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15 // Creates a dropdown of 15 years to control year
                });
            });
        });
    });
})();

