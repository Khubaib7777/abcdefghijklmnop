<?php
include('connection.php');
if(isset($_POST['btn'])){
$category_id=$_POST['p_c_id'];
$pro_name=$_POST['p_name'];
$pro_price=$_POST['p_price'];
$pro_img_name=$_FILES['p_img']['name'];
$pro_img_tname=$_FILES['p_img']['tmp_name'];
$pro_img_size=$_FILES['p_img']['size'];
$pro_img_type=$_FILES['p_img']['type'];
$folder='mypictures/';
$path=$folder.$pro_img_name;
move_uploaded_file($pro_img_tname,$path);

if($pro_img_type=='image/png' || $pro_img_type=='image/jpg' || $pro_img_type=='image/jpeg')
{
    if($pro_img_size<=10000000){
        $q="INSERT INTO `artists`( `type_idfk`, `artist_name`, `artist_image`, `artist_detail`) VALUES ('$category_id','$pro_name','$path','$pro_price')";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Inserted');window.location.href='pro_form.php'</script>";
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
?>