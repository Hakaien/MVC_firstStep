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

    // RegEx Login/Mail/pwd
    // var login_connectRegex = /^[A-Za-zÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]{3,30}/;
    // var email_connectRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    // var pwd_connectRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;
    // détail regex pwd : (au moins 1 min) (au moins 1 maj)(au moins 1 chiffre)(au moins 1carac special)[accept en tout..]

    $(".connectForm").on("keyup", function (e) {
        e.preventDefault();
        this.value = this.value.charAt(0).toUpperCase() + this.value.substr(1);
        let inputId = $(this).attr("id");
        let inputPattern = $(this).attr("pattern");
        let inputSpan = $(this).parent().next();
        // let test = inputId+"Regex";
        // console.log(test);
        try {
            if ($("#" + inputId + "").val().match(inputPattern)) {
                $("#" + inputId + "").css("border", "2px solid green");
                inputSpan.text("gg").css("color", "black");
            } else {
                throw "Erreur 66 !";
            }
        } catch (error) {
            inputSpan.text(error);
            inputSpan.css("color", "red");
        }
    });


    // end ready
})