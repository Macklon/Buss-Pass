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
        .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
.sbar{
    float: right;
    text-align: right;
    padding: 10px
}
.ebar{
    float: left;
    padding: 10px
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
                            <a  href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin</strong>
                              </span> </span> </a>
                           
                        </div>
                        <div class="logo-element">
                            <img src="">
                        </div>
                    </li>
                    <li >
                        <a href="dashboard.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
                        
                    </li>
                    <li >
                        <a href="users.php"><i class="fa fa-user"></i> <span class="nav-label">Manage Users</span></a>
                    </li>
                    <li class="active">
                        <a href="Feedback.php"><i class="fa fa-comments-o"></i> <span class="nav-label">Feedbacks</span></a>
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
                        <i class="fa fa-bell"></i>  <span class="label label-primary">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-info fa-fw"></i> Documents verification complete
                                    <span class="pull-right text-muted small">  1 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-share fa-fw"></i> feedback sent
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
                                <a href="#">
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
            <div class="row wrapper border-bottom">
                <h5>This is where you can view Feedbacks</h5>
            </div>
            <br>
              
                <div class="ibox-content">
                    <div class="ebar" id="">
                        <label>Show 
                            <select name="" aria-controls="" class="">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> 
                        entries</label>
                    </div>

                    <div id="" class="sbar">
                        <label>Search:
                            <input type="search" class="" placeholder="" aria-controls="">
                        </label>
                    </div>
               <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Mobile no</th>
        <th>Email</th>
        <th>Department</th>
        <th>Feedback type</th>
        <th>Description</th>
      </tr>
    </thead>
    <?php
            include ("connect.php");
            $disp="SELECT * FROM feedback ORDER by fid DESC ";
            $result=mysqli_query($conn,$disp);

            while ($row=mysqli_fetch_array($result)) :
            ?>

      <tr>  
        <td>
           <?php echo $row['name']; ?>
        </td>
        <td>
           <?php echo $row['mobile_no']; ?>
        </td>
        <td>
           <?php echo $row['email']; ?>
        </td>
        <td>
           <?php echo $row['department']; ?>
        </td>
        <td>
           <?php echo $row['feedback_type']; ?>
        </td>
        <td>
           <?php echo $row['feedback_description']; ?>
        </td>
        
      </tr>
    </tbody>
    <?php endwhile ?>
  </table> 

            </div>
        </div>

                <!-- <div class="footer">
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


    
</body>
</html>