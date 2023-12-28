<?php include '../connectionstring.php' ;
$conn->beginTransaction();
$query="UPDATE user_details SET Dept_Id=?,UserName=?,User_IP=?,System_Name=?,Mobile=?,Email_ID=? where UserId = ?";
$res=$conn->prepare($query);
$data=array($_POST['dept'],$_POST['employeename'],$_POST['employeesysip'],$_POST['sysname'],$_POST['mobile'],$_POST['email'],$_POST['hiddenid']);
$success=$res->execute($data);
//var_dump($data,$success);exit;
if($success== true)
{
    $conn->commit();
    $_SESSION['sm']="Record updated successfully";
    session_write_close();
    header('Location:user_details.php');
}
else
{
    $conn->rollback();
    $_SESSION['em']="failed to update the record";
    session_write_close();
    header('Location:add_users.php');
}
?>