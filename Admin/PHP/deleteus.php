<?php 
include 'member.php';

if(isset($_GET['deleteid'])){
    $ID = $_GET['deleteid'];

    $sql = "DELETE FROM `member` where ID = $ID";
    $result = mysqli_query($link,$sql);
    if($result){
        echo "Deleted Successfully";
    } else{
        die(mysqli_error($link));
    }

}

header("refresh: 0; url = ../adminaboutus.php");

?>