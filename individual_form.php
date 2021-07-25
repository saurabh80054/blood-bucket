
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual Information</title>
    <link rel="stylesheet" href="./style/style.php">
    <link rel="stylesheet" href="./style/inforform.php">
</head>
<?php

    
include 'dbcon.php';

if(isset($_POST['submit'])){
  

  
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $bloodgroup = $_POST['bloodgroup'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $msg = $_POST['message'];
    


    
    $insertquery = "insert into dashboard_form(name, mobile_no, email, blood_group, state, city, problem) VALUES('$fullname', '$phone', '$email', '$bloodgroup', '$state','$city', '$msg')";
     $var=mysqli_query($con, $insertquery);
    if($var){
        ?>
        <script>
        alert("Details Submitted Successfully.");
        </script>
        <?php
    
    header('location:index.php');
  }
}
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
            <a href="index.php"><button id="main-login-Btn">SIGN OUT</button></a>
        </div>
    </header>

    <section id="orgForm">
        <div class="head-container">
            <h2>INDIVIDUAL INFORMATION FORM</h2>
        </div>
        <div class="body-container">
            <div class="box">
                <div class="main-form">
                    <form action="#" method="post">
                        <div class="orgField">
                            <label for="orgName">
                                <span>Your Full Name:*</span>
                                <input type="text" name="fullname" id="orgName" required>
                            </label>
                        </div>
                        <div class="orgField">
                            <label for="orgPhone">
                                <span>Your Mobile Number:*</span>
                                <input type="tel" name="phone" id="orgPhone" required>
                            </label>
                        </div>
                        <div class="orgField">
                            <label for="orgEmail">
                                <span>Your Email Address:*</span>
                                <input type="email" name="email" id="orgEmail" required>
                            </label>
                        </div>
                        <div class="orgField">
                            <label for="orgEmail">
                                
                            <span>Blood Group:*</span>                
                            <select class="custom-select" id="budget" name="bloodgroup">
  <option selected>Choose...</option>
  <option value="A+"> A+</option>
  <option value="O+">O+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="A-">A-</option>
  <option value="O-">O-</option>
  <option value="B-">B-</option>
  <option value="AB-">AB-</option>
</select>
                            </label>
                        </div>
                        <div class="orgField">
                            <label for="message" class="col-form-label">State:* </label>
                            <select class="form-control" name="state" id="state" placeholder="Select Your State"
                                single="">
                                <option selected>--Select Your State--</option>
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
                        <div class="orgField">
                            <label for="orgCity">
                                <span>City:*</span>
                                <input type="text" name="city" id="orgCity" required>
                            </label>
                        </div>
                        <div class="orgField">
                            <label for="orgDesc">
                                <span>Any Underlying Health Condition:*</span>
                                <textarea name="message" id="orgDesc" placeholder="Health issues"
                                    required></textarea>
                            </label>
                        </div>
                        <div>
                            <input id="search-btn" name="submit" type="submit" value="Submit Details">
                        </div>
                    </form>
                </div>
            </div>
            <div class="box" id="bg-image">
                <img src="./assets/bg.png" alt="">
            </div>
        </div>
    </section>

    <footer>
        <div class="foot">
            <p>All Rights Reserved. &copy; 2021 Blood Bucket</p>
        </div>
    </footer>
</body>

</html>