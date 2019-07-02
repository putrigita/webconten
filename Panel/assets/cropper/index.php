<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cropper with jQuery</title>
	<link rel="stylesheet" href="css/cropper.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container">
		<h1>How to Crop &amp; Upload Images</h1>
		
		<h2>1. Select File</h2>
		<div class="form">		
			<input type="file" name="img_file" id="img_file">
			<button id="crop">Crop</button>
		</div>
		
		<h2>2. Crop</h2>
		<div>
			<canvas id="canvas">
				Your browser does not support HTML5 Canvas
			</canvas>
		</div>
		
		<h2>3. Result</h2>
		<div id="result">
			
		</div>

		<h2>4. Upload Cropped Image</h2>
		<form action="upload-img.php" method="post">
			<input type="hidden" name="file_name" id="file_name">
			<input type="hidden" name="cropped_img" id="cropped_img">
			<button type="submit" id="upload_img" name="upload_img" disabled>Upload Image</button>
		</form>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/cropper.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>