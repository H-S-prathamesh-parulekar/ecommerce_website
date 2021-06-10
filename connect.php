<?php



//customer

$fname = filter_input(INPUT_POST, 'ufname');
$lname = filter_input(INPUT_POST, 'ulname');

$email = filter_input(INPUT_POST, 'uemail_id');
$pwd = filter_input(INPUT_POST, 'upassword');
$c_pwd =filter_input(INPUT_POST, 'upwd_cnf');




if (!empty($fname)){
    if (!empty($lname)){
    
    if (!empty($email)){
if (!empty($pwd)){
    if(!empty($c_pwd)){
        if(($c_pwd)===($pwd)){
    

$dbname = "Productdb";
$tablename = "Producttb";
$tablename2 = "userinfo";
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);







if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO $tablename2 (custf_name ,custl_name , cust_email , cust_pwd )
values ('$fname','$lname', '$email' , '$pwd')";
if ($conn->query($sql)){
    //include 'index.php';
   
  echo "<script>alert('You are successfully Registered')</script>";
              echo "<script>window.location = 'index.php'</script>";

 //</script>';
//die();
 

 //exit();

}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
    echo "<script>alert('Password and Confirm Password should be same')</script>";
    echo "<script>window.location = 'index.php'</script>";





die();
}
}
else{

    echo "<script>alert('Confirm Password should not be empty')</script>";
    echo "<script>window.location = 'index.php'</script>";




die();
}



}
else{

    echo "<script>alert('Password should not be empty')</script>";
    echo "<script>window.location = 'index.php'</script>";
  



die();
}
}

    else{
    
    echo "<script>alert('Email Id should not be empty')</script>";
    echo "<script>window.location = 'index.php'</script>";
  
    
    
    die();
    }



}


else{

echo "<script>alert(' lastname should not be empty')</script>";
    echo "<script>window.location = 'index.php'</script>";



die();
}


}

else{

    echo "<script>alert('firstname should not be empty')</script>";
        echo "<script>window.location = 'index.php'</script>";
    
    
    
    die();
    }



?>

