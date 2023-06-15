<?php require_once("includes/header.php"); ?>

<section class="page-title-section main-title-section bg-grey">
    <div class="container title-container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-animation contact-heading" data-in-effect="fadeInUp">Payment</h1>
            </div>
            <div class="col-md-12">
                <ul class="wow fadeInUp breadcrump-list" data-wow-delay="400ms">
                    <li><a href="index.php">Home</a></li>
                    <li>Payment</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-area">
                    <!-- <h3 class="mb-1-6">Contact Details</h3> -->
                    <form class="quform" action="" method="post" enctype="multipart/form-data" onclick="">

                        <div class="quform-elements">

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control float-border" id="enter-your-email" placeholder="Enter Your Email Id">
                                        <label for="enter_your_email" class="float-space">Enter Your Email Id</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control float-border" id="enter-mobile-number" placeholder="Enter Your Mobile No">
                                        <label for="enter_mobile_number" class="float-space">Enter Your Mobile No.</label>
                                    </div>
                                </div>

                                <!-- Begin Text input element -->
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">


                                        <input type="number" class="form-control float-border" id="myNumber" placeholder="Quantity">
                                        <label for="first_name" class="float-space">Quantity</label>
                                    </div>
                                </div>


                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-3">
                                    <select class="form-select insurance-required" aria-label="Default select example">
                                        <option selected="">Select you Currency</option>
                                        <option value="Indian Rupeez">Indian Rupeez</option>
                                        <option value="US Dollor">US Dollor</option>
                                        <option value="Australian Dollor">Australian Dollor</option>
                                        <option value="Euro">Euro</option>
                                        <option value="Japanese Yen">Japanese Yen</option>
                                        <option value="Singapore Dollor">Singapore Dollor</option>
                                    </select>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->

                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control float-border" id="enter-your-invoice-number" placeholder="Enter Your Invoice Number
">
                                        <label for="enter_your_invoice_number" class="float-space">Enter Your Invoice Number
                                        </label>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <div class="col-md-12">
                                    <div class="d-flex py-4">
                                        <div class="form-check pe-3">
                                            <input class="form-check-input hide-one show" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Pay through Card
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input hide show-one" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Pay through Netbanking
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Show / Hide form start -->
                                <div class="col-md-6 form-start hide-show-block">
                                    <select class="form-select insurance-required mb-3" aria-label="Default select example">
                                        <option selected="">Select Your Card Type</option>
                                        <option value="Credit">Credit</option>
                                        <option value="Debit">Debit</option>

                                    </select>
                                </div>


                                <div class="col-md-6 hide-show-block">
                                    <select class="form-select insurance-required mb-3" aria-label="Default select example">
                                        <option selected="">Select Your Card</option>
                                        <option value="Indian Rupeez">Visa</option>
                                        <option value="US Dollor">Master</option>
                                        <option value="Australian Dollor">American Express</option>

                                    </select>
                                </div>

                                <div class="col-md-6 hide-show-block">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control float-border" id="enter-card-number" placeholder="Enter Card Number
">
                                        <label for="enter_card_number" class="float-space">Enter Card Number
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6 hide-show-block">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control float-border" id="enter-card--holder-name" placeholder="Enter Card holder Name
">
                                        <label for="enter_card_holder_name" class="float-space">Enter Card holder Name
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 hide-show-block">
                                    <span>Select Expiry Date</span>
                                </div>
                                <div class="col-md-3 hide-show-block">

                                    <select class="form-select insurance-required" aria-label="Default select example">
                                        <option selected="">Month</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>

                                    </select>
                                </div>

                                <div class="col-md-3 hide-show-block">
                                    <select class="form-select insurance-required" aria-label="Default select example">
                                        <option selected="">Year</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                        <option value="2037">2037</option>
                                        <option value="2038">2038</option>
                                        <option value="2039">2039</option>
                                        <option value="2040">2040</option>
                                        <option value="2041">2041</option>
                                        <option value="2042">2042</option>
                                        <option value="2043">2043</option>
                                        <option value="2044">2044</option>
                                        <option value="2045">2045</option>
                                        <option value="2046">2046</option>
                                        <option value="2047">2047</option>
                                        <option value="2048">2048</option>
                                        <option value="2049">2049</option>
                                        <option value="2050">2050</option>
                                        <option value="2051">2051</option>
                                        <option value="2052">2052</option>
                                        <option value="2053">2053</option>
                                        <option value="2054">2054</option>
                                        <option value="2055">2055</option>
                                        <option value="2056">2056</option>
                                        <option value="2057">2057</option>
                                        <option value="2058">2058</option>
                                        <option value="2059">2059</option>
                                        <option value="2060">2060</option>

                                    </select>
                                </div>

                                <div class="col-md-6 hide-show-block">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control float-border" id="enter-cvv-number" placeholder="Enter CVV Number
">
                                        <label for="enter_cvv_number" class="float-space">Enter CVV Number
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12 hide-show-block-one">
                                    <select class="form-select insurance-required" aria-label="Default select example">
                                        <option selected="">Select Bank for Netbanking</option>
                                        <option value="CID001">ICICI Bank</option>
                                        <option value="CID002">AXIS Retail</option>
                                        <option value="CID024">City Union Bank</option>
                                        <option value="CID037">The South India Bank</option>
                                        <option value="CID016">Andhra Bank</option>
                                        <option value="CID008">Indian Bank</option>
                                        <option value="CID009">Federal Bank</option>
                                        <option value="CID023">Central Bank of India</option>
                                        <option value="CID032">Karurvysya Bank</option>
                                        <option value="CID005">State Bank of India</option>
                                        <option value="CID045">Catholic Syrian Bank</option>
                                        <option value="CID004">YES Bank</option>
                                        <option value="CID021">Bank of Maharashtra</option>
                                        <option value="CID026">DCB Bank Personal</option>
                                        <option value="CID027">Indian Overseas Bank</option>
                                        <option value="CID031">Karnataka Bank</option>
                                        <option value="CID044">PNB Retail</option>
                                        <option value="CID070">UCO Bank</option>
                                        <option value="CID041">United Bank of India</option>
                                        <option value="CID006">Deutsche Bank</option>
                                        <option value="CID051">Canara Bank</option>
                                        <option value="CID025">Corporation Bank</option>
                                        <option value="CID053">Cosmos Bank</option>
                                        <option value="CID028">IndusInd Bank</option>
                                        <option value="CID036">PNB Corporate</option>
                                        <option value="CID013">State Bank of Bikaner and Jaipur</option>
                                        <option value="CID012">State Bank of Hyderabad</option>
                                        <option value="CID014">State Bank of Mysore</option>
                                        <option value="CID043">State Bank of Patiala</option>
                                        <option value="CID015">State Bank of Travancore</option>
                                        <option value="CID007">Union Bank</option>
                                        <option value="CID042">Vijaya Bank</option>
                                        <option value="CID033">Kotak Mahindra Bank</option>
                                        <option value="CID010">HDFC Bank</option>
                                    </select>




                                    
                                </div>

                                <!-- Begin Submit button -->
                                <div class="col-md-12 mt-4 hide-show-block">
                                    <div class="quform-submit-inner text-center">

                                        <a href="#" class="butn secondary" type="submit"><span>Pay Now
                                            </span></a>
                                    </div>
                                    <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                    </div>
                                </div>
                                <!-- End Submit button -->

                                <!-- Begin Submit button -->
                                <div class="col-md-12 mt-4 hide-show-block-one">
                                    <div class="quform-submit-inner text-center">

                                        <a href="#" class="butn secondary" type="submit"><span>Pay By Netbanking
                                            </span></a>
                                    </div>
                                    <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                    </div>
                                </div>
                                <!-- End Submit button -->


                                <!-- Show / Hide form end -->




                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once("includes/footer.php"); ?>