<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>
<body>
	<img src="" alt="" id="image">
	<input type="file" name="file" id="file">
	<script>
		
		document.getElementById("file").onchange = function () {
		    var reader = new FileReader();

		    reader.onload = function (e) {
		        // get loaded data and render thumbnail.
		        document.getElementById("image").src = e.target.result;
		    };

		    // read the image file as a data URL.
		    reader.readAsDataURL(this.files[0]);
		};
	</script>	
</body>
</html>





