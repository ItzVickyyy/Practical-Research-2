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
    <link rel="stylesheet" href="styles/Styles.css">
    <link rel="stylesheet" href="styles/aboutus.css">
</head>
<body>
    <div class="container">
        <span>
            <H1>WHAT WE DO</H1>
            <P>
                What the media mainly does is to update the students, faculty, and personel of CDLB and people who are interested in Colegio de Los Baños about the current events that happened within the schools and sometimes outside the school like outdoor activities of strands with the use of social media.
                Their online materials are mostly articles, videos, and a gallery of photos to show the events that happened.
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
                        ?>
                        <img src='./admin/images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                        echo "<br>";
                        echo "<span id='title'>" . $row['Position'] . "</span>";
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
                        ?>
                        <img src='./admin/images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                        echo "<br>";
                        echo "<span id='title'>" . $row['Position_Title'] . "</span>";
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
                        ?>
                        <img src='./admin/images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                        echo "<br>";
                        echo "<span id='title'>" . $row['Position_Title'] . "</span>";
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
                       ?>
                       <img src='./admin/images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                       <?php
                       echo "<br>";
                       echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                       echo "</div>";
                   }
                ?>
                </div>
                <div class="flex">
                <?php
                 $query = "SELECT * FROM `member` WHERE Department = 'Broadcasting'   ORDER BY Last_Name DESC, ID LIMIT 5 OFFSET 7 " ; 
                 $result = mysqli_query($link, $query);
                  if(!$result){
                    die( 'error ' . mysqli_error($link));
                  }
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='frame2'>";
                        ?>
                        <img src='./admin/images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
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
                       ?>
                       <img src='./admin/images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                       <?php
                       echo "<br>";
                       echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                       echo "</div>";
                   }
                ?>
                </div>
                <div class="flex">
                <?php
                 $query = "SELECT * FROM `member` WHERE Department = 'Editorial'   ORDER BY Last_Name DESC, ID LIMIT 6 OFFSET 7 " ; 
                 $result = mysqli_query($link, $query);
                  if(!$result){
                    die( 'error ' . mysqli_error($link));
                  }
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='frame2'>";
                        ?>
                        <img src='./admin/images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
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
                       ?>
                       <img src='./admin/images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                       <?php
                       echo "<br>";
                       echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                       echo "</div>";
                   }
                ?>
                </div>
                <div class="flex">
                <?php
                 $query = "SELECT * FROM `member` WHERE Department = 'Multimedia'   ORDER BY Last_Name DESC, ID LIMIT 6 OFFSET 7 " ; 
                 $result = mysqli_query($link, $query);
                  if(!$result){
                    die( 'error ' . mysqli_error($link));
                  }
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='frame2'>";
                        ?>
                        <img src='./admin/images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
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
                       ?>
                       <img src='./admin/images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                       <?php
                       echo "<br>";
                       echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                       echo "</div>";
                   }
                ?>
                </div>
                <div class="flex">
                <?php
                 $query = "SELECT * FROM `member` WHERE Department = 'Social Media'   ORDER BY Last_Name DESC, ID LIMIT 6 OFFSET 7 " ; 
                 $result = mysqli_query($link, $query);
                  if(!$result){
                    die( 'error ' . mysqli_error($link));
                  }
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='frame2'>";
                        ?>
                        <img src='./admin/images/members/<?php echo $row['filename'] ?>' alt="''" height='75px' width='75px' id='frame2'>
                        <?php
                        echo "<br>";
                        echo "<span id='name'>" . $row['First_Name'] . " " . $row['Last_Name'] . "</span>";
                        echo "</div>";
                    
                }
                ?>
                            </div>
        </div>
    </div>
</body>
</html>