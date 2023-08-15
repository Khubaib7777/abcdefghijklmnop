<?php include('header.php') ;
include('../Admin/connection.php');
$x=$_GET['id'];
$q="select * from products join category on category.cat_id=products.cat_id_FK where products.pro_id='$x' ";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);
?>


<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <!-- course thumb -->
        <img src="../Admin/<?php echo $data['pro_image'] ?>" class="../Admin/<?php echo $data['pro_image'] ?>">
      </div>
    </div>
    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2><?php echo $data['pro_name'] ?></h2>
      </div>
      <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
        <ul class="list-inline text-xl-center">
          <li class="list-inline-item mr-4 mb-3 mb-sm-0">
            <div class="d-flex align-items-center">
              <i class="ti-book text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0"><?php echo $data['cat_name'] ?></h6>
                <p class="mb-0"><?php echo $data['price'] ?></p>
              </div>
            </div>
          </li>
      
        </ul>
      </div>
      <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
        <a href="course-single.html" class="btn btn-primary">Add to Cart</a>
      </div>
      <!-- border -->
    
</section>
<?php include('footer.php') ?>