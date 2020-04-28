<?php

    require '../partials/header.php';

    // if (isset($_SESSION['user'])) {
	// 	header("Location: ./profile.php");
    // }

    if (isset($_SESSION['results'])) {
		header("Location: ./profile.php");
    }
    
?>

<div class="container">
    <div class="row">
        <div class="app-container">
            <div class="app-head-container">
                <img src="../assets/images/kid2.png" alt="">
            </div>

            <div class="app-body-container">
                <h1 class="body-heading" id="heading">Questions</h1>
                <form class="question-form" action="../controllers/answers.php" method="POST">
                    <div id="question1" class="question-container">
                        <h4>Have you travelled to countries with COVID-19 cases in the last 14 days?</h4>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" value="yes" id="yes1" name="question1">
                            <label for="yes1" class="form-check-label">Yes</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" value="no" id="no1" name="question1">
                            <label for="no1" class="form-check-label">No</label>
                        </div>
                    </div>

                    <div id="question2-1" class="question-container">
                        <h4>Are you currently experiencing symptoms (cough, shortness of breath, fever)?</h4>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" value="yes" id="yes2-1" name="question2-1">
                            <label for="yes2-1" class="form-check-label">Yes</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" value="no" id="no2-1" name="question2-1">
                            <label for="no2-1" class="form-check-label">No</label>
                        </div>

                    </div>

                    <div id="question2-2" class="question-container">
                        <h4>Have you been in close contact with a confirmed case of coronavirus in the last 14 days?</h4>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" value="yes" id="yes2-2" name="question2-2">
                            <label for="yes2-2" class="form-check-label">Yes</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" value="no" id="no2-2" name="question2-2">
                            <label for="no2-2" class="form-check-label">No</label>
                        </div>

                    </div>

                    <div id="question3" class="question-container">
                        <h4>What is your current body temperature?</h4>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" value="above" id="above" name="question3">
                            <label for="above" class="form-check-label">Above(&#8805;) 38.0&#8451;</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" value="below" id="below" name="question3">
                            <label for="below" class="form-check-label">Below(&#8804;) 38.0&#8451;</label>
                        </div>
                    </div>

                    <div id="pum">
                        <h1 class="body-heading">Results</h1>
                        <h3>Person Under Monitoring</h3>
                        <p>Quarantine at home or barangay isolation units</p>
                    </div>

                    <div id="pui">
                        <h1 class="body-heading">Results</h1>
                        <h3>Person Under Investigation</h3>
                        <p>Call the emergency hotline numbers to request proper assitance </p>
                    </div>

                    <div id="not">
                        <h1 class="body-heading">Results</h1>
                        <h3>Not PUI nor PUM</h3>
                        <p>Manage appropriately</p>
                    </div>


                    <div class="button-container">
                        <button id="next" type="button" class="btn btn-lg main-button bg-info text-light">Next</button>
                        <button id="getresults" type="submit" class="btn btn-lg main-button bg-info text-light">Get Summary of Results!</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



<?php 
	require '../partials/footer.php'
 ?>