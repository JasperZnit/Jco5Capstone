<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);">
    <div class="container d-flex justify-content-center px-2 py-2 mt-5">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="background-color: #37b5b6; color: #f2f597">
                    <h3>Personal Information</h3>
                </div>

                <div class="card-body bg-white">
                    <div class="container">

                        <div class="d-flex px-5">
                            <div class="">
                                <h5>Status:</h5>
                            </div>
                            <div class="ms-auto g-2">
                                <label>Not yet validated?</label>
                                <button type="submit" class="btn"
                                    style="background-color: #37b5b6; color: #f2f597">Submit for Validation</button>
                            </div>
                        </div>

                        <form class="form bg-white p-4" action="handler/personaldetails_process.php" method="post">

                            <!--Given name-->
                            <div class="form-group" action="" method="post" id="givenName">
                                <div class="row mx-auto p-4">
                                    <div class="col-2">
                                        <label>Given Name</label>
                                    </div>
                                    <div class="col-10">
                                        <div class="row mb-3">
                                            <label for="firstname" class="col-sm-2 col-form-label">First name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="firstname"
                                                    placeholder="John">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="middlename" class="col-sm-2 col-form-label">Middle name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="middlename"
                                                    placeholder="Smith">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="lastname" class="col-sm-2 col-form-label">Last name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="lastname" placeholder="Doe">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Birth Details-->
                            <div class="form-group" action="" method="post" id="birthDetails">
                                <div class="row mx-auto p-4">
                                    <div class="col-2">
                                        <label>Birth Details</label>
                                    </div>
                                    <div class="col-10">
                                        <div class="row mb-3">
                                            <label for="bdate" class="col-sm-2 col-form-label">Birth Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="bdate">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="age" class="col-sm-2 col-form-label">Age</label>
                                            <div class="col-sm-10">
                                                <input type="test" class="form-control" id="age" placeholder="y/o">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="bplace" class="col-sm-2 col-form-label">Birth Place</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="bplace"
                                                    placeholder="Tondo, Manila City">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                                        checked>
                                                    <label class="form-check-label" for="male">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="female">
                                                    <label class="form-check-label" for="female">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Civil Status-->
                            <div class="form-group" action="" method="post" id="civilStatus">
                                <div class="row mx-auto p-4">
                                    <div class="col-2">
                                        <label>Civil Status</label>
                                    </div>
                                    <div class="col-10">
                                        <div class="row mb-3">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="civiStatus" id="civilStatus"
                                                    name="civilStatus">
                                                    <option selected>single</option>
                                                    <option value="1">married</option>
                                                    <option value="2">divorced</option>
                                                    <option value="3">widowed</option>
                                                    <option value="4">common-law</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Spouse-->
                            <div class="form-group" action="" method="post" id="spouseName">
                                <div class="row mx-auto p-4">
                                    <div class="col-2">
                                        <label>Spouse Maiden Name</label>
                                    </div>
                                    <div class="col-10">
                                        <div class="row mb-3">
                                            <label for="spousefname" class="col-sm-2 col-form-label">First name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="spousefname"
                                                    placeholder="Jane">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="spousemname" class="col-sm-2 col-form-label">Middle name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="spousemidname"
                                                    placeholder="Cruz">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="spouselname" class="col-sm-2 col-form-label">Last name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="spouselname"
                                                    placeholder="Doe">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Address-->
                            <div class="form-group" action="" method="post" id="addressDetails">
                                <div class="row mx-auto p-4">
                                    <div class="col-2">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-10">
                                        <div class="row mb-3">
                                            <label for="street" class="col-sm-2 col-form-label">Street</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="street"
                                                    placeholder="1234 Main St">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="barangay" class="col-sm-2 col-form-label">Barangay</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="barangay"
                                                    placeholder="Barangay">
                                            </div>
                                        </div>
                                        <!--City/State/Zip-->
                                        <div class="row mb-3">
                                            <label for="city" class="col-sm-2 col-form-label">City</label>
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" id="city"
                                                            placeholder="City">
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label for="country"
                                                                    class="col col-form-label">Country</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" class="form-control" id="country"
                                                                    placeholder="Philippines">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <label for="zip" class="col col-form-label">Zip</label>
                                                            </div>
                                                            <div class="col-6">
                                                                <input type="integer" class="form-control" id="zip"
                                                                    placeholder="Zip">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Contact Details-->
                            <div class="form-group" action="" method="post" id="contactDetails">
                                <div class="row mx-auto p-4">
                                    <div class="col-2">
                                        <label>Contact Details</label>
                                    </div>
                                    <div class="col-10">
                                        <div class="row mb-3">
                                            <label for="cellnum" class="col-sm-2 col-form-label">Cellphone
                                                number</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cellnum"
                                                    placeholder="09211234321">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="telnum" class="col-sm-2 col-form-label">Telephone number</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="telnum"
                                                    placeholder="(032) 254-2442">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="primEmail" class="col-sm-2 form-label">Primary Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="primEmail"
                                                    placeholder="primmaryemail@sample.com">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="secEmail" class="col-sm-2 form-label">Secondary Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="secEmail"
                                                    placeholder="secondaryemail@sample.com">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Employment Status-->
                            <div class="form-group" action="" method="post" id="employmentStatus">
                                <div class="row mx-auto p-4">
                                    <div class="col-2">
                                        <label>Employment Status</label>
                                    </div>
                                    <div class="col-10">
                                        <div class="row mb-3">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="civiStatus"
                                                    id="employmentStatus" name="employmentStatus">
                                                    <option selected>employed (Private)</option>
                                                    <option value="1">student</option>
                                                    <option value="2">employed (public)</option>
                                                    <option value="3">unemployed</option>
                                                    <option value="4">freelancer</option>
                                                    <option value="5">self employed</option>
                                                    <option value="6">retired/resigned from work</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h5>Requirments</h5>
                            <p class="fst-italic text-secondary">Upload any government issued ID.</p>
                            <div class="Requirements">
                                <div class="row mx-auto p-4">
                                    <div class="col-2">
                                        <h5>Primary</h5>
                                    </div>

                                    <div class="col-10">
                                        <div class="row mb-3 mt-3">
                                            <label for="RequirementsType" class="col-sm-2 col-form-label">Type</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="RequirementsType"
                                                    id="RequirementsType" name="RequirementsType">
                                                    <!--<option selected>Barangay ID</option>-->
                                                    <option value="1">Alien Certification</option>
                                                    <option value="2" selected>Barangay ID</option>
                                                    <option value="3">Current Valid ePassport</option>
                                                    <option value="4">Driver's License</option>
                                                    <option value="5">Firearms License (PNP)</option>
                                                    <option value="6">Office ID</option>
                                                    <option value="7">GSIS ID</option>
                                                    <option value="8">HUMID SSS</option>
                                                    <option value="9">HUMID Pag-IBIG</option>
                                                    <option value="10">iDOLE card</option>
                                                    <option value="11">Immigrant Certification</option>
                                                    <option value="12">Integrated Bar of the Philippinwa ID</option>
                                                    <option value="13">National ID</option>
                                                    <option value="14">NBI ID</option>
                                                    <option value="15">OWWA ID (Oversses Workers Welfare Administration)
                                                    </option>
                                                    <option value="16">Passport</option>
                                                    <option value="17">PhilHealth ID</option>
                                                    <option value="18">PRC ID</option>
                                                    <option value="19">PWD ID</option>
                                                    <option value="20">School ID</option>
                                                    <option value="21">Senior Citizen ID</option>
                                                    <option value="22">SSS ID</option>
                                                    <option value="23">Voter's Certification</option>
                                                    <option value="24">Voter's ID</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3 mt-3">
                                            <label for="primValID" class="col-sm-2 col-form-label">Primary</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="primValID" name="filename"
                                                    accept="image/*">
                                            </div>
                                        </div>
                                        <div class="row mb-3 mt-3">
                                            <label for="validID" class="col-sm-2 col-form-label">Preview</label>
                                            <div class="col-sm-10">
                                                <p>Display of the uploaded photo</p>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="col-2">
                                        <h5>Secondary</h5>
                                    </div>

                                        <div class="col-10">
                                            <div class="row mb-3 mt-3">
                                                <label for="RequirementsType" class="col-sm-2 col-form-label">Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="RequirementsType"
                                                        id="RequirementsType" name="RequirementsType">
                                                        <option value="1" selected>Barangay Certification</option>
                                                        <option value="2">Barangay Clearance</option>
                                                        <option value="3">Cedula or Community Tax Certificate</option>
                                                        <option value="4">DSWD Certification</option>
                                                        <option value="5">Elementary From 137 for students</option>
                                                        <option value="6">Goverment Service Record</option>
                                                        <option value="7">GSIS e-Card</option>
                                                        <option value="8">High School From 137 for students</option>
                                                        <option value="9">Land Title</option>
                                                        <option value="10">NCWDP Certification</option>
                                                        <option value="11">PSA Birth Certificate</option>
                                                        <option value="12">PSA Marriage Contract</option>
                                                        <option value="13">Police Clearance</option>
                                                        <option value="14">Seaman's Book</option>
                                                        <option value="15">Transcript of Records from University or College
                                                        </option>
                                                        <option value="16">TIN ID</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3 mt-3">
                                                <label for="validID" class="col-sm-2 col-form-label">Secondary</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="validID" name="filename"
                                                        accept="image/*">
                                                </div>
                                            </div>
                                            <div class="row mb-3 mt-3">
                                                <label for="validID" class="col-sm-2 col-form-label">Preview</label>
                                                <div class="col-sm-10">
                                                    <p>Display of the uploaded photo</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="submitBtn">
                                        <div class="row mx-auto px-4">
                                            <div class="col-2">
                                                <label></label>
                                            </div>
                                            <div class="col-10">
                                                <div class="row">
                                                    <label class="col-sm-2"></label>
                                                    <div class="col-sm-10">
                                                        <!--buttons-->
                                                        <div class="d-flex">
                                                            <div class="ms-auto">
                                                                <button type="submit" class="btn"
                                                                    style="background-color: #37b5b6; color: #f2f597">Save Changes</button>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            

                            
                        </form>
                    </div><!--Container-->
                </div><!--card body-->
            </div><!--Card-->
        </div><!--col-12-->
    </div><!--row-->

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>