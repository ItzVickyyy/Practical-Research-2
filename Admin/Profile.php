<?php
include 'PHP/Connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles/Backgrond.css">
    <link rel="stylesheet" href="styles/Styles.css">
    <link rel="stylesheet" href="styles/Profile.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>

    <div class="container">
        <div class="con1">
            <div class="flex">
                <div class="artlnk"></div>
                <?php
                    if(isset($_GET['author'])){
                        $AuthorName = $_GET['author'];
                        $sql = "SELECT * FROM `upload` WHERE Author = '$AuthorName' ORDER BY Date_Published DESC LIMIT 10";
                        $result = mysqli_query($conn, $sql);

                        echo "
                            <div id='header' class='section2'>
                                <ion-icon class='pfp-icon' name='person-circle-outline'></ion-icon>
                                <p class='Author'>" . $AuthorName .  " Archives</p>
                            </div>
                        ";

                        echo "<table border=1 class='table-container'>";
                        while ($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                                    <td  class='img-cptn'></td>
                                    <td>
                                        <div class='details'>" . $row["Category"] . "</div>
                                        <a class='cptn' href='article.php?UploadID=" . $row['ID'] . "'>" . $row['Headline'] . "</a><br>
                                        <div class='details'>" . date('F d, Y', strtotime($row['Date_Published'])) . " &nbsp; | &nbsp; by: " . $row['Author'] . " 
                                    </td>
                                </tr>
                            ";
                                
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No records found";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
