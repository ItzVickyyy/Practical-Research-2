<?php
require 'PHP/Connect.php';
include 'imgupload.php';
if (isset($_POST["submit"])) {
    $Headline = $_POST["Headline"];
    $Author = $_POST["Author"];
    $Category = $_POST["Category"];
    $Date_Published = $_POST["Date_Published"];
    $First_Paragraph = $_POST["First_Paragraph"];
    $Second_Paragraph = $_POST["Second_Paragraph"];
    $Third_Paragraph	 = $_POST["Third_Paragraph"];
    $Fourth_Paragraph = $_POST["Fourth_Paragraph"];
    $Fifth_Paragraph = $_POST["Fifth_Paragraph"];
    $Sixth_Paragraph = $_POST["Sixth_Paragraph"];
    $Seventh_Paragraph = $_POST["Seventh_Paragraph"];
    $Eighth_Paragraph = $_POST["Eighth_Paragraph"];

    $sql = "INSERT INTO `upload`( `Headline`, `Author`, `Category`, `Date_Published`, `First_Paragraph`, `Second_Paragraph`, `Third_Paragraph`, `Fourth_Paragraph`, `Fifth_Paragraph`, `Sixth_Paragraph`, `Seventh_Paragraph`, `Eighth_Paragraph`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssssssss", $Headline, $Author, $Category, $Date_Published, $First_Paragraph, $Second_Paragraph, $Third_Paragraph, $Fourth_Paragraph, $Fifth_Paragraph, $Sixth_Paragraph, $Seventh_Paragraph, $Eighth_Paragraph);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header("Location: home.php");
        exit;
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="styles/Backgrond.css">
    <link rel="stylesheet" href="styles/CArticle.css">
    <link rel="stylesheet" href="styles/Styles.css">
    <link rel="icon" href="images/logoico.ico">
</head>
<body>

<!--Input Info-->
<a href="Home.php">
    <div class="back">
        Back to Menu
    </div>
</a> 
<div class="container">
    <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
        <label for="Headline" id="headline">Headline:</label>
        <input type="text" name="Headline" placeholder="Headline" id="headline" pattern="[a-zA-Z0-9!@#$%^*_|]" required>
        <br>
        <label for="Author" id="Author">Author:</label>
        <input type="text" name="Author" id="Author" placeholder="Name of Author" required>
        <br>
        <label for="Category" id="Category">Category:</label>
        <select type="text" name="Category" id="Category" placeholder="Category" required>
            <option value="News">News</option>
            <option value="Acads">Acads</option>
            <option value="Sports">Sports</option>
            <option value="Events">Events</option>
        </select>
        <br>
        <label for="Date_Published" id="pubdate">Date Published</label>
        <input type="date" name="Date_Published" id="pubdate" required>
        <br>
        <input class="form-control" type="file" name="uploadfile"/>
        <br>
        <label for="Paragraph1"></label>
        <br>
        <textarea type="text" name="First_Paragraph" id="Paragraph" placeholder="1st Paragraph" pattern="[a-zA-Z0-9!@#$%^*_|]" required></textarea>
        <br>
        <textarea type="text" class="addprgrph" style="width: 124vh; height:10vh;" name="Second_Paragraph"  placeholder="2nd Paragraph" pattern="[a-zA-Z0-9!@#$%^*_|]"></textarea>
        <br>
        <textarea type="text" class="addprgrph"  name="Third_Paragraph" placeholder="Add 3rd Paragraph" pattern="[a-zA-Z0-9!@#$%^*_|]"></textarea>
        <br>
        <textarea type="text" class="addprgrph"  name="Fourth_Paragraph" placeholder="Add 4th Paragraph" pattern="[a-zA-Z0-9!@#$%^*_|]"></textarea> 
        <br>
        <textarea type="text" class="addprgrph"  name="Fifth_Paragraph" placeholder="Add 5th Paragraph" pattern="[a-zA-Z0-9!@#$%^*_|]"></textarea> 
        <br>
        <textarea type="text" class="addprgrph"  name="Sixth_Paragraph" placeholder="Add 6th Paragraph" pattern="[a-zA-Z0-9!@#$%^*_|]"></textarea> 
        <br>
        <textarea type="text" class="addprgrph"  name="Seventh_Paragraph" placeholder="Add 7th Paragraph" pattern="[a-zA-Z0-9!@#$%^*_|]"></textarea> 
        <br>
        <textarea type="text" class="addprgrph"  name="Eighth_Paragraph" placeholder="Add 8th Paragraph" pattern="[a-zA-Z0-9!@#$%^*_|]"></textarea> 
        <br>
        <input type="submit" name="submit" value="Publish">
    </form>
</div>
</body>
</html>