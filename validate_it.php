<?php include "../connectionstring.php" ;
$query="SELECT IT_Team_Id FROM it_team WHERE Email_Id='".$_POST['email']."' 
          AND Password='".$_POST['password']."'";
$list=$conn->query($query);
//var_dump($list);exit;
     $itid=0;
     foreach($list as $var)
     {
        $itid=$var['IT_Team_Id'];
        //header('Location:it_login.php');

     }
     if($itid>0)
     {
        $_SESSION['IT_Team_Id']=$itid;
        //var_dump($_SESSION['adminid']);exit;
        header('location:view_complain_IT.php');
     } else{
      header('location:it_login.php');
     }

?>
