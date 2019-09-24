<?php
session_start();

  include ("connect.php");
           
  if (isset($_POST['submit']))
  {  
    $name=$_POST['name'];
    $phno=$_POST['mobile_no'];
    $dob=$_POST['dob'];
    $mname=$_POST['mother_name']; 
    $fname=$_POST['father_name'];
    $caste=$_POST['caste'];
    $gen=$_POST['gender'];
    $email=$_POST['email'];
    $add=$_POST['address'];
    $upload_image=$_FILES["myimage"][ "name" ];
    $folder="img/";
    move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);

    
    $sql="INSERT INTO users (name,mobile_no,dob,mother_name,father_name,caste,gender,email,address,image_path,image_name) VALUES ('$name','$phno','$dob','$mname','$fname','$caste','$gen','$email','$add','$folder','$upload_image') ";

    $result=mysqli_query($connect,$sql) or die('error');

    $_SESSION["phno"] = $phno;
    $_SESSION["email"] = $email;
    $_SESSION["name"] = $name;

    if($result)
     {
      header('Location: registerv2.html');
      }
  }  
?>