<?php 
include 'PHP/Connect.php';
include 'PHP/image.php';
$ID = $_GET['UploadID'];

$sql = "SELECT * FROM upload WHERE ID = $ID";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$Headline = $row['Headline'];
$Author = $row['Author'];
$Date_Published = $row['Date_Published'];
$First_Paragraph = $row['First_Paragraph'];
$Second_Paragraph = $row['Second_Paragraph'];
$Third_Paragraph = $row["Third_Paragraph"];
$Fourth_Paragraph = $row["Fourth_Paragraph"];
$Fifth_Paragraph = $row["Fifth_Paragraph"];
$Sixth_Paragraph = $row["Sixth_Paragraph"];
$Seventh_Paragraph = $row["Seventh_Paragraph"];
$Eighth_Paragraph = $row["Eighth_Paragraph"];
$Category = $row['Category'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Backgrond.css">
    <link rel="stylesheet" href="styles/Styles.css">
    <link rel="stylesheet" href="styles/Article.css">
    <link rel="icon" href="images/logoico.ico">
    <title>Article</title>
</head>
<body>
<a href="menu.php">
    <div class="back">
        Back to Menu
    </div>
    </a>
    <div class="container">
        <table  class="table"> 
    <tr>
        <td colspan="2">
            <h1 class="headline"><?php echo $Headline ?></h1>
            <?php
                echo "<span class='author'>by <a href='Profile.php?author=" . $row['Author'] . "'>" . $Author . "</a></span>"
            ?>
            <br>
            <span class="Category"><?php echo $Category ?></span>
            <br>
            <span class="date".><?php echo date('F d, Y', strtotime($Date_Published)); ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align:center;">
            <?php
                $query = "SELECT * FROM image WHERE id = $ID";
                $result = mysqli_query($link, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo "<img src='./admin/image/" . $data['filename'] . "' height='50%' width='100%'>";
                    }
                } 
            ?>
        </td>
    </tr>
    <tr>
        <td><p class="paragraph"><?php echo $First_Paragraph ?></p>
    </tr>
    <tr>
        <td><p class="paragraph"><?php echo $Second_Paragraph ?></p></td>
    </tr> 
    <tr>
        <td><p class="paragraph"><?php echo $Third_Paragraph ?></p></td>
    </tr> 
    <tr>
        <td><p class="paragraph"><?php echo $Fourth_Paragraph ?></p></td>
    </tr> 
    <tr>
        <td><p class="paragraph"><?php echo $Fifth_Paragraph ?></p></td>
    </tr> 
    <tr>
        <td><p class="paragraph"><?php echo $Sixth_Paragraph ?></p></td>
    </tr> 
    <tr>
        <td><p class="paragraph"><?php echo $Seventh_Paragraph ?></p></td>
    </tr> 
    <tr>
        <td><p class="paragraph"><?php echo $Eighth_Paragraph ?></p></td>
    </tr> 
</table>

    </div>
</body>
</html>