<!--uploads/$image-->

<?php

function component($name,$description, $price, $image, $productid,$s_email){
    $element = "
    
    <div class='col-lg-3 col-md-3 col-sm-6 my-3 my-md-4  pck divheight'>
                <form action=\"index.php\" method=\"post\">
                    <div class='card shadow'>
                        <div>
                            <img src=\"uploads/$image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$name</h5>
                          
                            <p class=\"card-text\">
                                $description
                            </p>
                            <small class=\"text-secondary\">seller : $s_email</small>
                          
                            <h5>
                               
                                <span class=\"price\">&#8377;$price</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-warning my-3 ik\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($image, $name, $price, $productid,$s_email){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src='uploads/$image' alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$name</h5>
                                <small class=\"text-secondary\">seller : $s_email</small>
                                <h5 class=\"pt-2\">&#8377;$price</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

















