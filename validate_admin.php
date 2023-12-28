
<?php include "connectionstring.php";
   $query="SELECT adminid FROM adminlogin WHERE UserName='".$_POST['email']."' AND password='".$_POST['password']."' ";
   $list=$conn->query($query);
     $aid=0;
     foreach($list as $var)
     {
        $aid=$var['adminid'];
        header('Location:admin_login.php');

     }
     if($aid>0)
     {
        $_SESSION["adminid"]=$aid;
        //var_dump($_SESSION['adminid']);exit;
        header('Location:admin/department.php');
     }

?>