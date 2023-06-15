<?php require_once("includes/header.php"); ?>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">

<!-- PAGETITLE
        ================================================== -->
<section class="page-title-section bg-grey">
    <div class="container title-container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-animation" data-in-effect="fadeInUp">Get a Quote</h1>
            </div>
            <div class="col-md-12">
                <ul class="wow fadeInUp" data-wow-delay="400ms">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT-FORM
        ================================================== -->
<section class="contact-form pt-5">
    <div class="container">
        <div class="contact-wrapper-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-area">

                        <form class="quform" action="" method="post" enctype="multipart/form-data" onclick="">

                            <div class="quform-elements">

                                <div class="row">
                                    <h3 class="mb-0">Contact Details</h3>
                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="quote_name" placeholder="Name">
                                            <label for="quote_name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="quote_work_phone"
                                                placeholder="Work Phone">
                                            <label for="quote_work_phone">Work Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="quote_mobile_phone"
                                                placeholder="Mobile Phone">
                                            <label for="quote_mobile_phone">Mobile Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="quote_home_phone"
                                                placeholder="Home Phone">
                                            <label for="quote_home_phone">Home Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="quote_email"
                                                placeholder="E-mail">
                                            <label for="quote_email">E-mail</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->
                                    <h3 class="mb-3 mt-5">Moving Details</h3>
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="relocation_associated">
                                            <label class="form-check-label" for="relocation_associated">
                                                My relocation is related to my employer
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="relocation_not_associated">
                                            <label class="form-check-label" for="relocation_not_associated">
                                                My relocation is not associated with my employer
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="quote_employer_name"
                                                placeholder="Please provide employer name">
                                            <label for="quote_employer_name">Please provide employer name</label>
                                        </div>
                                    </div>
                                    <h3 class="mb-0 mt-5">Moving From</h3>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="quote_city" placeholder="City">
                                            <label for="quote_city">City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-1">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>State</option>
                                                <option value="1">North America</option>
                                                <option value="2">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-1">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Country</option>
                                                <option value="1">India</option>
                                                <option value="2">United Kingdom</option>
                                                <option value="2">France</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h3 class="mb-0 mt-5">Moving To</h3>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="quote_city1" placeholder="City">
                                            <label for="quote_city1">City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-1">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>State</option>
                                                <option value="1">North America</option>
                                                <option value="2">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-1">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Country</option>
                                                <option value="1">India</option>
                                                <option value="2">United Kingdom</option>
                                                <option value="2">France</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="date input-group">
                                                <input type="text" placeholder="Approximate Moving Date"
                                                    class="form-control datepicker" id="quote_moving_date">
                                                <div class="input-group-append cal-icon">
                                                    <span class="input-group-text dp"><i
                                                            class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="date input-group">
                                                <input type="text" placeholder="Preferred Delivery Date"
                                                    class="form-control datepicker" id="quote_moving_date">
                                                <div class="input-group-append cal-icon">
                                                    <span class="input-group-text dp"><i
                                                            class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mb-0 mt-5">Comments</h3>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter your comments"
                                                id="quote_comments" style="height: 100px"></textarea>
                                            <label for="quote_comments">Enter your comments</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-center">

                                            <a href="#" class="butn secondary mt-5"><span>Submit</span></a>
                                        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function () {
        $('.datepicker').datepicker({
            language: "es",
            autoclose: true,
            format: "dd/mm/yyyy"
        });
    });
</script>