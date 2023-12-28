<?php
   include '../connectionstring.php';
//    sesssion_start();
   $conn->beginTransaction();
   $query="INSERT INTO user_details(Dept_Id,UserName,User_IP,System_Name,Mobile,Email_ID,User_Create_Dt) VALUES(?,?,?,?,?,?,?)";
   $res=$conn->prepare($query);
   $data=array(
    trim($_POST['dept']),
    $_POST['employee_name'],
    $_POST['empsysip'],
    $_POST['system_name'],
    $_POST['mobile'],
    $_POST['email'],date('d-m-Y'));
    
   $isSuccess=$res->execute($data);
   //var_dump($isSuccess);exit;
   if($isSuccess==true)
   {
    $conn->commit();
    $_SESSION['sm']='inserted';
    header('Location:user_details.php');
    }
    else
    {
        $conn->rollback();
    $_SESSION['em']='Failed to insert';
    header('Location:add_users.php');
    }
    ?>