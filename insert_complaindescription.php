<?php
   include '../connectionstring.php';
//    sesssion_start();
   $conn->beginTransaction();
   $query="INSERT INTO complain_type_description(ComplainType_Id,Complain_Desc) VALUES(?,?)";
   $res=$conn->prepare($query);
   $data=array(trim($_POST['complaintype']),trim($_POST['compdesc']));

   $isSuccess=$res->execute($data);

   if($isSuccess==true)
   {
    $conn->commit();
    $_SESSION['sm']='complain description inserted';
    header('Location:addcomplaindescription.php');
    }
    else
    {
        $conn->rollback();
    $_SESSION['em']='Failed to insert';
    header('Location:addcomplaindescription.php');
    }
    ?>