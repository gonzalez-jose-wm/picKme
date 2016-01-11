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
    checkPass();
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

            $usrn = $row["id_field"];
            $name = ($_POST['username']);
            switch ($usrn) {
                case ($usrn == $name):
                    global $used;
                    $used = "has already been taken.";
                    break;
                case ($usrn != $name):
                    global $used;
                    if ($used == "has already been taken.") {

                    }
                    else {
                        $used = "is available!";

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
?>
<form name='form' method='post'>
"Email: <input type='email' id='email'><br>
</form>
    Name: <input type='text' name='username' id='name'><br/>

New Username: <input type='text' id='username'><br>
New Password: <input type='password' id='password'><br>
Confirm Password: <input type='password' id='password2'><br>
<button onClick='signup()'>Sign Up!</button> <br> <div id='error'>

<div class="jose"> Your username <?php global $used; echo $used; ?>
<div id="output"> Output here</div>
</div>

    <div id="grayBack">
    <div class="sides"></div>
    <div id="clientsCTA">
    </div>
    <div class="sides"></div>
</div>



















