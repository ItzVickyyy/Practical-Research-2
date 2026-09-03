<?php 
    session_start();
    include("php/Connect.php");

    if(isset($_POST['submit'])){
        $Username = mysqli_real_escape_string($conn,$_POST['Username']);
        $password = mysqli_real_escape_string($conn,$_POST['Password']);

        $result = mysqli_query($conn,"SELECT * FROM administration WHERE Username='$Username' AND Password='$password' ") or die("Select Error");
        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
            $_SESSION['valid'] = $row['Username']; // Change 'Email' to 'Username'
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['id'] = $row['ID']; // Change 'Id' to 'ID'
            header("Location: Home.php");
            exit(); // Make sure to exit after redirection
        }else{
            echo "
                <div class='message'>
                    <p>Wrong Username or Password</p>
                </div>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/Backgrond.css">
    <link rel="stylesheet" href="styles/Login.css">
    <link rel="stylesheet" href="styles/Styles.css">
    <link rel="icon" href="Images/logoico.ico">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>    
    <div class="container">
        <H2 style="text-align:center;" id="pad">Login</H2>
        <form action="Login.php?ID={$row['ID']}" method="POST" autocomplete="off">
            <span id="pos">
                <ion-icon name="person-outline"></ion-icon>
                <input type="text" id="Email" name="Username" placeholder="Username" autocomplete="off" required>
            </span>
            <span id="pos">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" id="Password" name="Password" placeholder="Password" autocomplete="off" required>
            </span>
        
        <!--<a href="" style="color: darkgray; font-size: 2vh;">Forgot Password?</a>-->
        <br>
        <input type="submit" name="submit" id="submit" value="Login">
        </form>
    </div>
</body>
</html>
