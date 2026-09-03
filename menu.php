<?php 
include 'PHP/Connect.php';
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
    <div>
    <div class="tiptool" >Tip: For more articles click on the green box where the category is displayed</civ>
    </div>
    <div class="container">
        <div class="con1">
            <div class="flex">
            <div class="header" id="NEWS" title="Click to go at this specific category"><a href="CategoryArticles.php?category=News">NEWS</a></div>       
                <div id="line"></div>
            </div>
            <div class="artlnk"></div>
            <?php
                $sql_news = "SELECT * FROM `upload` WHERE Category = 'News' ORDER BY Date_Published DESC LIMIT 3";
                $result_news = mysqli_query($conn, $sql_news);
                if (mysqli_num_rows($result_news) > 0) {
                    echo "<table>";
                    while ($row_news = mysqli_fetch_assoc($result_news)) {
                        echo "<tr>";
                        echo "<td rowspan='2' class='img-cptn'></td>";
                        echo "<td>
                                <a class='cptn' title='Click to go to this article' href='article.php?UploadID=" . $row_news['ID'] . "'>" . $row_news['Headline'] . "</a><br>
                                <div class='details'> by <a title='Click to view authors archive '  href='Profile.php?author=" . $row_news['Author'] . "'>" . $row_news['Author'] . "</a> <br> " . date('F d, Y', strtotime($row_news['Date_Published'])) . "</div>
                            </td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td class='cptn2'>" . $row_news['First_Paragraph'] . "</td>";
                        echo "</tr>";
                        echo "<tr class='space'></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No records found";
                }
            ?>
            <!---->        
            <div class="flex">
                <div class="header" id="ACADS" title="Click to go at this specific category"><a href="CategoryArticles.php?category=Acads">ACADEMICS</a></div>
                <div id="line"></div>
            </div>
            <div class="artlnk"></div>
            <?php
                $sql_acads = "SELECT * FROM `upload` WHERE Category = 'Acads' ORDER BY Date_Published DESC LIMIT 3";
                $result_acads = mysqli_query($conn, $sql_acads);
                if (mysqli_num_rows($result_acads) > 0) {
                    echo "<table>";
                    while ($row_acads = mysqli_fetch_assoc($result_acads)) {
                        echo "<tr>";
                        echo "<td rowspan='2' class='img-cptn'></td>";
                        echo "<td>
                            <a class='cptn' title='Click to go to this article' href='article.php?UploadID=" . $row_acads['ID'] . "'>" . $row_acads['Headline'] . "</a>
                            <div class='details'> by <a title='Click to view authors archive' href='Profile.php?author=" . $row_acads['Author'] . "'>" . $row_acads['Author'] . "</a> <br> " . date('F d, Y', strtotime($row_acads['Date_Published'])) . "</div>
                            </td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td class='cptn2'>" . $row_acads['First_Paragraph'] . "</td>";
                        echo "</tr>";
                        echo "<tr class='space'></tr>";
                    }
                    echo "</table>";

                } else {
                    echo "No records found";
                }
            ?>
            <!---->
            <div class="flex">
                <div class="header" id="SPORTS" title="Click to go at this specific category"><a href="CategoryArticles.php?category=Sports">SPORTS</a></div>
                <div id="line"></div>
            </div>
            <div class="artlnk"></div>
            <?php
                $sql_sports = "SELECT * FROM `upload` WHERE Category = 'Sports' ORDER BY Date_Published DESC LIMIT 3";
                $result_sports = mysqli_query($conn, $sql_sports);
                if (mysqli_num_rows($result_sports) > 0) {
                    echo "<table>";
                    while ($row_sports = mysqli_fetch_assoc($result_sports)) {
                        echo "<tr>";
                        echo "<td rowspan='2' class='img-cptn'></td>";
                        echo "<td>
                                <a class='cptn' title='Click to go to this article' href='article.php?UploadID=" . $row_sports['ID'] . "'>" . $row_sports['Headline'] . "</a>
                                <div class='details'> by <a title='Click to view authors archive' href='Profile.php?author=" . $row_sports['Author'] . "'>" . $row_sports['Author'] . "</a> <br> " . date('F d, Y', strtotime($row_sports['Date_Published'])) . "</div>
                            </td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td class='cptn2'>" . $row_sports['First_Paragraph'] . "</td>";
                        echo "</tr>";
                        echo "<tr class='space'></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No records found";
                }
            ?>
            <!---->
            <div class="flex">
                <div class="header" id="EVENTS" title="Click to go at this specific category"><a href="CategoryArticles.php?category=Events">EVENTS</a></div>
                <div id="line"></div>
            </div>
            <div class="artlnk"></div>
            <?php
                $sql_events = "SELECT * FROM `upload` WHERE Category = 'Events' ORDER BY Date_Published DESC LIMIT 3";
                $result_events = mysqli_query($conn, $sql_events);
                if (mysqli_num_rows($result_events) > 0) {
                    echo "<table>";
                    while ($row_events = mysqli_fetch_assoc($result_events)) {
                        echo "<tr>";
                        echo "<td rowspan='2' class='img-cptn'></td>";
                        echo "<td>
                            <a class='cptn' title='Click to go to this article' href='article.php?UploadID=" . $row_events['ID'] . "'>" . $row_events['Headline'] . "</a>
                            <div class='details'> by <a title='Click to view authors archive' href='Profile.php?author=" . $row_events['Author'] . "'>" . $row_events['Author'] . "</a> <br> " . date('F d, Y', strtotime($row_events['Date_Published'])) . "</div>
                            </td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td class='cptn2'>" . $row_events['First_Paragraph'] . "</td>";
                        echo "</tr>";
                        echo "<tr class='space'></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No records found";
                }
            ?>
        </div>

        <div class="con2">
            <div class="hdr" title="Five Latest news per category">LATEST NEWS</div>
            <div class="hdrcntnr">
                <div class="hdr2" id="NEWS" title="Click to go at this specific category"><a href="CategoryArticles.php?category=News">NEWS</a></div> 
                <?php
                    $sql_news_links = "SELECT * FROM `upload` WHERE Category = 'NEWS' ORDER BY Date_Published DESC LIMIT 5";
                    $result_news_links = mysqli_query($conn,$sql_news_links);
                    if(mysqli_num_rows($result_news_links) > 0) {
                        while($row_news_links = mysqli_fetch_assoc($result_news_links)) {
                            echo "<div class='artcl'><a title='Click to go to this article' href='article.php?UploadID=" . $row_news_links['ID'] . "'>".$row_news_links['Headline']."</a></div>";
                        }
                    } else {
                        echo "<div class='artcl'>No records found</div>";
                    }
                ?>
                <!---->
                <div class="hdr2" id="ACADS" title="Click to go at this specific category"><a href="CategoryArticles.php?category=Acads">ACADEMICS</a></div>
                <?php
                    $sql_acads_links = "SELECT * FROM `upload` WHERE Category = 'ACADS' ORDER BY Date_Published DESC LIMIT 5";
                    $result_acads_links = mysqli_query($conn,$sql_acads_links);
                    if(mysqli_num_rows($result_acads_links) > 0) {
                        while($row_acads_links = mysqli_fetch_assoc($result_acads_links)) {
                            echo "<div class='artcl'><a title='Click to go to this article' href='article.php?UploadID=" . $row_acads_links['ID'] . "'>".$row_acads_links['Headline']."</a></div>";
                        }
                    } else {
                        echo "<div class='artcl'>No records found</div>";
                    }
                ?>
                <!---->
                <div class="hdr2" id="SPORTS" title="Click to go at this specific category"><a href="CategoryArticles.php?category=Sports">SPORTS</a></div>
                <?php
                    $sql_sports_links = "SELECT * FROM `upload` WHERE Category = 'SPORTS' ORDER BY Date_Published DESC LIMIT 5";
                    $result_sports_links = mysqli_query($conn,$sql_sports_links);
                    if(mysqli_num_rows($result_sports_links) > 0) {
                        while($row_sports_links = mysqli_fetch_assoc($result_sports_links)) {
                            echo "<div class='artcl'><a title='Click to go to this article' href='article.php?UploadID=" . $row_sports_links['ID'] . "'>".$row_sports_links['Headline']."</a></div>";
                        }
                    } else {
                        echo "<div class='artcl'>No records found</div>";
                    }
                ?>
                <!---->
                <div class="hdr2" id="EVENTS" title="Click to go at this specific category"><a href="CategoryArticles.php?category=Events">EVENTS</a></div>
                <?php
                    $sql_events_links = "SELECT * FROM `upload` WHERE Category = 'EVENTS' ORDER BY Date_Published DESC LIMIT 5";
                    $result_events_links = mysqli_query($conn,$sql_events_links);
                    if(mysqli_num_rows($result_events_links) > 0) {
                        while($row_events_links = mysqli_fetch_assoc($result_events_links)) {
                            echo "<div class='artcl'><a title='Click to go to this article' href='article.php?UploadID=" . $row_events_links['ID'] . "'>".$row_events_links['Headline']."</a></div>";
                        }
                    } else {
                        echo "<div class='artcl'>No records found</div>";
                    }
                ?>
            </div>    
        </div>
    </div>
</body>
</html>