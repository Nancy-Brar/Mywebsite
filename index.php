<?php
$title ='Home page';
require_once './includes/header.php';
session_start();
if(!isset($_SESSION['login'])){
  $_SESSION['login'] = false;
}
?>
<div class="row">
  <div class="content">
    <p>Online Store</p>
    <h1><span>Present Your</span> Products <br>To Millions</h1>
    <button class="btn">Get In Touch</button>
  </div>
</div>

<?php
require_once './includes/footer.php';
?>