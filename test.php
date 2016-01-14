<link rel="stylesheet" type="text/css" href="mainstyle.css">
<script src="jquery-2.1.4.min.js"></script>
    <script src="script.js"> </script>

<!-- to write javascript in php
$message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";
-->
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql2 = "SELECT * FROM new_table";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<br> id_field: ". $row["id_field"]. ", " . "    AnotherThing: ". $row["AnotherThing"]. ", " . "One Last field:". $row["One Last field"] . "<br>";
    }
} else {
    echo "Not being used";
}




if ( ! empty($_POST['username'])){
    $name = ($_POST['username']);
    insertInfo();
}

function checkPass () {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "mydb";


// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


$sql = "SELECT * FROM new_table";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            $usrn = $row["Username"];
            $name = ($_POST['username2']);
            $pass = ($_POST['password3']);
            switch ($usrn) {
                case ($usrn == $name):
                    $pass2= $row["Password"];
                    echo "<script type='text/javascript'>alert('$pass');</script>";
                    echo "<script type='text/javascript'>alert('$pass2');</script>";
                    global $used;
                    $used = "Username accepted!";





                   if ($pass2 == $pass) {
                       echo "<script type='text/javascript'>alert('victory');</script>";
                       global $used3;
                       $used3 = "Password accepted.";
                   }
                    else {
                        global $used3;
                        $used3 = "Password denied.";
                    }


                    break;
                case ($usrn != $name):
                    global $used;
                    if ($used == "Username accepted!") {





                    }
                    else {
                        $used = "Username is incorrect.";
                    }

                    break;
            }

        }

    // output data of each row

} else {
    echo "No results found in table.";
}
}


$conn->close();

function insertInfo () {

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "mydb";


// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = ($_POST['username']);
    $password = ($_POST['password']);
    $email = ($_POST['email']);

    $sql = 'INSERT INTO new_table ( Email, Username, Password ) VALUES ( ' . $email . ',' . $name . ',' . $password . ')';

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$_POST['insert'] = null;
    global $insert;
    $insert = null;


}

$conn->close();
?>
<form name='form' method='post' id="form">
"Email: <input type='email' name="email" id='email'><br>
New Username: <input type='text' name="username" id='username'><br>
New Password: <input type='password' name='password' id='password'><br>
Confirm Password: <input type='password' name='password2' id='password2'><br>
</form>
<button onClick='signup()'>Sign Up!</button> <br> <div id='error'> </div>


<br><br><br>
<form name='form2' method='post' id="form2">
    Username: <input type='text' name="username2" id='username2'><br>
    Password: <input type='password' name='password3' id='password3'><br>
</form> <button onClick="signin()"> Sign In </button><br> <div id='error'> </div>

<?php

if ( ! empty($_POST['username2'])){
    $name = ($_POST['username2']);
    checkPass();
}
?>

<div class="jose"> Your <?php global $used; echo $used; ?><?php global $used3; echo $used3; ?></div>





















