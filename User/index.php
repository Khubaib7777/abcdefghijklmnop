<?php include('header.php');
include('../Admin/connection.php');
$q="select * from products join category on category.cat_id=products.cat_id_FK order by products.pro_id desc limit 3";
$res=mysqli_query($con,$q);

$q1="select count(*) as books from products";
$res1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($res1);


?>


<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
    <div class="justify-content-center"> <h1>latest 3 products out of <?php echo $data1['books'] ?></h1> </div>
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
        <p class="card-text mb-4"> <?php echo $data['cat_name'] ?></p>
        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
<?php } ?>
</div>
  </div>
</section>
<!-- /courses -->
<?php include('footer.php') ?>