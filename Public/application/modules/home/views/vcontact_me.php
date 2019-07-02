          <div class="section landing-section">
                  <div class="text-center">
                    <h3><?php echo $contact_me; ?></h3>
                  </div>
                  <div class="row">
                      <div class="col-sm-12 col-md-7">
                       
                      </div>
                      <div class="col-sm-12 col-md-5">
                        <h4 class="text-center description"><?php echo $contact_me_quote2; ?></h4>
                        <form class="contact-form" method="POST" action="<?php echo base_url();?>home/message">
                          <div class="row">
                           <div class="col-md-6">
                              <div class="form-group label-floating">
                                <label class="control-label"><?php echo $your_name; ?></label>
                                <input type="text" name="name" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group label-floating">
                                <label class="control-label"><?php echo $your_email; ?></label>
                                <input type="email" name="email" class="form-control">
                              </div>
                            </div>
                          </div>

                          <div class="form-group label-floating">
                            <label class="control-label"><?php echo $your_message; ?></label>
                            <textarea class="form-control" name="message" rows="4"></textarea>
                          </div>

                          <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                              <button type="submit" style="background-color:#3c8dbc;" class="btn btn-raised">
                                <?php echo $send_message; ?>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                      
                  </div>

              </div>