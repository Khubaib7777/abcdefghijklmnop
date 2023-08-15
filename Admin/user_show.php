<?php include('header.php');
include('connection.php');
$q="select * from users join role on role.role_id=users.role_idfk";
$res=mysqli_query($con,$q);
?>
<div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> User Table</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>Role</th>
                      <th>Name</th>
                      <th>Image</th>
                      <!-- <th>Update</th>
                      <th>delete</th> -->
                    </tr>
                  </thead>
                  <tbody>

                  <?php while($data=mysqli_fetch_assoc($res)) { ?>
                    <tr>
                      <td><?php echo $data['role_name']?></td>
                      <td><?php echo $data['user_name']?></td>
                      <td><img src="<?php echo $data['user_image']?>" height=100/></td>
                      <!-- <td><a href="pro_update_form.php?id=<?php echo $data['pro_id']?>"><i class="fa fa-pencil" style="font-size:18px;color:#4ECDC4"></i></a></td>
                      <td><a href="pro_delete.php?id=<?php echo $data['pro_id']?>"><i class="fa fa-trash-o" style="font-size:18px;color:#4ECDC4"></i></a></td> -->
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