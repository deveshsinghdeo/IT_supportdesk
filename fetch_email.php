
<?php
   include '../connectionstring.php';
   $query="SELECT Email_ID FROM user_details WHERE UserId='".$_POST['uid']."'";
   $list=$conn->query($query);
   foreach($list as $var){ ?>
    <option value="<?php echo $var['Email_ID'] ?>"><?php echo $var['Email_ID'] ?></option>
    <?php }
    ?>