<?php
$link = mysqli_connect('localhost','root', '', 'media_club');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/Backgrond.css">
    <link rel="stylesheet" href="styles/aboutus.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
<div class="navigation_bar">
        <div class="left_side">
            <a href=""><img class="logo" src="images/logo.webp"></a>
            <div class="title"><a href="">EAGLE EYE</a></div>    
        </div>
        <div class="right_side">         
            <a href="Home.php">Return</a> 
      <!--input for new members-->          
                <button class="dropdown">
                    Add Member
                
                <div class="dropdowncntnt">
                <form action="addaboutus.php" method="Post" autocomplete="off" enctype="multipart/form-data">
            <label for="Profile">Picture</label>
            <br>
            <input class="form-control" type="file" name="uploadfile"/>
            <br>
            <label for="First_Name" id="First_Name">First Name:</label>
            <br>
             <input type="text" name="First_Name" placeholder="Enter First Name" id="First_Name" pattern="[a-zA-Z0-9!@#$%^*_|]" required>
            <br>
            <label for="Last_Name" id="Last_Name">Last Name:</label>
            <br>
            <input type="text" name="Last_Name" id="Last_Name" placeholder="Enter Last Name" required>
            <br>
            <label for="Position" id="Position">Position:</label>
            <br>
            <select type="text" name="Position" id="Position" required>
                 <option value="Adviser">Adviser</option>
                 <option value="Officer">Officer</option>
                 <option value="Assistant Officer">Assistant Officer</option>
                 <option value="Member">Member</option>
            </select>
            <br>
            <label for="Position_Title" id="Position_Title">Postion title<br>(For Officers Only):</label>
            <br>
            <select type="text" name="Position_Title" id="Position_Title">
                 <option value="   ">    </option>
                 <option value="Club Manager">Club Manager</option>
                 <option value="Assistant Club Manager">Assistant Club Manager</option>
                 <option value="Chief Broadcaster">Chief Broadcaster</option>
                 <option value="Assistant Chief Broadcaster">Assistant Chief Broadcaster</option>
                 <option value="Chief Editor">Chief Editor</option>
                 <option value="Assistant Chief Editor">Assistant Chief Editor</option>
                 <option value="MultiMedia Manager">MultiMedia Manager</option>
                 <option value="Assistant MultiMedia Manager">Assitant MultiMedia Manager</option>
                 <option value="Social Media Manager">Social Media Manager</option>
                 <option value="Assitant Social Media Manager">Assistant Social Media Manager</option>
            </select>
            <br>
            <label for="Department" id="Department">Department:</label>
            <br>
            <select type="text" name="Department" id="Department" required>
                 <option value="   ">    </option> 
                 <option value="Broadcasting">Broadcasting</option>
                 <option value="Editorial">Editorial</option>
                 <option value="Multimedia">Multimedia</option>
                 <option value="Social Media">Social Media</option>
            </select>
            <br>
            <input type="submit" name="submit" value="Submit Data">
            </form>
                </div>
</button>  
<!--about us page-->
        </div>  
    </div>
    <div class="container">
        <span>
            <H1>WHAT WE DO</H1>
            <P>
                What the media mainly does is to update the students, faculty, and personel of CDLB and people who are interested in Colegio de Los Baños about the current events that happened within the schools and sometimes outside the school like outdoor activities of strands with the use of social media.
                their online materials are mostly articles, videos, and a gallery of photos to show the events that happened.
                <br> 
            </P>
        </span>
        <span>
            <H1>CLUB HISTORY</H1>
            <P>
                The CDLB Media club is currently a newly established club in Colegio de Los Baños (CDLB), established in the 4th of may 2023.
                 the club was founded by the HUMSS Departemnt along with the one of the first club adviser right after they attended the gandingan
                  awards which gave them the idea to establish the club. Currently as of now the club has 43 members along with 4 club advisers where they effectively run and manage the club
                <br>
                <br>
                After Officially launching the club, the club members have collaborated with two organizations from the University of the Philippines Los Baños(UPLB)
                which are the UPLB Jocks which trained the club members about broadcasting and the UPLB Times which trained the members about journalism.
            </P>
        </span>
        <H1>CLUB OFFICERS</H1>
        <div class="center">
            <div class="frame">
                <img src="images/profiles/ChinkySanAgustin.png" alt="" height="75px" width="75px" id="frame">
                <br>
                <span id="name">Chinky San Agustin</span>
                <br>
                <span id="title">School Director</span>
            </div>

            <div class="frame">
                <img src="images/profiles/AmaliaAbdurahman.png" alt="" height="75px" width="75px" id="frame">
                <br>
                <span id="name">Amalia Abdurahman</span>
                <br>
                <span id="title">School Director</span>
            </div>
            <div class="con1">
                <!--Advisers-->
                <?php 
                    $query = "SELECT * FROM `member` WHERE POSITION = 'Adviser' "; 
                    $result = mysqli_query($link, $query);
                    while 
                    ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='frame'>";
                        echo "<div class='filler'>";
                        ?>
                        <img src='./images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                        echo "<br>";
                        echo "<span id='title'>" . $row['Position'] . "</span>";
                        echo "<br>";
                        echo "</div>";
                        echo "<div class='buttons'>";
                        echo "<a href='editaboutus.php?editid=" . $row["ID"] . "' class='color'>EDIT</a> "; //Edit
                        echo "<a href='PHP/deleteus.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");' class='color'>DELETE</a>";//delete
                        echo "</div>";
                        echo "</div>";
                    }

                ?>      
            </div>
            <div class="con2">
            <?php 
                    $query = "SELECT * FROM `member` WHERE POSITION = 'Officer' ORDER BY Position_Title"; 
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='frame'>";
                        echo "<div class='filler'>";
                        ?>
                        <img src='./images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                        echo "<br>";
                        echo "<span id='title'>" . $row['Position_Title'] . "</span>";
                        echo "<br>";
                        echo "</div>";
                        echo "<div class='buttons'>";
                        echo "<a href='editaboutus.php?editid=" . $row["ID"] . "' class='color'>EDIT</a> "; //Edit
                        echo "<a href='PHP/deleteus.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");' class='color'>DELETE</a>";//delete
                        echo "</div>";
                        echo "</div>";
                    }

                ?>  
            </div>
            <div class="con2">
            <?php 
                    $query = "SELECT * FROM `member` WHERE POSITION = 'Assistant Officer' ORDER BY Position_Title"; 
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='frame'>";
                        echo "<div class='filler'>";
                        ?>
                        <img src='./images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                        echo "<br>";
                        echo "<span id='title'>" . $row['Position_Title'] . "</span>";echo "<br>";
                        echo "</div>";
                        echo "<div class='buttons'>";
                        echo "<a href='editaboutus.php?editid=" . $row["ID"] . "' class='color'>EDIT</a> "; //Edit
                        echo "<a href='PHP/deleteus.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");' class='color'>DELETE</a>";//delete
                        echo "</div>";
                        echo "</div>";
                    }

                ?>  
        </div>
        <div class="members">
                <div class="header">BROADCASTING DEPARTMENT</div>
                <div class="con2">
                <?php 
                   $query = "SELECT * FROM `member` WHERE Department = 'Broadcasting'  ORDER BY Last_Name DESC Limit 6" ; 
                   $result = mysqli_query($link, $query);
                   while ($row = mysqli_fetch_assoc($result)){
                       echo "<div class='frame2'>";
                       echo "<div class='filler2'>";
                       ?>
                       <img src='./images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                       <?php
                       echo "<br>";
                       echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                       echo "<br>";
                       echo "</div>";
                       echo "<div class='buttons'>";
                       echo "<a href='editaboutus.php?editid=" . $row["ID"] . "' class='color'>EDIT</a> "; //Edit
                       echo "<a href='PHP/deleteus.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");' class='color'>DELETE</a>";//delete
                       echo "</div>";
                       echo "</div>";
                   }
                ?>
                </div>
                <div class="flex">
                <?php
                 $query = "SELECT * FROM `member` WHERE Department = 'Broadcasting'   ORDER BY Last_Name DESC, ID LIMIT 6 OFFSET 6 " ; 
                 $result = mysqli_query($link, $query);
                  if(!$result){
                    die( 'error ' . mysqli_error($link));
                  }
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='frame2'>";
                        echo "<div class='filler2'>";
                        ?>
                        <img src='./images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                        echo "<br>";
                        echo "</div>";
                        echo "<div class='buttons'>";
                       echo "<a href='editaboutus.php?editid=" . $row["ID"] . "' class='color'>EDIT</a> "; //Edit
                       echo "<a href='PHP/deleteus.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");' class='color'>DELETE</a>";//delete
                        echo "</div>";
                        echo "</div>";
                    
                }
                ?>  
                
            </div>
                    <div class="header">EDITORIAL DEPARTMENT</div>
                    <div class="flex">
                    <?php 
                   $query = "SELECT * FROM `member` WHERE Department = 'Editorial'  ORDER BY Last_Name DESC Limit 6" ; 
                   $result = mysqli_query($link, $query);
                   while ($row = mysqli_fetch_assoc($result)){
                       echo "<div class='frame2'>";
                       echo "<div class='filler2'>";
                       ?>
                       <img src='./images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                       <?php
                       echo "<br>";
                       echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                       echo "<br>";
                       echo "</div>";
                       echo "<div class='buttons'>";
                       echo "<a href='editaboutus.php?editid=" . $row["ID"] . "' class='color'>EDIT</a> "; //Edit
                       echo "<a href='PHP/deleteus.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");' class='color'>DELETE</a>";//delete
                       echo "</div>";
                       echo "</div>";
                   }
                ?>
                </div>
                <div class="flex">
                <?php
                 $query = "SELECT * FROM `member` WHERE Department = 'Editorial'   ORDER BY Last_Name DESC, ID LIMIT 7 OFFSET 8 " ; 
                 $result = mysqli_query($link, $query);
                  if(!$result){
                    die( 'error ' . mysqli_error($link));
                  }
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='frame2'>";
                        echo "<div class='filler2'>";
                        ?>
                        <img src='./images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                        echo "<br>";
                        echo "</div>";
                        echo "<div class='buttons'>";
                       echo "<a href='editaboutus.php?editid=" . $row["ID"] . "' class='color'>EDIT</a> "; //Edit
                       echo "<a href='PHP/deleteus.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");' class='color'>DELETE</a>";//delete
                        echo "</div>";
                        echo "</div>";
                    
                }
                ?>
                        </div>
                            <div class="header">MULTIMEDIA DEPARTMENT</div>
                    <div class="flex">
                        <?php 
                   $query = "SELECT * FROM `member` WHERE Department = 'Multimedia'  ORDER BY Last_Name DESC Limit 6" ; 
                   $result = mysqli_query($link, $query);
                   while ($row = mysqli_fetch_assoc($result)){
                       echo "<div class='frame2'>";
                       echo "<div class='filler2'>";
                       ?>
                       <img src='./images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                       <?php
                       echo "<br>";
                       echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                       echo "<br>";
                       echo "</div>";
                       echo "<div class='buttons'>";
                             echo "<a href='editaboutus.php?editid=" . $row["ID"] . "' class='color'>EDIT</a> "; //Edit
                             echo "<a href='PHP/deleteus.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");' class='color'>DELETE</a>";//delete
                       echo "</div>";
                       echo "</div>";
                   }
                ?>
                </div>
                <div class="flex">
                <?php
                 $query = "SELECT * FROM `member` WHERE Department = 'Multimedia'   ORDER BY Last_Name DESC, ID LIMIT 7 OFFSET 8 " ; 
                 $result = mysqli_query($link, $query);
                  if(!$result){
                    die( 'error ' . mysqli_error($link));
                  }
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='frame2'>";
                        echo "<div class='filler2'>";
                        ?>
                        <img src='./images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                        echo "</div>";
                            echo "<div class='buttons'>";
                                echo "<a href='editaboutus.php?editid=" . $row["ID"] . "' class='color'>EDIT</a> "; //Edit
                                echo "<a href='PHP/deleteus.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");' class='color'>DELETE</a>";//delete
                        echo "</div>";
                        echo "</div>";
                    
                }
                ?>
                    </div>
                            <div class="header">SOCIALMEDIA DEPARTMENT</div>
                    <div class="flex">
                    <?php 
                   $query = "SELECT * FROM `member` WHERE Department = 'Social Media'  ORDER BY Last_Name DESC Limit 6" ; 
                   $result = mysqli_query($link, $query);
                   while ($row = mysqli_fetch_assoc($result)){
                       echo "<div class='frame2'>";
                       echo "<div class='filler2'>";
                       ?>
                       <img src='./images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                       <?php
                       echo "<br>";
                       echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                       echo "<br>";
                       echo "</div>";
                            echo "<div class='buttons'>";
                       echo "<a href='editaboutus.php?editid=" . $row["ID"] . "' class='color'>EDIT</a> "; //Edit
                       echo "<a href='PHP/deleteus.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");' class='color'>DELETE</a>";//delete
                            echo "</div>";
                       echo "</div>";
                   }
                ?>
                </div>
                <div class="flex">
                <?php
                 $query = "SELECT * FROM `member` WHERE Department = 'Social Media'   ORDER BY Last_Name DESC, ID LIMIT 7 OFFSET 8 " ; 
                 $result = mysqli_query($link, $query);
                  if(!$result){
                    die( 'error ' . mysqli_error($link));
                  }
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='frame2'>";
                        echo "<div class='filler2'>";
                        ?>
                        <img src='./images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                        echo "<br>";
                             echo "<div class='buttons'>";
                                echo "<a href='editaboutus.php?editid=" . $row["ID"] . "' class='color'>EDIT</a> "; //Edit
                                echo "<a href='PHP/deleteus.php?deleteid=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this article?\");' class='color'>DELETE</a>";//delete
                             echo "</div>";
                        echo "</div>";
                    
                }
                ?>
                            </div>
        </div>
    </div>
</body>
</html>