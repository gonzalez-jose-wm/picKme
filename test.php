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
if (empty($_POST['username'])){

    echo "<script type='text/javascript'>function popup () { $('#grayBack').slideToggle(800); $( '.sides' ).fadeTo( 'slow' , 0.5, function() {}); } popup();</script>";

}

if (empty($_POST['username'])){
    checkPass();
}

function checkPass () {
    global $used;
    $used = 0;
    global $foo;
    $foo = 0;
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
                    $used = "accepted!";
                    break;
                case ($usrn != $name):
                    global $used;
                    if ($used == "accepted!") {

                    }
                    else {
                        $used = "denied!";
                        while ($foo == 0) {
                            echo "<script type='text/javascript'>function popup () { $('#grayBack').slideToggle(800); $( '.sides' ).fadeTo( 'slow' , 0.5, function() {});}</script>";
                            echo "hi there";
                            $foo = $foo +1 ;
                            //add a ne variable outside this function instead of $foo
                        }

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
<div class="jose"> Your username has been <?php global $used; echo $used; ?>
<div id="output"> Output here</div>
</div>

    <div id="grayBack">
    <div class="sides"></div>
    <div id="clientsCTA">
    </div>
    <div class="sides"></div>
</div>



















