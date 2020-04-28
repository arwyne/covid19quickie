<?php

require '../partials/header.php';

?>

    <div class="container">
        <div class="row">
            <div class="app-container">
                <div class="app-head-container">
                    <img src="../assets/images/kid5.png" alt="">
                </div>

                <div class="app-body-container">
                    <h1 class="body-heading" id="heading">Covid-19 FAQS</h1>

                    <div class="accordion" id="faqs-group">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                1. WHAT ARE CORONAVIRUSES?
                                </button>
                            </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqs-group">
                            <div class="card-body">
                                <p>Coronaviruses are a large family of viruses causing a range of illnesses, from the common cold to more serious infections such as those caused by Middle East Respiratory Syndrome-related Coronavirus (MERS-CoV) and Severe Acute Respiratory Syndrome-related Coronavirus (SARS-CoV). Coronavirus can also cause a variety of diseases in farm animals and domesticated pets.</p>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. WHAT IS THE SOURCE OF THE COVID-19 VIRUS?
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqs-group">
                            <div class="card-body">
                                <p>Animals are the most likely source of the COVID-19. It is possible that the COVID-19 virus originated from animals before it infected humans. However, the specific source of COVID-19 virus is yet to be confirmed.</p>

                                <p>To protect yourself: avoid direct contact with animals and surfaces in contact with animals; practice food safety measures at all times; handle raw meat, milk or animal organs with care to avoid contamination of uncooked foods; avoid consuming raw or undercooked animal products.</p>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. IS THERE A TREATMENT AND VACCINE FOR COVID-19?
                                </button>
                            </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqs-group">
                            <div class="card-body">
                                <p>Not yet. As of now, there is no specific treatment for or vaccine against COVID-19. However, many of the symptoms can be treated based on the patient’s clinical conditions. Supportive care for infected persons is highly effective. Most of those infected have recovered with only supportive care.</p>

                                <p>Vaccines and specific drug treatments are currently being developed and are tested through clinical trials. WHO and DOH are coordinating with those who are developing the vaccines and medicines to determine possible availability of these resources.</p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="emergencyhotline">
                        <h3>Emergency Hotline Numbers</h3>

                        <p>Emergency hotlines <span class="hotline">02-894-COVID (02-894-26843)</span> and <span class="hotline">1555</span> for people who suspect they are infected with COVID-19</p>

                        <p>The DOH said the public can ask questions about the disease caused by the novel coronavirus or request assistance if they are experiencing symptoms</p>
                    </div> 
            
                </div>
            </div>
        </div>
    </div>



<?php

require '../partials/footer.php';

?>