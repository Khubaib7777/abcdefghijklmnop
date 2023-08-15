<?php
include('connection.php');
$x=$_GET['id'];
$q="delete from artists where artist_id='$x'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Deleted Succesfully');window.location.href='pro_show.php'</script>";
}
else{
    echo mysqli_error($con);
}


?>