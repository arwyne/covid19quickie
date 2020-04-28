<?php

    require '../partials/header.php';

    if (isset($_SESSION['user'])) {
		header("Location: ./home.php");
	}
?>


<div class="container">
    <div class="row">
        <div class="app-container">
            <div class="app-head-container">
                <img src="../assets/images/kid3.png" alt="">
            </div>

            <div class="app-body-container">
                <h1 class="body-heading">Register</h1>
                <form class="register-form" action="../controllers/register_user.php" method="POST">

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
                            </div>
    
                            <div class="col">
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="number" id="age" name="age" class="form-control" placeholder="Age" required>
                    </div>

                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                    </div>

                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
                    </div>

                    <div class="button-container">
                        <button id="register" type="submit" class="btn btn-lg main-button bg-info text-light">Submit</button>
                    </div>
                </form>

                    <p>Already have an account? <a class="reg-link" href="./login.php">Log In</a></p>

            </div>
        </div>
    </div>
</div>



<?php 
	require '../partials/footer.php'
 ?>