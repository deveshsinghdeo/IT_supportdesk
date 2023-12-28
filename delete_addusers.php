<?php
   include '../connectionstring.php' ;
   $conn->beginTransaction();
   $query="DELETE FROM user_details WHERE UserId=?";
   $res=$conn->prepare($query);
   $data=array($_GET['id']);
  // 
   $success=$res->execute($data);
   //var_dump($success);exit;
   if($success == true)
   {
    $conn->commit();
    $_SESSION['sm']="Record deleted successfully";
    session_write_close();
    header('Location:user_details.php');
   }
   else
   {
    $conn->rollback();
    $_SESSION['em']="Failed to delete";
    session_write_close();
    header('Location:user_details.php');
   }
?>

