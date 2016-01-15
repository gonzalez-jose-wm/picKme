<?php
/**
 * Created by PhpStorm.
 * User: session1
 * Date: 1/12/16
 * Time: 3:16 PM
 */
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>