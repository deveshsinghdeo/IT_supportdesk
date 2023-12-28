<?php include '../connectionstring.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Add Complain</title>
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
                                            <h5 class="m-b-10">Add Complain</h5>
                                            <p class="m-b-0"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Manage Complain</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="addcomplain.php">Add Complain</a>
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
                                                
                                                <form action="insert_usercomplains.php" method="post">
                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                  
                                                                <label>Department</label> 
                                                                <select class="form-control" name="select" id="select">
                                                                        <option value="">Select Department</option>
                                                                        <?php
                                                                         $query="select * from department_details";
                                                                         $list=$conn->query($query);
                                                                         
                                                                         foreach($list as $var)
                                                                         {
                                                                        ?>
                                                                         <option value="<?php echo $var['Deptid'] ?>" > 
                                                                         <?php echo $var['Department'] ?>
                                                                        </option>
                                                                    
                                                                       <?php  } ?>
                                                                </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                <label>Employee Name</label>
                                                                <select class="form-control" name="empname" id="empname">
                                                                        <option value="">Select Employee Name</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                <label>Email ID</label>
                                                                <select class="form-control" name="email" id="email">
                                                                        <option value="">Select Email ID</option>
                                                                        <option value=""></option>
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">

                                                            <div class="col-sm-12">
                                                            <label>Complain Type</label>
                                                            <select class="form-control" name="complaintype" id="complaintype">
                                                            <option value="">Select Complain Type</option>
                                                             
                                                             <?php
                                                                         $query="select * from complain_type";
                                                                         $list=$conn->query($query);
                                                                         
                                                                         foreach($list as $var)
                                                                         {
                                                                        ?>
                                                                         <option value="<?php echo $var['Complain_Id'] ?>" > 
                                                                         <?php echo $var['Complain_Type'] ?>
                                                                        </option>
                                                                    
                                                                       <?php  } ?>
                                                             </select>
                                                            </div>
                                                        </div> 

                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                <label>Complain Description</label>
                                                                <select class="form-control" name="compdesc" id="compdesc">
                                                                        <option value="">Select Complain Description</option>
                                                                        
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>

                                                               
                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                <label>Forward Complain To</label>
                                                                <select class="form-control" name="fwdcomp" id="fwdcomp">
                                                                        <option value="">Select Employee Name</option>
                                                                        <?php
                                                                         $query="select * from it_team";
                                                                         $list=$conn->query($query);
                                                                         
                                                                         foreach($list as $var)
                                                                         {
                                                                        ?>
                                                                         <option value="<?php echo $var['IT_Team_Id'] ?>" > 
                                                                         <?php echo $var['Name'] ?>
                                                                        </option>
                                                                    
                                                                       <?php  } ?>
                                                                        
                                                                    </select>
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
                alert("select the Department");
                $("#complaintype").focus();
                return false;
            }
            if($("#email").val()=="")
            {
                alert("enter the Email ID");
                $("#email").focus();
                return false;
            }

            if($("#compdesc").val()=="")
            {
                alert("enter the Complain Description");
                $("#compdesc").focus();
                return false;
            }
            if($("#empname").val()=="")
            {
                alert("enter the employee name");
                $("#empname").focus();
                return false;
            }
            if($("#complaintype").val()=="")
            {
                alert("select the complain type");
                $("#complaintype").focus();
                return false;
            }
            if($("#select").val()=="")
            {
                alert("select the Department");
                $("#complaintype").focus();
                return false;
            }
            if($("#fwdcomp").val()=="")
            {
                alert("enter the forward complain to");
                $("#fwdcomp").focus();
                return false;
            }
        });
    });

        $('#select').change(function(){
            $.ajax({
                'url' : 'fetch_employee.php',
                'data' : {'deptid': $(this).val()},
                'type' : 'POST',
                'success' : function(res){
                    $('#empname').empty().append(res);
                }
            });
        });
                $('#empname').change(function(){
                    $.ajax({
                        'url' : 'fetch_email.php',
                        'data' : {'uid':$(this).val()},
                        'type' : 'POST',
                        'success' : function(res){
                            $('#email').empty().append(res); 
                        }

                    });
            });

            $('#complaintype').change(function(){
                    $.ajax({
                        'url' : 'fetch_complaindescription.php',
                        'data' : {'comp':$(this).val()},
                        'type' : 'POST',
                        'success' : function(res){
                            $('#compdesc').empty().append(res); 
                        }

                    });
            });

</script>  
</body>

</html>