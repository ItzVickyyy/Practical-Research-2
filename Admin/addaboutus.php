<?php
include 'PHP/member.php';
if (isset($_POST["submit"])) {
    $First_Name = $_POST["First_Name"];
    $Last_Name = $_POST["Last_Name"];
    $Position = $_POST["Position"];
    $Position_Title = $_POST["Position_Title"];
    $Department = $_POST["Department"];

    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./images/members/" . $filename;

    $sql = "INSERT INTO `member`( `First_Name`, `Last_Name`, `Position`, `Position_Title`, `Department`, `filename`) 
    VALUES ( '$First_Name', '$Last_Name', '$Position', '$Position_Title', '$Department', '$filename')";
    if (mysqli_query($link, $sql)) {
    } else {
        }
    if (move_uploaded_file($tempname, $folder)) {

	}
    header("refresh:0.1; url=adminaboutus.php");
    $link->close();
}
?>
