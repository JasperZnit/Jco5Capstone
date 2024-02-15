<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container px-2 py-2 mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
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
                                <button type="submit" class="btn btn-primary">Submit for Validation</button>
                            </div>
                        </div>

                        <form class="form bg-white p-4">

                            <!--Given name-->
                            <div class="row mx-auto p-4">
                                <div class="col-2">
                                    <label>Given Name</label>
                                </div>
                                <div class="col-10">
                                    <div class="row mb-3">
                                        <label for="firstname" class="col-sm-2 col-form-label">First name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="firstname" placeholder="John">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="middlename" class="col-sm-2 col-form-label">First name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="middlename" placeholder="Smith">
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

                            <!--Birth Details-->
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
                                        <label for="bplace" class="col-sm-2 col-form-label">Birth Place</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="bplace" placeholder="Tondo, Manila City">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="male" checked>
                                                <label class="form-check-label" for="male">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="female">
                                                <label class="form-check-label" for="female">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Civil Status-->
                            <div class="row mx-auto p-4">
                                <div class="col-2">
                                    <label>Civil Status</label>
                                </div>
                                <div class="col-10">
                                    <div class="row mb-3">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="single" checked>
                                                <label class="form-check-label" for="single">
                                                    Single
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="married">
                                                <label class="form-check-label" for="married">
                                                    Married
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="divorced">
                                                <label class="form-check-label" for="divorced">
                                                    Divorced
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="widowed">
                                                <label class="form-check-label" for="widowed">
                                                    Widowed
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="common-law">
                                                <label class="form-check-label" for="common-law">
                                                    Common-law
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Spouse-->
                            <div class="row mx-auto p-4">
                                <div class="col-2">
                                    <label>Spouse Maiden Name</label>
                                </div>
                                <div class="col-10">
                                    <div class="row mb-3">
                                        <label for="spousefname" class="col-sm-2 col-form-label">First name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="spousefname" placeholder="Jane">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="spousemname" class="col-sm-2 col-form-label">Middle name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="spousemname" placeholder="Cruz">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="spouselname" class="col-sm-2 col-form-label">Last name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="spouselname" placeholder="Doe">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Address-->
                            <div class="row mx-auto p-4">
                                <div class="col-2">
                                    <label>Address</label>
                                </div>
                                <div class="col-10">
                                    <div class="row mb-3">
                                        <label for="street" class="col-sm-2 col-form-label">Street</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="street" placeholder="1234 Main St">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="barangay" class="col-sm-2 col-form-label">Barangay</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="barangay" placeholder="Barangay">
                                        </div>
                                    </div>
                                    <!--City/State/Zip-->
                                    <div class="row mb-3">
                                        <label for="city" class="col-sm-2 col-form-label">City</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control" id="city" placeholder="City">
                                                </div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label for="country" class="col col-form-label">Country</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" id="country" placeholder="Philippines">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                <div class="row">
                                                        <div class="col-2">
                                                            <label for="zip" class="col col-form-label">Zip</label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="integer" class="form-control" id="zip" placeholder="Zip">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Contact Details-->
                            <div class="row mx-auto p-4">
                                <div class="col-2">
                                    <label>Contact Details</label>
                                </div>
                                <div class="col-10">
                                    <div class="row mb-3">
                                        <label for="cellnum" class="col-sm-2 col-form-label">Cellphone number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="cellnum" placeholder="09211234321">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="telnum" class="col-sm-2 col-form-label">Telephone number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="telnum" placeholder="(032) 254-2442">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="primEmail" class="col-sm-2 form-label">Primary Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="primEmail" placeholder="primmaryemail@sample.com">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="secEmail" class="col-sm-2 form-label">Secondary Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="secEmail" placeholder="secondaryemail@sample.com">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Occupation-->
                            <div class="row mx-auto p-4">
                                <div class="col-2">
                                    <label>Employment Status</label>
                                </div>
                                <div class="col-10">
                                    <div class="row mb-3">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="student" checked>
                                                <label class="form-check-label" for="student">
                                                    Student
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="public">
                                                <label class="form-check-label" for="public">
                                                    Employed (Public)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="private">
                                                <label class="form-check-label" for="private">
                                                    Employed (Private)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="unemployed">
                                                <label class="form-check-label" for="unemployed">
                                                    Unemployed
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="freelancer">
                                                <label class="form-check-label" for="freelancer">
                                                    Freelancer
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="retired">
                                                <label class="form-check-label" for="retired">
                                                    Retired
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <!--buttons-->
                            <div class="d-flex pt-2">
                                <div class="ms-auto">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div><!--Container-->
                </div><!--card body-->
            </div><!--Card-->
        </div><!--col-12-->
    </div><!--row-->

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>