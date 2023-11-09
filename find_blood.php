<?php
include('header.php');
?>
    <section class="hero">
        <div class="container hello8">

            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="backsection" style="
                        background: #fff;
                        padding: 29px 35px;">
                        <h2 class="text-center popp">Find a Blood</h2>
                        <form action="" method="POST" class="row g-3">
                            <div class="col-md-6 m-auto">
                                <label for="inputState" class="form-label">Blood Group *</label>
                                <select id="inputState" name="find_Blood" class="form-select" style="height: 49px;
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

                                </select>
                            </div>
                            <!-- <div class="col-md-6 col-12">
                                <label for="inputState" class="form-label">State *</label>
                                <select id="inputState" class="form-select" style="height: 49px;
                                border-radius: 0;">
                                <option selected>None</option>
                                <option>HARYANA</option>
                                <option>PUNJAB</option>
                                <option>DELHI</option>
                                <option>BANGLORE</option>
                                <option>HIMACHAL</option>
                                <option>NEPAL</option>

                              </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="inputState" class="form-label">Dist.*</label>
                                <select id="inputState" class="form-select" style="height: 49px;
                                border-radius: 0;">
                                <option selected>None</option>
                                <option>PANCHKULA</option>
                                <option>JALANDAR </option>
                                <option>SHAHDARA</option>
                                <option>KARNATAKA</option>
                                <option>SOLAN</option>
                                <option>SIRMAUR</option>
                                <option>KOSHI</option>
                              </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="inputState" class="form-label">Pin code *</label>
                                <select id="inputState" class="form-select" style="height: 49px;
                                border-radius: 0;">
                               <option selected>None</option>
                               <option>134102</option>
                               <option>144103 </option>
                               <option>110092</option>
                               <option>560002</option>
                               <option>173211</option>
                               <option>173021</option>
                               <option>281403</option>
                              </select>
                            </div> -->
                            <div class="col-12 mt-5 text-center">
                                <button type="submit" name="search_blood" class="btn btn-primary">Search Blood</button>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Occupation</th>
                                        <th>Phone Number</th>
                                        <th>Email Address</th>
                                        <th>Address</th>
                                        <th>Blood Group</th>
                                        <th>Last Donation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conn = mysqli_connect('localhost', 'root', '', 'blood_donation');
                                    if (isset($_POST['search_blood'])) {
                                        $blood_grooup_type = $_POST['find_Blood'];
                                        $query = "SELECT * FROM blood_don_form WHERE blood_grooup_type='$blood_grooup_type'";
                                        $query_run = mysqli_query($conn, $query);
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_array($query_run)) {
                                    ?>
                                                <tr>
                                                    <td><?php echo $row['fullName'] ?></td>
                                                    <td><?php echo $row['occupation'] ?></td>
                                                    <td><?php echo $row['phoneNumber'] ?></td>
                                                    <td><?php echo $row['emailAddress'] ?></td>
                                                    <td><?php echo $row['address'] ?></td>
                                                    <td><?php echo $row['blood_grooup_type'] ?></td>
                                                    <td><?php echo $row['last_dontation'] ?></td>
                                                </tr>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="7">No record found!</td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 d-flex align-items-center justify-content-center">
                    <img src="./assest/image-removebg-preview (2).png" class="img-fluid animated" style="max-width: 130%;">
                </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <script>
        AOS.init({
            duration: 1000
        });
    </script>


</body>

</html>