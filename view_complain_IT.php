<?php include "../connectionstring.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>IT | view complain</title>
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
                                            <h5 class="m-b-10">User Complain Details</h5>
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
                                            <li class="breadcrumb-item"><a href="view_complain_IT.php">Complain Details</a>
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
                                        
                                        
                                         <div class="card">
                                            <div class="card-header">
                                                <h5>User Complain Details</h5>
                                                
                                            </div>
                                            
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                <form action="update_it.php" method="post">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                
                                                                <th>SL No</th>
                                                                <th>Dept Name</th>
                                                                <th>Emp Name</th>
                                                                <th>Complain Type</th>
                                                                <th>Description</th>
                                                                
                                                                <th>Complain Date</th>
                                                                <th>Complain Time</th>
                                                                <th>Status</th>
                                                                <th>Res.Date</th>
                                                                <th>Time</th>
                                                                <th>
                                                                    
                                                                        <input type="checkbox" name="" id="">
                                                                    
                                                                </th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                                    $query="SELECT user_complain.User_Complain_Id,department_details.Department,user_details.UserName,complain_type.Complain_Type, complain_type_description.Complain_Desc,user_complain.Complain_Dt,user_complain.Complain_Time, user_complain.Complain_Status,user_complain.Resolve_Dt,user_complain.Resolve_Time FROM user_complain INNER JOIN department_details ON department_details.Deptid=user_complain.DeptId INNER JOIN user_details ON user_details.UserId=user_complain.UserId INNER JOIN complain_type ON complain_type.Complain_Id=user_complain.ComplainTypeId INNER JOIN complain_type_description ON complain_type_description.Complain_Desc_Id=user_complain.Complain_Desc_Id WHERE user_complain.IT_Team_Id=' ".$_SESSION['IT_Team_Id']."'"; //$seession[IT_Team_Id] is used when it is login in the it team 
                                                                    $list=$conn->query($query);
                                                                    //var_dump($list);exit;
                                                                    $sl=1;
                                                                    foreach($list as $var)
                                                                    {
                                                                    ?>
                                                                    <form action="" method="post">

                                                                    <?php 
                                                                    if($var['Complain_Status'] == 'RESOLVED'){ ?>
                                                                        <tr class = 'bg-success'>
                                                                    <?php } else { ?>
                                                                        <tr class = 'bg-danger'>
                                                                   <?php }
                                                                    ?>
                                                           
                                                                
                                                                <th scope="row"><?php echo $sl++; ?></th>
                                                                <td><?php echo $var['Department'] ?></td>
                                                                <td><?php echo $var['UserName'] ?></td>

                                                                <td><?php echo $var['Complain_Type'] ?></td>
                                                                <td><?php echo $var['Complain_Desc'] ?></td>
                                                                <td><?php echo $var['Complain_Dt'] ?></td>
                                                                <td><?php echo $var['Complain_Time'] ?></td>
                                                                <td><?php echo $var['Complain_Status'] ?></td>
                                                                <td><?php echo $var['Resolve_Dt'] ?></td>
                                                                <td><?php echo $var['Resolve_Time'] ?></td>
                                                                <td><input type="checkbox" name="" id=""></td>
                                                                
                                                               <?php if($var['Complain_Status']=='PENDING')
                                                               { ?>
                                                                <td>
                                                                <a href="update_it.php?id=<?php echo $var['User_Complain_Id'] ?>"> <i class="fa fa-edit"></i> </a> <!--upate button is used if codition is PENDING-->
                                                                </td>
                                                                <?php } else {?>
                                                               
                                                               <!-- <td>
                                                                <a href="delete_it.php"> <i class="fa fa-trash"></i> </a>
                                                                </td> -->
                                                                <?php } ?>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                    <button type="submit" class="btn btn-danger">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                                                            
<!-- Warning Section Ends -->
<?php include "common_pages/scriptfile.php" ?>
</body> 

</html>
<!--$query = "SELECT department_details.department,user_details.UserName, complain_type.Complain_Type,complain_type_description.Complain_Desc FROM user_complain INNER JOIN department_details ON department_details.Deptid=user_complain.DeptId INNER JOIN complain_type ON complain_type.Complain_Id=user_complain.ComplainTypeId INNER JOIN complain_type_description ON complain_type_description.Complain_Desc_Id=user_complain.Complain_Desc_Id INNER JOIN user_details ON user_details.UserId=user_complain.UserId WHERE Complain_Dt BETWEEN '".date('d-m-Y',($_POST['fromdate']))."' AND '" .date('d-m-Y',($_POST['fromdate']))."' ";
$list = $conn->query($query);-->