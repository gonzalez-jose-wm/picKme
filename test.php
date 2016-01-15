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
                    header('Location: main.html');





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
    $company = ($_POST['company']);
    $telephone = ($_POST['tel']);

    $sql = 'INSERT INTO new_table ( Email, Username, Password, Company, Telephone ) VALUES ( ' . $email . ',' . $name . ',' . $password . ',' . $company . ',' . $telephone . ')';

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



<br><br><br>
<form name='form2' method='post' id="form2">
    Username: <input type='text' name="username2" id='username2'><br>
    Password: <input type='password' name='password3' id='password3'><br>
</form> <button onClick="signin()"> Sign In </button><br>  <!-- <div id='error'> </div> -->

<?php

if ( ! empty($_POST['username2'])){
    $name = ($_POST['username2']);
    checkPass();
}
?>

<div class="jose"> Your <?php global $used; echo $used; ?><?php global $used3; echo $used3; ?></div>




<head>
    <meta charset="UTF-8"> <!-- tell internet to use the latest rendering engine -->
    <meta http-eqiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial- scle = 1">
    <title>picKme</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style type="text/css">
    </style>




</head>
<div class="container">

    <form name='form' method='post' id="form">
        <div class="row setup-content" id="step-1">

            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Account Signup</h3>
                    <!-- Select Basic -->
                    <div class="form-group">

                        <fieldset>
                            <div id="legend">
                                <legend class="">Register</legend>
                            </div>

                            <div class="col-xs-6">
                                <div class="control-group">
                                    <!-- Username -->

                                    <label class="control-label" for="username">Username</label>
                                    <div class="controls">
                                        <input type='text' name="username" id='username' placeholder="" class="input-xlarge">
                                        <span class="help-block">Username can contain any letters or numbers, without spaces</span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- E-mail -->
                                    <label class="control-label" for="email">E-mail</label>
                                    <div class="controls">
                                        <input type='email' name="email" id='email' placeholder="" class="input-xlarge">
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- Password-->
                                    <label class="control-label" for="password">Password</label>
                                    <div class="controls">
                                        <input type='password' name='password' id='password' placeholder="" class="input-xlarge">
                                        <p class="help-block">Password should be at least 4 characters</p>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- Password -->
                                    <label class="control-label" for="password_confirm">Password (Confirm)</label>
                                    <div class="controls">
                                        <input type='password' name='password2' id='password2' placeholder="" class="input-xlarge">

                                        <p class="help-block"></p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-6">


                                <div class="control-group">
                                    <!-- Password-->
                                    <label class="control-label" for="password">Company</label>
                                    <div class="controls">
                                        <input type="text" id="company" class="input-xlarge" name="company">
                                        <p class="help-block">The name of your company or organization</p>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- Password -->
                                    <label class="control-label" for="password_confirm">Telephone (optional)</label>
                                    <div class="controls">
                                        <input type="password" id="tel" placeholder=" " class="input-xlarge " name="tel">
                                        <p class="help-block ">Help us give you better support.</p>
                                    </div>
                                </div>
                                <div id='error'><p> Things here</p> </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <button class="btn btn-primary nextBtn btn-lg pull-right " type="button" onClick='signup()'>Done!</button>
</div>


<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
















