<?php include('header.php');
include('connection.php');
$q="select * from type";
$res=mysqli_query($con,$q);

?>


<div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Add Artist</h4>

              <form class="form-horizontal style-form" method="post" action="pro_insert.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Song Type</label>
                  <div class="col-sm-10">
                   <select  class="form-control" name="p_c_id">
                       <?php while($data=mysqli_fetch_assoc($res)) { ?>
                       <option value="<?php echo $data['type_id'] ?>"> <?php echo $data['type_name'] ?> </option>
                       <?php } ?>
</select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Artist Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="p_name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Artist Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="p_img" onChange="readURL(this)">
                    <img id="proimg"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Artist Detail</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="p_price">
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