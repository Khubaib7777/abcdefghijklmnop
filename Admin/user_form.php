<?php include('header.php');
include('connection.php');
$q="select * from role";
$res=mysqli_query($con,$q);

?>


<div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Add your User</h4>

              <form class="form-horizontal style-form" method="post" action="user_insert.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Role Name</label>
                  <div class="col-sm-10">
                   <select  class="form-control" name="u_r_id">
                       <?php while($data=mysqli_fetch_assoc($res)) { ?>
                       <option value="<?php echo $data['role_id'] ?>"> <?php echo $data['role_name'] ?> </option>
                       <?php } ?>
</select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">User Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="u_name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">User Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="u_img" onChange="readURL(this)">
                    <img id="proimg"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">User Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="u_pass">
                  </div>
                </div>
                <button type="submit" class="btn btn-theme" name="btn">Add</button>

              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>


 <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js">
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
                   .css( "visibility", "visible" );		
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<?php include('footer.php') ?>