<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Uploading file</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data" >
	<label> uploading file </label>
	 <p> <input type="file" name="uploadfile" value=""> </p>
	 <p><input type="submit" name="upload" value="upload"></p>

</form>
</body>
</html>

<?php

	$filename=$_FILES['uploadfile']['name'];
	$filetmpname=$_FILES['file']['tmp_name'];

	$folder="uploads/".$filename;
	echo "$folder";
	move_uploaded_file($filetmpname,$folder);
?>