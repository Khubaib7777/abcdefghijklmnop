<?php include('header.php');
include('connection.php');
$q="select count(*) as total from artists";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);


$q1="select count(*) as user from users where role_idfk='2'";
$res1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($res1);


$q2="select count(*) as employee from users where role_idfk='1'";
$res2=mysqli_query($con,$q2);
$data2=mysqli_fetch_assoc($res2);

$q3="select count(*) as total from Albums";
$res=mysqli_query($con,$q3);
$data=mysqli_fetch_assoc($res);

$q4="select count(*) as total from audio";
$res=mysqli_query($con,$q4);
$data=mysqli_fetch_assoc($res);

$q5="select count(*) as total from video";
$res=mysqli_query($con,$q5);
$data=mysqli_fetch_assoc($res);

$q6="select count(*) as total from feedback";
$res=mysqli_query($con,$q6);
$data=mysqli_fetch_assoc($res);

$q7="select count(*) as total from type";
$res=mysqli_query($con,$q7);
$data=mysqli_fetch_assoc($res);


?>

<div class="row mt">
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>Total Artist</h5>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p>Usage<br/>Increase:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2><?php echo $data['total'] ?></h2>
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>Total Albums</h5>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p>Usage<br/>Increase:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2><?php echo $data['total'] ?></h2>
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>Total Audio Songs</h5>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p>Usage<br/>Increase:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2><?php echo $data['total'] ?></h2>
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>Total Video Songs</h5>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p>Usage<br/>Increase:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2><?php echo $data['total'] ?></h2>
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>Feed back</h5>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p>Usage<br/>Increase:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2><?php echo $data['total'] ?></h2>
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
              <!-- /col-md-4-->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Total Users</h5>
                  </div>
                 
                  <p></p>
                  <footer>
                    <div class="pull-left">
                      <h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
                    </div>
                    <div class="pull-right">
                      <h5><?php echo $data1['user'] ?></h5>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>Admin</h5>
                  </div>
                  <div class="chart mt">
                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
                  </div>
                  <p class="mt"><b> <?php echo $data2['employee']?> </b></p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
<?php include('footer.php') ?>