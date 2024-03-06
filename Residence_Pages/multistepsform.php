<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Application Steps</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/style.css">


</head>

<body style="background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);">

    <div class="container d-flex text-white mt-4">
        <div class="col-12 col-lg-8 m-auto">
        <a href="home.php" class="justify-content-around"><< Back to Home page</i></a>
        </div>
        
    </div>
        
    <header class="header text-white">    
        <h1 class="header__title">Barangay Certificate Application</h1>
    </header>

    <div class="content">
        <div class="content__inner">
            <div class="container overflow-hidden">
                <div class="multisteps-form">
                    <!--Progress bar-->
                    <div class="row">
                        <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="Purpose">Purpose</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="Appointment">Appointment</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="Pament">Payment</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="Summary">Summary</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form" action="multistepsformprocess.php" method="post">
                                <!--Purpose-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                                    style="height: 50vh" data-animation="scaleIn">

                                    <h3 class="multisteps-form__title">Select a purpose</h3>
                                    
                                    <div class="multisteps-form__content">
                                        <select id="mySelect" class="form-select" name="purpose" onchange="OtherFunction()">
                                            <option selected>Select a purpose</option>
                                            <option value="Business Permit">Business Permit</option>
                                            <option value="Employment Requirements">Employment Requirements</option>
                                            <option value="Financial Assistance Application">Financial Assistance Application</option>
                                            <option value="Health Insurance Application">Health Insurance Application</option>
                                            <option value="PagIBIG ID Application">PagIBIG ID Application</option>
                                            <option value="PhilHealth ID Application">PhilHealth ID Application</option>
                                            <option value="Postal ID Application">Postal ID Application</option>
                                            <option value="Scholarship Application">Scholarship Application</option>
                                            <option value="School Enrollment Requirement">School Enrollment Requirement</option>
                                            <option value="SSS ID Application">SSS ID Application</option>
                                            <option value="Vehicle Registration">Vehicle Registration</option>
                                            <option value="Voter Registration">Voter Registration</option>
                                            <option value="Other" id="Other">Other</option>
                                            
                                        </select>
                                        

                                        <div class="other" style="display: none;" id="demo_other">
                                            <label class="mt-4" for="other">Other</label>
                                            <input class="form-control" type="text" id="other_purpose"
                                                name="other_purpose" placeholder="Specify other purpose">
                                        </div>
                                        <script>
                                            function OtherFunction() {
                                            var x = document.getElementById("mySelect");
                                            if(x.value == "Other")  {
                                             document.getElementById('demo_other').style.display =  'block';
                                            
                                            }
                                            }
                                        </script>
                                        <div class="button-row d-flex mt-4">
                                                    <button class="btn ml-auto js-btn-next"
                                                        style="background-color: #37b5b6; color: #f2f597" type="button"
                                                        title="Next">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                         <!--Appointment-->
                                        <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                            data-animation="scaleIn">
                                            <h3 class="multisteps-form__title">Schedule an appointment</h3>
                                            <div class="multisteps-form__content" >

                                                <div class="col">
                                                    <input type="date" name="appointment_date">
                                                    <!-- Calendly inline widget begin -->
                                                    <!-- <div class="calendly-inline-widget"
                                                        data-url="https://calendly.com/brgyhqplus/brgyhq?hide_event_type_details=1&hide_gdpr_banner=1"
                                                        style="min-width:320px;height:700px;"></div>
                                                    <script type="text/javascript"
                                                        src="https://assets.calendly.com/assets/external/widget.js"
                                                        async></script> -->
                                                    <!-- Calendly inline widget end -->
                                                </div>
                                                

                               

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn ml-auto js-btn-next"
                                                style="background-color: #37b5b6; color: #f2f597" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>

                                <!--Payment-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">Select your payment method</h3>
                                    <div class="multisteps-form__content">
                                        <div class="d-flex justify-content-center">
                                            <div class="containerpayment">
                                                
                                                    <select name="payment">
                                                        <option value="3 days to pay">3 days to pay</option>
                                                        <option value="Cash On Delivery">Cash On Delivery</option>
                                                        <option value="Deposit To Bank">Deposit To Bank</option>
                                                        <option value="check on delivery">Check on Delivery</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn btn-primary js-btn-prev" type="button"
                                                    title="Prev">Prev</button>
                                                <button class="btn ml-auto js-btn-next"
                                                    style="background-color: #37b5b6; color: #f2f597" type="button"
                                                    title="Next">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Summary-->
                                 <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">

                                    <div class="multisteps-form__content" id="printableArea">
                                        <h3 class="multisteps-form__title">Transaction Summary</h3>
                                        <div class="form mt-4" id="summary">
                                            <div class="form-group">
                                                <label>Reference Number:</label>
                                                <input class="form-control" type="text" name="reference_number"
                                                    id="referenceNumber" readonly />
                                            </div>
                                            <div class="form-group">
                                                <label>Requester:</label>
                                                <input class="form-control" type="text" name="requester" id="requester"
                                                    readonly />
                                            </div>
                                            <div class="form-group">
                                                <label>Purpose:</label>
                                                <input class="form-control" type="text" name="purpose" id="purpose"
                                                    readonly />
                                            </div>
                                            <div class="form-group">
                                                <label>Appointment Date:</label>
                                                <input class="form-control" type="text" name="appointment_date"
                                                    id="appointment" readonly />
                                            </div>
                                            <div class="form-group">
                                                <label>Payment Method:</label>
                                                <input class="form-control" type="text" name="method" id="payment"
                                                    readonly />
                                            </div>
                                            <div class="form-group">
                                                <label>Amount:</label>
                                                <input class="form-control" type="text" name="amount" id="amount"
                                                    readonly />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <div class="p-2">
                                                <a href="#" id="downloadBtn" class="btn btn-bg-none" download>
                                                    <i class="bi bi-download fs-4 fw-bolder"></i>
                                                </a>
                                            </div>
                                            <div class="p-2">
                                                <a id="printBtn" class="btn btn-bg-none"
                                                    onclick="printDiv('printableArea')" print>
                                                    <i class="bi bi-printer fs-4 fw-bolder"></i>
                                                </a>
                                            </div>
                                        </div> 
                                        
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn ml-auto"
                                                style="background-color: #37b5b6; color: #f2f597" type="submit"
                                                title="Send">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/function.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
       

</body>

</html>