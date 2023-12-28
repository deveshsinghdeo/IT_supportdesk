<?php
    include '../connectionstring.php';
    //session_start();
    date_default_timezone_set('Asia/Kolkata');
    $conn->beginTransaction();
    $query = "UPDATE it_team SET Username=?,Password=?,Name=?,Mobile=?,Email_Id=?,Create_Dt=?,Status=? WHERE IT_Team_Id=?";
    $res = $conn->prepare($query);//object variable database conn prepare with the query
     
    $data = array($_POST['username'],$_POST['password'],$_POST['employeename'],$_POST['mobile'],$_POST['email'],date('d-m-Y'),$_POST['select'], $_POST['hiddenid']);//data from the front end
     //var_dump($data); exit;
    $success = $res->execute($data);//execution of the data from the front end into the database
     //var_dump($success); exit;
    if($success == true){
        $conn->commit();
        $_SESSION['sm'] = "Record updated successfully";
        session_write_close();
        header('Location:IT_Team_Details.php');
    } else{
        $conn->rollback();
        $_SESSION['em'] = "Failed to update the record";
        session_write_close();
        header('Location:Edit_IT_Team.php');
    }

?>