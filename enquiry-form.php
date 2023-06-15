<?php require_once("includes/header.php"); ?>

<section class="page-title-section main-title-section bg-grey">
    <div class="container title-container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-animation contact-heading" data-in-effect="fadeInUp">Enquiry Form</h1>
            </div>
            <div class="col-md-12">
                <ul class="wow fadeInUp breadcrump-list" data-wow-delay="400ms">
                    <li><a href="index.php">Home</a></li>
                    <li>Enquiry Form</li>
                </ul>
            </div>
        </div>
    </div>
</section>



<section class="contact-form bg-light py-10">
    <div class="container">
        <div class="contact-wrapper-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-area">
                        <!-- <h3 class="mb-1-6">Contact Details</h3> -->
                        <form class="quform" action="" method="post" enctype="multipart/form-data" onclick="">

                            <div class="quform-elements">

                                <div class="row">

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="quote_name"
                                                placeholder="First Name">
                                            <label for="first_name" class="float-space">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="last-name"
                                                placeholder="Last Name">
                                            <label for="last_name" class="float-space">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="your-email"
                                                placeholder="Your Email">
                                            <label for="your_email" class="float-space">Your Email</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="contact-number-tel"
                                                placeholder="Contact Number (Tel.)">
                                            <label for="number_tel" class="float-space">Contact Number (Tel.)</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="mobile-number"
                                                placeholder="Mobile No.">
                                            <label for="mobile_number" class="float-space">Mobile No.</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="contact-number"
                                                placeholder="Contact Number">
                                            <label for="contact_number" class="float-space">Contact Number</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="fax"
                                                placeholder="Fax">
                                            <label for="fax" class="float-space">Fax</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="company-name"
                                                placeholder="Company Name">
                                            <label for="company_name" class="float-space">Company Name</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="designation"
                                                placeholder="Designation">
                                            <label for="designation" class="float-space">Designation</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Textarea element -->
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control float-border" placeholder="Enter your address"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2" class="float-space">Enter your addess</label>
                                        </div>
                                    </div>
                                    <!-- End Textarea element -->

                                    <!-- Begin Textarea element -->
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control float-border"
                                                placeholder="What is it that you would like to Know from Us"
                                                id="floatingTextarea3" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2" class="float-space">What is it that you would
                                                like to Know from Us</label>
                                        </div>
                                    </div>
                                    <!-- End Textarea element -->



                                    <!-- Begin Submit button -->
                                    <div class="col-md-12 mt-4">
                                        <div class="quform-submit-inner text-center">

                                            <a href="#" class="butn secondary" type="submit"><span>Submit
                                                </span></a>
                                        </div>
                                        <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                        </div>
                                    </div>
                                    <!-- End Submit button -->

                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once("includes/footer.php"); ?>