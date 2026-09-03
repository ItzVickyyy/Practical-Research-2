<?php
include 'PHP/Connect.php';

if(isset($_GET['category'])) {
    $category = $_GET['category'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Backgrond.css">
    <link rel="stylesheet" href="styles/Styles.css">
    <link rel="stylesheet" href="styles/menu.css">
</head>
<body>
    <a href="menu.php">
        <div class="back">
            Back to Menu
        </div>
    </a>
    <div class="container">
        <div class="container2">
            <div class="flex">
                <div class="header" id="LATESTNEWS"><a href="menu.php"><?php echo $category; ?></a></div>
                <div id="line"></div>
            </div>
            <div class="artlnk"></div>
            <?php
                $sql = "SELECT * FROM `upload` WHERE Category = ? ORDER BY Date_Published DESC LIMIT 10";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "s", $category);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                
                if(mysqli_num_rows($result) > 0) {
                    echo "<table>";
                    while($row_news = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                            echo "<td rowspan='2' class='img-cptn'></td>";
                            echo "<td>
                                    <a class='cptn' href='article.php?UploadID=" . $row_news['ID'] . "'>" . $row_news['Headline'] . "</a><br>
                                    <div class='details'> by <a href='Profile.php?author=" . $row_news['Author'] . "'>" . $row_news['Author'] . "</a> <br> " . date('F d, Y', strtotime($row_news['Date_Published'])) . "</div>
                                </td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td class='cptn2'>" . $row_news['First_Paragraph'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No records found";
                }
            ?>
        </div>
    </div>
</body>
</html>

<?php
} else {
    echo "Category parameter not set";
}
?>
