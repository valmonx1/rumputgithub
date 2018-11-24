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
        <li class="nav-item">
          <a class="nav-link" href="admin_form.php?username=<?php echo $username;?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Register</span>
          </a>
        </li>

        <li class="nav-item active">
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

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Customer</th>
                      <th>Service</th>
                      <th>Address</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Amount</th>
                      <th>Button</th>
                    </tr>
                  </thead>
                  <tfoot>
                    
                  </tfoot>
                  <tbody>
                   <?php 
                   include 'database.php';
                   $result = mysqli_query($conn, "SELECT c.cust_id, c.cust_name, b.booking_id, b.booking_date, b.booking_time, b.booking_address, b.booking_status, a.id_detail, a.amount, d.service_id, d.description FROM customer c, booking b, booking_detail a, service d WHERE c.cust_id = b.cust_id AND b.booking_id = a.booking_id AND d.service_id = a.service_id AND booking_status = 0");
                   while ($row = mysqli_fetch_array($result)) {
                     ?>

                      <tr>
                      <td><?php echo $row['cust_name'];?></td>
                      <td><?php echo $row['description'];?></td>
                      <td><?php echo $row['booking_address'];?></td>
                      <td><?php echo $row['booking_date'];?></td>
                      <td><?php echo $row['booking_time'];?></td>
                      
                      
                      <td><?php echo $row['amount'];?></td>
                      

                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pass<?php echo $row['booking_id'];?>">Change Password
      </button><?php include 'assign_modal.php';?></td>
                    </tr>
                   <?php }
                   ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>
          
		  

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
