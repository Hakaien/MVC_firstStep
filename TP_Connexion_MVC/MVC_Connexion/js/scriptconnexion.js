$(document).ready(function () {
    $("#submitTest").on("click", function () {

        $.ajax({
            url: "www.google.fr",
            type: "POST",
            dataRype: "sql",

            success: function (data) {
                console.log($data);
            }, error: function (resultat, status, erreur) {
                console.log(resultat.statusText);
            }
        })
    })
})