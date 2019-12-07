<?php
require "phps/include.php";
show("ht_element/header");
echo '<div class="carousel slide" data-ride="carousel" id="slide">
    <ul class="carousel-indicators">
        <li data-slide-to="0" data-target="#slide" class="active"></li>
        <li data-slide-to="1" data-target="#slide"></li>
        <li data-slide-to="2" data-target="#slide"></li>
    </ul>';
image("img/burger.jpg",1);
image("img/roast.jpg",0);
image("img/pizza.webp",0); 
echo '</div>';
echo '<!--jumbotron-->
<div class="container-fluid">
        <div class="row jumbotron">
            <div class="col-sm-12 col-md-9 col-lg-10">
            <p class="lead"> We will provide with delicious food in no time.Take the phone and call in our given 
                no. right now! or check out the link for more information..
            </p>
            </div>
            <div class="col-md-3 col-lg-2 pd5 text-center">
                <button type="button" class="btn btn-outline-secondary btn-lg ">MORE INFO</button>
            </div>
        </div>
</div>

<!--Welcome-->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
        <h2 class="display-4">WELCOME to our Site!</h2>
        <hr class="my-4">
        </div>
        
        <div class="col-12">
        
        <p class="lead">Here, we offer you a lot of variety of food.You can enjoy it in our resturant as well as
            order it in your home. We promise you that we will make your day with delicious foods and
            our Services. Thank you!
        </p>
        </div>
    </div>
    <hr class="my-4">
    <hr class="">
</div>
<!--Our foods-->
<div class="container">
        <div class="row text-center">    
        ';
plate(14);
echo '  </div>
</div>

<!--Meet the team Section-->
<div class="container-fluid padding mt-5 mb-0">
        <div class="row text-center welcome">
            <div class="col-12">
                <h1 class="display-4">Meet the team!</h1>
            </div>
            <hr class="light mt-0">
        </div>
        
    </div>
    
    
<!--Cards-->
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="container">
            <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/prof1.jpeg" alt="Samlal pic" >
                    <div class="card-body">
                        <h3 class="card-title">Samlal</h3>
                        <p class="card-text">Samlal is a computer engineer,
                             also called a software engineer. He responsible for developing, 
                            testing and evaluating the software that make our computers work.
                             He may help in the development of new computer games and business applications, 
                             or even in the design of entirely new operating systems.</p>
                        <a href="#" class="btn btn-outline-secondary">See Profile</a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/prof3.jpeg" alt=" pic" >
                    <div class="card-body">
                        <h3 class="card-title">Sarita</h3>
                        <p class="card-text">Sarita is a computer engineer,
                             also called a software engineer. He responsible for developing, 
                            testing and evaluating the software that make our computers work.
                             He may help in the development of new computer games and business applications, 
                             or even in the design of entirely new operating systems.</p>
                        <a href="#" class="btn btn-outline-secondary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/prof2.jpeg" alt=" pic" >
                    <div class="card-body">
                        <h3 class="card-title">Anjan</h3>
                        <p class="card-text">Anjan is a computer engineer,
                             also called a software engineer. He responsible for developing, 
                            testing and evaluating the software that make our computers work.
                             He may help in the development of new computer games and business applications, 
                             or even in the design of entirely new operating systems.</p>
                        <a href="#" class="btn btn-outline-secondary">See Profile</a>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
    <hr>

<!--Other pantry services-->
<div class="container-fluid">
    <div class="row text-center padding">
        <div class="col-12">
            <hr class="">
            <a class="btn btn-warning btn-lg" >Check out our other Pantry Services.</a>
            <hr class="">
        </div>
    </div>
</div>

<!--connect-->
<div class="container-fluid padding">
<div class="row text-center padding social">
    <div class="col-12">
    <h1>Connect</h1>
    </div>
    <div class="col-12">
        <a href="#">
        <i class="fab fa-facebook"></i>
        </a>
        <a href="#">
        <i class="fab fa-twitter"></i>
        </a>
        <a href="#">
        <i class="fab fa-youtube"></i>
        </a>
        <a href="#">
        <i class="fab fa-instagram"></i>
        </a>
        <a href="#">
        <i class="fab fa-google-plus-g"></i>
        </a>
    </div>
</div>
</div> ';
show("ht_element/footer");
?>
