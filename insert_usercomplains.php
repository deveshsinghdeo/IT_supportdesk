<?php
   include '../connectionstring.php';
//    sesssion_start();
     date_default_timezone_set('Asia/Kolkata');
   $conn->beginTransaction();
   $query="INSERT INTO user_complain(DeptId,UserId,ComplainTypeId,Complain_Desc_Id,IT_Team_Id,Email_Id,Complain_Dt,Complain_Time) VALUES (?,?,?,?,?,?,?,?)"; 
   $res=$conn->prepare($query);
   $data=array(trim($_POST['select']),trim($_POST['empname']),trim($_POST['complaintype']),trim($_POST['compdesc']),trim($_POST['fwdcomp']),trim($_POST['email']),date('d-m-Y'),date('H:i:sa'));

   $isSuccess=$res->execute($data);

   if($isSuccess==true)
   {
    $conn->commit();
    $_SESSION['sm']='successfully inserted';
    header('Location:usercomplains.php');
    }
    else
    {
    $conn->rollback();
    $_SESSION['em']='Failed to insert';
    header('Location:addcomplain.php');
    }
    ?>