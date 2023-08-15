<?php
include('../admin/connection.php');
if(isset($_POST['q'])){
$text=$_POST['q'];
$q="select * from products join category on category.cat_id=products.cat_id_FK where products.pro_name like '%$text%'";
}
else{
    $q="select * from products join category on category.cat_id=products.cat_id_FK";
}
$res=mysqli_query($con,$q); 



?>



<section class="section">

  <div class="container">
    <!-- course list -->
   

<div class="row justify-content-center">
  <!-- course item -->
<?php while($data=mysqli_fetch_assoc($res)) { ?>
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="../Admin/<?php echo $data['pro_image'] ?>" alt="course thumb">
      <div class="card-body">
        
        <a href="course-single.html">
          <h4 class="card-title"><?php echo $data['pro_name'] ?></h4>
        </a>
        <p class="card-text mb-4"> <?php echo $data['price'] ?></p>
        <p class="card-text mb-4"> <?php echo $data['cat_name'] ?></p>
        <a href="book_single.php?id=<?php echo $data['pro_id'] ?>" class="btn btn-primary btn-sm">Read More</a>
      </div>
    </div>
  </div>
<?php } ?>
</div>
  </div>
</section>