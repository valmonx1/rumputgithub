<?php
	include 'session.php';		
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lawn Mowing Service - Worker Registration</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Welcome <?php echo $username; ?></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="admin_form.php?username=<?php echo $username;?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Register</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="assign.php?username=<?php echo $username;?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Service Booking</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="service_price_update.php?username=<?php echo $username;?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Service Price</span></a>
        </li>
        
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Staff Registration</li>
          </ol>

          <form method="POST" action="admin_insert.php" onsubmit="return validation()">
      <div class="form-group">
      <div class="form-row">
     
      </div>
      </div>
      <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label>Worker Name</label><br>
                  <div class="form-label-group">
                    <input type="text" name="workername" class="form-control"First name" required>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Worker Role</label><br>
                  <!-- <div class="form-label-group">
                    <input type="text" name="lastname" class="form-control" required>
                  </div> -->
                  <select class="custom-select" name="staff_role">
                    <option selected>Choose Role</option>
                    <option value="admin">Admin</option>
                    <option value="mower">Mower</option>
                  </select>
                </div>
              </div>
            </div>
      
      <div class="form-group">
        <div class="form-row">
                <div class="col-md-6">
                  <label>Telephone Number</label><br>
              <div class="form-label-group">
                <input type="tel" name="telno" class="form-control" Number" required>
              </div>
            </div>
            <div class="col-md-6">
              <label>Worker Email</label><br>
              <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" class="form-control" required>
              </div>
            </div>
            </div>
          </div>
        </div>
            

      <div class="form-group">
        <label>Address</label><br>
              <div class="form-label-group">
                <textarea class="form-control" rows="5" id="address" name="address" required></textarea>
              </div>
            </div>


      <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label>Username</label><br>
                  <div class="form-label-group">
                    <input type="text" name="username" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Password</label><br>
                  <div class="form-label-group">
                    <input type="password" name="password" class="form-control" required>
                  </div>
                </div>
              </div>
            </div>

            <input type="hidden" name="worker_id" value="<?php echo $worker_id;?>">


            <div class="row">
                    <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <button type="button submit" class="btn btn-primary btn-block" name="Submit" value="submit">Button 1</button>
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->
                  </div>
            
          </form>
          
		  

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
  

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
