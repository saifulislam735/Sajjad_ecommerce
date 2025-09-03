<?php
require "includes/common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>About Us | MobileMart BD</title>
        <link rel="shortcut icon" href="img/srtcticon.png" type="image/png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    
<body style="padding-top: 50px;">
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>

    <div class="container">
        <div class="row">

            <!-- WHO WE ARE -->
            <div class="col-sm-4">
                <div class="panel panel-default">
                   <div class="panel-body text-center">
                        <h3 style="color:orange">WHO WE ARE</h3>
                        <img src="./img/about-img.jpg" alt="about image" class="img-responsive img-thumbnail"><br><br>
                        <p><strong>MobileMart BD</strong> is one of the most trusted online destinations in Bangladesh for buying smartphones. 
                        We are committed to providing 100% authentic products with official warranty, competitive prices, and fast delivery. 
                        Our goal is to make smartphone shopping simple, reliable, and accessible for everyone.</p>
                   </div>
                </div>
            </div>

            <!-- OUR JOURNEY -->
            <div class="col-sm-4">
                <div class="panel panel-default">
                   <div class="panel-body">
                        <h3 style="color:orange">OUR JOURNEY</h3><br>
                        
                        <h4 style="color:blue">2018 – Beginning</h4>
                        <p>Started as a small online store with a vision to bring original smartphones at fair prices to Bangladeshi customers.</p>
                        <br>

                        <h4 style="color:blue">2021 – Expansion</h4>
                        <p>Partnered with leading brands like Samsung, Xiaomi, Realme, and Apple to offer a wide collection of the latest devices with official warranty.</p>
                        <br>

                        <h4 style="color:blue">2024 – Today</h4>
                        <p>Now serving thousands of happy customers across Bangladesh with 24/7 support, easy payment methods (bKash, Nagad, Card, COD), and trusted service.</p>
                   </div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="col-sm-4">
                <div class="panel panel-default">
                   <div class="panel-body">
                        <h3 style="color:orange">CAREER OPPORTUNITIES</h3><br>
                        <p>At <strong>MobileMart BD</strong>, we believe in building a strong team that grows with us. 
                        We regularly open opportunities for passionate individuals in the tech and eCommerce industry.</p>
                        <b>Available Roles:</b>
                        <ul style="margin-top:10px;">
                            <li>Customer Support Executive [Full-Time]</li>
                            <li>Digital Marketing Specialist [Full-Time / Internship]</li>
                            <li>Backend Operations Manager [Full-Time]</li>
                            <li>Junior Web Developer [Internship / Full-Time]</li>
                        </ul>
                        <p>Interested candidates can email their CV to <strong>careers@mobilemartbd.com</strong>.</p>
                   </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
