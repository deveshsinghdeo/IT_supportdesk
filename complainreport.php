<?php '../connectionstring.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Complain Report</title>
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
                                            <h5 class="m-b-10">Complain Reports</h5>
                                            <p class="m-b-0"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Manage Complains</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="complainreport.php">Complain Report</a>
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
                                      
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Quick search</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="sub-title">From date</h4>
                                                        <form action="" method="get">
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <input type="date" class="form-control" name="fromdate" id="fromdate">
                                                        
                                                                </div>
                                                            </div> 

                                                            <div class="card-block">
                                                            <h4 class="sub-title">To date</h4>
                                                         
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <input type="date" class="form-control" name="todate" id="todate">
                                                             
                                                                </div>
                                                            </div>

                                                            <button type="submit" class="btn btn-info" id="submit">Search</button>
                                                            <button type="reset" class="btn btn-danger">Reset</button>
                                                        </form>
                                                     </div>
                                                </div>
                                            </div>
                                         </div>
                            

                                         <div class="card">
                                            <div class="card-header">
                                                <h5>Complain Details</h5>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                
                                                    <table class="table">
                                                        <?php 
// var_dump($_GET['fromdate']);
                                                        if(isset($_GET['fromdate']) && isset($_GET['todate'])) { ?>
                                                     
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    
                                                                        <input type="checkbox" name="" id="">
                                                                    
                                                                </th>
                                                                <th>SL No</th>
                                                                <th>Dept Name</th>
                                                                <th>Emp Name</th>
                                                                <th>Complain Type</th>
                                                                <th>Description</th>
                                                                <th>Comp Date</th>
                                                                <th>Comp Time</th>
                                                                <th>Status</th>
                                                                <th>Resolved Date</th>
                                                                <th>Resolved Time</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $query = "SELECT department_details.department,user_details.UserName, complain_type.Complain_Type,complain_type_description.Complain_Desc,user_complain.Complain_Dt,user_complain.Complain_Time,user_complain.Resolve_Dt,user_complain.Resolve_Time,user_complain.Complain_Status FROM user_complain INNER JOIN department_details ON department_details.Deptid=user_complain.DeptId INNER JOIN complain_type ON complain_type.Complain_Id=user_complain.ComplainTypeId INNER JOIN complain_type_description ON complain_type_description.Complain_Desc_Id=user_complain.Complain_Desc_Id INNER JOIN user_details ON user_details.UserId=user_complain.UserId WHERE user_complain.Complain_Dt BETWEEN '".date('d-m-Y',strtotime($_GET['fromdate']))."' AND '" .date('d-m-Y',strtotime($_GET['todate']))."' ";
// var_dump($query);
                                                            $list = $conn->query($query);
                                                           //var_dump($list);exit;
                                                            $sl=1;
                                                           //var_dump($list);exit;
                                                            foreach($list as $var){ ?>

                                                           
                                                                <th>
                                                    
                                                                        <input type="checkbox" name="" id="">
                                                                       
                                                                </th>
                                                                <th scope="row"><?php echo $sl++; ?></th>
                                                                <td><?php echo $var['department'] ?></td>
                                                                <td><?php echo $var['UserName'] ?></td>
                                                                <td><?php echo $var['Complain_Type'] ?></td>
                                                                <td><?php echo $var['Complain_Desc'] ?></td>
                                                                <td><?php echo $var['Complain_Dt'] ?></td>

                                                                <td><?php echo $var['Complain_Time'] ?></td>
                                                                <td><?php echo $var['Resolve_Dt'] ?></td>
                                                                <td><?php echo $var['Resolve_Time'] ?></td>
                                                                <td>
                                                                    <?php 
                                                                    if($var['Complain_Status'] == 'PENDING'){ ?>
                                                                    <p class='text-danger'>PENDING</p>
                                                                   <?php } else { ?>
                                                                    <p class='text-success'>RESOLVE</p>
                                                                  <?php } ?>
                                                                </td> 

                                                                
                                                               
                                                            </tr>
                                                           <?php } ?>
                                                        
                                                        <?php  } else { ?>
                                                            <tr class="container" class="col-lg-12">
                                                                <td>Search For Complain</td>
                                                            </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>
                                                 
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
   if($("#todate").val()=="")
   {
                alert("Enter the to date");
                $("#todate").focus();
                return false;
            }
     if($("#fromdate").val()=="")
   {
                alert("Enter the from date");
                $("#fromdate").focus();
                return false;
            } 
    });

});
    </script>
</body>

</html>
