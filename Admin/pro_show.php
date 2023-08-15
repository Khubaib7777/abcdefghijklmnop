<?php include('header.php');
include('connection.php');
$q="select * from artists join type on type.type_id=artists.type_idFK";
$res=mysqli_query($con,$q);
?>
<div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Artist Profile</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>Song Type</th>
                      <th>Artist Name</th>                     
                      <th>Artist Image</th>
                      <th>Artist Detail</th>
                      <th>Update</th>
                      <th>delete</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php while($data=mysqli_fetch_assoc($res)) { ?>
                    <tr>
                      <td><?php echo $data['type_name']?></td>
                      <td><?php echo $data['artist_name']?></td>                     
                      <td><img src="<?php echo $data['artist_image']?>" height=100/></td>
                      <td><?php echo $data['artist_detail']?></td>
                      <td><a href="pro_update_form.php?id=<?php echo $data['artist_id']?>"><i class="fa fa-pencil" style="font-size:18px;color:#4ECDC4"></i></a></td>
                      <td><a href="pro_delete.php?id=<?php echo $data['artist_id']?>"><i class="fa fa-trash-o" style="font-size:18px;color:#4ECDC4"></i></a></td>
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