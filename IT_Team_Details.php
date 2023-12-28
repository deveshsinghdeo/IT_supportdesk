<?php include '../connectionstring.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin | IT_Team_Details</title>
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
   
    <?php include 'common_pages/linkfile.php' ?>

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
                                            <h5 class="m-b-10">IT Team Details</h5>
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
                                            <li class="breadcrumb-item"><a href="IT_Team_Details.php">IT Team Details</a>
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
                                                                <th>Name</th>
                                                                <th>User Name</th>
                                                                <th>Password</th>  
                                                                <th>Mobile No</th>  
                                                                <th>Email</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        $query="SELECT * FROM it_team";
                                                                $list = $conn->query($query);
                                                                //$list = $conn->query($query);
                                                                $sl = 1;
                                                                // var_dump($query);
                                                                foreach($list as $var) {
                                                                    // var_dump($var['IT_Team_Id(PK)']);
                                                                    ?> 
                                                            <tr>
                                                                
                                                                <th>
                                                                    <form action="" method="post">
                                                                        <input type="checkbox" name="" id="">
                                                                    </form>
                                                                </th>
                                                                <th scope="row"><?php echo $sl++; ?></th>
                                                                <td><?php echo $var['Username'] ?></td>
                                                                <td><?php echo $var['Password'] ?></td>
                                                                <td><?php echo $var['Name'] ?></td>
                                                                <td><?php echo $var['Mobile'] ?></td>
                                                                <td><?php echo $var['Email_Id']?></td>
                                                                <td> </td>
                                                                <td>
                                                                <a href="Edit_IT_Team.php?id=<?php echo $var['IT_Team_Id'] ?>"> <i class="fa fa-edit"></i> </a>
                                                                <a href="delete_additteam.php?id=<?php echo $var['IT_Team_Id'] ?>"> <i class="fa fa-trash"></i> </a>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
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
</body>

</html>

   