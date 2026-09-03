<?php
include 'PHP/member.php';


$ID = $_GET['editid'];

$sql = "SELECT * FROM member WHERE ID = $ID";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

$First_Name = $row['First_Name'];
$Last_Name = $row['Last_Name'];
$Position = $row['Position'];
$Position_Title = $row['Position_Title'];
$Department = $row['Department'];
$filename = $row['filename'];


if (isset($_POST["update"])) {
    $First_Name = $_POST["First_Name"];
    $Last_Name = $_POST["Last_Name"];
    $Position = $_POST["Position"];
    $Position_Title = $_POST["Position_Title"];
    $Department = $_POST["Department"];

    $sql = "UPDATE `member` set `First_Name`='$First_Name', `Last_Name`='$Last_Name', `Position`='$Position' ,`Position_Title`='$Position_Title' ,`Department`='$Department' WHERE ID=$ID";
    if (mysqli_query($link, $sql)) {
        echo "Records added successfully";
    } else {
        echo "Error: Unable to execute $sql " . mysqli_error($link);
    }
    header("refresh:0.1; url=adminaboutus.php");

}
?>

<html>
<head>
    <link rel="stylesheet" href="styles/Backgrond.css">
    <link rel="stylesheet" href="styles/edit about us.css">
</head>
<body>
    <div class="navigation_bar">
        <div class="left_side">
            <a href=""><img class="logo" src="images/logo.webp"></a>
            <div class="title"><a href="">EAGLE EYE</a></div>    
        </div>
        
        <div class="right_side">         
            <a href="adminaboutus.php">Return</a>        
        </div>  
    </div>
        <div class="container">
            <form action="" method="Post" autocomplete="off" enctype="multipart/form-data">
            <label for="Profile">Picture</label>
            <br>
            <input class="form-control" type="file" name="uploadfile"/>
            <br>
            <label for="First_Name" id="First_Name">First Name:</label>
            <br>
             <input type="text" name="First_Name" placeholder="Enter First Name" id="First_Name" pattern="[a-zA-Z0-9!@#$%^*_|]" required value="<?php echo $row['First_Name']?>" >
            <br>
            <label for="Last_Name" id="Last_Name" >Last Name:</label>
            <br>
            <input type="text" name="Last_Name" id="Last_Name" placeholder="Enter Last Name" required value="<?php echo $row['Last_Name']?>">
            <br>
            <label for="Position" id="Position">Position:</label>
            <br>
            <select type="text" name="Position" id="Position" required>
                <option  value="<?php echo $row['Position']?>"> <?php echo $row['Position']?></option>
                 <option value="Adviser">Adviser</option>
                 <option value="Officer">Officer</option>
                 <option value="Assistant Officer">Assistant Officer</option>
                 <option value="Member">Member</option>
            </select>
            <br>
            <label for="Position_Title" id="Position_Title">Postion title(For Officers Only):</label>
            <br>
            <select type="text" name="Position_Title" id="Position_Title">
                 <option  value="<?php echo $row['Position_Title']?>">   <?php echo $row['Position_Title']?>  </option>
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
            <select type="text" name="Department" id="Department" required >
            value="<?php echo $row['']?>"
                <option   value="<?php echo $row['Department']?>">   <?php echo $row['Department']?>  </option> 
                 <option value="   ">    </option> 
                 <option value="Broadcasting">Broadcasting</option>
                 <option value="Editorial">Editorial</option>
                 <option value="Multimedia">Multimedia</option>
                 <option value="Social Media">Social Media</option>
            </select>
            <br>
            <input type="submit" name="update" value="Update">
            </form>
        </div>
    </body>
</head>