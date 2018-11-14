  <?php
include "database.php";

$run = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

while ($row = mysqli_fetch_array($run)) {
  ?>

            <div class="row">

               <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="name" name="username" class="form-control" value="<?php echo $row['username'];?>" readonly>
                          </div><!-- /input-group -->
                      </div>

               <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="name" class="form-control" value="<?php echo $row['user_name'];?>" readonly>
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

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


                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lol">Update Profile</button>
                            <!-- <a  data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a> -->
                            
<!-- Modal -->
<div class="modal fade" id="lol" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="index_update.php">
            <div class="row">

              <input type="hidden" class="form-control" name="user_id" value="<?php echo $user_id?>">

               <div class="col-lg-12 col-xs-12 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="name" name="username" class="form-control" placeholder="Username" value="<?php echo $row['username'];?>">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

               <div class="col-lg-12 col-xs-12 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="name" name="user_name" class="form-control" placeholder="Name" value="<?php echo $row['user_name'];?>">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-12 col-xs-12 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                            <input type="name" name="user_tel" class="form-control" placeholder="Telephone Number" value="<?php echo $row['user_tel'];?>">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-12 col-xs-12 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-open"></i></span>
                            <input type="name" name="user_email" class="form-control" placeholder="Email Address" value="">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="submit" id="update" name="update" class="btn btn-primary">Save changes</button>
          </form>

      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>


                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

            </div>

  <?php
}
?>
