<?php
error_reporting(0);

$msg = "";

if (isset($_POST['submit'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

	$db = mysqli_connect("localhost", "root", "", "media_club");
	$sql = "INSERT INTO image (filename) VALUES ('$filename')";

	mysqli_query($db, $sql);

	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>