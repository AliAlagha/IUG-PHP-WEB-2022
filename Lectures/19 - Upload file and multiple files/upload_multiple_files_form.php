<!DOCTYPE html>
<html>
<head>
	<title>Upload Files</title>
</head>
<body>
	<form action="actions/upload_multiple_files_action.php" method="POST" enctype="multipart/form-data">
		<input multiple type="file" name="user_image[]"><br>
		<button type="submit">Upload</button> 
	</form>
</body>
</html>
