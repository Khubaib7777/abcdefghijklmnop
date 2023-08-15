<?php
include('connection.php');
if(isset($_POST['btn'])){
$role_name=$_POST['r_name'];
$q="insert into role(role_name) values('$role_name')";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Inserted');window.location.href='role_form.php'</script>";
}
else{
    echo mysqli_error($con);
}
}


?>