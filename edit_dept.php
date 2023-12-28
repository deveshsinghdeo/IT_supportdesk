<?php include "../connectionstring.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin |Edit department</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <?php include "common_pages/linkfile.php" ?>
</head>

<body>
  <?php  include "common_pages/sidenavbar.php" ?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Edit Department</h5>
                                            <p class="m-b-0"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Manage Users</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="edit_dept.php">Edit Department</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                         <?php 
                                         if(isset($_SESSION['sm']))
                                         {?>
                                          <div class="alert alert-success">
                                                <strong>Success!</strong>
                                                <?php 
                                                   echo $_SESSION['sm'];
                                                   unset($_session['sm']);
                                                   ?>

                                          </div> 
                                        <?php }
                                            if(isset($_SESSION['em']))
                                            {?>
                                              <div class="alert alert-danger">
                                          <strong>Failed!</strong>
                                          <?php
                                               echo $_SESSION['em'];
                                               unset($_SESSION['em']);
                                               ?>
                                              </div>
                                              <?php } ?>


                                        
                                        
                                        
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <?php 
                                        $query= "SELECT Department,DeptStatus FROM department_details where Deptid = '". $_GET['id'] ."'";
                                        $list = $conn->query($query);
                                        foreach($list as $var){
                                            $deptname = $var['Department'];
                                            $status=$var['DeptStatus'];
                                        }
                                        ?>
                                       
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Department</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="sub-title">Edit Department</h4>
                                                        <form action="update_dept.php" method="post">
                                                            <div class="form-group row">

                                                                <div class="col-sm-12">
                                                                    <label>Department</label>
                                                                    <input type="text" class="form-control" id="dept" name="dept" value='<?php echo $deptname; ?>'>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                <label>Status</label>
                                                                    <select class="form-control" id="select" name="select" >

                                                                        <option value="">Select Status</option>
                                                                        
<option value="ACTIVE" <?php echo ($status == 'ACTIVE') ? 'selected' : '' ?>>Active</option>
                                                            
                                                                         
<option value="INACTIVE"<?php echo ($status == 'INACTIVE') ? 'selected' : '' ?>>Inactive</option>
                                                                    </select>
                                                                </div>
                                                            </div>
<input type="hidden" class="form-control" id="dept" name="hiddenid" value="<?php echo $_GET['id'] ?>" >
<button type="submit" class="btn btn-info" name="update" id="update">Update</button>
                                                            <a href="department.php" class="btn btn-danger">Cancel</a>
                                                        </form>
                                                     </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                                                            
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<?php include "common_pages/scriptfile.php" ?>
<script>
$(document).ready(function()
{
    $("#update").click(function()
    {
      if($("#dept").val()=="")
      {
        alert("Enter the department");
        $("#dept").focus();
        return false;
      }

      if($("#select").val()=="")
      {
        alert("please select the status");
        $("#selector").focus();
        return false;
      }
    });
});
</script>    
</body>

</html>
