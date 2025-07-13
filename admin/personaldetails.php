
<?php include "header.php" ?>


<div class="container mr-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Your Personal Details</h3></div>
                <div class="card-body">
                    
                    <form>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">First Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Last Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Designation</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Designation</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Mobile</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Resume</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="file" aria-describedby="emailHelp" placeholder="Enter email address" />
                                </div> -->

                                <div class="form-group">
                                    <label class="small mb-1 form-label d-block" for="inputEmailAddress">Resume</label>
                                    <input style="border:2px dashed blue;" class="px-3 py-3" type="file" id="formFile">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Image</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="file" aria-describedby="emailHelp" placeholder="Enter email address" />
                                </div> -->
                                <div class="form-group">
                                    <label class="small mb-1 form-label d-block" for="inputEmailAddress">Image</label>
                                    <input style="border:2px dotted green;" class="px-3 py-3" type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        
                        <!-- <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                    <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="login.html">Update</a></div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>

<?php include "footer.php" ?>
