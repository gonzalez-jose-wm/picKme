$(document).ready(function() {
    starting = 1;
    signUp2 = 0;
    running = 0;
    $()

});
function popup () {
        $('#grayBack').slideToggle(800);
        $( ".sides" ).fadeTo( "slow" , 0.5, function() {});

}

function inText () {
    $("#clientsCTA").html('<br><br><br>Username: <input type="text" id="username"><br>Password: <input type="password" id="password"><br> <button onClick="signin()">Submit</button> <button onClick="upText()">Sign Up</button> <br> <div id="error"></div>')
}
function upText () {
    $('#clientsCTA').html("Email: <input type='email' id='email'><br> <form name='form' method='post' action='test.php'>Name: <input type='text' name='username' id='name'><br/> <input type='submit' name='submit' value='Submit'> </form> New Username: <input type='text' id='username'><br>New Password: <input type='password' id='password'><br>Confirm Password: <input type='password' id='password2'><br> <button onClick='signup()'>Sign Up!</button> <br> <div id='error'></div>");
}

function signin () {
    username = $('#username2').val();
    password = $('#password3').val();

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
    if (username.length > 0 && password.length > 0) {
        document.getElementById('form2').submit();
    }

}


function submit () {

    username = $('#username').val();
    password = $('#password').val();

    if (username.length > 0 && password.length > 0) {
        loggedIn = 1;

        $('#grayBack').slideToggle(800)
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

    password = $('#password').val();
    password2 = $('#password2').val();
    email = $('#email').val();
    username = $('#username').val();


    if (password == password2 && email.length > 5 && username.length > 0 && password.length > 0){
        document.form.submit();
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














