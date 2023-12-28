<?php
   include '../connectionstring.php';
//    sesssion_start();
   $conn->beginTransaction();
   $query="INSERT INTO it_team(Username,Password,Name,Mobile,Email_Id) VALUES(?,?,?,?,?)";
   $res=$conn->prepare($query);
   $data=array(trim($_POST['username']),trim($_POST['password']),trim($_POST['employeename']),trim($_POST['mobileno']),trim($_POST['email']));

   $isSuccess=$res->execute($data);

   if($isSuccess==true)
   {
    $conn->commit();
    $_SESSION['sm']='data inserted';
    header('Location:IT_Team_Details.php');
    }
    else
    {
        $conn->rollback();
    $_SESSION['em']='Failed to insert';
    header('Location:Add_IT_Team.php');
    }
    ?>