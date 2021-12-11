$(document).ready(function () {
    $("form").submit(function (e) {
        var flag = true;
        $("#usernameErr").html("");
        $("#passwordErr").html("");
        $("#typeErr").html("");

        if ($("#username").val() == "") {
            $("#usernameErr").html("Username required");
            flag = false;
        }
        if ($("#password").val() == "") {
            $("#passwordErr").html("password required");
            flag = false;
        }
        if (!$("#admin").is(":checked")) {
            $("#typeErr").html("Must select user type");
            flag = false;
        }
        if (flag == false) {
            e.preventDefault();
        }
    });
});
