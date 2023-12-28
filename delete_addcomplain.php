<?php
    include '../connectionstring.php';
    // session_start();
    $conn->beginTransaction();

    $query = "DELETE FROM complain_type  WHERE ComplaineId=?";
    $res = $conn->prepare($query);
    $data = array($_GET['id']);
    $success = $res->execute($data);

    if($success == true){
        $conn->commit();
        $_SESSION['sm'] = "Record deleted successfully";
        session_write_close();
        header('Location:addcomplaintype.php');
    }else{
        $conn->rollback();
        $_SESSION['em'] = "Failed to delete the record";
        session_write_close();
        header('Location:addcomplaintype.php');
    }
?>