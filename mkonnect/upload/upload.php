<?php
/**
* Multi file upload example
* @author Resalat Haque
* @link http://www.w3bees.com/2013/02/multiple-file-upload-with-php.html
**/

$valid_formats = array("jpg", "png", "gif", "zip", "bmp","mp3");
$max_file_size = 1024*100000000000000000000000000000000000000000000000000000000; //100 kb
$path = "uploads/"; // Upload directory
$count = 0;

$db_name = "test";
$conn=mysqli_connect('localhost','root',"");
mysqli_select_db($conn, $db_name) or die("cannot connect to the  DB");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to execute all files
	foreach ($_FILES['files']['name'] as $f => $name) {
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }
	    if ($_FILES['files']['error'][$f] == 0) {
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)) {

                $query ="insert into demo(name,path) values('$name','upload/$path$name')";
                $ros = mysqli_query($conn,$query);
                if($ros!=true)
                {
                  $message[]= "Error inserting data to the database";
                  continue;
                }
	            	$count++; // Number of successfully uploaded files
	            }
	        }
	    }
	}
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Multiple File Upload with PHP - Demo</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
       This must be loaded before fileinput.min.js -->
  <script src="js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
  <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
       This must be loaded before fileinput.min.js -->
  <script src="js/plugins/sortable.min.js" type="text/javascript"></script>
  <!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
       This must be loaded before fileinput.min.js -->
  <script src="js/plugins/purify.min.js" type="text/javascript"></script>
  <!-- the main fileinput plugin file -->
  <script src="js/fileinput.min.js"></script>
  <!-- bootstrap.js below is needed if you wish to zoom and view file content
       in a larger detailed modal dialog -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- optionally if you need a theme like font awesome theme you can include
      it as mentioned below -->
  <script src="themes/fa/theme.js"></script>
  <!-- optionally if you need translation for your language then include
      locale file as mentioned below -->
  <!-- <script src="js/locales/<lang>.js"></script> -->
</head>
<body>
	<div class="wrap">
		<?php
		# error messages
		if (isset($message)) {
			foreach ($message as $msg) {
				printf("<p class='status'>%s</p></ br>\n", $msg);
			}
		}
		# success message
		if($count !=0){
			printf("<p class='status'>%d files added and database updated successfully !</p>\n", $count);
		}
		?>
		<!-- Multiple file upload html form-->
		<form action="" method="post" enctype="multipart/form-data">
      <label class="control-label">Select File</label>
			<input id="input-6" type="file" name="files[]" multiple="multiple">
			<input type="submit" value="Upload">
		</form>

    <script>
    $(document).on('ready', function() {
        $("#input-6").fileinput({
            showUpload: false,
            maxFileCount: 20,
            mainClass: "input-group-lg"
        });
    });

  </script>
</div>
</body>
</html>
