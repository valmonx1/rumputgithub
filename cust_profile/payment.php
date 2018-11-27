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

    <title>SB Admin - Dashboard</title>

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
          <a class="nav-link" href="index.php?username=<?php echo $username;?>">
            <i class="fas fa-fw fa fa-address-card"></i>
            <span>Biodata</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking.php?username=<?php echo $username;?>">
            <i class="fas fa-fw fa fa-calendar"></i>
            <span>Booking</span>
          </a>
        </li>
        
        <li class="nav-item active">
          <a class="nav-link" href="payment.php?username=<?php echo $username;?>">
            <i class="fas fa-fw fa fa-credit-card"></i>
            <span>Payment</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking_status.php?username=<?php echo $username;?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Status Booking</span></a>
        </li>
		<li class="nav-item">
			<a class="nav-link" href="logout.php" onclick="return confirm('Are you sure?')">
			<i class="fas fa-fw fa fa-share-square"></i>
			<span>Logout</span></a>
		</li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Payment</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->

          <!-- Area Chart Example-->
         

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Booking Information</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Service</th>
                      <th>Price</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Total</th>
                      <th>Pay</th>
                    </tr>
                  </thead>
                  <tfoot>
                  
                  </tfoot>
                  <tbody>
                   
                   <?php 
                   include 'database.php';
                   $result = mysqli_query($conn, "SELECT c.cust_id, c.cust_name, b.booking_id, b.booking_date, b.booking_time, b.booking_address, b.booking_status, a.id_detail, a.amount, d.service_id, d.description, d.price FROM customer c, booking b, booking_detail a, service d WHERE c.cust_id = b.cust_id AND b.booking_id = a.booking_id AND d.service_id = a.service_id AND c.cust_id = '$cust_id'");
                   while ($row = mysqli_fetch_array($result)) {
                     ?>

                    <tr>
                      <td><?php echo $row['cust_name'];?></td>
                      <td><?php echo $row['description'];?></td>
                      <td><?php echo $row['price'];?></td>
                      <td><?php echo $row['booking_date'];?></td>
                      <td><?php echo $row['booking_time'];?></td>
                      
                      
                      <td><?php echo $row['amount'];?></td>
                      

                      <td>
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<!-- Paypal business test account email id so that you can collect the payments. -->
                        <input type="hidden" name="business" value="zakarianabil5-facilitator@gmail.com">
<!-- Buy Now button. -->
                        <input type="hidden" name="cmd" value="_xclick">
<!-- Details about the item that buyers will purchase. -->
                        <input type="hidden" name="cust_name" value="<?php echo $row['cust_name']; ?>">
                        <input type="hidden" name="description" value="<?php echo $row['description']; ?>">
                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                        <input type="hidden" name="currency_code" value="USD">
<!-- URLs -->
                        <input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/cancel.php'>
                        <input type='hidden' name='return' value='http://localhost/paypal_integration_php/success.php'>
<!-- payment button. -->
                        <input type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
              <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>
                      </td>
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
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
