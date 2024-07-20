<?php 
    $title = "Login";
    require_once './includes/header.php';
    require_once './db/conn.php';
?>
<div class="container mt-5">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
<?php 
    require_once "./includes/footer.php"
?>