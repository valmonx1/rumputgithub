<?php
include "database.php";

$connectDb = mysqli_select_db($conn,'xyzrumput');

/*include "joint_table.php";*/

  if (isset($_POST['booking_la'])) {
  $booking_type = $_POST['booking_type'];
  $booking_date = $_POST['booking_date'];
  $address = $_POST['address'];
  $booking_time = $_POST['booking_time'];
  $user_id = $_POST['user_id'];


  $sql = mysqli_query($conn,"INSERT INTO booking (booking_type, booking_date, address, booking_time, user_id) VALUES ('$booking_type', '$booking_date', '$address', '$booking_time', '$user_id')");

  if ($sql) {
    echo'<script language="javascript">';
      header("Location:booking.php?username=$username");
      echo'</script>';
  }
}
?>



<form method="post">
                  
                  <div class="row">
                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-plus-circle"></i></label>
                              </div>
                                <select class="custom-select" id="inputGroupSelect01" name="booking_type">
                                  <option selected>Choose...</option>
                                  <option value="Mowing">Mowing</option>
                                  <option value="Landscape">Landscape</option>
                                </select>
                          </div>
                      </div>

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" name="booking_date">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="form-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-map"></i></span>
                              <textarea class="form-control" rows="5" id="comment" name="address"></textarea>
                          </div>
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-clock"></i></span>
                            <input type="time" class="form-control" name="booking_time">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                      

                  </div><!-- /.row -->
                  <div class="col-lg-6 col-xs-6 mb-4"><button type="button submit" class="btn btn-primary btn-block" name="booking_la" value="submit">Button 1</button></div>
                </form>