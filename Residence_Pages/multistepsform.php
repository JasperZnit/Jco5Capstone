<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Multi Step Form | Webdevtrick.com</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/payment.css">

</head>
<body>

    <header class="header">
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
                            <button class="multisteps-form__progress-btn js-active" type="button" title="Purpose">Purpose</button>
                            <button class="multisteps-form__progress-btn" type="button" title="Appointment">Appointment</button>
                            <button class="multisteps-form__progress-btn" type="button" title="Pament">Payment</button>
                            <button class="multisteps-form__progress-btn" type="button" title="Summary">Summary</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form">
                                <!--Purpose-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                                    
                                    <h3 class="multisteps-form__title">Select a purpose</h3>
                                
                                    <div class="multisteps-form__content">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select a purpose</option>
                                            <option value="1">Business Permit</option>
                                            <option value="2">Driver's License Application</option>
                                            <option value="3">Employment Requirements</option>
                                            <option value="4">Financial Assistance Application</option>
                                            <option value="5">Health Insurance Application</option>
                                            <option value="6">PagIBIG ID Application</option>
                                            <option value="7">PhilHealth ID Application</option>
                                            <option value="8">Postal ID Application</option>
                                            <option value="9">Scholarship Application</option>
                                            <option value="10">School Enrollment Requirement</option>
                                            <option value="11">SSS ID Application</option>
                                            <option value="12">Vehicle Registration</option>
                                            <option value="13">Voter Registration</option>
                                            <option value="14">Other</option>                        
                                        </select>
                                        
                                        <div class="other" style="display: none;">
                                        <label class="mt-4" for="other">Other</label>
                                        <input class="form-control" type="text" id="other_purpose" name="other_purpose" placeholder="Specify other purpose">
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>

                                <!--Appointment-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">Schedule an appointment</h3>
                                    <div class="multisteps-form__content">
                                    
                                    <div class="col">
                                        <!-- Calendly inline widget begin -->
                                        <div class="calendly-inline-widget" data-url="https://calendly.com/brgyhqplus/brgyhq?hide_event_type_details=1&hide_gdpr_banner=1" style="min-width:320px;height:700px;"></div>
                                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                                        <!-- Calendly inline widget end -->
                                    </div>
                                    
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                    </div>
                                </div>

                                <!--Payment-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">Select your payment method</h3>
                                    <div class="multisteps-form__content">
                                        <div class="d-flex justify-content-center">
                                            <div class="containerpayment">
                                                <form action="#">
                                                    <input class="radio" type="radio" name="payment" id="cash">
                                                    <input class="radio" type="radio" name="payment" id="gcash">
                                                    <input class="radio" type="radio" name="payment" id="maya">
                                                    <input class="radio" type="radio" name="payment" id="bank">


                                                    <div class="category">
                                                        <label for="cash" class="cashMethod">
                                                            <div class="imgName">
                                                                <div class="imgContainer cash">
                                                                    <img src="payment logo/cash.png" alt="">
                                                                </div>
                                                                <span class="name">Cash</span>
                                                            </div>
                                                            <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                                                        </label>

                                                        <label for="gcash" class="gcashMethod">
                                                            <div class="imgName">
                                                                <div class="imgContainer gcash">
                                                                    <img src="payment logo/gcash.png" alt="">
                                                                </div>
                                                                <span class="name">Gcash</span>
                                                            </div>
                                                            <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                                                        </label>

                                                        <label for="maya" class="mayaMethod">
                                                            <div class="imgName">
                                                                <div class="imgContainer maya">
                                                                    <img src="payment logo/maya.png" alt="">
                                                                </div>
                                                                <span class="name">Maya</span>
                                                            </div>
                                                            <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                                                        </label>

                                                        <label for="bank" class="bankMethod">
                                                            <div class="imgName">
                                                                <div class="imgContainer bank">
                                                                    <img src="payment logo/bank.png" alt="">
                                                                </div>
                                                                <span class="name">Bank</span>
                                                            </div>
                                                            <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Summary-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">Transaction Summary</h3>
                                    <div class="multisteps-form__content" id="printableArea">
                                        <div class="form mt-4" id="summary">
                                            <div class="form-group">
                                                <label>Reference Number:</label>
                                                <input class="form-control" type="text" name="reference_number" id="referenceNumber" readonly/>
                                            </div>
                                            <div class="form-group">
                                                <label>Requester:</label>
                                                <input class="form-control" type="text" name="requester" id="requester" readonly/>
                                            </div>
                                            <div class="form-group">
                                                <label>Purpose:</label>
                                                <input class="form-control" type="text" name="purpose" id="purpose" readonly/>
                                            </div>
                                            <div class="form-group">
                                                <label>Appointment Date:</label>
                                                <input class="form-control" type="text" name="appointmentDate" id="appointment" readonly/>
                                            </div>
                                            <div class="form-group">
                                                <label>Payment Method:</label>
                                                <input class="form-control" type="text" name="method" id="payMethod" readonly/>
                                            </div>
                                            <div class="form-group">
                                                <label>Amount:</label>
                                                <input class="form-control" type="text" name="amount" id="amount" readonly/>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <div class="p-2">
                                                <a href="#" id="downloadBtn" class="btn btn-bg-none" download>
                                                    <i class="bi bi-download fs-4 fw-bolder"></i>
                                                </a>
                                            </div>
                                            <div class="p-2">
                                                <a href="#" id="printBtn" class="btn btn-bg-none" print>
                                                    <i class="bi bi-printer fs-4 fw-bolder"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn btn-success ml-auto" type="submit" title="Send">Submit</button>
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

<script src="./js/script.js"></script>
<script  src="./js/function.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>