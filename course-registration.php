<?php
require_once 'core/init.php';
include 'process/headerChecker.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 <?php

  $user = new User();
   
   if ($user->isLoggedIn())
   {
      include 'data/studentsData.php';
   
   if ($user->hasPermission('admin'))
   {

      redirect::to('admin.php');
   }
  ?>
  <title><?php echo $firstname .' '. $lastname;?> </title>

  <link rel="shortcut icon" href="src/media/favico.ico" type="image/x-icon">
  <!-- Custom fonts-->
  <link href="src/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles-->
  <link href="src/css/admin.min.css" rel="stylesheet">


</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $firstname;?> <sup><?php echo $matric_no;?></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <span style="color:#ce99;">Courses</span>
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
    
    <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="course-registration-stepi.php">
          <i class="fas fa-fw fa-edit"></i>
          <span>Course Registration</span></a>
      </li>
    

    <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="edit-courses-i.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Edit Registered Courses</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="view-courses-i.php">
          <i class="fa fa-eye"></i>
          <span>View Registered Courses</span></a>
      </li>


            <li class="nav-item">
        <a class="nav-link" href="print-courses-i.php">
          <i class="fas fa-fw fa-print"></i>
          <span>Print Registered Courses</span></a>
      </li>

      </li>

      <hr class="sidebar-divider">

            <!-- Heading -->
      <div class="sidebar-heading">
        <span style="color:#ce99;">Result Checker</span>
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
    
    <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="check-result.php">
          <i class="fas fa-fw fa-eye"></i>
          <span>Check Result</span></a>
      </li>
    

    <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="print-result.php">
          <i class="fas fa-fw fa-print"></i>
          <span>Print Result</span></a>
      </li>

      </li>
      
      <hr class="sidebar-divider">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Others</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom:</h6>
            <a class="collapse-item" href="my-profile.php">My Profile</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      <!-- Divider -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $firstname .' '. $lastname;?></span>
                <img class="img-profile rounded-circle" src="<?php echo $studentimg;?>">
              </a>
               <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">
              <span style="color:#888;">
                Hello! <?php echo $lastname;?>
                </span>
            </h3>
          </div>

        <!-- /.container-fluid -->
        <hr>      
          <!-- Content Row -->
      <div class="row ml-auto mt-5">
            <div class="col-md-1"></div>
            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Course Registration</h6>


                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user text-black"></i>
                    </a>
                  </div>
                </div>

             <!-- Card Body -->
                <div class="card-body">
                              
                  <div class="row">
                
                    <div class="col-md-1"></div>
              

       <div class="col-md-10">        
                        
              <?php

              $course = DB::getInstance()->query("SELECT * FROM tblregcourse
                WHERE level = ?
                AND semester =? 
                AND programme =?
                AND session = ?",
                 array(
                'level' => $level,
                'semester' => input::get('semester'),
                'programme' => $programme,
                'session' => input::get('session')
                ));
                  if ($course->count())
                  {
                ?>
                                        
                  <table class="table" border="1">
                    <thead class="text-center">
                      <tr>
                       <th>
                          Select Course
                        </th>
                        <th>
                          Course Title
                        </th>
                        <th>
                          Course Code
                        </th>
                         <th>
                          Course Unit
                        </th>
                      </tr>
                  </thead>
                  
                <tbody class="text-center text-capitalize">
                  
                <form class="user" method="POST" action="">

                
                <?php
                foreach ($course->results() as $course)
                  {
                    ?>
                      
                    <div class="form-group "> 
                      <tr>
                      <td>
                        <input type="checkbox" name="course_code[]" id="course_code" value="<?php echo $course->course_code;?>">
                      </td>
                      
                      <td>
                      <?php echo $course->course_title;?>
                      </td>

                      <td>
                      <?php echo $course->course_code;?>
                      </td>

                      <td>
                      <?php echo $course->course_unit;?>
                      </td>
                    </tr>
                    </div>
                  <?php
                    }
                  ?>
                  </tbody>
                  </table>
                <?php
  if (Input::exists())
  {
      if (Input::get('token'))
      {
          if (input::get('course_code'))
          {
              
           $course_code = input::get('course_code'); 
           
            foreach ($course_code as $code)
            {
              include 'process/courseRegProcess.php';
            } 
          }
      }
  }
                           
              }else
              {?>

  <div class="alert alert-warning" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span><?php echo "Oops! Seems I'm Unable To Fetch Your Request";?>
   </div>
<?php 
  }
?>

              <input type="hidden" name="token" value="<?php echo Token::generate();?>">


                      <div class="row" style="margin-top: 5%;">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <input type="submit" class="btn btn-primary btn-user btn-block" value="SUBMIT">
                              </div>
                      </div>


                          <div class="col-md-6">
                            <div class="form-group">
                                <input type="reset" class="btn btn-danger btn-user btn-block" style="float: right;" value="CANCEL">
                            </div>
                          </div>
                        
                        </div>
                    </form>
                      </div>
                
                    <div class="col-md-1"></div>
                
                  </div> <!-- DIV CLASS ROW -->
                
                </div>
              </div>
            </div>

  </div>


      </div>
      <!-- End of Main Content -->

      </div>

        <hr>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
           <span>Copyright &copy; Course Registration & Result Checker</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
         <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
<?php 
}else{
  redirect::to('login.php');
}
?>
  <!-- Bootstrap core JavaScript-->
  <script src="src/vendor/jquery/jquery.min.js"></script>
  <script src="src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="src/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugins -->
  <script src="src/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="src/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="src/js/admin.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="src/js/demo/datatables-demo.js"></script>
</body>

</html>
