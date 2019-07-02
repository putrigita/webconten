<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A complete example of Cropper.">
  <meta name="keywords" content="HTML, CSS, JS, JavaScript, jQuery plugin, image cropping, image crop, image move, image zoom, image rotate, image scale, front-end, frontend, web development">
  <meta name="author" content="Fengyuan Chen">
  <title>Cropper</title>
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cropper/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cropper/css/main-2.css">

 <link rel="stylesheet" href="<?php echo base_url();?>assets/cropper/css/main.css">
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/cropper/css/cropper.min.css">
	 <script src="<?php echo base_url();?>assets/cropper/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/cropper/js/cropper.min.js"></script>
</head>
<body>
  
         
            <div class="modal-header">
              <button type="button" onclick="javascript:history.go(0)" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-warning"></i>Warning :</h5>
                        Maximum size 20MB,

						Uploading large files and HD quality will affect your page loading
                </div>        
              <div class="avatar-body">

                <!-- Upload image and data -->
                
                <input type="file" class="btn btn-default" id="img_file" name="img_file" accept="image/*">
                <br>
                <button class="btn btn-default" id="crop">Crop</button>
                <button class="btn btn-default" onclick="javascript:history.go(0)">Reset</button>
                <br><br>
                <!-- Crop and preview -->
                <div class="row">
                  <div class="col-md-9">
                    <canvas id="canvas">
						
					</canvas>
                  </div>
                  <div class="col-md-3">
                    <div id="result">
			
					</div>
                  </div>
                </div>


              </div>
            </div>
            <div class="modal-footer">
            	<form action="<?php echo base_url();?>profile/cropper/" method="post">
					<input type="hidden" name="file_name" id="file_name">
					<input type="hidden" name="cropped_img" id="cropped_img">
					<button type="submit" id="upload_img" class="btn btn-default" name="upload_img" disabled>Done</button>
				</form>
              
            </div>
          
        

<script>
		$(document).ready(function(){

	// preparing canvas variables
	var $canvas = $('#canvas'),
		context = $canvas.get(0).getContext('2d');

	// waiting for a file to be selected
	$('#img_file').on('change',function(){
		
		if (this.files && this.files[0]) {
			// checking if a file is selected

			if ( this.files[0].type.match(/^image\//) ) {
				// valid image file is selected
				
				$('#file_name').attr('value',this.files[0].name);

				// process the image
				var reader = new FileReader();

				reader.onload = function(e){					
					var img = new Image();
					img.onload = function() {						
						context.canvas.width = img.width;
						context.canvas.height = img.height;
						context.drawImage(img, 0, 0);

						// instantiate cropper
						var cropper = $canvas.cropper({
							aspectRatio: 1 / 1
						});
					};
					img.src = e.target.result;
				};

				$('#crop').click(function(){
					var croppedImage = $canvas.cropper('getCroppedCanvas').toDataURL('image/jpg');
					$('#result').append($('<img>').attr('src', croppedImage));
					$('#cropped_img').attr('value',croppedImage);
					$('#upload_img').removeAttr('disabled');
				});

				// reading the selected file
				reader.readAsDataURL(this.files[0]);


			} else {
				alert('Invalid file type');
			}
		} else {
			alert('Please select a file.');
		}
	});

});
	</script>
</body>
</html>
