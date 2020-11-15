<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo DESCRIPTION; ?>">
    <meta name="keywords" content="<?php echo KEYWORD; ?>">

    <!-- bootstrap css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- font awesome css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- custom css-->
    <link rel="stylesheet" href="../css/custom.css">
    <style>
        .hvr:hover{
            background-color:grey;
        }
        .activesidebar{
            background-color:#9addf4;
        }

        
    
        
    </style>
    
    <title><?php echo TITLE; ?></title>
</head>
<body class="alert alert-light shadow-lg">
    <!-- navigation bar start-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-5 fixed-top">
        <a href="../index.php" class="navbar-brand font-weight-bold">PYCLASSES</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu" >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="mymenu">
        <ul class="navbar-nav pl-5  ">
            <li class="nav-item active"> <a href="../index.php" class="nav-link font-weight-bold mr-5">
            <i class="fa fa-home mr-2"style="font-size:20px;"></i>Home</a></li>
            <li class="nav-item active"> <a href="../corepython/printmethod.php" class="nav-link font-weight-bold mr-5">Core Python</a></li>
            <li class="nav-item active"> <a href="../advancepython/oopconcept.php" class="nav-link font-weight-bold mr-5">Advanced Python</a></li>
            <!--<li class="nav-item active"> <a href="#" class="nav-link font-weight-bold">Contact</a></li>-->

        </ul>

        </div>
    </nav>
    
    <!-- end of navigation bar -->
    