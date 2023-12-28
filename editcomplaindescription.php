<?php include "../connectionstring.php" ; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Edit complain description</title>
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
                                            <h5 class="m-b-10">Complain Description</h5>
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
                                            <li class="breadcrumb-item"><a href="editcomplaindescription.php">Complain Description</a>
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
                                                
                                                    <div class="card-block">
                                                        <h4 class="sub-title">Edit Complain Description</h4>
                                                        <form action="updatecomplaindescription.php" method="post">
                                                        <?php 
                                                               $query1="SELECT Complain_Id,Complain_Type from complain_type";  
                                                                 
                                                                 $list1 = $conn->query($query1);
                                                                 foreach($list1 as $var1){  ?>
                                                                 <div class="form-group row">
                                                            
                                                                 
                                                                <div class="col-sm-12">
                                                                <label>Complain Type</label>
                                                                    <select class="form-control" id="complaintype" name="complaintype">
                                                                        <option value=<?php echo $var1["Complain_Id"] ?>><?php echo $var1['Complain_Type']; ?></option>
                                                                        
                                                                        
                                                                    </select>
                                                                 <?php } ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                             <?php   
                                                            $query= "SELECT Complain_Desc FROM complain_type_description WHERE Complain_Desc_Id='".$_GET['id']."'";
                                                            $list = $conn->query($query);
                                                            //var_dump($list);exit;
                                                            foreach($list as $var){ 
                                                                                                                                                                                  ?>                                        
                                                                <div class="col-sm-12">
                                                                    <label>Complain Description</label>
                                                                    <input type="text" class="form-control" name="compdesc" id="compdesc" value="<?php echo $var['Complain_Desc'] ;?>">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" class="form-control" id="compdes" name="hiddenid" value="<?php echo $_GET['id'] ?>" >
                                                            <button type="submit" class="btn btn-info" name="submit" id="submit">Update</button>
                                                            <a href="addcomplaindescription.php" class="btn btn-danger">Cancel</a>
                                                        </form>
                                                        <?php  } ?>
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
            if($("#complaintype").val()=="")
            {
                alert("select the complain type");
                $("#complaintype").focus();
                return false;
            }
            if($("#compdesc").val()=="")
            {
                alert("enter the Complain Description");
                $("#compdesc").focus();
                return false;
            }
        });
    });
</script>    
</body>

</html>
