/*var context = {
    'displaymsg' : "Please login into your account"
};

var template = $('#loginmsg').html();

var templateScript = Handlebars.compile(template);

var generatedHtml = templateScript(context);

$('#login-msg').text(generatedHtml);*/


/* Form submission*/
$('form#login-form').submit(function (e) {
    e.preventDefault();
    var formData = {
        username : $('#username').val(),
        password : $('#password').val()
    };

    $.ajax({
        type: "Post",
        url: "/backoffice/verify_login",
        data: formData,
        success: function (response) {
            let res = JSON.parse(response);
            if (res.response === true)
                location.href = "/backoffice/dashboard";
            else
                $('#login-msg').html("<strong style='color:red;font-weight:900'>Invalid Username / Password</strong>");
        },
        else: function () {
            alert("An Error Occurred. Contact Admin");
        }
    });
});

