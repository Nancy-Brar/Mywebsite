<?php 
    $title = "Received";
    require_once './includes/header.php';
    require_once './db/conn.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize input data
        $first_name = $conn->real_escape_string($_POST['first_name']);
        $last_name = $conn->real_escape_string($_POST['last_name']);
        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
        $confirm_password = $conn->real_escape_string($_POST['confirm_password']);
        $address = $conn->real_escape_string($_POST['address']);
        $city = $conn->real_escape_string($_POST['city']);
        $province = $conn->real_escape_string($_POST['province']);
        $area_code = $conn->real_escape_string($_POST['area_code']);
    
        // Check if passwords match
        if ($password != $confirm_password) {
            echo "Passwords do not match.";
            exit();
        }
    
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
        // Insert data into the database
        $sql = "INSERT INTO `signup_form` (`first_name`, `last_name`, `username`, `email`, `password`, `address`, `city`, `province`, `area_code`) 
                VALUES ('$first_name', '$last_name', '$username', '$email', '$hashed_password', '$address', '$city', '$province', '$area_code')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        // Close the connection
        $conn->close();
    }
    ?>
<?php 
    require_once "./includes/footer.php"
?>