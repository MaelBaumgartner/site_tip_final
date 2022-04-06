$(function () {
    $("#question_form").validate({
        debug: true,
        submitHandler: function (form) {
            console.log("réponse envoyée");
        }
    })
})