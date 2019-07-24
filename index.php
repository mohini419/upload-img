<!DOCTYPE html>
<html>
<head>
	<title>upload img</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 	<!--link-->
	 <link rel="stylesheet" type="text/css" href="upload.css">
</head>
<body>
<div class="container">
<form  action="upload.php" method="post" enctype="multipart/form-data">
    <h1>Select Image</h1>
    <input  type="file" name="fileToUpload" id="fileToUpload">
    <input  type="submit" value="Upload file" name="submit">
</form>
</div>

</body>
</html>
