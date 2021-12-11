$(document).ready(function () {
    $("form").submit(function (e) {
        $("#err").html("");

        if ($("#firstname").val() == "") {
            $("#err").html("Firstname required");
            e.preventDefault();
        } else if ($("#email").val() == "") {
            $("#err").html("Email required");
            e.preventDefault();
        } else if ($("#username").val() == "") {
            $("#err").html("Username required");
            e.preventDefault();
        } else if ($("#password").val() == "") {
            $("#err").html("password required");
            e.preventDefault();
        } else if ($("#cpassword").val() == "") {
            $("#err").html("Confirm password required");
            e.preventDefault();
        } else if ($("#address").val() == "") {
            $("#err").html("Address required");
            e.preventDefault();
        } else if ($("#phoneno").val() == "") {
            $("#err").html("Phone Number required");
            e.preventDefault();
        } else if (
            !(
                $("#male").is(":checked") ||
                $("#female").is(":checked") ||
                $("#other").is(":checked")
            )
        ) {
            $("#err").html("Must select Gender");
            e.preventDefault();
        } else if (!$("#admin").is(":checked")) {
            $("#err").html("Must select user type");
            e.preventDefault();
        } else if ($("#dob").val() == "") {
            $("#err").html("Date of birth required");
            e.preventDefault();
        }
        if (
            $("#password").val() != "" &&
            $("#cpassword").val() != "" &&
            $("#password").val() != $("#cpassword").val()
        ) {
            $("#err").html("Password and Confirm password is not matched");
            e.preventDefault();
        }
    });
});
