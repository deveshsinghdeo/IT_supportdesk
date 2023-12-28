<?php include "../connectionstring.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | add_users</title>
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
   <?php include "common_pages/sidenavbar.php" ?>
    
            
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Add New Users</h5>
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
                                            <li class="breadcrumb-item"><a href="add_users.php">Add</a>
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
                            if (isset($_SESSION['sm'])) {
                            ?>

                                <div class="alert alert-success">
                                    <strong>Success!</strong>
                                    <?php
                                    echo $_SESSION['sm'];
                                    unset($_SESSION['sm']);
                                    ?>
                                </div>

                            <?php }

                            if (isset($_SESSION['em'])) { ?>
                                <div class="alert alert-danger">
                                    <strong>Failed!</strong>
                                    <?php
                                    echo $_SESSION['em'];
                                    unset($_SESSION['em']);
                                    ?>
                                </div>
                            <?php } ?>

                                <a href="user_details.php" class="btn btn-success">Back</a><br><br><br>
                                  
                                    <!-- Page body start -->
                                    <div class="page-body">
                                       
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <form action="insert_addusers.php" method="post">
                                                            
                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                <label>Department</label>
                                                                    <select class="form-control" name="dept" id="select">
                                                                        <option value="">Select Department</option>
                                                                        <?php $query= "SELECT * FROM department_details";
                                                                           $list=$conn->query($query);
                                                                           foreach($list as $var)
                                                                           { ?>
                                                                            <option value="<?php echo $var['Deptid'] ?>"><?php echo $var['Department'] ?></option>
                                                                          <?php } ?>

                                                                        
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                <label>Employee Name</label>
                                                                    <input type="text" class="form-control" name="employee_name" id="employee_name" >
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                <label>Employee System IP Address</label>
                                                                    <input type="text" class="form-control" name="empsysip" id="empsysip">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                <label>System Name</label>
                                                                    <input type="text" class="form-control" name="system_name" id="system_name">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">

                                                                <div class="col-sm-12">
                                                                <label>Mobile No</label>
                                                                    <input type="text" class="form-control" name="mobile" id="mobile">
                                                                </div>
                                                            </div> 
                                                               
                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                <label>Email ID</label>
                                                                    <input type="text" class="form-control" name="email" id="email">
                                                                </div>
                                                             </div>
                                                             <button type="submit" class="btn btn-info" name="submit" id="submit">Save</button>
                                                            <button type="reset" class="btn btn-secondary">Reset</button>
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
<?php include "common_pages/scriptfile.php" ?>
<script>
$(document).ready(function()
{
    $("#submit").click(function()
    {
        if($("#select").val()=="")
        {
            alert("please select the department");
            $("#select").focus();
            return false;
        }
        if($("#employee_name").val()=="")
        {
            alert("enter the employee name");
            $("#employee_name").focus();
            return false;
        }
        if($("#empsysip").val()=="")
        {
            alert("enter the Employee System IP Address");
            $("#empsysip").focus();
            return false;
        }
        if($("#system_name").val()=="")
        {
            alert("enter the system name");
            $("#system_name").focus();
            return false; 
        }
        if($("#mobile").val()=="")
        {
            alert("enter the mobile no");
            $("#mobile").focus();
            return false; 
        }
        if($("#email").val()=="")
        {
            alert("enter the email");
            $("#email").focus();
            return false; 
        }

    });

});
</script>    
</body>

</html>