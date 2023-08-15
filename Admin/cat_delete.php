<?php
include('connection.php');
$i=$_GET['id'];
$q="delete from type where type_id='$i'";
$res=mysqli_query($con,$q);
if($res)
{
    echo "<script>alert('Deleted Succesfully');window.location.href='cat_show.php'</script>";
}
else{
    echo mysqli_error($con);
}

?>