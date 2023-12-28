<?php include '../connectionstring.php' ; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin |user details</title>
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
                                            <h5 class="m-b-10">User Details</h5>
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
                                            <li class="breadcrumb-item"><a href="user_details.php">User Details</a>
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
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                       
                                                    
                                                            
                                                            
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                                           
                                                   
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        
                                        <a href="add_users.php" class="btn btn-success">Add Users</a><br><br><br>
                                         <div class="card">
                                            <div class="card-header">
                                                <h5>User Details</h5>
                                            </div>
                                            
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                <form action="" method="post">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    
                                                                        <input type="checkbox" name="" id="">
                                                                    
                                                                </th>
                                                                <th>SL No</th>
                                                                <th>Department Name</th>
                                                                <th>Employee Name</th>
                                                                <th>IP Address </th>
                                                                <th>System Name</th>
                                                                <th>Mobile No</th>
                                                                <th>Email Id</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $query = "SELECT user_details.UserId,department_details.Department,user_details.UserName,user_details.User_IP,user_details.System_Name,user_details.Mobile,user_details.Email_ID from user_details inner join department_details on user_details.Dept_ID=department_details.Deptid";
                                                        $list = $conn->query($query);
                                                        //$list = $conn->query($query);
                                                        $sl = 1;
                                                        //var_dump($list);
                                                        foreach($list as $var) { 
                                                            
                                                            ?>
      
                                                            <tr>
                                                                <th>
                                                                    <form action="" method="post">
                                                                        <input type="checkbox" name="check" id="checkboxid" class="checkboxclass">
                                                                    </form>
                                                                </th>
                                                                <th scope="row"><?php  echo $sl++ ?></th>
                                                                <td><?php echo $var['Department'] ?> </td>
                                                                <td><?php echo $var['UserName'] ?> </td>
                                                                <td><?php echo $var['User_IP'] ?>  </td>
                                                                <td><?php echo $var['System_Name']?>  </td>
                                                                <td><?php echo $var['Mobile'] ?>  </td>
                                                                <td><?php echo $var['Email_ID'] ?>  </td>
                                                             <td>
                                                                <a href="edit_user.php?id=<?php echo $var['UserId'] ?>"> <i class="fa fa-edit"></i> </a>
                                                                <a href="delete_addusers.php?id=<?php echo $var['UserId'] ?>" onclick="return confirm('are you sure you want to delete')"> <i class="fa fa-trash"></i> </a>
                                                                </td>
                                                            </tr>
                                                    <?php    }
                                                    ?>
                                                        </tbody>

                                                    </table>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
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
        $("#checkboxid").click(function()
        {
          
        
        });
});
</script>
</body>

</html>

