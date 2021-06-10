<?php
session_start();
    $con = mysqli_connect('localhost', 'root', '', 'Productdb');  
    if(!$con) {
        die("Database connection failed");
    }
    //else {echo "success";}


    $db = mysqli_select_db($con,'Productdb');

    if (isset($_POST["ssubmit"])) {

        $email=$_POST['email'];
        $pwd=$_POST['password'];
       // $email = "prathamesh@gmail.com";
        //$pwd ="Prathamesh@2408";

        $sql = "select  * from sellerinfo  where s_email = '$email' and s_pwd = '$pwd' 
        ";

        $query = mysqli_query($con,$sql);


        $row = mysqli_num_rows($query); 

            if($row == 1){
                echo "<script>alert('Login Succesfully')</script>";
                 $_SESSION["email"]=$email;
                 
                   // header('location: swelcome.php');
                   
                   echo "<script>window.location = 'swelcome.php'</script>";

                    


                }

            else {

                
               echo "<script>alert('Password is Wrong Try again')</script>";
                //header('location:cart.php');
                echo "<script>window.location = 'index.php'</script>";
              // echo "<script>
                //$('#SModalsignupForm').modal('open'); //include your model id
                //</script>";
            
              //  $error_msg = "<div class='login-modal'>Username or password is incorrect</div>";
                //    $script =  "<script> $(document).ready(function(){ $('#SModalsignupForm').modal('show'); }); </script>";
                    



            }


        

        

    }




?>

