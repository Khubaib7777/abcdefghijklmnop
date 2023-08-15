<?php include('header.php');
include('connection.php');
$i=$_GET['id'];
$q="select * from type where type_id='$i'";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);
?>


<div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Update your Categories</h4>

              <form class="form-horizontal style-form" method="post" action="cat_update.php">
              <input type="hidden" class="form-control" name="c_id" value="<?php echo $data['type_id'] ?>">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="c_name" value="<?php echo $data['type_name'] ?>">
                  </div>
                </div>

                <button type="submit" class="btn btn-theme" name="btn">Update</button>

              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>




<?php include('footer.php') ?>