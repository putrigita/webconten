
                
                    <div class="modal-header">
                      <button type="button" onclick="javascript:history.go(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"><?php echo lang('deactivate_heading');?></h4>
                    </div>
                    <div class="modal-body">
                      <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

          						<?php echo form_open("auth/deactivate/".$user->id);?>

          						  <p>
          						  	
          						    <input type="radio" hidden="" name="confirm" value="yes" checked="checked" />
          						    
          						    <input type="radio" hidden="" name="confirm" value="no" />
          						  </p>

          						  <?php echo form_hidden($csrf); ?>
          						  <?php echo form_hidden(array('id'=>$user->id)); ?>

                        <div class="pull-right">
            						  <button type="submit" class="btn btn-primary">Oke</button> 

            						  <button type="submit" onclick="javascript:history.go(0)" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>

          						<?php echo form_close();?>
                                      

                                  <br><br>
                    </div>
                    
                 

