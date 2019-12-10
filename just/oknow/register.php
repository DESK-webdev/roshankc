<?php
    require "phps/include.php";
    include "phps/header.php";
    echo '
     <div class="register_container">
    <h1>Our Food Services</h1>
        <div class="register_form">
            <form action="data_store.php" method="GET" class="form_inside need-validation">   
                    <div class="form-group">
                        <label for="name" class="name">Names;</label>
                        <input type="text" class="form-control name_input" id="name" name="c_name" placeholder="Company Name" required>
                        <input type="text" class="form-control name_input" id="name" name="m_name" placeholder="Manager Name" required>
                        <div class="invalid-feedback">
                    </div>
                    <div class="form-group">
                        <label for="loc" class="name">Location;</label>
                        <input type="text" class="form-control location_input" id="loc" name="country" placeholder="Country" required>
                        <input type="text" class="form-control location_input" id="loc" name="city" placeholder="City" required>
                        <input type="text" class="form-control location_input" id="loc" name="street" placeholder="Street" required>
                        <div class="invalid-feedback">
                    </div>
                    <div class="form-group form-inline">
                        <label for="number" class="num">Number:</label>
                        <input class="form-control" type="number" id="number" name="phone" placeholder="Ph/Mo Number" required>
                        <div class="invalid-feedack">
                    </div>
                    <div class="form-group"> 
                        <label for="comment"><strong class="review">Reviews:</strong></label>
                        <textarea class="form-control" rows="5" id="comment" placeholder="Type Reviews"></textarea>
                    </div>
                    <a class="btn btn-success btn-lg mb-3" role="button" href="#add_food">+Add Foods Here</a>
                    <div id="add_food">
                        <h3><strong class="strong_checkfood_tag">Check foods boxes:</strong></h3>
                    ';
    $food=simplexml_load_file("reference/food.xml");
     $i=1;
     $x="f".$i;
    while($item=($food->$x)){
        echo '
                <div class="form-check">
                <label for="check1" class="form-check-label">
                <input type="checkbox" class="form-check-input" id="check1" name="'.$food[$i].'" value="$i">
                    "'.$item.'"
                </label>
                </div>
        ';
        $i++;
        $x="f".$i;
    }
    echo '
        <div class="form-group"> 
            <label for="comment"><strong class="review">Other Foods:</strong></label>
            <textarea class="form-control" rows="5" id="comment" placeholder="Type Other dishes/foods"></textarea>
        </div>
        <a href="#done" class="btn btn-outline-success btn-sm">Done!</a>
    </div>
    <button type="submit" class="btn btn-primary">Submit Info</button>
</form>
<div>
    <a href="data_view.php" role="button" class="btn btn-outline-secondary mt-3 mb-2">Go to Tables</a>
</div>
</div>
</div>';
    include "phps/footer.php";
?>