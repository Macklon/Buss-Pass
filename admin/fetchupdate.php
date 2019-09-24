<?php
include("connect.php");
mysqli_query($conn,"update  users set pass_status = 1 where uid=".$_POST["id"]."");
include 'mail_approval.php';
?>