<?php
session_start();
if($_SESSION['ADMIN_NAME']==NULL){
  header('location:login.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<?php

function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();

?>
<body>
  <section id="container" >
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header bg-warning" >
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside >
      <div id="sidebar" class="nav-collapse bg-primary">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="<?php echo $_SESSION['ADMIN_IMAGE'] ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION['ADMIN_NAME'] ?></h5>
          <li class="mt">
            <a class="<?php echo $current_page == 'index.php' ? 'active':NULL ?>" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="<?php echo $current_page == 'cat_form.php' || $current_page == 'cat_show.php' || $current_page == 'cat_update_form.php' ? 'active':NULL ?>">
              <i class="fa fa-cogs"></i>
              <span>Song Type Category</span>
              </a>
            <ul class="sub">
              <li><a href="cat_form.php" >Add Songs</a></li>
              <li><a href="cat_show.php">show Songs</a></li>              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;"  class="<?php echo $current_page == 'pro_form.php' || $current_page == 'pro_show.php' || $current_page == 'pro_update_form.php' ? 'active':NULL ?>">
              <i class="fa fa-cogs"></i>
              <span>Artists</span>
              </a>
            <ul class="sub">
              <li><a href="pro_form.php">Add Artists</a></li>
              <li><a href="pro_show.php">Show Artists</a></li>
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;"  class="<?php echo $current_page == 'pro_form.php' || $current_page == 'pro_show.php' || $current_page == 'pro_update_form.php' ? 'active':NULL ?>">
              <i class="fa fa-cogs"></i>
              <span>Albums</span>
              </a>
            <ul class="sub">
              <li><a href="album_form.php">Add Albums</a></li>
              <li><a href="album_show.php">show Albums</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;"  class="<?php echo $current_page == 'pro_form.php' || $current_page == 'pro_show.php' || $current_page == 'pro_update_form.php' ? 'active':NULL ?>">
              <i class="fa fa-cogs"></i>
              <span>Audio Songs</span>
              </a>
            <ul class="sub">
              <li><a href="pro_form.php">Add Songs</a></li>
              <li><a href="pro_show.php">show Songs</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;"  class="<?php echo $current_page == 'pro_form.php' || $current_page == 'pro_show.php' || $current_page == 'pro_update_form.php' ? 'active':NULL ?>">
              <i class="fa fa-cogs"></i>
              <span>Video Songs</span>
              </a>
            <ul class="sub">
              <li><a href="pro_form.php">Add videos</a></li>
              <li><a href="pro_show.php">Show videos</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;"  class="<?php echo $current_page == 'pro_form.php' || $current_page == 'pro_show.php' || $current_page == 'pro_update_form.php' ? 'active':NULL ?>">
              <i class="fa fa-cogs"></i>
              <span>Feed-Back</span>
              </a>
            <ul class="sub">
              <li><a href="pro_form.php">Reviews</a></li>
              <li><a href="pro_show.php">Ratings</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;"  class="<?php echo $current_page == 'role_form.php' || $current_page == 'role_show.php' || $current_page == 'role_update_form.php' ? 'active':NULL ?>">
              <i class="fa fa-cogs"></i>
              <span>Roles</span>
              </a>
            <ul class="sub">
              <li><a href="role_form.php">Add Role</a></li>
              <li><a href="role_show.php">Show Role</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;"  class="<?php echo $current_page == 'user_form.php' || $current_page == 'user_show.php' || $current_page == 'user_update_form.php' ? 'active':NULL ?>">
              <i class="fa fa-cogs"></i>
              <span>Users</span>
              </a>
            <ul class="sub">
              <li><a href="user_form.php">Add Users</a></li>
              <li><a href="user_show.php">Show Users</a></li>
            </ul>
          </li>




        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
    <section class="wrapper">
        <div class="row">