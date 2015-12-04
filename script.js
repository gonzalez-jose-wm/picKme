$(document).ready(function() {

    setTimeout(function(){
        $('#clientsCTA').slideToggle(800);
    }, 2000);
    signUp2 = 0;

});

function signin () {

    username = $('#username').val();
    password = $('#password').val();

    if (username.length > 0 && password.length > 0) {
        loggedIn = 1;
        $('#clientsCTA').slideToggle(800)
    }
    if (username.length > 0 && password.length == 0){
        email2 =document.getElementById("password");
        email2.style.backgroundColor = "palegoldenrod";
        email3 =document.getElementById("username");
        email3.style.backgroundColor = "";
        $('#error').html("Password field can not be left blank.")
    }
    if (username.length == 0 && password.length > 0) {
        email2 =document.getElementById("username");
        email2.style.backgroundColor = "palegoldenrod";
        email3 =document.getElementById("password");
        email3.style.backgroundColor = "";
        $('#error').html("Username field can not be left blank.")
    }
    if (username.length == 0 && password.length == 0) {
        email2 =document.getElementById("password");
        email2.style.backgroundColor = "palegoldenrod";
        email3 =document.getElementById("username");
        email3.style.backgroundColor = "palegoldenrod";
        $('#error').html("Username and password fields are required.")
    }
}
function signup () {
if (signUp2 == 0){
    $('#clientsCTA').html("Email: <input type='email' id='email'><br> New Username: <input type='text' id='username'><br>New Password: <input type='password' id='password'><br>Confirm Password: <input type='password' id='password2'><br> <button onClick='signup()'>Sign Up!</button> <br> <div id='error'></div>");
    signUp2 = 1;
    throw "error this!"
}
if (signUp2 == 1){

    password = $('#password').val();
    password2 = $('#password2').val();
    email = $('#email').val();
    username = $('#username').val();

    if (password == password2 && email.length > 5 && username.length > 0 && password.length > 0){
        $('#clientsCTA').slideToggle(800);
    }
    if (password.length == 0){
        email2 =document.getElementById("password");
        email2.style.backgroundColor = "palegoldenrod";
        $('#error').html("Password field can not be left blank.")
    }
    if (password.length > 0){
        email2 =document.getElementById("password");
        email2.style.backgroundColor = "";
    }
    if (username.length == 0){
        email2 =document.getElementById("username");
        email2.style.backgroundColor = "palegoldenrod";
        $('#error').html("Username field can not be left blank.")
    }
    if (username.length > 0){
        email2 =document.getElementById("username");
        email2.style.backgroundColor = "";
    }
    if (email.length <= 5 && email.length > 0){
        email2 = document.getElementById("email");
        email2.style.backgroundColor = "palegoldenrod";
        $('#error').html("Please enter a real email.")
    }
    if (email.length > 5){
        email2 =document.getElementById("email");
        email2.style.backgroundColor = "";
    }
    if (email.length == 0){
        email2 = document.getElementById("email");
        email2.style.backgroundColor = "palegoldenrod";
        $('#error').html("Email field can not be left blank.");
    }
    if (password != password2) {
        $('#error').html("Please enter matching passwords.")
    }
    if (password2.length == 0){
        email2 =document.getElementById("password2");
        email2.style.backgroundColor = "palegoldenrod";
        $('#error').html("Confirm Password field can not be left blank.")
    }
    if (password2.length > 0){
        email2 =document.getElementById("password2");
        email2.style.backgroundColor = "";
    }

}

}