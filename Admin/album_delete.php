<?php
include('connection.php');
$x=$_GET['id'];
$q="delete from albums where album_id='$x'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Deleted Succesfully');window.location.href='album_show.php'</script>";
}
else{
    echo mysqli_error($con);
}


?>