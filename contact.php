<?php
$title ='Contact Us page';
require_once './includes/header.php';
?>
<section class="contact" id="CONTACT">
    <h3>let's chat</h3>
    <h1 class="heading">contact us</h1>
    <div class="contact_box">
        <form action="process_contact.php" method="post">
            <input type="text" name="name" placeholder="name" required>
            <input type="email" name="email" placeholder="email" required>
            <input type="number" name="number" placeholder="number" required>
            <input type="text" name="address" placeholder="address" required>
            <textarea name="message" cols="30" rows="7" placeholder="message" required></textarea>
            <button class="btn btn2" type="submit">send message</button>
        </form>
    </div>
</section>
<?php
require_once './includes/footer.php';
?>