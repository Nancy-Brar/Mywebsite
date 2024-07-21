<?php
$title = "Sign up";
require_once './includes/header.php';
require_once './db/conn.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $area_code = $_POST['area_code'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $sql = "INSERT INTO users (first_name, last_name, username, email, password, address, city, province, area_code) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }
    $stmt->bind_param("sssssssss", $first_name, $last_name, $username, $email, $password_hash, $address, $city, $province, $area_code);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
        // Redirect to a success page or login page
        header("Location: success.php");
        exit(); // Ensure no further code is executed after redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<?php 
    require_once "./includes/footer.php";
?>
