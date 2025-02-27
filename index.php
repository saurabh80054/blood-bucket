<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bucket</title>
</head>

<?php
include './style/style.php';
?>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <p>Blood Bucket</p>
            </div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#availability">Availability</a></li>
                <li><a href="#team">Our Team</a></li>
            </ul>
            <a href="sign_signup.php"><button id="main-login-Btn">SIGN UP</button></a>
        </div>
    </header>

    <section style="background-image: url(./assets/images/3.jpg); background-size: cover;" id="home" class="home-container">
    <div class="top-home">
        <p>Sign Up to register yourself and donate blood.</p>
    </div>
    
        <div class="home-box left-home">
            <h1>Welcome<br>
                to <br>
                BLOOD <br>
                BUCKET
            </h1>
        </div>

        <div class="home-box right-home">
            <form action="#" method="post">
                <div class="col-md-6 form-group">
                    <label for="message" class="col-form-label"><p>Select Your Location</p></label><br>
                    <select style="font-size: 1.3rem;" class="form-control" name="searchCity" id="state" placeholder="Select Your State">
                        <option selected>--Select State--</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
                <br>
                <label for="message" class="col-form-label"><p>Select Blood Group</p></label><br>

                <select name="bg-select" id="bg-select">
                    <option value="">Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select><br><br><br>

                <button id="search-btn"  type="submit" onclick="showResult()" name="submit">SEARCH</button>
            </form>
        </div>
    </section>
    <hr>

    <!-- Search Result Section Started -->
    <?php
    include 'dbcon.php';
    if (isset($_POST['submit'])) {
        $state = $_POST['searchCity'];
        $bloodgroup = $_POST['bg-select'];


        $sql = "select * from dashboard_form where state = '$state' and blood_group = '$bloodgroup' ";
        $query = mysqli_query($con, $sql);
        if ($query) {
            $num_rows = mysqli_num_rows($query);
            if ($num_rows) {
    ?>
                <section id="search-result">
                    <div class="head-container">
                        <h2>Search results</h2>
                        <p>Showing search results for location <span><?php echo $state; ?></span> and blood group <span><?php echo $bloodgroup; ?></span></p>
                        <h3>Individual Details</h3>
                    </div>
                    <div class="body-container">
                        <div class="table">
                            <table style="margin-left: 100px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Blood Group</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Health Info</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // output data of each row
                                    while ($info = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $info['name']; ?></td>
                                            <td><?php echo $info['mobile_no']; ?></td>
                                            <td><?php echo $info['email']; ?></td>
                                            <td><?php echo $info['blood_group']; ?></td>
                                            <td><?php echo $info['state']; ?></td>
                                            <td><?php echo $info['city']; ?></td>
                                            <td><?php echo $info['problem']; ?></td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                        <?php
                    } else {
                        ?>
                            <div class="notAvl"><?php echo "No individual available at your location"; ?></div>
                        <?php
                    }
                }
                
                $ssql = " select * from org_form where state = '$state' ";
                $squery = mysqli_query($con, $ssql);
                if ($squery) {
                    $num_rows = mysqli_num_rows($squery);
                    if ($num_rows) {
                        ?>

                            <div class="head-container">
                                <h3>Organizations</h3>
                            </div>
                            <div class="body-container">
                                <div class="table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Org. Name</th>
                                                <th>Tel No.</th>
                                                <th>Email</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Information</th>
                                            </tr>
                                        </thead>


                                        <?php
                                        // output data of each row
                                        while ($sinfo = mysqli_fetch_array($squery)) {
                                        ?>

                                            <tbody>
                                                <tr>
                                                    <td><?php echo $sinfo['org_name']; ?>
                                                    <td><?php echo $sinfo['tel_no']; ?>
                                                    <td><?php echo $sinfo['email']; ?>
                                                    <td><?php echo $sinfo['state']; ?>
                                                    <td><?php echo $sinfo['city']; ?>
                                                    <td><?php echo $sinfo['info']; ?>



                                                </tr>
                                </div>
                            </div>
                        <?php
                                        }
                        ?>
                        </tbody>
                        </table>
                        </div>
                    </div>
                    

                </section>
                <hr>
<?php
                    } else {
                        ?>
                            <div class="notAvl"><?php echo "No organisation available at your location"; ?></div>
                        <?php
                    }
                }
            }
?>
<!-- Search Result Section Finished -->

<section style="background-image: url(./assets/images/2.jpg); background-size: cover;padding-bottom: 40px;" id="benefits">
    <div class="head-container">
        <h2>Benefits of Blood Donation</h2>
    </div>
    <div class="body-container">
        <div class="box">
            <div class="box-head">
                <h2>
                Blood can reduce harmful iron stores
                </h2>
            </div>
            One in every two hundred people in the U.S. is affected by a condition called hemochromatosis and most don’t even know it, according to Patenaude. Hemochromatosis is a disease that causes an iron overload and is labeled as the most common genetic disease among Caucasians by the Mayo Clinic.
        </div>
        <div class="box">
            <div class="box-head">
                <h2>
                Reduce your risk of developing cancer
                </h2>
            </div>
            In an average, completely healthy person, the link between giving blood and decreased cancer risk is slim. But research does support a reduced risk of cancer for blood donors with different maladies, one of which is hemochromatosis.
        </div>
        <div class="box">
        <div class="box-head">
                <h2>
                Reveal potential health problems
                </h2>
            </div>
            While it isn’t the same thing as a trip to the doctor, donating blood can be another way to keep an eye on your cardiovascular health. You’ll receive a mini-physical prior to the blood draw, in which someone will check your pulse, blood pressure, body temperature, hemoglobin and more.  This can sometimes shed light on issues you didn’t even know about.
        </div>
        <div class="box">
            <div class="box-head">
                <h2>
                    Helps Your Mental State
                </h2>
            </div>
            While there are several physical benefits to donating blood, the most powerful health benefit is arguably in the psychological realm. Donating blood means that someone (or multiple people) somewhere will be getting the help they desperately need.
        </div>
    </div>
</section>
<hr>

<section style="background-image: url(./assets/images/1.jpg); background-size: cover;" id="availability">
    <div class="head-container">
        <h2>
            Availability
        </h2>
    </div>
    <?php
    include 'blood_update.php';
    ?>
    <div class="body-container">
        <div class="box">
            <div class="bg-img"><img src="./assets/blood-group/a+.gif" alt=""></div>
            <div class="qty"> <span><?php echo $a1?></span><p> <b> Donor Available</b> </p> </div>
        </div>
        <div class="box">
            <div class="bg-img"><img src="./assets/blood-group/a-.gif" alt=""></div>
            <div class="qty"> <span><?php echo $a2?></span><p><b> Donor Available</b></p> </div>
        </div>
        <div class="box">
            <div class="bg-img"><img src="./assets/blood-group/o.gif" alt=""></div>
            <div class="qty"> <span><?php echo $o?></span><p><b> Donor Available</b></p> </div>
        </div>
        <div class="box">
            <div class="bg-img"><img src="./assets/blood-group/b-.gif" alt=""></div>
            <div class="qty"> <span><?php echo $b1?></span><p><b> Donor Available</b></p> </div>
        </div>
        <div class="box">
            <div class="bg-img"><img src="./assets/blood-group/o+.gif" alt=""></div>
            <div class="qty"> <span><?php echo $o1?></span><p><b>Donor Available</b> </p> </div>
        </div>
        <div class="box">
            <div class="bg-img"><img src="./assets/blood-group/o-.gif" alt=""></div>
            <div class="qty"> <span><?php echo $o2?></span><p><b> Donor Available</b></p> </div>
        </div>
        <div class="box">
            <div class="bg-img"><img src="./assets/blood-group/ab+.gif" alt=""></div>
            <div class="qty"> <span><?php echo $ab?></span><p><b>Donor Available</b> </p> </div>
        </div>
        <div class="box">
            <div class="bg-img"><img src="./assets/blood-group/ab-.gif" alt=""></div>
            <div class="qty"> <span><?php echo  $ab1?></span><p><b>Donor Available</b> </p> </div>
        </div>
    </div>
</section>
<hr>

<section style="background-image: url(./assets/images/bg.jpg); background-size: cover;" id="team">
    <div class="head-container">
        <h2>
            Our Team
        </h2>
    </div>
    <div class="body-container">
        <div class="box">
            <div class="pic"><img src="./assets/pics/nsy.png" alt=""></div>
            <div class="info">
                <p class="tname">Nishant Singh Yadav</p>
                <p class="role">BB Team Member</p>
            </div>
        </div>
        <div class="box">
            <div class="pic"><img src="./assets/pics/sks.png" alt=""></div>
            <div class="info">
                <p class="tname">Sugam Kumar Singh</p>
                <p class="role">BB Team Member</p>
            </div>
        </div>
    </div>
    <div class="body-container">
        <div class="box">
            <div class="pic"><img src="./assets/pics/sp.png" alt=""></div>
            <div class="info">
                <p class="tname">Saurabh Pal</p>
                <p class="role">BB Team Member</p>
            </div>
        </div>
        <div class="box">
            <div class="pic"><img src="./assets/pics/msa.png" alt=""></div>
            <div class="info">
                <p class="tname">Md. Saif Ahmad</p>
                <p class="role">BB Team Member</p>
            </div>
        </div>
    </div>
</section>

<footer >
    <div class="foot" style="margin-top: 0px;">
        <p>All Rights Reserved. &copy; 2021 Blood Bucket <a href="adminlogin.php">admin</a></p>
        
    </div>
</footer>

<script>
    var resultSection = document.getElementById("search-result");

    function showResult() {
        resultSection.style.display = "block";
        resultSection.scrollIntoView();
    }
</script>


</body>