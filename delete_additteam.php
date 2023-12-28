<?php
    include '../connectionstring.php';
    // session_start();
    $conn->beginTransaction();

    $query = "delete from it_team where IT_Team_Id=?";
    $res = $conn->prepare($query);
    $data = array($_GET['id']);
    $success = $res->execute($data);

    if($success == true){
        $conn->commit();
        $_SESSION['sm'] = "Record deleted successfully";
        session_write_close();
        header('Location:IT_Team_Details.php');
    }else{
        $conn->rollback();
        $_SESSION['em'] = "Failed to delete the record";
        session_write_close();
        header('Location:IT_Team_Details.php');
    }
?>