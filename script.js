$(document).ready(function() {

    setTimeout(function(){
        $('#clientsCTA').slideToggle(800);
    }, 2000);


});

function signin () {

    username = $('#username').val();
    password = $('#password').val();

    if (username.length > 0 && password.length > 0) {
        loggedIn = 1;
        $('#clientsCTA').slideToggle(800)
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
function signup () {
    $('#clientsCTA').html("
        New Username:
        <input type='text' id='username'><br>
        New Password:
<input type='text' id='password'><br>
        <button onClick='signin()'>Submit</button>
        <button onClick='signup()'>Sign Up</button>
    <br>
    <div id='error'></div>");



}