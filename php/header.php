   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  
<header >



<!--header start-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Shopping Cart
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  animated slideInDown" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav "> 

           

            <div class="modal-header border border-0  ">
                <h5 class="modal-title text-sm-center text-white bg-dark px-4 mt-1 nowrap" >SELLER ACCOUNT</h5>
            
                
             <a href=""  class="nav-item nav-link text-sm-center w-50" data-toggle="modal" id="login1" data-target="#SModalLoginForm" " >Log in</a>
            <a href="./php/register.php"  class="nav-item nav-link text-sm-center w-50" data-toggle="modal" data-target="#SModalsignupForm">Sign up</a>
            </div>
            <div class="modal-header border border-0">
                <h5 class="modal-title text-sm-center text-white bg-dark px-4 mt-1 " >CUSTOMER ACCOUNT</h5>
            
                
             <a href="login"  class="nav-item nav-link text-sm-center w-50 " data-toggle="modal" data-target="#CModalLoginForm">Log in</a>
            <a href="signup"  class="nav-item nav-link text-sm-center w-50 " data-toggle="modal" data-target="#CModalsignupForm">Sign up</a>
            </div>

            <a href="cart.php" class="nav-item nav-link active">
                   
            <h5 class="px-4  cart mt-3">
                    
                        <i class="fas fa-shopping-cart"> <br></i>Cart                                    
                        
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light mr-auto px-2 \"> $count </span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light mr-auto px-2\"> 0 </span>";
                        }

                        ?>
                    </h5>
                </a>
                    </div>
        </div>

    </nav>
    
 
 <!--header end-->
 
    <!--seller signin-->



    <div id="SModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title"> Seller Login</h1>
            </div>
            <div class="modal-body">


                <form role="form" method="POST" action="sloginconfirmation.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">E-Mail Address</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name="ssubmit" class="btn btn-success">Login</button>
 
                            <a class="btn btn-link" href="">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>



                          </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                   

<!-- seller signup-->

<div id="SModalsignupForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Seller Signup!</h1>
            </div>
            <div class="modal-body">
               


                <!--sign up part-->
                
                <form role="form" method="POST" action="sconnect.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">

                        <label class="control-label">Seller Name</label>
                        
                        <div>
                            <input type="text" class="form-control input-lg" name="sname" id="" value=""   >
                        </div>
                      
                    </div>


                   



                    <div class="form-group">
                        <label class="control-label">Email Id</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="semail" id="semail" autocomplete="off" value=""> <div id="uname_response" ></div>
                           
                        </div> 
                    </div>


       
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                <input type="password" class="form-control input-lg" name="spassword"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label">Confirm Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="spwd_cnf"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                    </div>


                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-success" id="register">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



                                                <!--Customer signin-->



    <div id="CModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title"> Customer Login</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="cloginconfirmation.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">E-Mail Address</label>
                        <div>
                            <input type="email" class="form-control input-lg" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name="submit" class="btn btn-success">Login</button>
                            <a class="d-block small mt-3" href="#CModalsignupForm">signup</a>
                            <a class="btn btn-link" href="">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>



                          </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                   


                                                <!-- Customer signup-->

<div id="CModalsignupForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Customer Signup!</h1>
            </div>
            <div class="modal-body">
               


                <!--sign up part-->
                
                <form role="form" method="POST" action="connect.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">

                        <label class="control-label">firstname</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="ufname" id="username" value=""  pattern="[A-Za-z]+" title="letters only, no punctuation or special characters">
                        </div>
                        <div id="status"></div>
                    </div>


                    <div class="form-group">

<label class="control-label">lastname</label>
<div>
    <input type="text" class="form-control input-lg" name="ulname" id="username" value=""  pattern="[A-Za-z]+" title="letters only, no punctuation or special characters">
</div>
<div id="status"></div>
</div>



                    <div class="form-group">
                        <label class="control-label">Email ID</label>
                        <div>
                            <input type="email" class="form-control input-lg" name="uemail_id" id="uemail" autocomplete="off" id="uemail_id" value="" >
                        </div><span id="message"></span>
                    </div>
                    


                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="upassword"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label">Confirm Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="upwd_cnf"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                    </div>


                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-success">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


</header>

 <script>
            $(document).ready(function(){

                $("#semail").keyup(function(){

                    var username = $(this).val().trim();
            
                    if(username != ''){
            
                       
            
                        $.ajax({
                            url: 'ajaxfile.php',
                            type: 'post',
                            data: {username: username},
                            success: function(response){
                
                                $('#uname_response').html(response);
                
                             }
                        });
                    }else{
                        $("#uname_response").html("");
                    }
            
                });

            });
        </script>



 <script>
            $(document).ready(function(){

                $("#uemail").keyup(function(){

                    var username = $(this).val().trim();
            
                    if(username != ''){
            
                       
            
                        $.ajax({
                            url: 'uajax.php',
                            type: 'post',
                            data: {username: username},
                            success: function(response){
                
                                $('#message').html(response);
                
                             }
                        });
                    }else{
                        $("message").html("");
                    }
            
                });

            });
        </script>
