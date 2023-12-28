<?php
   include '../connectionstring.php';
//    sesssion_start();
   $conn->beginTransaction();
   $query="INSERT INTO department_details(Department) VALUES(?)";
   $res=$conn->prepare($query);
   $data=array(trim($_POST['dept']));

   $isSuccess=$res->execute($data);

   if($isSuccess==true)
   {
    $conn->commit();
    $_SESSION['sm']='department inserted';
    header('Location:department.php');
    }
    else
    {
        $conn->rollback();
    $_SESSION['em']='Failed to insert';
    header('Location:department.php');
    }
    ?>