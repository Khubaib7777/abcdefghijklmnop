<?php include('header.php');
include('connection.php');
$q="select * from users join role on role.role_id=users.role_idfk where users.user_name='$_SESSION[ADMIN_NAME]'";
$res=mysqli_query($con,$q);
?>
<div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> User Profile</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>ROLE</th>
                      <th>NAME</th>
                      <th>PASSWORD</th>
                      <th>IMAGE</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php while($data=mysqli_fetch_assoc($res)) { ?>
                    <tr>
                      <td><?php echo $data['role_name']?></td>
                      <td><?php echo $data['user_name']?></td>
                      <td><?php echo $data['password']?></td>
                      <td><img src="<?php echo $data['user_image']?>" height=100/></td>
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