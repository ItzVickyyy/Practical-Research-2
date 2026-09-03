<?php
$link = mysqli_connect("localhost", "root", "", "media_club");
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} else{
    //echo "Connected Successfully";
}

?>