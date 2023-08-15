<?php
include('connection.php');
if(isset($_POST['btn'])){
$category_name=$_POST['c_name'];
$id=$_POST['c_id'];
$q="update type set type_name='$category_name' where type_id='$id'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Updated Successfully');window.location.href='cat_show.php'</script>";
}
else{
    echo mysqli_error($con);
}
}


?>