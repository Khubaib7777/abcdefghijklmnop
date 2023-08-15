<?php include('header.php');
include('connection.php');
$q="select * from type";
$res=mysqli_query($con,$q);


$x=$_GET['id'];
$q1="select * from artists where artist_id='$x'";
$res1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($res1);
?>


<div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Artist Profile Update </h4>

              <form class="form-horizontal style-form" method="post" action="pro_update.php" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="p_id" value="<?php echo $data1['artist_id']?>">
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Song Type</label>
                  <div class="col-sm-10">
                   <select  class="form-control" name="p_c_id">
                       <?php while($data=mysqli_fetch_assoc($res)) { ?>
                       <option value="<?php echo $data['type_id'] ?>" <?php  if($data['type_id']==$data1['type_idfk'])  { echo 'selected'; }  ?>> <?php echo $data['type_name'] ?> </option>
                       <?php } ?>
</select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Artist Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="p_name" value="<?php echo $data1['artist_name']?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Artist Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="p_img" onChange="readURL(this)">
                    <img id="proimg" src="<?php echo $data1['artist_image']?>" height=100/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Artist detail</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="p_detail" value="<?php echo $data1['artist_detail']?>">
                  </div>
                </div>
               
                <button type="submit" class="btn btn-theme" name="btn">Update</button>

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