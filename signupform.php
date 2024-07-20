<?php 
    $title = "Sign Up";
    require_once "./includes/header.php";
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="receive.php" class="row g-3">

                <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="inputFirstName" required>
                </div>

                <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="inputLastName" required>
                </div>

                <div class="col-md-6">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="inputUsername" required>
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" required>
                </div>

                <div class="col-md-6">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" required>
                </div>
                
                <div class="col-md-6">
                    <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="inputConfirmPassword" required>
                </div>
                
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" required>
                </div>
                
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" name="city" class="form-control" id="inputCity" required>
                </div>
                
                <div class="col-md-4">
                    <label for="inputProvince" class="form-label">Province</label>
                    <select id="inputProvince" class="form-select" name="province" required>
                        <option value="" disabled selected>Choose...</option>
                        <option>Alberta</option>
                        <option>British Columbia</option>
                        <option>Manitoba</option>
                        <option>New Brunswick</option>
                        <option>Newfoundland</option>
                        <option>Labrador Northwset Territories</option>
                        <option>Nova Scotia</option>
                        <option>Nunavut</option>
                        <option>Ontario</option>
                        <option>Prince Edward Island</option>
                        <option>Quebec</option>
                        <option>Saskatchewan</option>
                        <option>Yukon</option>
                    </select>
                </div>
                
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Area Code</label>
                    <input type="text" name="area_code" class="form-control" id="inputZip" required>
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
