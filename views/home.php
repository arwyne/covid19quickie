<?php 
	
	require '../partials/header.php';

 ?>

<div class="container">
    <div class="row">
        <div class="app-container">
            <div class="app-head-container">
                <img src="../assets/images/kid.png" alt="">
            </div>

            <div class="app-body-container">

                <h1 class="body-heading">COVID-19 Quickie</h1>

                <div id="displayContainer">
                    <h4 class="sub-title"> A tool that will help you to identify and assess if your a potential COVID-19
                        Virus candidate</h4>

                    <div class="wrapper">
                        <div class="icons-container">
                            <i class="fas fa-list-ol icons"></i>
                        </div>
                        <div>
                            <p class="disclaimer">You will answer a few questions about symptoms, travel, and contact you’ve had with others.</p>
                        </div>
                    </div>

                    <div class="wrapper">
                        <div class="icons-container">
                            <i class="fas fa-lock icons"></i>
                        </div>
                        <div>
                            <p class="disclaimer">Your answers will be confidential</p>
                        </div>
                    </div>

                    <div class="wrapper">
                        <div class="icons-container">
                            <i class="far fa-thumbs-up icons"></i>
                        </div>
                        <div>
                            <p class="disclaimer">By using this tool, you agree that our group will not be liable for any harm relating to your use.</p>
                        </div>
                    </div>
                </div>


                <div id="displayContainer2">

                    <div class="register-container">
                        <p>By creating an account you can save your results after answering the questions.</p>
                        
                        <button id="registerPath" type="button" class="btn btn-lg main-button bg-info text-light">
							Click to Register!
					    </button>

                    </div>
                    
                    <div class="guest-container">
                        <p>By answering the questions as a guest your results will not be save after leaving the site.</p>

                        <button id="guestPath" type="button" class="btn btn-lg main-button bg-info text-light">
                            Click to Start!
                        </button>
                    </div>

                </div>
                
				<div class="button-container">
                    <?php if (!isset($_SESSION['user'])): ?>
					    <button id="startButton" type="button" class="btn btn-lg main-button bg-info text-light">Click This! To Get Started</button>
                    <?php else: ?>
                        <a href="./questions.php">
                            <button id="startButton2" type="button" class="btn btn-lg main-button bg-info text-light">Click This! To Get Started</button>
                        </a>
                    <?php endif ?>
				</div>

            </div>
        </div>
    </div>
</div>


<?php 
	require '../partials/footer.php';
 ?>