<?php
//     session_start();

//         if (isset($_SESSION['admin']) == true) {

//         } else { 
// header('Location: index.php');
//         }
header("Refresh:3;")
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>BUSPASS | HomePage</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
 <style type="text/css">
        .no{
            margin: 0px;font-weight:bold;font-size: 8em;color: black;
        }
        .text{
            margin: 0px;padding:10px;color: black;
        }
        .box{
            height: 150px;width: 200px;
        }
        .bg{
        background-image: url('bg1.jpg');height: 540px;background-position: center;background-repeat: no-repeat;background-size: cover;
    }
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="" width="100px" height="100px" src="img/profile_small.png" />
                             </span>
                            <a href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin</strong>
                              </span> </span> </a>
                            
                        </div>
                        <div class="logo-element">
                            <img src="">
                        </div>
                    </li>
                    <li class="active">
                        <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
                        
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-user" aria-hidden="true"></i> <span class="nav-label">Manage Users</span></a>
                    </li>
                    <li>
                        <a href="feedback.php"><i class="fa fa-comments-o"></i> <span class="nav-label">Feedbacks</span></a>
                    </li>      
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <h1 style="font-size: 2em;" class="navbar-minimalize minimalize-styl-2 "><img src="logo.png" width="40px" height="40px"> BUSPASS </h1>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                
                
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-info fa-fw"></i> Document verification complete
                                    <span class="pull-right text-muted small">  1 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-share fa-fw"></i> Document shared to user2
                                    <span class="pull-right text-muted small">  2 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-info fa-fw"></i> Please link your email
                                    <span class="pull-right text-muted small">  4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
               
            </ul>

        </nav>
        </div>

        <div class="col-lg-12">
            <div class="row wrapper border-bottom ">
                 <h5>Your Dashboard</h5>
                 </div>
                 <div style="height: 475px;" class="ibox-content bg">
                    <div class="col-lg-2"> </div>
            <div class="col-lg-3 box">
              <?php
            include ("connect.php");
            $disp="SELECT uid FROM users";
            $result=mysqli_query($conn,$disp);
            $row_cnt = mysqli_num_rows($result);
            ?>
            <h1 class="text-center no">
                <?php echo $row_cnt ?>
            </h1>
            <h3 class="text-center text">Total No of Users</h3>
            </div>
            <div class="col-lg-3"> </div>
            <div class="col-lg-2 box">
                <?php
            
            // $disp="SELECT user_id FROM user_register";
            // $result=mysqli_query($conn,$disp);
            // $row_cnt = mysqli_num_rows($result);
            ?>
            <h1 class="text-center no">
                  5
            </h1>
            <h3 class="text-center text">Total No of Buses</h3>
        </div>
    
        
        
<div class="col-lg-12" style="margin-top: 50px">
    <div class="col-lg-2"> </div>
        <div class="col-lg-2 box" >
               <?php
            
            $disp="SELECT uid FROM users where pass_status=' ' ";
            $result=mysqli_query($conn,$disp);
            $row_cnt = mysqli_num_rows($result);
            ?>   
            <h1 class="text-center no">
             
            <?php echo $row_cnt ?>
            </h1>
            <h3 class="text-center text">Total No request pending</h3>
        </div>
        <div class="col-lg-3"> </div>
       <div class="col-lg-2 box" >
                <?php
            
            $disp="SELECT fid FROM feedback";
            $result=mysqli_query($conn,$disp);
            $row_cnt = mysqli_num_rows($result);
            ?>
            <h1 class="text-center no">
               <?php echo $row_cnt ?>
            </h1>
            <h3 class="text-center text">Feedbacks</h3>
        </div>
    </div>

    </div>


        <!-- <div class="col-lg-1">
           
        </div>

        <div class="col-lg-4 white-bg">
           <div class="row wrapper border-bottom ">
                <h5>Latest Notification</h5>
            </div>
            <div class="row wrapper border-bottom ">
               <input class="btn  btn-lg btn-warning" type="submit" value="GO PREMIUM" name="GO PREMIUM">
            </div>


        </div> -->
<!-- 
                <div class="footer">
                    <div class="pull-right">
                        
                    </div>
                    <div>
                        <strong>Copyright</strong>E-vault &copy; 2017-2018
                    </div>
                </div> -->
            </div>
        </div>

        
        
       
    

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Welcome <?php echo $_SESSION['admin'] ?>');

            }, 1300);


            
    </script>
    
</body>
</html>
