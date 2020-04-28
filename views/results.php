<?php

    require '../partials/header.php';

    if (!isset($_SESSION['answer1'])) {
		header("Location: ./login.php");
    }
    
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
                    <h4>Travelled in the past 14 days: </h4>
                    <p>
                        <?php
                            if($_SESSION['answer1'] == 'yes') { echo 'Yes';} 
                            else { echo 'No';}
                        ?>
                    </p>
                </div>

                <div class="wrapper-results">
                    <h4>Currently experiencing symptoms: </h4>
                    <p>
                        <?php
                            if($_SESSION['answer2_1'] == 'yes') { echo 'Yes';} 
                            elseif($_SESSION['answer2_1'] == 'no'){ echo 'No';}
                            else{ echo 'None';}
                        ?>
                    </p>
                </div>

                <div class="wrapper-results">
                    <h4>Close contact with a confirmed case: </h4>
                    <p>
                        <?php
                            if($_SESSION['answer2_2'] == 'yes') { echo 'Yes';} 
                            elseif($_SESSION['answer2_2'] == 'no'){ echo 'No';}
                            else{ echo 'For Investigation';}
                        ?>
                    </p>
                </div>
                    
                <div class="wrapper-results">
                    <h4>Body temperature: </h4>
                    <p>
                        <?php
                            if($_SESSION['answer3'] == 'above') { echo 'Above(&#8805;) 38.0&#8451;';} 
                            elseif($_SESSION['answer3'] == 'below'){ echo 'Below(&#8805;) 38.0&#8451;';}
                            else{ echo 'Normal';}
                        ?>
                    </p>
                </div>
                        
                <div class="wrapper-results">
                    <h4>Status: </h4>
                    <p>
                        <?php
                            if($_SESSION['answer3'] == 'above') { echo 'PUI (Person Under Investigation)';} 
                            elseif($_SESSION['answer3'] == 'below'){ echo 'PUM (Person Under Monitoring)';}
                            else{ echo 'Not PUI(Person Under Investigation) nor PUM(Person Under Monitoring)';}
                        ?>
                    </p>
                </div>
                
                <div class="wrapper-results">
                    <h4>Recommendation: </h4>
                    <p>
                        <?php
                            if($_SESSION['answer3'] == 'above') { echo 'Call the emergency hotline numbers to request proper assitance.';} 
                            elseif($_SESSION['answer3'] == 'below'){ echo 'Quarantine at home or barangay isolation units.';}
                            else{ echo 'Manage appropriately and stay at home.';}
                        ?>
                    </p>
                </div>    
                
                <div class="button-container">
                    <a href="../controllers/finished.php">
                        <button type="button" class="btn btn-lg main-button bg-info text-light">Back to Home!</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
	require '../partials/footer.php';
 ?>