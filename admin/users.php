<?php
//     session_start();

//         if (isset($_SESSION['admin']) == true) {

//         } else { 
// header('Location: index.php');
//         }
    // header("Refresh:3; url=users.php");

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>BUSPASS | Users</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                            <a href="#">
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
                    <li class="active">
                        <a href=""><i class="fa fa-user"></i> <span class="nav-label">Manage Users</span></a>
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
                        <i class="fa fa-bell"></i>  <span class="label label-primary">1</span>
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
                <h5>This is where you get stats of users activities</h5>
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
                            <input type="search" id="myInput" class="" placeholder="" aria-controls="">
                        </label>
                    </div>
               <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Personal Info</th>
        <th>BusPass Info</th>
        <th>Pass Status</th>
        <th></th>
      </tr>
    </thead>

    <?php
            include ("connect.php");
            $disp="SELECT * FROM users ORDER by uid DESC ";
            $result=mysqli_query($conn,$disp);
            
//              if(isset($_GET["delete"])){
//      mysqli_query($conn,"delete from users where uid=".$_GET["delete"]."");

//     // $deleteFile="images/".$_GET['file'];
//     // if (is_file($deleteFile)) {
//     // unlink($deleteFile);
//     // }
// }
            while ($row=mysqli_fetch_array($result)) :
            ?>
          
    <tbody id="myTable">
      <tr>  
        <td>
<?php echo $row['name']; ?>
        </td>
        <td><?php echo $row['email']; ?></td>
        <td>
            <button data-toggle="modal" data-target="#myModal" class='btn label label-primary'>
                <i class="fa fa-eye" aria-hidden="true"> View</i>
             </button>
                <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Personal Information</h4>
                          </div>
                          <div class="modal-body row">
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Full Name </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-8 control-label"><?php echo $row['name']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Mobile Number </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-8 control-label"><?php echo $row['mobile_no']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Mother Name </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-8 control-label"><?php echo $row['mother_name']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Father Name </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-8 control-label"><?php echo $row['father_name']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Email </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-8 control-label"><?php echo $row['email']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Date of Birth </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-8 control-label"><?php echo $row['dob']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Caste </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-8 control-label"><?php echo $row['caste']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Gender </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-8 control-label"><?php echo $row['gender']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Address </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-8 control-label"><?php echo $row['address']; ?></label>
                            </div>
                           

                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>
        </td>
        <td>
            <button data-toggle="modal" data-target="#myModal2" class='btn label label-primary'>
                <i class="fa fa-eye" aria-hidden="true"> View
                </i>
            </button>
            <!-- Modal -->
                    <div id="myModal2" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Buspass Information</h4>
                          </div>
                          <div class="modal-body row">
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Source </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-7 control-label"><?php echo $row['source']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Destination </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-7 control-label"><?php echo $row['destination']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Via </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-7 control-label"><?php echo $row['via']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Changeover </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-7 control-label"><?php echo $row['changeover']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Institution Type </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-7 control-label"><?php echo $row['institution_type']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Year </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-7 control-label"><?php echo $row['year']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Institution name </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-7 control-label"><?php echo $row['institution_name']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Pass Type </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-7 control-label"><?php echo $row['pass_type']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Amount to collect </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-7 control-label"><?php echo $row['amount_to_collect']; ?></label>
                            </div>
                             <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Payment </label>
                                <label class="col-sm-1 control-label">: </label>
                                <label for="" class="col-sm-7 control-label"><?php echo $row['payment']; ?></label>
                            </div>

                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>
        </td>

        <td>
            <?php if($row['pass_status'] == '1') { ?>
                <label class='label label-success'>Approved</label>
             <?php } else { ?>
                <a href="?appr=<?php echo $row['uid']; ?>"><button id="up" data-id="<?php echo $row['uid'] ?>" class='btn label label-danger' name="appr">Approve</button></a>
             <?php } ?>
        </td>

        <td style="text-align: center;">
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a type="button" data-toggle="modal" data-target="#editBrandModel" onclick=""> <i class="glyphicon glyphicon-edit"></i> Edit</a></li>
                <li><a href=?delete=<?php echo $row['uid']; ?> type="button" data-toggle="modal"  data-target="#removeMemberModal" onclick=""> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>       
              </ul>
            </div>
        </td>

      </tr>
    </tbody>
    <?php
          if(isset($_GET["appr"])){
     mysqli_query($conn,"update  users set pass_status = '1' where uid=".$_GET["appr"]."");
     $_SESSION['name']=$row['name'];
     $_SESSION['email']=$row['email'];
     include 'mail_approval.php';
            }

            if(isset($_GET["delete"])){
     mysqli_query($conn,"delete from users where uid=".$_GET["delete"]."");

    // $deleteFile="images/".$_GET['file'];
    // if (is_file($deleteFile)) {
    // unlink($deleteFile);
    // }
}
         ?>
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

        <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });

            // $(document).on('click','#up',function(){
            //     var id=$(this).data("id");
            //          $.ajax({
            //              url: "fetchupdate.php",
            //              type: "POST",
            //              data: { id: id},                   
            //              success: function(data)
            //                          {
            //                               alert(data);                       
            //                          }
            //          });          
            // })
        });
</script>

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