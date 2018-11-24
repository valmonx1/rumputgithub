<form action="booking_function_2.php" method="post">
                  
                  <div class="row">
                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-plus-circle"></i></label>
                              </div>
                                <select class="custom-select" id="inputGroupSelect01" name="description">
                                  <option selected>Choose...</option>
                                  <option value="Mowing">Mowing</option>
                                  <option value="Landscape">Landscape</option>
                                </select>
                          </div>
                      </div>

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                            <input type="number" class="form-control" name="quantity">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" name="booking_date">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-clock"></i></span>
                            <input type="time" class="form-control" name="booking_time">
                          </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->

                      <div class="col-lg-6 col-xs-6 mb-4">
                          <div class="form-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-map"></i></span>
                              <textarea class="form-control" rows="5" id="comment" name="booking_address"></textarea>
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