$(document).ready(function() {
<<<<<<< HEAD
    setTimeout(function(){
        $('#grayBack').slideToggle(800);

            $( ".sides" ).fadeTo( "slow" , 0.5, function() {
            })
    }, 2000);
    signUp2 = 0;
    running = 0;
    slideshow()

});

function signin () {
=======

    setTimeout(function(){
        $('.clientsCTA').slideToggle(800);
    }, 2000);




});

function submit () {
>>>>>>> 7675a64073dcc4ca854651761fe128504941f66a

    username = $('#username').val();
    password = $('#password').val();

    if (username.length > 0 && password.length > 0) {
        loggedIn = 1;
<<<<<<< HEAD
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
        $('#grayBack').slideToggle(800);
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

//Below is the slider javascript //

$("#slideshow > div:gt(0)").hide();

function slideshow() {
    $('#slideshow > div:first')
        .slideDown(1000)
        .next()
        .slideUp(1000)
        .end()
        .appendTo('#slideshow');
    if (running == 1) {
        console.log("Don't do anything.")
    }
    if (running == 0) {
        setInterval(slideshow, 2000);
        running = 1;
    }
=======
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






>>>>>>> 7675a64073dcc4ca854651761fe128504941f66a

}