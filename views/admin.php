<?php

    require '../partials/header.php';
    require '../controllers/connection.php';
    
    if (isset($_SESSION['user'])){
        if ($_SESSION['user']['role_id'] != 1) {
            header("Location: ./home.php");
        }
    } else {
        header("Location: ./home.php");
    }


    // total no. of person under investigation
    $pui_query = "SELECT * FROM results WHERE status = 'pui'";
    $pui_result = mysqli_query($conn, $pui_query);
    $pui_info = mysqli_num_rows($pui_result);

    // total no. of person under monitoring
    $pum_query = "SELECT * FROM results WHERE status = 'pum'";
    $pum_result = mysqli_query($conn, $pum_query);
    $pum_info = mysqli_num_rows($pum_result);

    // total no. of not pui nor pum
    $not_query = "SELECT * FROM results WHERE status = 'not'";
    $not_result = mysqli_query($conn, $not_query);
    $not_info = mysqli_num_rows($not_result);

    
?>

<div class="container">
    <div class="row">
        <div class="app-container">
            <div class="app-head-container">
                <img src="../assets/images/kid5.png" alt="">
            </div>

            <div class="app-body-container">
                <h1 class="body-heading" id="heading">Summary of All Results</h1>

                <div class="wrapper-results">
                    <h4>PUI(Person Under Investigation): </h4>
                    <p>
                        <?php
                           echo $pui_info . ' persons';
                        ?>
                    </p>
                </div>

                <div class="wrapper-results">
                    <h4>PUM(Person Under Monitoring): </h4>
                    <p>
                        <?php
                            echo $pum_info . ' persons';
                        ?>
                    </p>
                </div>

                <div class="wrapper-results">
                    <h4>Not PUI or PUM: </h4>
                    <p>
                        <?php
                          echo $not_info . ' persons';
                        ?>
                    </p>
                </div>
                    
                
                <div class="button-container">
                    <a href="./home.php"><button type="button" class="btn btn-lg main-button bg-info text-light">Back to Home!</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
	require '../partials/footer.php';
 ?>