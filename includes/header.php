<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/Mywebsite/css/bootstrap.css" />
    <link rel="stylesheet" href="/Mywebsite/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title> E-Commerce <?php echo $title ?></title>
</head>
<body>
  <header>
    <section class="homepg" id="HOME">
      <div class="navbar">
        <div class="logo">E-commerce</div>
        <nav class="navbar-items h-class">
          <ul class="nav v-class">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
                    <div class="navbar-nav ms-auto">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="signupform.php">Sign Up</a>
                            <a class="btn btn-primary" href="loginform.php">Login</a>
                            <a class="btn btn-primary" href="logout.php">Logout</a>
                        </div>
                    </div>
        </nav>
        <div class="burgur">&#9</div>
      </div>
     </section>
  </header>