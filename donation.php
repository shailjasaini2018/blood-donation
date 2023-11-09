<?php
include('header.php');
?>
    <section class="services-section hero23 ">
        <div class="container hello hello1  text-center">
            <div class="row">
                <div class="col-12">
                    <h1>Donation A Gift Of Hope</h1>
                    <p>We live in a war-torn world, where millions of people have their lives destroyed by conflict.
                        <br>Amid the chaos and despair of conflict, the International Committee of the Red Cross is a
                        <br>unique sign of hope to those whose lives
                        have been shattered by war. Our neutrality gives our <br> staff access to conflict zones where
                        they can save lives and help rebuild them. <br>But as the pressure on our resources continues to
                        grow, we need more funds to help the
                        <br> increasing number of men, women and children around the world who find themselves <br>
                        caught in the crossfire of conflict.
                    </p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <section class="form py-5">
        <div class="container" style="background: #fff;
        padding: 40px;     max-width: 96%;">
            <h1 class="text-center heading1">Blood Donation Form</h1>
            <p class="text-center">We do not share your personal details with Third party</p>
            <div class="row">
                <div class="col-lg-8 m-auto col-sm-12">
                    <form action="connect.php" method="POST" class="row g-3">
                        <div class="col-lg-12">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="fullName">
                        </div>
                        <div class="col-lg-12">
                            <label for="occupation" class="form-label">Occupation</label>
                            <input type="text" class="form-control" name="occupation" id="occupation" style="height: 49px;
                            border-radius: 0;">
                        </div>
                        <div class="col-lg-12 ">
                            <h6 class="heading6">Gender</h6>
                            <div class="d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="g_male" id="g_male" value="option1">
                                    <label class="form-check-label" for="g_male">Male</label>
                                </div>
                                <div class="form-check ps-5">
                                    <input class="form-check-input" type="radio" name="g_female" id="g_female" value="option1">
                                    <label class="form-check-label" for="g_female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="phoneNumber" id="phoneNumber" style="height: 49px;
                            border-radius: 0;">
                        </div>
                        <div class="col-lg-12">
                            <label for="emailAddress" class="form-label">Email Address</label>
                            <input type="Email" class="form-control" name="emailAddress" id="emailAddress" style="height: 49px;
                            border-radius: 0;" placeholder="Enter Your Email Id">
                        </div>
                        <div class="col-lg-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="blood_grooup_type" class="form-label">Blood Group *</label>
                                    <select id="blood_grooup_type" class="form-select" name="blood_grooup_type" style="height: 49px;
                            border-radius: 0;">
                                        <option selected>None</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>A</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>B</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                        <option>O</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="inputState" class="form-label">Have you Donated ?</label>
                                    <div class="d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="don_yes" id="don_yes" value="option1">
                                            <label class="form-check-label" for="don_yes">Yes</label>
                                        </div>
                                        <div class="form-check ps-5">
                                            <input class="form-check-input" type="radio" name="don_no" id="don_no" value="option1">
                                            <label class="form-check-label" for="don_no">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="last_dontation" class="form-label">What was the last time you donated blood?</label>
                                    <input type="date" class="form-control" id="last_dontation" name="last_dontation" style="height: 49px;
                            border-radius: 0;">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 py-3">
                            <h6 class="heading6">In the last six months have you had any of the following?</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="Tattooing" name="Tattooing">
                                <label class="form-check-label" for="Tattooing"> Tattooing </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="ear_piercing" name="ear_piercing">
                                <label class="form-check-label" for="ear_piercing"> Ear piercing </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="dental_extraction" name="dental_extraction">
                                <label class="form-check-label" for="dental_extraction"> Dental extraction </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="last_six_no" name="last_six_no">
                                <label class="form-check-label" for="last_six_no"> No </label>
                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <h6 class="heading6">Are you taking or have you taken any of these in the past 72 hours?
                            </h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault"> Antibiotics </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked"> Steroids </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked"> Aspirin </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked"> Vaccinations </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked"> Alcohol </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked"> None </label>
                            </div>
                        </div>
                        <div class="col-lg-12 py-3">
                            <h6 class="heading6">Is there any history of surgery or blood transfusion in the past six
                                months?</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault"> Major </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked"> Minor </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked"> None </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" onclick="myFunction()">SUBMIT QUERY</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>testblood98 &copy; Copyright .All Rights reserved</p>
                    <span>Designed by BDS</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./css/script.js"></script>
    <script>
        function myFunction() {
            let text = "Do You Want to submit \n your information.";
            if (confirm(text) == true) {
                alert('You Pressed Ok');
            } else {
                alert('You Pressed Cancel');
            }
        }
    </script>
</body>

</html>