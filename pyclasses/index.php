<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Best python tutorial. Learn core python and advance python step by step with examples">
    <meta name="keywords" content="python,core python,advance python">
    <meta name="author" content="Mohammad Arif">
    <!-- bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- font awesome css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- custom css-->
    <link rel="stylesheet" href="css/custom.css">

    <style>
        /*.blurtext{
            opacity:0.4; 

        } */
        /*#bg-image{
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
          
        }*/
        
    </style>

    
    <title>Python Tutorial-PYCLASSES</title>
</head>
<!-- start of php for mail -->
<?php
    if(isset($_REQUEST['submit'])){
        if(($_REQUEST['name']=="") || ($_REQUEST['subject']=="") || ($_REQUEST['email']=="")
        || ($_REQUEST['message']=="")){
            $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All The Fields!!</div>';
        }else{
            $name=$_REQUEST['name'];
            $subject=$_REQUEST['subject'];
            $email=$_REQUEST['email'];
            $message=$_REQUEST['message'];
            $mailTo="barfi514@gmail.com";
            $headers="From:".$email;
            $txt="You have received an mail from ".$name.".\n\n".$message;
            mail($mailTo,$subject,$txt,$headers);
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Sent Successfully </div>';
        }
    }
?>
<!-- end of php for mail -->
<body >
    <!-- navigation bar start-->
   

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-5 fixed-top">
        <a href="index.php" class="navbar-brand font-weight-bold" >PYCLASSES</a>
        <p class="navbar-text text-center ml-3">Learn Python And Grow</p>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu" >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="mymenu">
        <ul class="navbar-nav pl-5 ">
            <li class="nav-item active"> <a href="index.php" class="nav-link font-weight-bold mr-5">
            <i class="fa fa-home mr-2"style="font-size:20px;"></i>Home</a></li>
            <li class="nav-item active"> <a href="corepython/printmethod.php" class="nav-link font-weight-bold mr-5">Core Python</a></li>
            <li class="nav-item active"> <a href="advancepython/oopconcept.php" class="nav-link font-weight-bold mr-5">Advanced Python</a></li>
            <li class="nav-item active"> <a href="#contact" class="nav-link font-weight-bold">Contact</a></li>

        </ul>

        </div>
    </nav>
    
    <!-- end of navigation bar -->

    <!-- start of backgroung image -->
        <div class="container " style="margin-top:72px;">
            <img src="images/pic2.jpg" class="img-thumbnail" style="width:1200px;height:250px;">
        </div>
    
    <!-- end of background image -->
    
    <div class="bg-light container shadow-lg alert alert-secondary"style="margin-top:50px;">
        <div class="row">
        <div class="col-sm-8 offset-2">
        <h3 style="text-decoration:underline;" class="text-secondary alert alert-primary shadow">Python Introduction</h3>
    <div class="alert alert-warning shadow">
        <h6 class="mt-4">Python is a very clear and powerful object-oriented programming language.</h6>
        <h6>Python is a programming language that combines features of C and Java.</h6>
        <h6>Python was developed by Guido Van Rossum in the year 1990.</h6>
    </div>
    
        <h4 style="text-decoration:underline;" class="text-secondary alert alert-primary shadow">Features of python</h4>
        <div class="alert alert-warning shadow">
        <ul>
            <li>Easy to Learn</li>
            <li>High Level Programming Language</li>
            <li>Interpreted Language</li>
            <li>Platform Independent</li>
            <li>Procedure and Object Oriented</li>
            <li>Huge Library</li>
        </ul>
    </div>
        <h4 style="text-decoration:underline;" class="text-secondary alert alert-primary shadow">Applications of python</h4>
    <div class="alert alert-warning shadow">
        <ul>
            <li>Web Applications</li>
            <li>Desktop GUI Applications</li>
            <li>Console Based Applications</li>
            <li>Games</li>
            <li>Mobile Applications</li>
            <li>Data Science</li>
            <li>Machine Learning</li>
            <li>Data Analysis</li>
        </ul>
    </div>
        </div>
        </div>
    </div>




    <div class="container mt-5">
        <div class="jumbotron">
            <div class="row">
                <div class="col-sm-3 text-center text-weight-bold">
                    <h4>Core Python</h4>
                    <a href="corepython/printmethod.php" class="btn btn-primary mt-2">Learn</a>

                    <h4 class="mt-5">Advanced Python</h4>
                    <a href="advancepython/oopconcept.php" class="btn btn-primary mt-2">Learn</a>
                </div>

                <div class="col-sm-6 text-center text-weight-bold offset-2 mt-5">
                    <h6>Learn Core Python And Advanced Python</br>
                     Step By Step With Examples</h6>
                </div>
            </div>
        </div>

    </div>

    <!-- contact form start -->
        <div class=" container alert " id="contact">
            <div class="col-md-8 ">
                <form action="" method="POST" >
                    <input type="text" class="form-control shadow-sm bg-light" name="name" placeholder="Name"><br>
                    <input type="text" class="form-control shadow-sm bg-light" name="subject" placeholder="Subject"><br>
                    <input type="text" class="form-control shadow-sm bg-light" name="email" placeholder="Email"><br>
                    <textarea class="form-control shadow-sm bg-light" name="message" placeholder="How can we help you ?" style="height:150px;"></textarea>
                    <input type="submit" class="btn btn-primary mt-2 shadow-lg" value="Send" name="submit">
                </form>
                <?php
                    if(isset($msg)){echo $msg;}
                ?>
            </div>
        </div>
    <!--contact form end -->
    <div class="text-secondary text-center mt-5">
        <p> *** Theory and examples are reviewed to avoid errors ,but we cannot warrant full correctness of the contents ***</p>
    </div>


<!-- start of footer -->
<footer class="container-fluid bg-dark  mt-5 text-white">
        <div class="container">
            <div class="row py-3">
            </div>
        </div>
    </footer>

<!-- end of footer -->
    </div>
</div>

    <!-- javascript linking-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>