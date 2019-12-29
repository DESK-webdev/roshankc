<?php
    echo '<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="style/home.css" type="text/css">
        <link rel="stylesheet" href="style/login.css" type="text/css">
        <link rel="stylesheet" href="style/register.css" type="text/css">
        <link rel="stylesheet" href="style/data_view.css" type="text/css">
    </head> 
    <body>   
    <nav class="navbar navbar-expand-sm bg-steel navbar-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo1.png" alt="logo"></a>
    
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponse" type="button">
                    <span class="navbar-toggler-icon">
                </span></button>
                
            <div class="collapse navbar-collapse" id="navbarResponse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href=".">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log in</a>
                    </li>
                    
                </ul>
            </div>
            
        </div>
    </nav>';
?>