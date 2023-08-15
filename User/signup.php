<?php
include('../Admin/connection.php');
if(isset($_POST['btn'])){
$user_name=$_POST['signupName'];
$user_password=$_POST['signupPassword'];
$user_img_name=$_FILES['signupImage']['name'];
$user_img_tname=$_FILES['signupImage']['tmp_name'];
$user_img_size=$_FILES['signupImage']['size'];
$user_img_type=$_FILES['signupImage']['type'];
$folder='mypictures/users/';
$path=$folder.$user_img_name;
$path1='../Admin/'.$folder.$user_img_name;
move_uploaded_file($user_img_tname,$path1);

if($user_img_type=='image/png' || $user_img_type=='image/jpg' || $user_img_type=='image/jpeg')
{
    if($user_img_size<=10000000){
        $q="INSERT INTO `users`( `role_id_FK`, `user_name`, `password`, `user_image`) VALUES (2,'$user_name','$user_password','$path')";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Inserted');window.location.href='index.php'</script>";
}
else{
    echo mysqli_error($con);
}
    }

    else{
        echo "<script>alert('size error');window.location.href='index.php'</script>";
    }
}
else{
    echo "<script>alert('format error');window.location.href='index.php'</script>";
}

}
?>