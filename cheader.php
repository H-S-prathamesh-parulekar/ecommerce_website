   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  
<header id="header">




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

        <div class="collapse navbar-collapse animated slideInDown" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav "> 

           

            <div class="modal-header border border-0">
            <h6 class="modal-title text-sm-center text-white bg-dark px-4 mt-2 " > welcome <?php echo $_SESSION['email']; ?> </h6>
                
            </div>
            <div class="modal-header border border-0">
                <h5 class="modal-title text-sm-center text-white bg-dark px-2 mt-1 " >customer Profile</h5>
            
                
             <a href="seditprofile"  class="nav-item nav-link text-sm-center " 
             data-toggle="modal" data-target="#SModaleditForm"
             
             >Edit profile</a>
           
                      
            <a href="./php/logout.php"  class="nav-item nav-link text-sm-center " >Log out</a>
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

    








    <div id="SModaleditForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title"> Customer Edit Profile</h1>
            </div>
            <div class="modal-body">


                <form role="form" method="POST" action="seditprofile.php">
                    <input type="hidden" name="_token" value="">
                  
                    <div class="form-group">
                        <label class="control-label">Update First Name</label>
                        <div>
                            <input type="name" class="form-control input-lg" name="fname" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Update last Name</label>
                        <div>
                            <input type="name" class="form-control input-lg" name="lname" value="">
                        </div>
                    </div>
                  
                  
                  
                    <div class="form-group">
                        <label class="control-label">Update Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                            
                            <a  type="reset" class="btn btn-link" href="">Reset</a>
                            <a type="cancel "class="btn btn-link" href="">Back To Previous page</a>
                        
                        </div>
                    </div>
                </form>













</header>


