<option value="">Select Employee Name</option>
<?php 
include '../connectionstring.php'; 

$query = "SELECT UserId,UserName FROM user_details WHERE Dept_Id = '".$_POST['deptid']."' ";

$list = $conn->query($query);

foreach($list as $var){ ?>
<option value="<?php echo $var['UserId'] ?>"><?php echo $var['UserName'] ?></option>
<?php }
?>

