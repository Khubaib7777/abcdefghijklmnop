<?php include('header.php');
include('../Admin/connection.php');
if(isset($_GET['id'])){
  $x=$_GET['id'];
  if(isset($_POST['btn'])){
    $q="select * from products join category on category.cat_id=products.cat_id_FK order by products.price where category.cat_id='$x'";
  }
  else{
    $q="select * from products join category on category.cat_id=products.cat_id_FK where category.cat_id='$x' ";
  }


}
//Search
else{
  if(isset($_POST['btn'])){
    $q="select * from products join category on category.cat_id=products.cat_id_FK order by products.price";
  }else{
    $q="select * from products join category on category.cat_id=products.cat_id_FK";
  }
 
 
}
$res=mysqli_query($con,$q); ?>
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.html">Home</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Our Courses</li>
        </ul>
        <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- courses -->
<form action="" method="post">
<input type="submit" class="btn btn-primary btn-sm" name="btn" value="lower to higher A/c to price"/>
</form> 


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
<!-- /courses -->
<?php include('footer.php') ?>