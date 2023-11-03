<?php 
include "config.php";
$userid=$_GET['id'];

$sql="Delete from user where user_id={$userid}";
if(mysqli_query($conn,$sql)){
    header("location: {$hostname}/admin/users.php");
}else{
    echo"<p style='color:red;margin 10px 0;>Can't Delete user Record.</p>";
}
?>