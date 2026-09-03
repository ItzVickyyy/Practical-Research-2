<?php 
    session_start();

    include("php/Connect.php");
    if(!isset($_SESSION['valid'])){
        echo "Password updated successfully";
        header("refresh 3; Location: Login.php");
    }

    $id = $_SESSION['id'];
    $query = mysqli_query($conn, "SELECT * FROM administration WHERE ID = '$id'");    

    while($result = mysqli_fetch_assoc($query)){
        $res_Uname = $result['Username'];
        $res_id = $result['ID'];
    }

    if (isset($_POST['submit'])) {
        $search = $_POST['search'];
        header("Location: ".$_SERVER['PHP_SELF']."?search=".$search);
        exit;
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Backgrond.css">
    <link rel="stylesheet" href="styles/Styles.css">
    <link rel="stylesheet" href="styles/Home.css">
    <link rel="icon" href="images/logoico.ico">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Admin</title>
</head>
<body>
    <div class="navigation_bar">
        <div class="left_side">
            <a href=""><img class="logo" src="images/logo.webp"></a>
            <div class="title"><a href="">EAGLE EYE</a></div>    
        </div>
        
        <div class="right_side">         
            <a href="PHP/Logout.php">Logout</a>        
        </div>  
    </div>

    <div class="con">
        <div class="container_1">
            <div class="article">
                <span class="header">ARTICLE</span>
                <div class="lineheader"></div>
                    <a href="CArticle.php" class="link">Create</a>
                <?php
                $admin = 2;
                if($id == $admin){
                    echo
                    "<span class=header>ADMIN</span>
                    <div class=lineheader></div>
                    <a href=AdminCPW.php class=link>Change Password</a>
                    <span class=header>ADMIN 2</span>
                    <div class=lineheader></div>
                    <a href=SAdminCPW.php class=link>Change Password</a>
                    <span class=header>About Us</span>
                    <div class=lineheader></div>
                    <a href=adminaboutus.php class=link>Modify About Us</a>
                    ";
                }
                ?>
            </div>
        </div>
        <div class="container_2">
            <div class="slide1">
                <div class="top">
                    <a href="CArticle.php" class="create">CREATE</a>
                    <form method='post'>
                        <div class="search">
                            <input type="text" name="search" id="search" placeholder="Press Enter to Search">
                            <button class="btn2" name="submit"><ion-icon name="search-circle"></ion-icon></button>
                        </div>
                    </form>
                </div>
                <?php
                    $showSearchResults = false;

                    if (isset($_GET['search'])) {
                        $search = $_GET['search'];
                        $sql = "SELECT * FROM `upload` WHERE 
                                ID = '$search' 
                                OR Headline LIKE '%$search%' 
                                OR Author LIKE '%$search%'
                                OR Category = '$search' 
                                OR Date_Published = '$search'
                                ORDER BY Date_Published DESC
                                LIMIT 10
                        ";

                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            if (mysqli_num_rows($result) > 0) {
                                $showSearchResults = true;

                                echo "<div class='table-container'>";
                                    echo "<table>";
                                        echo "<tr>";
                                            echo "<th>Headline</th>";
                                            echo "<th>Author</th>";
                                            echo "<th>Category</th>";
                                            echo "<th>Date Published</th>";
                                            echo "<th colspan='2'>Operation</th>";
                                        echo "</tr>";
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                            echo "<td><a class='headlineheader' href='../article.php?UploadID=" . $row['ID'] .  " '>" . $row['Headline'] . "</a></td>";
                                            echo "<td><a href='.Profile.php?author=" . $row['Author'] . "'>" . $row["Author"] . "</a></td>";
                                            echo "<td>" . $row["Category"] . "</td>";
                                            echo "<td>" . $row["Date_Published"] . "</td>";
                                            echo "<td><a href='EArticle.php?editid=" . $row["ID"] . "'><ion-icon name='pencil' class='Edit'></ion-icon></a></td>"; //Edit
                                            echo "<td><a href='PHP/Delete.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");'><ion-icon name='trash' class='Delete'></ion-icon></a></td>"; //Delete
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                echo "</div>";
                            } else {
                                echo "Data Not Found";
                            }
                        }
                    }

                    if (!$showSearchResults) {
                        $sql = "SELECT * FROM `upload` ORDER BY Date_Published DESC LIMIT 10";
                        $result = mysqli_query($conn, $sql);
                        if ($result && !isset($_GET['search'])) {
                            if (mysqli_num_rows($result) > 0) {
                                echo "<div class='table-container'>";
                                    echo "<table>";
                                        echo "<tr>";
                                            echo "<th>Headline</th>";
                                            echo "<th>Author</th>";
                                            echo "<th>Category</th>";
                                            echo "<th>Date Published</th>";
                                            echo "<th colspan='2'>Operation</th>";
                                        echo "</tr>";
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                            echo "<td><a class='headlineheader' href='../article.php?UploadID=" . $row['ID'] . "'>" . $row['Headline'] . "</a></td>";
                                            echo "<td><a href='Profile.php?author=" . $row['Author'] . "'>" . $row["Author"] . "</a></td>";
                                            echo "<td>" . $row["Category"] . "</td>";
                                            echo "<td>" . $row["Date_Published"] . "</td>";
                                            echo "<td><a href='EArticle.php?editid=" . $row["ID"] . "'><ion-icon name='pencil' class='Edit'></ion-icon></a></td>"; //Edit
                                            echo "<td><a href='PHP/Delete.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");'><ion-icon name='trash' class='Delete'></ion-icon></a></td>"; //Delete
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                echo "</div>";
                            } else {
                                echo "Data Not Found";
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>