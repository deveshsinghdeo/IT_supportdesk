<?php include "../connectionstring.php" ; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>IT | change password</title>
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
                                            <h5 class="m-b-10">Change password</h5>
                                            <p class="m-b-0"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">My settings</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="change_password_IT.php">Change Password</a>
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
                                            <form action="update_changepassword.php" method="post">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>CHANGE PASSWORD</h5>
                                                    </div>
                                                    
                                                    <div class="card-block">
                                                        <h4 class="sub-title">OLD PASSWORD</h4>
                                                    
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="oldpwd" id="oldpwd">
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="sub-title">NEW PASSWORD</h4>
                                                        
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="newpwd" id="newpwd">
                                                                </div>
                                                            </div>
                                                    </div>
                                                     <div class="card-block">
                                                        <h4 class="sub-title">CONFIRM PASSWORD</h4>
                                                        
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="confpwd" id="confpwd">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                                                                            
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                            <button type="submit" class="btn btn-info" name="submit" id="submit">Update</button>
                                                            <a href="department.php" class="btn btn-danger">Cancel</a>

                                                                </div>
                                                            </div>
                                                    </div>
                                                           
                                                    </form>
                                                    
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
            if($("#oldpwd").val()=="")
            {
                alert("Enter the old password");
                $("#oldpwd").focus();
                return false;
            }
            if($("#newpwd").val()=="")
            {
                alert("enter the new passsword");
                $("#newpwd").focus();
                return false;
            }
            if($("#confpwd").val()=="")
            {

                alert("enter the confirm password");
                $("#confpwd").focus();
                return false;
            }
            if($("#confpwd").val()!=$("#newpwd").val())
            {

                alert("please confirm your password carefully");
                $("#confpwd").focus();
                return false;
            }

        });
   });
   </script>
   <script>
   $('#oldpwd').change(function(){
    $.ajax({
        url:'fetchpwd.php',
        data: {'oldpas':$(this).val()},
        type: 'POST',
        success:function(response){
            if(response==0)
            {
                alert('Password does not exist');
                $('#oldpwd').val('');
                return false;
            }
        }
    });
   });
</script>
   
</body>

</html>
