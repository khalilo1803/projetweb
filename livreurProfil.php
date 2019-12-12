<?php
include("connexion.php");
if(isset($_GET['nomlivreur']))
$nomlivreur="";

if(isset($_GET['prenomlivreur']))
$prenomlivreur="";

if(isset($_GET['ncin']))
$ncin="";

if(isset($_GET['idlivreur']))
$idlivreur="";
if(isset($_GET['npermis']))
$npermis="";

$queryResult=$con ->query("SELECT * FROM livreur order by 'idlivreur' limit 1 ");
    
    while($row=$queryResult -> fetch_assoc()){
        
        $nomlivreur = $row['nomlivreur'];
        $prenomlivreur= $row['prenomlivreur'];
        $ncin= $row['ncin'];
        $idlivreur= $row['idlivreur'];
        $npermis= $row['npermis'];
        
            
        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Livreur Profil
  </title>
  <!--     Fonts and icons     -->
  
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<header id="header" class="header">

<div class="header-menu">

    <div class="col-sm-7">
        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
        <div class="header-left">
            <button class="search-trigger"><i class="fa fa-search"></i></button>
            <div class="form-inline">
                <form class="search-form">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                </form>
            </div>

            <div class="dropdown for-notification">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="count bg-danger">5</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="notification">
                    <p class="red">You have 3 Notification</p>
                    <a class="dropdown-item media bg-flat-color-1" href="#">
                    <i class="fa fa-check"></i>
                    <p>Server #1 overloaded.</p>
                </a>
                    <a class="dropdown-item media bg-flat-color-4" href="#">
                    <i class="fa fa-info"></i>
                    <p>Server #2 overloaded.</p>
                </a>
                    <a class="dropdown-item media bg-flat-color-5" href="#">
                    <i class="fa fa-warning"></i>
                    <p>Server #3 overloaded.</p>
                </a>
                </div>
            </div>

                
                    
                    
        </div>
    </div>

    <div class="col-sm-5">
        <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <h3> <?php echo $nomlivreur , $prenomlivreur?>  </h3>
            </a>

            <div class="user-menu dropdown-menu">
                <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
            </div>
        </div>

        <div class="language-select dropdown" id="language-select">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                <i class="flag-icon flag-icon-us"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="language">
                <div class="dropdown-item">
                    <span class="flag-icon flag-icon-fr"></span>
                </div>
                <div class="dropdown-item">
                    <i class="flag-icon flag-icon-es"></i>
                </div>
                <div class="dropdown-item">
                    <i class="flag-icon flag-icon-us"></i>
                </div>
                <div class="dropdown-item">
                    <i class="flag-icon flag-icon-it"></i>
                </div>
            </div>
        </div>

    </div>
</div>

</header><!-- /header -->
  <div class="wrapper">
    
    <div class="main-panel">
   

            
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="updatelivreur.php">
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>ID (disabled)</label>
                        <input type="hidden" name="idlivreur" value="<?= $idlivreur?>">
                        <input type="text" class="form-control" disabled="" placeholder="idlivreur"  value="<?php echo $idlivreur ?>" >
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label for="ncin">N° CIN</label>
                        <input type="text" name="ncin"  class="form-control" placeholder="Num CIN" value="<?php echo $ncin ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label >N° Permis</label>
                        <input type="text" name="npermis" class="form-control" placeholder="<?php echo $npermis ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="nomlivreur" class="form-control" placeholder="Company" value="<?php echo $nomlivreur ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="prenomlivreur" class="form-control" placeholder="Last Name" value="<?php echo $prenomlivreur ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                  </div>
                  <div class="row">
                    
                    
                    
                  </div>
                  <div class="row">
                  </div>
                
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-fill btn-primary" value="save" />
                    </div>
                </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <a href="javascript:void(0)">
                      <img class="avatar" src="images/default-avatar.png" alt="...">
                      <h5 class="title"><?php echo $nomlivreur ; echo $prenomlivreur ?></h5>
                    </a>
                    <p class="description">
                      Livreur
                    </p>
                  </div>
                </p>
                
              </div>
              <div class="card-footer">
                <div class="button-container">
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                    <i class="fab fa-google-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>


      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = true;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  
</body>

</html>