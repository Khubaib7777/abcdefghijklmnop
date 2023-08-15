<?php include('header.php');
include('connection.php');
$q="select * from artists";
$res=mysqli_query($con,$q);


$x=$_GET['id'];
$q1="select * from artists join albums on artist_id=artist_idfk where album_id='$x'";
$res1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($res1);
?>


<div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Update your Album</h4>
              <form class="form-horizontal style-form" method="post" action="album_update.php" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="p_id" value="<?php echo $data1['album_id']?>">
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Artist Name</label>
                  <div class="col-sm-10">
                   <select  class="form-control" name="p_c_id">
                       <?php while($data=mysqli_fetch_assoc($res)) { ?>
                       <option value="<?php echo $data['artist_id'] ?>" 
                       <?php  if($data['artist_id']==$data1['artist_idfk'])  
                       { echo 'selected'; } 
                        ?>> <?php echo $data['artist_name'] ?> </option>
                       <?php } ?>
</select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Album Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="p_name" value="<?php echo $data1['album_name']?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Album Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="p_img" onChange="readURL(this)">
                    <img id="proimg" src="<?php echo $data1['album_image']?>" height=100/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Release Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="p_price" value="<?php echo $data1['date_released']?>">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Album year</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="p_year" value="<?php echo $data1['album_year']?>">
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