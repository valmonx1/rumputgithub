<form action="booking_function_2.php" method="post">
                  
                  <div class="row">
                      <div class="col-lg-6 col-xs-6 mb-4">
                         <label>Service</label>
                          <div class="input-group mb-3">

                              <div class="input-group-prepend">
                                  
                              </div>
                                <select class="custom-select" id="inputGroupSelect01" name="description" required="">
                                  <option selected>Choose...</option>
                                  <option value="Mowing">Mowing</option>
                                  <option value="Landscape">Landscape</option>
                                </select>
                          </div>
                      </div>

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <label>Quantity</label>
                          <div class="input-group-prepend">
                            
                            <input type="number" class="form-control" name="quantity" required="">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <label>Date</label>
                          <div class="input-group-prepend">
                            
                            <input type="date" class="form-control" name="booking_date" required="">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <label>Time</label>
                          <div class="input-group-prepend">
                            
                            <input type="time" class="form-control" name="booking_time" required="">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <label>Address</label>
                          <div class="form-group">
                           
                              <textarea class="form-control" rows="5" id="comment" name="booking_address" required=""></textarea>
                          </div>
                      </div><!-- /.col-lg-6 -->

                      

                      <input type="hidden" name="cust_id" value="<?php echo $cust_id;?>">
                      

                  </div><!-- /.row -->
                  <div class="row">
                    <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <button type="button submit" class="btn btn-primary btn-block" name="booking_la" value="submit">Button 1</button>
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->
                  </div>
                  
                </form>