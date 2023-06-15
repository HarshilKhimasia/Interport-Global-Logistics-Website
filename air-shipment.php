<?php require_once("includes/header.php"); ?>

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">

<section class="page-title-section main-title-section bg-grey">
    <div class="container title-container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-animation contact-heading" data-in-effect="fadeInUp">Air Shipment</h1>
            </div>
            <div class="col-md-12">
                <ul class="wow fadeInUp breadcrump-list" data-wow-delay="400ms">
                    <li><a href="index.php">Home</a></li>
                    <li>Air Shipment</li>
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

                                    <div class="col-md-12">
                                        <h2 class="h1 mb-3 form-heading">Contact Details</h2>
                                    </div>

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="quote_name" placeholder="Company Name / Organisation(if applicable)">
                                            <label for="organisation_name" class="float-space">Company Name / Organisation</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="contact-name" placeholder="Contact Name">
                                            <label for="contact_name" class="float-space">Contact Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="email-id" placeholder="Email Id">
                                            <label for="email_id" class="float-space">Email Id</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="contact-details" placeholder="Contact Details">
                                            <label for="contact_details" class="float-space">Contact Details</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->





                                    

                                    <div class="col-md-12">
                                        <h2 class="h1 mb-3 mt-4 form-heading">Shipment Details</h2>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control float-border" placeholder="Shipper: Origin / Location of Goods" id="shipperOrgin" style="height: 100px"></textarea>
                                            <label for="shipperOrgin" class="float-space">Shipper: Origin / Location of Goods</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control float-border" placeholder="Consignee location (and address if known)" id="consigneeLocation" style="height: 100px"></textarea>
                                            <label for="consigneeLocation" class="float-space">Consignee location (and address if known)</label>
                                        </div>
                                    </div>

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="zip-code" placeholder="Post / Zip Code (if known)">
                                            <label for="zip_code" class="float-space">Post / Zip Code (if known)</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="shipper-reference" placeholder="Shipper Reference: (optional)">
                                            <label for="shipper_reference" class="float-space">Shipper Reference: (optional)</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="flight-number" placeholder="Shipper Reference: (optional)">
                                            <label for="flight_number" class="float-space">Flight Number: (if known)</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <!-- <div class="mb-3">

                                            <input type="date" class="form-control insurance-required" id="flight-date" placeholder="Flight Date: (if known)">

                                        </div> -->
                                        <div class="form-group">
                                            <div class="date input-group">
                                                <input type="text" placeholder="Flight Date"
                                                    class="form-control datepicker" id="quote_moving_date">
                                                <div class="input-group-append cal-icon">
                                                    <span class="input-group-text dp"><i
                                                            class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="airport-departure" placeholder="Airport of Departure: (optional)">
                                            <label for="airport_departure" class="float-space">Airport of Departure: (optional)</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="destination-airport" placeholder="Destination Airport: (optional)">
                                            <label for="destination_airport" class="float-space">Destination Airport: (optional)</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <select class="form-select insurance-required" aria-label="Default select example">
                                            <option selected>Insurance required</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            
                                        </select>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="declared-value" placeholder="If Yes, Declared value for Customs in AUD:">
                                            <label for="declared_value" class="float-space">If Yes, Declared value for Customs in AUD:</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    

                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control float-border" placeholder="Marks & Numbers(anything that identifies the shipped goods) - (optional)" id="marks-numbers" style="height: 100px"></textarea>
                                            <label for="marksNumbers" class="float-space">Marks & Numbers(anything that identifies the shipped goods) - (optional)</label>
                                        </div>
                                    </div>

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="description-goods" placeholder="Description of goods">
                                            <label for="description_goods" class="float-space">Description of goods</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="ahecc-number" placeholder="AHECC No: (optional)">
                                            <label for="ahecc_number" class="float-space">AHECC No: (optional)</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                     <!-- Begin Text input element -->
                                     <div class="col-md-4">
                                        <div class="mb-3">

                                            <input type="number" class="form-control insurance-required" id="flight-date" placeholder="Number of Bills required: (optional)">

                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <select class="form-select insurance-required" aria-label="Default select example">
                                            <option selected>Freight Charges</option>
                                            <option value="Prepaid">Prepaid</option>
                                            <option value="Collect">Collect</option>
                                            
                                        </select>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <select class="form-select insurance-required" aria-label="Default select example">
                                            <option selected>Delivery Terms</option>
                                            <option value="EXW - Ex Works">EXW - Ex Works</option>
                                            <option value="FOB - Free On Board">FOB - Free On Board</option>
                                            <option value="CFR - Cost & Freight">CFR - Cost & Freight</option>
                                            <option value="CIF - Cost, Insurance & Freight">CIF - Cost, Insurance & Freight</option>
                                            <option value="DDU - Delivery, duty unpaid">DDU - Delivery, duty unpaid</option>
                                            <option value="DDD - Delivered Duty Paid">DDD - Delivered Duty Paid</option>
                                            <option value="OTH - Other (Please specify above)">OTH - Other (Please specify above)</option>
                                            
                                        </select>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="gross-weight" placeholder="Gross Weight">
                                            <label for="gross_weight" class="float-space">Gross Weight</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="type-packaging" placeholder="Type of packaging">
                                            <label for="type_packaging" class="float-space">Type of packaging</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                     <!-- Begin Text input element -->
                                     <div class="col-md-4">
                                        <select class="form-select insurance-required" aria-label="Default select example">
                                            <option selected>Including Service: (optional)</option>
                                            <option value="First available">First available</option>
                                            <option value="Express">Express</option>
                                            <option value="Time Definite">Time Definite</option>
                                            <option value="Deferred">Deferred</option>
                                            <option value="Transshipment">Transshipment</option>
                                            
                                            
                                        </select>
                                    </div>
                                    <!-- End Text input element -->

                                    <div class="col-md-12">
                                        <h2 class="h1 mb-3 mt-4 form-heading">Dimensions</h2>
                                    </div>

                                    <!-- Begin Text input element -->
                                    <div class="col-md-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="pieces" placeholder="Pieces">
                                            <label for="pieces" class="float-space">Pieces</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="l-x" placeholder="L x">
                                            <label for="l_x" class="float-space">L x</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="w-x" placeholder="W x">
                                            <label for="w_x" class="float-space">W x</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control float-border" id="h-x" placeholder="H x">
                                            <label for="h_x" class="float-space">H x</label>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <div class="col-md-12">
                                        <h2 class="h1 mb-3 mt-4 form-heading">Others</h2>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control float-border" placeholder="Special instructions: multiple pcs. & dimensions:(optional)" id="special-instructions" style="height: 100px"></textarea>
                                            <label for="specialInstructions" class="float-space">Special instructions: multiple pcs. & dimensions:(optional)</label>
                                        </div>
                                    </div>

                                    <!-- Begin Text input element -->
                                    <div class="col-md-12">
                                        <select class="form-select insurance-required" aria-label="Default select example">
                                            <option selected>Does the shipment contain dangerous goods?: (IATA DGR)</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            
                                            
                                            
                                        </select>
                                    </div>
                                    <!-- End Text input element -->

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