
<?php
session_start();

if (!isset($_SESSION['email'])) {
    
    echo "<script>window.location = 'index.php'</script>";
              
}

$con = mysqli_connect('localhost', 'root', '', 'Productdb');  
if(!$con) {
    die("Database connection failed");
}


if (isset($_POST['update'])) {
  $newname = $_POST['name'];
  $newemail = $_SESSION['email'];
  $newpassword = $_POST['password'];



 // update info on users Toble
 $sql = "UPDATE sellerinfo SET  s_name='$newname' , s_pwd ='$newpassword' WHERE s_email='$newemail' ";
 $query = mysqli_query($con,$sql);
 echo "<script>alert('Data has Been Updated Succesfully')</script>";
 //echo "<meta http-equiv='refresh' content='0'; url='localhost/a1/swelcome.php' />";
 echo "<script>window.location = 'swelcome.php'</script>";


}

?>

