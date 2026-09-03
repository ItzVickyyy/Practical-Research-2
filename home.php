<?php
include 'PHP/Connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/Backgrond.css">
    <link rel="stylesheet" href="styles/Styles.css">
    <link rel="stylesheet" href="styles/home.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="welcome">WELCOME</h1>
        <h1 class="subcap">TO THE CLUB'S PUBLICATION WEBSITE</h1>
            <form method='post'>
            <div class="search">
                <input type="text" name="search" id="search" placeholder="Headline, Author, Date Published, Category" title="Tip: you can search one of these">
                <button class="btn2" name="submit"><ion-icon name="search-circle"></ion-icon></button>
            </form>
            </div>
            <br>
            <?php
                if (isset($_POST['submit'])) {
                    $search = $_POST['search'];

                    $sql = "SELECT * FROM `upload` 
                    where Headline = '$search' 
                    or Author like '%$search%'
                    or Category = '$search'
                    or Date_Published = '$search' 
                    ORDER BY Date_Published DESC
                    limit 10
                    ";

                    $result = mysqli_query($conn,$sql);
                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo "<div class='table-container'>";
                            echo "<table>";
                                echo "<tr>";
                                    echo "<th>Headline</th>";
                                    echo "<th>Author</th>";
                                    echo "<th>Category</th>";
                                    echo "<th>Date_Published</th>";
                                echo "</tr>";
                            while ($row = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td><a class='headlineheader' title='Click to go to this article' href='article.php?UploadID=" . $row['ID'] . "'>".$row['Headline']."</a></td>";
                                    echo "<td><a title='Click to go to view authors archive href='Profile.php?author=" . $row['Author'] . "'>" . $row["Author"] . "</a></td>";
                                    echo "<td><a title='Click to go at this specific category' href='CategoryArticles.php?category=" . $row["Category"] . "'>" . $row["Category"] . "</a></td>";
                                    echo "<td>" . date('F d, Y', strtotime($row['Date_Published'])) . "</td>";

                                echo "</tr>";  
                            }
                            echo "</table>";
                            echo "</div>";
                        }
                        else {
                            echo "Data Not Found";
                        }
                    }
                }
            ?>
        
        <a href="menu.php" class="strtrdn">START READING</a>
    </div>
</body>
</html>