(function ($) {

    $("#contact-form").on('submit', function () {

        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var error = false;
        var error_message = '';

        if (!email) {
            error = true;
            error_message += "<p>Email can't be empty field</p>";
        }
        if (!subject) {
            error = true;
            error_message += "<p>Subject can't be empty field</p>";
        }
        if (!message) {
            error = true;
            error_message += "<p>Message can't be empty field</p>";
        }


        if(error){
            $(".error-message").html('<div class="alert alert-danger">'+error_message+'</div>');
            return false;
        }
    });

})(jQuery);