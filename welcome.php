<?php
   $title = "Received";
   require_once './includes/header.php';
   require_once './db/conn.php';

session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $first_name = $conn->real_escape_string($_POST['first_name']);
} else {
    // Default value if no form submission
    $first_name = 'Nancy';
}
?>

<div class="welcome">
<h1>Welcome, <?php echo htmlspecialchars($first_name); ?>!</h1>
<p>Thank you for signing up. We're glad to have you here.</p>
</div>

<?php
require_once './includes/footer.php';
?>