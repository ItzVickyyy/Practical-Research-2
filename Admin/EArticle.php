<?php
require 'PHP/Connect.php';

$db = mysqli_connect("localhost", "root", "", "media_club");

$ID = $_GET['editid'];

$sql = "SELECT * FROM upload WHERE ID = $ID";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

$Headline = $row['Headline'];
$Author = $row['Author'];
$Category = $row['Category'];
$Date_Published = $row['Date_Published'];
$First_Paragraph = $row['First_Paragraph'];
$Second_Paragraph = $row['Second_Paragraph'];
$Third_Paragraph = $row["Third_Paragraph"];
$Fourth_Paragraph = $row["Fourth_Paragraph"];
$Fifth_Paragraph = $row["Fifth_Paragraph"];
$Sixth_Paragraph = $row["Sixth_Paragraph"];
$Seventh_Paragraph = $row["Seventh_Paragraph"];
$Eighth_Paragraph = $row["Eighth_Paragraph"];

if (isset($_POST["update"])) {
    $ID = $_GET['editid'];
    $Headline = $_POST["Headline"];
    $Author = $_POST["Author"];
    $Category = $_POST["Category"];
    $Date_Published = $_POST["Date_Published"];
    $First_Paragraph = $_POST["First_Paragraph"];
    $Second_Paragraph = $_POST["Second_Paragraph"];
    $Third_Paragraph = $_POST["Third_Paragraph"];
    $Fourth_Paragraph = $_POST["Fourth_Paragraph"];
    $Fifth_Paragraph = $_POST["Fifth_Paragraph"];
    $Sixth_Paragraph = $_POST["Sixth_Paragraph"];
    $Seventh_Paragraph = $_POST["Seventh_Paragraph"];
    $Eighth_Paragraph = $_POST["Eighth_Paragraph"];

    $sql = "UPDATE `upload` SET `Headline`=?, `Author`=?, `Category`=?, `Date_Published`=?, `First_Paragraph`=?, `Second_Paragraph`=?, `Third_Paragraph`= ?,`Fourth_Paragraph`= ?,`Fifth_Paragraph`= ?,`Sixth_Paragraph`= ?,`Seventh_Paragraph`= ?,`Eighth_Paragraph`= ? WHERE `ID`=?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssssssssi", $Headline, $Author, $Category, $Date_Published, $First_Paragraph, $Second_Paragraph, $Third_Paragraph, $Fourth_Paragraph, $Fifth_Paragraph, $Sixth_Paragraph, $Seventh_Paragraph, $Eighth_Paragraph, $ID);

    if (mysqli_stmt_execute($stmt)) {

        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "./image/" . $filename;

        if (move_uploaded_file($tempname, $folder)) {
            $sql2 = "UPDATE `image` SET filename = '$filename' WHERE id = $ID";
            mysqli_query($db, $sql2);
        }

        header("Location: Home.php");
    } else {
        die(mysqli_error($db));
    }

    mysqli_stmt_close($stmt);
}

?>

<html>
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="styles/Backgrond.css">
    <link rel="stylesheet" href="styles/EArticle.css">
    <link rel="stylesheet" href="styles/Styles.css">
    <link rel="icon" href="images/logoico.ico">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Edit</title>
</head>
<body>
<a href="Home.php">
    <div class="back">
        Back to Menu
    </div>
</a> 
    <div class="container">
        <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
            <label for="Headline" id="headline">Headline:</label>
            <input type="text" name="Headline" placeholder="What is the headline?" id="headline" value="<?php echo $Headline; ?>" pattern="[a-zA-Z0-9!@#$%^*_|]" required>
            <br>
            <label for="Author" id="Author">Author:</label>
            <input type="text" name="Author" id="Author" placeholder="Name of Author"  value="<?php echo $Author; ?>" disabled>
            <br>
            <label for="Category" id="Category">Category:</label>
            <select type="text" name="Category" id="Category" placeholder="Category" required>
                <option value="News" <?php if($Category == 'News') echo 'selected'; ?>>News</option>
                <option value="Acads" <?php if($Category == 'Acads') echo 'selected'; ?>>Acads</option>
                <option value="Sports" <?php if($Category == 'Sports') echo 'selected'; ?>>Sports</option>
                <option value="Events" <?php if($Category == 'Events') echo 'selected'; ?>>Events</option>
            </select>
            <br>
            <label for="Date_Published" id="pubdate">Date Published</label>
            <input type="text" name="Date_Published" id="pubdate" value="<?php echo date('F d, Y', strtotime($Date_Published)); ?>" disabled>
            <br>
            <input class="form-control" type="file" name="uploadfile" />    
            <label for="Paragraph1"></label>
            <br>
            <textarea type="text" name="First_Paragraph" id="Paragraph" placeholder="1st Paragraph"  pattern="[a-zA-Z0-9!@#$%^*_|]" required><?php echo $First_Paragraph; ?></textarea>
            <br>
            <textarea type="text" name="Second_Paragraph" id="Paragraph" placeholder="2nd Paragraph"  pattern="[a-zA-Z0-9!@#$%^*_|]"><?php echo $Second_Paragraph; ?></textarea>
            <br>
            <textarea type="text" name="Third_Paragraph" id="Paragraph" placeholder="3rd Paragraph"  pattern="[a-zA-Z0-9!@#$%^*_|]"><?php echo $Third_Paragraph; ?></textarea>
            <br>
            <textarea type="text" name="Fourth_Paragraph" id="Paragraph" placeholder="4th Paragraph"  pattern="[a-zA-Z0-9!@#$%^*_|]"><?php echo $Fourth_Paragraph; ?></textarea>
            <br>
            <textarea type="text" name="Fifth_Paragraph" id="Paragraph" placeholder="5th Paragraph"  pattern="[a-zA-Z0-9!@#$%^*_|]"><?php echo $Fifth_Paragraph; ?></textarea>
            <br>
            <textarea type="text" name="Sixth_Paragraph" id="Paragraph" placeholder="6th Paragraph"  pattern="[a-zA-Z0-9!@#$%^*_|]"><?php echo $Sixth_Paragraph; ?></textarea>
            <br>
            <textarea type="text" name="Seventh_Paragraph" id="Paragraph" placeholder="7th Paragraph"  pattern="[a-zA-Z0-9!@#$%^*_|]"><?php echo $Seventh_Paragraph; ?></textarea>
            <br>
            <textarea type="text" name="Eighth_Paragraph" id="Paragraph" placeholder="8th Paragraph"  pattern="[a-zA-Z0-9!@#$%^*_|]"><?php echo $Eighth_Paragraph; ?></textarea>
            <br>
            <input type="submit" name="update" value="Save" onclick="return confirm('Are you sure you want to edit this article?')">
        </form>
    </div>
</body>
</html>