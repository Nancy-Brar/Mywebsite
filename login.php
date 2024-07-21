<?php
   $title = "Received";
   require_once './includes/header.php';
   require_once './db/conn.php';

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Unsafe SQL query
    $query = "SELECT * FROM signup_form WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Email and password matched
        $_SESSION['email'] = $email;
        echo "<div class='welcome'>Login successful!</div>";
        // Redirect to a protected page
        header("Location: index.php");
    } else {
        // Invalid credentials
        echo "<div class='welcome'>Invalid email or password.</div>";
    }
}

// Close the database connection
mysqli_close($conn);
?>
<?php
require_once './includes/footer.php';
?>