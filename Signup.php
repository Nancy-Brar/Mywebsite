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

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $first_name = mysqli_real_escape_string($conn, $first_name);
    $last_name = mysqli_real_escape_string($conn, $last_name);
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $address = mysqli_real_escape_string($conn, $address);
    $city = mysqli_real_escape_string($conn, $city);
    $province = mysqli_real_escape_string($conn, $province);
    $area_code = mysqli_real_escape_string($conn, $area_code);

    $query = "INSERT INTO signup_form (first_name, last_name, username, email, password, address, city, province, area_code) 
            VALUES ('$first_name', '$last_name', '$username', '$email', '$password_hash', '$address', '$city', '$province', '$area_code')";

    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<?php 
require_once "./includes/footer.php";
?>
