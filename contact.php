<?php
$title ='Contact Us page';
require_once './includes/header.php';
?>
<section class="contact" id="CONTACT">
    <h3>let's chat</h3>
    <h1 class="heading">contact us</h1>
    <div class="contact_box">
        <input type="text" name="text" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <input type="number" name="number" placeholder="number">
        <input type="address" name="address" placeholder="address">
        <textarea name="text" cols="14" rows="7" placeholder="text" id=""></textarea>
        <button class="btn btn2">send message</button>
    </div>
</section>
<?php
require_once './includes/footer.php';
?>