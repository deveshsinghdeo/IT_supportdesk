<?php
    include '../connectionstring.php';
    //session_start();
    $conn->beginTransaction();
    $query = "update department_details set department = ?,DeptStatus=? where Deptid  = ?";
    $res = $conn->prepare($query);//object variable database conn prepare with the query
     
    $data = array($_POST['dept'],$_POST['select'],$_POST['hiddenid']);//data from the front end
    // var_dump($data); exit;
    $success = $res->execute($data);//execution of the data from the front end into the database
    // var_dump($success); exit;
    if($success == true){
        $conn->commit();
        $_SESSION['sm'] = "Record updated successfully";
        session_write_close();
        header('Location:department.php');
    } else{
        $conn->rollback();
        $_SESSION['em'] = "Failed to update the record";
        session_write_close();
        header('Location:department.php');
    }

?>    