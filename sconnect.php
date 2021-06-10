<?php







$sname = filter_input(INPUT_POST,'sname');

$semail = filter_input(INPUT_POST,'semail');
$spwd = filter_input(INPUT_POST,'spassword');
$sc_pwd =filter_input(INPUT_POST,'spwd_cnf');




if (!empty($sname)){
    if (!empty($semail)){
if (!empty($spwd)){
    if(!empty($sc_pwd)){
        if(($sc_pwd)===($spwd)){
    

$dbname = "Productdb";
$tablename = "Producttb";
$tablename3 = "sellerinfo";
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
$sql = "INSERT INTO $tablename3 (s_name, s_email , s_pwd )
values ('$sname', '$semail' , '$spwd')";
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

echo "<script>alert('Username should not be empty')</script>";
    echo "<script>window.location = 'index.php'</script>";



die();
}















?>