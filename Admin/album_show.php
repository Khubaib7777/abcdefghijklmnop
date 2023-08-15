<?php include('header.php');
include('connection.php');
$q="select * from albums join artists on artists.artist_id=albums.artist_idfk";
$res=mysqli_query($con,$q);
?>
<div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Albums</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>Artist Name</th>
                      <th>Album Name</th>                      
                      <th>Album Image</th>
                      <th>Release Date</th>
                      <th>Album Year</th>
                      <th>Update</th>
                      <th>delete</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php while($data=mysqli_fetch_assoc($res)) { ?>
                    <tr>
                      <td><?php echo $data['artist_name']?></td>
                      <td><?php echo $data['album_name']?></td>

                     
                      <td><img src="<?php echo $data['album_image']?>" height=100/></td>
                      <td><?php echo $data['date_released']?></td>
                      <td><?php echo $data['album_year']?></td>
                      <td><a href="album_update_form.php?id=<?php echo $data['album_id']?>"><i class="fa fa-pencil" style="font-size:18px;color:#4ECDC4"></i></a></td>
                      <td><a href="album_delete.php?id=<?php echo $data['album_id']?>"><i class="fa fa-trash-o" style="font-size:18px;color:#4ECDC4"></i></a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>

        <?php include('footer.php') ?>