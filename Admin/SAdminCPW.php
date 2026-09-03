<?php
    session_start();
    include("php/Connect.php");

    if(isset($_POST['update'])) {
        // Retrieve form data
        $username = $_POST['Username'];
        $password = $_POST['Password'];

        // Prepare and execute the SQL query
        $stmt = $conn->prepare("UPDATE administration SET Password = ? WHERE Username = ?");
        $stmt->bind_param("ss", $password, $username);
        $stmt->execute();

        // Check if the update was successful
        if($stmt->affected_rows > 0) {
            echo "Update successful!";
        } else {
            echo "Update failed!";
        }

        // Close the statement
        $stmt->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eagle Eye</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/Backgrond.css">
    <link rel="stylesheet" href="styles/Login.css">
    <link rel="stylesheet" href="styles/Styles.css">
    <link rel="icon" href="Images/locoico.ico">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>    
    <div class="container">
        <H2 style="text-align:center;" id="pad">Administration</H2>
        <form action="" method="POST" autocomplete="off">
            <span id="pos">
                <ion-icon name="person-outline"></ion-icon>
                <?php
                    $result = $conn->query("SELECT Username FROM administration WHERE ID = 2");
                    if($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $Username = $row['Username'];
                    } else {
                        $Username = "";
                    }
                ?>
                <input type="text" id="Email" name="Username" value="<?php echo $Username; ?>" autocomplete="off" readonly>
            </span>
            <span id="pos">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" id="Password" name="Password" placeholder="Change Password" autocomplete="off" required>
            </span>
        <br>
        <input type="submit" name="update" id="submit" value="Update">
        </form>
    </div>
</body>
</html>
