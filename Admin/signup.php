<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="styles/Styles.css">
    <link rel="stylesheet" href="styles/signup.css">
    <link rel="stylesheet" href="styles/Backgrond.css">
</head>
<body>
<div class="container">
    <form action="" method="POST">
    <?php 
         
        include("PHP/Connect.php");
        if(isset($_POST['submit'])){
        $Full_Name = $_POST['Full_Name'];
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $Strand = $_POST['Strand'];
        $Grade_Level = $_POST['Grade_Level'];
        $Department = $_POST['Department'];
        $Password = $_POST['Password'];

        //verifying the unique email

        $verify_query = mysqli_query($conn,"SELECT Email FROM accounts WHERE Email='$Email'");

        if(mysqli_num_rows($verify_query) !=0 ){
        echo "<div class='message'>
                //   <p>This email is used, Try another One Please!</p>
                </div> <br>";
        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
        }
        else{

        mysqli_query($conn,"INSERT INTO accounts(Full_Name, Username, Email, Strand, Grade_Level, Department, Password) 
        VALUES('$Full_Name', '$Username','$Email', '$Strand' , '$Grade_Level', '$Department' ,'$Password')") or die("Error Occured");

        echo "<div class='message'>
                    <p>Registration successfully!</p>
                </div> <br>";
        echo "<a href='index.php'><button class='btn'>Login Now</button>";
        

        }

        }else{
        
    ?>
    <h2>Sign up</h2>
    <div class="flex">
        <img src="" alt="" height="10%" width="10%">
        <img src="" alt="" height="10%" width="10%">
    </div>
        <label for="Full_Name">Full Name:</label>
        <input type="text" name="Full_Name" placeholder="Member's Full Name">
        <br>
        <label for="Username">Username:</label>
        <input type="text" name="Username" placeholder="Username">
        <br>
        <label for="Email">Email</label>
        <input type="email" name="Email" placeholder="Member's Email">
        <br>

        <label for="Strand">Strand:</label>
        <select name="Strand" id="Strand">
            <option value="ABM">ABM</option>
            <option value="GAS">GAS</option>
            <option value="HUMSS">HUMSS</option>
            <option value="ICT">ICT</option>
            <option value="STEM">STEM</option>
        </select>
        <br>
        <label for="Grade_Level">Grade Level:</label>
        <input type="text" name="Grade_Level" placeholder="Grade Level">
        <br>
        <label for="Department">Department:</label>
        <select name="Department" id="Department">
            <option value="Broadcasting">Broadcasting</option>
            <option value="Editorial">Editorial</option>
            <option value="Multimedia">Multimedia</option>
            <option value="Social_Media">Social Media</option>
        </select>
        <br>
        <label for="Password">Password:</label>
        <input type="password" name="Password" placeholder="Password">
        <br>
        <input type="submit" name="submit" value="Register">
    </div>
    <?php } ?>
    </form>
</div>
</body>
</html>