<?php
    include '../connectionstring.php';
    //session_start();
    date_default_timezone_set('Asia/Kolkata');
    $conn->beginTransaction();
    $query = "UPDATE it_team SET Username=?,Name=?,Mobile=?,Email_Id=? WHERE IT_Team_Id=?";
    $res = $conn->prepare($query);//object variable database conn prepare with the query
     
    $data = array($_POST['emp'],$_POST['usr'],$_POST['mob'],$_POST['email'], $_POST['hiddenid']);//data from the front end
     //var_dump($data); exit;
    $success = $res->execute($data);//execution of the data from the front end into the database
     //var_dump($success); exit;
    if($success == true){
        $conn->commit();
        $_SESSION['sm'] = "Record updated successfully";
        session_write_close();
        header('Location:view_complain_IT.php');
    } else{
        $conn->rollback();
        $_SESSION['em'] = "Failed to update the record";
        session_write_close();
        header('Location:edit_profileIT.php');
    }

?>