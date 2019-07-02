<?php 

	if (isset($_POST['upload_img'])) {
		// button is presssed

		$file_name = $_POST['file_name'];
		$base64_img = $_POST['cropped_img'];

		$image = explode(',', $base64_img);

		$upload_img = base64_decode($image[1]);

		$file_uploaded = file_put_contents('img/' . $file_name, $upload_img);

		if (!$file_uploaded) {
			header('Location: index.php?file_upload_failed');
		}
	}

	header('Location: index.php?file_upload_successful');

?>