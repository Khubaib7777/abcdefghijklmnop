<?php
include('connection.php');
if(isset($_POST['btn'])){
$category_name=$_POST['c_name'];
$q="insert into type(type_name) values('$category_name')";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Inserted');window.location.href='cat_form.php'</script>";
}
else{
    echo mysqli_error($con);
}
}


?>