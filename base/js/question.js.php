<script>
    $(function () {
    $("#question_form").validate({
        debug: true,
        submitHandler: function (form) {
            console.log("réponse envoyée");
            $.post(
                "./json/addQuestion.json.php",
                {
                    rep_1: <?php $_SESSION['user_answers'][1]?>,
                    rep_2: <?php $_SESSION['user_answers'][2]?>,
                    rep_3: <?php $_SESSION['user_answers'][3]?>,
                    rep_4: <?php $_SESSION['user_answers'][4]?>,
                    rep_5: <?php $_SESSION['user_answers'][5]?>,
                    rep_6: <?php $_SESSION['user_answers'][6]?>,
                    rep_7: <?php $_SESSION['user_answers'][7]?>,
                    rep_8: <?php $_SESSION['user_answers'][8]?>,
                    rep_9: <?php $_SESSION['user_answers'][9]?>,
                    rep_10: <?php $_SESSION['user_answers'][10]?>
                }
            )
        }
    })
})
</script>