<?php
include('connection.php');
if(isset($_POST['btn'])){
$p_id=$_POST['p_id'];
$cat=$_POST['p_c_id'];
$p_name=$_POST['p_name'];
$p_detail=$_POST['p_detail'];
$p_image_name=$_FILES['p_img']['name'];
$p_image_tname=$_FILES['p_img']['tmp_name'];
$p_image_size=$_FILES['p_img']['size'];
$p_image_type=$_FILES['p_img']['type'];
if(is_uploaded_file($_FILES['p_img']['tmp_name'])){
    $folder="mypictures/";
$path=$folder.$p_image_name;
if($p_image_type=="image/png" || $p_image_type=="image/jpg"  ||  $p_image_type=="image/jpeg"){
if($p_image_size<1000000000){
$q="UPDATE `artists` SET `type_idfk`='$cat',
`artist_name`='$p_name',`artist_image`='$path',`artist_detail`='$p_detail' WHERE artist_id='$p_id'";
move_uploaded_file($p_image_tname,$path);
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('updated');window.location.href='pro_show.php'</script>";
}
else{
    echo mysqli_error($con);
}

}
else{
    echo "<script>alert('size error');window.location.href='pro_show.php'</script>";
}
}
else{
    echo "<script>alert('format error');window.location.href='pro_show.php'</script>";
}
}

}
?>