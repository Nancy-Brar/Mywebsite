<?php
// Start the session
session_start();

    $servername = "localhost";  	// Server name or IP address
    $username = "root";     		// MySQL username
    $password = "";     			// MySQL password
    $dbname = "signup";	  	// Database name

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
 
// Check if the login form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Unsafe SQL query
    $query = "SELECT * FROM signup_form WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Email and password matched
        $_SESSION['email'] = $email;
        echo "Login successful!";
        // Redirect to a protected page
        header("Location: protected_page.php");
        exit();
    } else {
        // Invalid credentials
        echo "Invalid email or password.";
    }
}

// Close the database connection
mysqli_close($conn);
?>