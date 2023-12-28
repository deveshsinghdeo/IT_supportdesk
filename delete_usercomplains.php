<?php
    include '../connectionstring.php';
    // session_start();
    $conn->beginTransaction();

    $query = "DELETE from user_complain where User_Complain_Id=?";
    $res = $conn->prepare($query);
    $data = array($_GET['id']);
    //var_dump($data);exit;
    $success = $res->execute($data);
    //var_dump($data,$success);exit;
    if($success == true){
        $conn->commit();
        $_SESSION['sm'] = "Record deleted successfully";
        session_write_close();
        header('Location:usercomplains.php');
    }else{
        $conn->rollback();
        $_SESSION['em'] = "Failed to delete the record";
        session_write_close();
        header('Location:usercomplains.php');
    }
?>