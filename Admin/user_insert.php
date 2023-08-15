<?php
include('connection.php');
if(isset($_POST['btn'])){
$role_id=$_POST['u_r_id'];
$user_name=$_POST['u_name'];
$user_password=$_POST['u_pass'];
$user_img_name=$_FILES['u_img']['name'];
$user_img_tname=$_FILES['u_img']['tmp_name'];
$user_img_size=$_FILES['u_img']['size'];
$user_img_type=$_FILES['u_img']['type'];
$folder='mypictures/users/';
$path=$folder.$user_img_name;
move_uploaded_file($user_img_tname,$path);

if($user_img_type=='image/png' || $user_img_type=='image/jpg' || $user_img_type=='image/jpeg')
{
    if($user_img_size<=10000000){
        $q="INSERT INTO `users`( `role_idfk`, `user_name`, `password`, `user_image`) VALUES ('$role_id','$user_name','$user_password','$path')";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Inserted');window.location.href='user_form.php'</script>";
}
else{
    echo mysqli_error($con);
}
    }

    else{
        echo "<script>alert('size error');window.location.href='user_show.php'</script>";
    }
}
else{
    echo "<script>alert('format error');window.location.href='user_show.php'</script>";
}

}
?>