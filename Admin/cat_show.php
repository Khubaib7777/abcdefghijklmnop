<?php include('header.php');
include('connection.php');
$q="select * from type";
$res=mysqli_query($con,$q);
?>
<div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Songs Category Table</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th class="numeric">Id</th>
                      <th>Category Name</th>
                      <th>Update</th>
                      <th>delete</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php while($data=mysqli_fetch_assoc($res)) { ?>
                    <tr>
                      <td><?php echo $data['type_id']?></td>
                      <td><?php echo $data['type_name']?></td>
                      <td><a href="cat_update_form.php?id=<?php echo $data['type_id']?>"><i class="fa fa-pencil" style="font-size:18px;color:#4ECDC4"></i></a></td>
                      <td><a href="cat_delete.php?id=<?php echo $data['type_id']?>"><i class="fa fa-trash-o" style="font-size:18px;color:#4ECDC4"></i></a></td>
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