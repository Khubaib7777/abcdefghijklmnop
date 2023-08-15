<?php
$con=mysqli_connect('localhost','root','','sound');
if(!$con){
    echo "<script>alert('connction error');window.location.href='index.php'</script>";
}


?>