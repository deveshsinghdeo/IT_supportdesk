<?php include "../connectionstring.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Department</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <?php include "common_pages/linkfile.php"; ?>

</head>

<body>
    <?php include "common_pages/sidenavbar.php"; ?>

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <nav class="pcoded-navbar">
                <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                <div class="pcoded-inner-navbar main-menu">
                    <div class="">
                        <div class="main-menu-header">
                            <img class="img-80 img-radius" src="../assets/images/avatar-4.jpg" alt="User-Profile-Image">
                            <div class="user-details">
                                <span id="more-details">Admin<i class="fa fa-caret-down"></i></span>
                            </div>
                        </div>
                    </div>


                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Manage User</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="department.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Department Details</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="user_details.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">User Details</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="IT_Team_Details.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">IT Team</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="Complaintype.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Complain Type Details</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ComplainDescription.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Complain Description</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Manage Complain</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="usercomplain.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">User Complain</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="complainreports.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Complain Reports</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.main">My settings</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="changepassword.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Change Password</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="logout.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Logout</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <p>
                        <center>IT Support desk_@2023,</center><br />
                        <center>All rights reserved.<center>
                    </p>
                </div>
            </nav>
            <div class="pcoded-content">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Department Details</h5>
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
                                    <li class="breadcrumb-item"><a href="department.php">Department</a>
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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- Basic Form Inputs card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Department</h5>
                                            </div>
                                            <div class="card-block">
                                                <h4 class="sub-title">Add Department</h4>
                                                <form action="insert_dept.php" method="POST">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" id="dept" name="dept">
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-info" id="submit" name="submit">Add</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Department Table</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <form action="edit_dept.php" method="post">
                                                <table class="table"> 
                                                    <thead>
                                                        <tr>
                                                            <th>

                                                                <input type="checkbox" name="" id="">

                                                            </th>
                                                            <th>SL No</th>
                                                            <th>Department</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $query = "SELECT * FROM department_details ";
                                                        $list = $conn->query($query);
                                                        //$list = $conn->query($query);
                                                        $sl = 1;
                                                        //var_dump($list);
                                                        foreach($list as $var) { 
                                                            
                                                            ?>

                                                            <tr>
                                                                <th>
                                                                    <form action="" method="post">
                                                                        <input type="checkbox" name="" id="">
                                                                    </form>
                                                                </th>
                                                                <th scope="row"><?php echo $sl++; ?></th>
                                                                <td><?php echo $var['Department']; ?></td>
                                                                <td>
                                                                    <?php
                                                                    if ($var['DeptStatus'] == 'ACTIVE') { ?>
                                                                        <p class="text-success"><?php echo $var['DeptStatus'] ?></p>
                                                                    <?php } else { ?>
                                                                        <p class="text-danger"><?php echo $var['DeptStatus'] ?></p>
                                                                    <?php  }
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <a href="edit_dept.php?id=<?php echo $var['Deptid'] ?>" onclick="return confirm('are you sure you want to edit')"> <i class="fa fa-edit"> </i> </a>
                                                                    <a href="delete_dept.php?id=<?php echo $var['Deptid'] ?>" onclick="return confirm('are you sure you want to delete')"> <i class="fa fa-trash"></i> </a>
                                                                </td>
                                                            </tr>
                                                        <?php  } ?>


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
                <?php include "common_pages/scriptfile.php" ?>
                <script>
                    $(document).ready(function() {
                        $("#submit").click(function() {
                            if ($("#dept").val() == "") {
                                alert("please enter department");
                                $("#dept").focus();
                                return false;
                            }
                        });
                    });
                </script>
</body>

</html>