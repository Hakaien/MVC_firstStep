$(document).ready(function () {
    $("#submitTest").on("click", function () {

        $.ajax({
            url: "index.php",
            type: "GET",
            dataType: "json",

            success: function (data) {
                console.log(data);
                console.log("connecté");
            }, error: function (resultat, status, erreur) {
                console.log(resultat.statusText);
                console.log("erreur");
            }
        })
    })

    // validation simple sur connexion.
    $("#login_connect").on("keyup", function () {
        this.value = this.value.charAt(0).toUpperCase() + this.value.substr(1);
        let inputId = $(this).attr("id");
        let inputPattern = $(this).attr("pattern");
        if ($("#" + inputId + "").val().match(inputPattern)) {
            $("#" + inputId + "").css("border", "2px solid green");
        } else {
            $("#" + inputId + "").css("border", "2px solid red");
        }
    });



    // end ready
})