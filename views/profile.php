<?php

    require '../partials/header.php';
    require '../controllers/connection.php';

    if (!isset($_SESSION['user'])) {
		header("Location: ./login.php");
    } else {
        $id = $_SESSION['user']['id'];
    }

    // if (!isset($_SESSION['results'])) {
    //     header("Location: ./home.php");
    // }

    
    $valid_query = "SELECT * FROM results WHERE user_id = '$id'";
    $valid_result = mysqli_query($conn, $valid_query);
    $valid_info = mysqli_fetch_assoc($valid_result);

    $_SESSION['results'] = $valid_info;
    // if(mysqli_num_rows($valid_result) > 0) {

    //     if($email = $valid_info['email'] || $username = $valid_info['username']) {
    //         header('Location: ../views/register.php');
    //     }
    // }

?>

<div class="container">
    <div class="row">
        <div class="app-container">
            <div class="app-head-container">
                <img src="../assets/images/kid.png" alt="">
            </div>

            <div class="app-body-container">
                <h1 class="body-heading" id="heading">Results</h1>
                
                <div class="wrapper-results">
                    <h4>Name: </h4>
                    <p>
                        <?php
                            if(isset($_SESSION['user'])) { echo $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'];}
                        ?>
                    </p>
                </div>

                <div class="wrapper-results">
                    <h4>Age: </h4>
                    <p>
                        <?php
                            if(isset($_SESSION['user'])) { echo $_SESSION['user']['age'];}
                        ?>
                    </p>
                </div>

                <div class="wrapper-results">
                    <h4>Travelled in the past 14 days: </h4>
                    <p>
                        <?php
                            if(isset($_SESSION['results'])) {
                                if($_SESSION['results']['travel'] == 'yes') { 
                                    echo 'Yes';
                                } else { 
                                    echo 'No';
                                }
                            }
                        ?>
                    </p>
                </div>

                <div class="wrapper-results">
                    <h4>Currently experiencing symptoms: </h4>
                    <p>
                        <?php
                            if(isset($_SESSION['results'])) {
                                if($_SESSION['results']['symptoms'] == 'yes') { 
                                    echo 'Yes';
                                } elseif($_SESSION['results']['symptoms'] == 'no'){ 
                                    echo 'No';
                                } else { 
                                    echo 'None';
                                }
                            }
                        ?>
                    </p>
                </div>

                <div class="wrapper-results">
                    <h4>Close contact with a confirmed case: </h4>
                    <p>
                        <?php
                            if(isset($_SESSION['results'])) {
                                if($_SESSION['results']['contact'] == 'yes') { 
                                    echo 'Yes';
                                } elseif($_SESSION['results']['contact'] == 'no') { 
                                    echo 'No';
                                } else { echo 'For Investigation';
                                }
                            }

                        ?>
                    </p>
                </div>
                    
                <div class="wrapper-results">
                    <h4>Body temperature: </h4>
                    <p>
                        <?php
                            if(isset($_SESSION['results'])) {
                                if($_SESSION['results']['contact'] == 'above') { 
                                    echo 'Above(&#8805;) 38.0&#8451;';
                                } elseif($_SESSION['results']['contact'] == 'below') { 
                                    echo 'Below(&#8805;) 38.0&#8451;';
                                } else{ echo 'Normal';
                                }
                            }
                        ?>
                    </p>
                </div>
                        
                <div class="wrapper-results">
                    <h4>Status: </h4>
                    <p>
                        <?php
                            if(isset($_SESSION['results'])){
                                if($_SESSION['results']['temp'] == 'above') { 
                                    echo 'PUI (Person Under Investigation)';
                                } elseif($_SESSION['results']['temp'] == 'below') { 
                                    echo 'PUM (Person Under Monitoring)';
                                } else { echo 'Not PUI(Person Under Investigation) nor PUM(Person Under Monitoring)';
                                }
                                
                            }
                        ?>
                    </p>
                </div>
                
                <div class="wrapper-results">
                    <h4>Recommendation: </h4>
                    <p>
                        <?php
                            if(isset($_SESSION['results'])) {
                                if($_SESSION['results']['temp'] == 'above') { 
                                    echo 'Call the emergency hotline numbers to request proper assitance.';
                                } elseif($_SESSION['results']['temp'] == 'below') { 
                                    echo 'Quarantine at home or barangay isolation units.';
                                } else { 
                                    echo 'Manage appropriately and stay at home.';
                                }
                            }
                        ?>
                    </p>
                </div>    
                
                <div class="button-container">
                    <a href="./home.php"><button type="button" class="btn btn-lg main-button bg-info text-light">Back to Home!</button></a>
                </div>
                
                <div class="delete-container">
                    <a href="../controllers/delete.php"><button class="btn btn-md main-button bg-secondary text-light delete">Delete Results</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
	require '../partials/footer.php';
 ?>