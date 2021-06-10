
<?php
include_once 'database.php';

$data = [];
$emailId = htmlspecialchars($_POST['uemail_id']);
try{
    $data['status'] = false;
 
    if (!filter_var($emailId, FILTER_VALIDATE_EMAIL)) {
        $data['message'] = "Invalid email format";
    } else {
        $stmt = $conn->prepare('select cust_email from userinfo where cust_email = "$emailId"');
        $stmt->bind_param('s',$emailId);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows<1){
            $data['message'] = 'Email id available!';
            $data['status'] = true;
        }else{
            $data['message'] = 'Email id already exist!';
        }
    }
 
}
catch (\Exception $exception){
    $data['message'] = $exception->getMessage();
}
 
echo json_encode($data);