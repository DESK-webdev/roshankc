<?php
require "phps/include.php";
show("ht_element/header");
echo '<div class="carousel slide" data-ride="carousel" id="slide">
    <ul class="carousel-indicators">
        <li data-slide-to="0" data-target="#slide" class="active"></li>
        <li data-slide-to="1" data-target="#slide"></li>
        <li data-slide-to="2" data-target="#slide"></li>
    </ul>';
image("https://www.seriouseats.com/recipes/images/2015/07/20150702-sous-vide-hamburger-anova-primary-1500x1125.jpg",1);
image("https://www.foodiecrush.com/wp-content/uploads/2012/05/FoodieCrush-Roast-Spring-Chicken-015-1.jpg",0);
image("https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/cheesy-pepperoni-pizza-royalty-free-image-1570815711.jpg",0); 
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
plate(14,"view it","foods");
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
<div class="container">
        <div class="row text-center"> 
    ';
plate(6,"see profile","profiles");
echo '  
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
    </div>';
show("ht_element/connect");
echo '    
</div>
</div> ';
show("ht_element/footer");
?>
