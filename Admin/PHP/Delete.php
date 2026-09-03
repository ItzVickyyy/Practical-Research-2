<?php 
include 'Connect.php';

if(isset($_GET['deleteid'])){
    $ID = $_GET['deleteid'];

    $sql = "DELETE FROM `upload` where ID = $ID";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Deleted Successfully";
    } else{
        die(mysqli_error($conn));
    }

}

header("refresh: 0; url = ../Home.php");

?>