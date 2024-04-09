<?php 
    session_start();

    if(!isset($_SESSION['stafflogin'])){
        header("Location: stafflogin.php");
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION);
        header("Location: stafflogin.php");
    }
?>
    
    


<html>
<head>
    <title>Hospital Management System</title>
    <link href="style1.css" rel="stylesheet" type="text/css" media="all" />
    

    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <!-- Remove the links related to the slider -->
</head>
<body>
    <!--start-wrap-->
    
    <!--start-header-->
    <div class="header">
        <div class="wrap">
            <!--start-logo-->
            <div class="logo">
                <a href="http://localhost/ehospital/" style="font-size: 30px;">Hospital Management System</a>
            </div>
            <!--end-logo-->
            <!--start-top-nav-->
            <div class="top-nav">
                <ul>
                    <li class="active"><a href="http://localhost/ehospital/">Home</a></li>
                </ul>                   
            </div>
            <div class="clear"> </div>
            <!--end-top-nav-->
        </div>
        <!--end-header-->
    </div>
    <div class="clear"> </div><br>
    <br>
    <!-- Replace the slider with a single image -->
    <img src="images/slider3.jpg" alt="" style="width: 100%; height:80%;">
    <div class="clear"> </div>
    <div class="content-grids">
        <div class="wrap">
            <div class="section group">
                <div class="listview_1_of_3 images_1_of_3">
                    <div class="listimg listimg_1_of_2">
                          
                    </div>
                    <div class="text list_1_of_2">
                        <h3> Total Patients</h3>
                        <p>Register & Manage Appointment</p>
                        <div class="button"><span><a href="http://localhost/ehospital/stafflogin/managepatients.php">Click Here</a></span></div>
                    </div>
                </div>   
                


                

                    
                    


                <div class="listview_1_of_3 images_1_of_3">
                    <div class="listimg listimg_1_of_2">
                          
                    </div>
                    <div class="text list_1_of_2">
                        <h3>Add Doctors</h3>
                        <div class="button"><span><a href="http://localhost/ehospital/stafflogin/adddoctor.php">Click Here</a></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
