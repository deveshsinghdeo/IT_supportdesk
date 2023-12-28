<?php
    include '../connectionstring.php';
    //session_start();
    
    $conn->beginTransaction();
    $query = "UPDATE it_team SET Password=? WHERE IT_Team_Id=?";
    $res = $conn->prepare($query);//object variable database conn prepare with the query
     
    $data = array($_POST['newpwd'],$_SESSION['IT_Team_Id']);//data from the front end
    // var_dump($data); exit;
    $success = $res->execute($data);//execution of the data from the front end into the database
    // var_dump($success); exit;
    if($success == true){
        $conn->commit();
        $_SESSION['sm'] = "Record updated successfully";
        session_write_close();
        header('Location:change_password_IT.php');
    } else{
        $conn->rollback();
        $_SESSION['em'] = "Failed to update the record";
        session_write_close();
        header('Location:change_password_IT.php');
    }

?>