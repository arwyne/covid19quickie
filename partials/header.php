<?php
    if(!isset($_SESSION)) { 
        session_start(); 
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Covid19-Quickie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">

    <!-- favicon -->
    <link rel='icon' href='../assets/images/logo2.png'>

    <!-- fontawesome icons -->
    <script src="https://kit.fontawesome.com/763fd16ca4.js" crossorigin="anonymous"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&family=Roboto&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- external css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md">

            <a class="navbar-brand" href="./home.php"><img class="logo" src="../assets/images/logo2.png" alt="logo"></a>

            <?php if (isset($_SESSION['user'])): ?>
			    <a class="navbar-brand" href="./home.php"><img src="../assets/images/" alt="">Welcome, <?php echo $_SESSION['user']['firstname']; ?>!</a>
            <?php else: ?>
                <a class="navbar-brand" href="./home.php">Welcome, Guest!</a>
		    <?php endif ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navCollapse">
                <span><i class="fas fa-angle-double-down toggler-icon"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navCollapse">
                <ul class="navbar-nav ml-auto">
                    <?php if (isset($_SESSION['user'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./profile.php">Profile</a>
                        </li>

                        <?php if ($_SESSION['user']['role_id'] == 1): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="./admin.php">Admin</a>
                            </li>

                        <?php endif ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../controllers/logout.php">Logout</a>
                            </li>
                            
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">Login</a>
                        </li>
                    <?php endif ?>                     
                        <li class="nav-item">
                            <a class="nav-link" href="./faqs.php">Faqs</a>
                        </li>
                </ul>
            </div>
        </nav>
    </header>