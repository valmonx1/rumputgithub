  <?php
include "database.php";

$connectDb=mysqli_select_db($conn,'xyzrumput');

$run = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

while ($row = mysqli_fetch_array($run)) {
  ?>
  	 <form>
            <div class="row">

               <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="name" class="form-control" value="<?php echo $row['user_name'];?>" readonly>
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="name" name="user_id" class="form-control" value="<?php echo $row['user_id'];?>" readonly>
                          </div><!-- /input-group -->
                      </div>

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                            <input type="name" name="user_tel" class="form-control" value="<?php echo $row['user_tel'];?>" readonly>
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-open"></i></span>
                            <input type="name" name="user_email" class="form-control" value="<?php echo $row['user_email'];?>" readonly>
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

            </div>
          </form>

  <?php
}
?>
