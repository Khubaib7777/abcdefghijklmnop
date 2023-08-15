<?php
session_start();
include("../Admin/connection.php");
if(isset($_POST['btn'])){
$us=$_POST['USER'];
$p=$_POST['loginPassword'];
$q="select * from users where user_name='$us' and password='$p' and role_id_FK='2'";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);
if($count==0){
  echo "<script>alert('Log In failed');window.location.href='index.php'</script>";
}
else{
  $_SESSION['USER_NAME']=$us;
  $_SESSION['USER_IMAGE']=$data['user_image'];
  echo "<script>alert('Succesfully Logged in'); window.location.href='index.php'</script>";
}
  


}
?>