<?php include('header.php') ?>


<div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Add your Songs Categories</h4>

              <form class="form-horizontal style-form" method="post" action="cat_insert.php">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="c_name">
                  </div>
                </div>
                

                <button type="submit" class="btn btn-theme" name="btn">Add</button>

              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>




<?php include('footer.php') ?>