<?php
$title = 'Process Contact page';
require_once './includes/header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $number = htmlspecialchars(strip_tags(trim($_POST['number'])));
    $address = htmlspecialchars(strip_tags(trim($_POST['address'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        ?>
        <div class='welcome'>
            <h3>Submitted Data</h3>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Number:</strong> <?php echo $number; ?></p>
            <p><strong>Address:</strong> <?php echo $address; ?></p>
            <p><strong>Message:</strong> <?php echo $message; ?></p>
        </div>
        <?php
    } else {
        echo "<p>Invalid email address.</p>";
    }
}
?>

<?php
require_once './includes/footer.php';
?>
