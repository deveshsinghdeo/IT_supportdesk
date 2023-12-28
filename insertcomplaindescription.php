<?php
   include '../connectionstring.php';
//    sesssion_start();
   $conn->beginTransaction();
   $query="INSERT INTO complain_type_description(Complain_Desc) VALUES(?)";
   $res=$conn->prepare($query);
   $data=array(trim($_POST['Complain_Desc']));

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