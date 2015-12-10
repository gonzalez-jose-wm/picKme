$(document).ready(function() {

    setTimeout(function(){
        $('.clientsCTA').slideToggle(800);
    }, 2000);




});

function submit () {

    username = $('#username').val();
    password = $('#password').val();

    if (username.length > 0 && password.length > 0) {
        loggedIn = 1;
        $('.clientsCTA').slideToggle(800)
    }
    if (username.length > 0 && password.length == 0){
        $('#error').html("Password field can not be left blank.")

    }
    if (username.length == 0 && password.length > 0) {
        $('#error').html("Username field can not be left blank.")
    }
    if (username.length == 0 && password.length == 0) {
        $('#error').html("Username and password fields are required.")
    }







}