<?php
    include '../connectionstring.php';
    // session_start();
    $conn->beginTransaction();

    $query = "DELETE from complain_type_description where Complain_Desc_Id=?";
    $res = $conn->prepare($query);
    $data = array($_GET['id']);
    //var_dump($data);exit;
    $success = $res->execute($data);
    //var_dump($data,$success);exit;
    if($success == true){
        $conn->commit();
        $_SESSION['sm'] = "Record deleted successfully";
        session_write_close();
        header('Location:addcomplaindescription.php');
    }else{
        $conn->rollback();
        $_SESSION['em'] = "Failed to delete the record";
        session_write_close();
        header('Location:addcomplaindescription.php');
    }
?>