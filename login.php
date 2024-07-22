<?php
$title = "Received";
require_once './includes/header.php';
require_once './db/conn.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($conn, $email);
    $query = "SELECT * FROM signup_form WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $email;
            echo "good password";
            header("Location: index.php");
            exit();
        } else {
            echo "bad password";
        }
    } else {
        echo "Invalid email or password.";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<?php
require_once './includes/footer.php';
?>
