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
                <img src="../assets/images/kid.png" alt="">
            </div>

            <div class="app-body-container">
                <h1 class="body-heading">User Login</h1>
                <form class="login-form" action="../controllers/auth_login.php" method="POST">

                    <div class="form-group">
                        <input type="text" id="userlog" name="userlog" class="form-control" placeholder="Username or Email" required>
                    </div>

                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    </div>


                    <div class="button-container">
                            <button id="login" type="submit" class="btn btn-lg main-button bg-info text-light">Login</button>
                    </div>
                </form>

                <p>Don't have an account? <a class="reg-link" href="./register.php">Register here</a></p>

            </div>
        </div>
    </div>
</div>



<?php 
	require '../partials/footer.php';
 ?>