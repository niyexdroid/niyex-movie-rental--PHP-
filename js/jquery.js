(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    $('#signUp').hide();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

$(document).ready(function () {
    $('.shake').hover(function (event) {
        $(event.currentTarget).fadeIn();
    });
    // fadeIn effect for the rent items
    new WOW().init();

    $('#gallery-btn').on('click', function () {
        $('#carousel-link').toggle();
    
    });
    
});