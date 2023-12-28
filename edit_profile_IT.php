<?php include "../connectionstring.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>IT |Edit IT profile</title>
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

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>IT</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="sub-title">Edit PROFILE</h4>
                                                        <form action="update_editprofileIT.php" method="post">
                                                        <?php
                                                        $query = "SELECT * FROM it_team ";
                                                        $list = $conn->query($query);
                                                        //$list = $conn->query($query);
                                                        //$sl = 1;
                                                        //var_dump($list);
                                                        foreach($list as $var) { 
                                                            
                                                            ?>
                                                            <div class="form-group row">

                                                                <div class="col-sm-12">
                                                                    <label>EMPLOYEE NAME</label>
                                                                    <input type="text" class="form-control" id="emp" name="emp" value="<?php echo $var['Username'] ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">

                                                                <div class="col-sm-12">
                                                                    <label>USER NAME</label>
                                                                    <input type="text" class="form-control" id="usr" name="usr" value='<?php echo $var['Name'] ?>'>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="form-group row">

                                                                <div class="col-sm-12">
                                                                    <label>MOBILE NO</label>
                                                                    <input type="text" class="form-control" id="mob" name="mob" value='<?php echo $var['Mobile']; ?>'>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">

                                                                <div class="col-sm-12">
                                                                    <label>EMAIL ID</label>
                                                                    <input type="text" class="form-control" id="email" name="email" value='<?php echo $var['Email_Id']; ?>'>
                                                                </div>
                                                            </div>
<input type="hidden" class="form-control" id="dept" name="hiddenid" value="<?php echo $_GET['id'] ?>" >
<button type="submit" class="btn btn-info" name="update" id="update">Update</button>
                                                            <a href="edit_profile_IT.php" class="btn btn-danger">Cancel</a>
                                                            <?php } ?>
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