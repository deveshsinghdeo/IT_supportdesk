<?php
   include '../connectionstring.php';
   $query="SELECT Complain_Desc_Id,Complain_Desc FROM complain_type_description WHERE ComplainType_Id='".$_POST['comp']."'";
   $list=$conn->query($query);
  // var_dump($list);exit;
   foreach($list as $var){ ?>
    <option value="<?php echo $var['Complain_Desc_Id'] ?>"><?php echo $var['Complain_Desc'] ?></option>
    <?php }
    ?>