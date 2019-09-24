<?php
session_start();

  include ("connect.php");
       
  if (isset($_POST['submit']))
  {  
    $source=$_POST['source'];
    $destination=$_POST['destination'];
    $via=$_POST['via'];
    $changeover=$_POST['changeover']; 
    $institution_type=$_POST['institution_type'];
    $year=$_POST['year'];
    $institution_name=$_POST['institution_name'];
    $pass_type=$_POST['pass_type'];
    $amt=$_POST['amt'];
    $pay=$_POST['pay'];

    $phno=$_SESSION['phno'];
  
    $sql="UPDATE users SET source='$source',destination='$destination',via='$via',changeover='$changeover',institution_type='$institution_type',year='$year',institution_name='$institution_name',pass_type='$pass_type',amount_to_collect='$amt',payment='$pay' WHERE mobile_no='$phno' ";

    $result=mysqli_query($connect,$sql) or die ("Cannot query with database table ");

    include 'mail.php';

    session_destroy(); 
    
    if($result)
     {
      echo "<script type='text/javascript'>alert('profile updated successfully');</script>";
      header('Location: index.php');
      }
  }  
?>