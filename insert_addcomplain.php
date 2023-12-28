<?php
   include '../connectionstring.php';
//    sesssion_start();
   $conn->beginTransaction();
   $query="INSERT INTO complain_type(Complain_Type) VALUES(?)";
   $res=$conn->prepare($query);
   $data=array(trim($_POST['complaintype']));

   $isSuccess=$res->execute($data);

   if($isSuccess==true)
   {
    $conn->commit();
    $_SESSION['sm']='Complain Type inserted';
    header('Location:addcomplain.php');
    }
    else
    {
        $conn->rollback();
    $_SESSION['em']='Failed to insert Complain Type';
    header('Location:addcomplain.php');
    }
    ?>