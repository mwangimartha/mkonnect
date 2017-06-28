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

//store information of all pages in variables

session_start(); 

if (!$_SESSION['email']) {
  
  header("location: Auth/login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>SKIZA DASHBOARD</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/styles.css" rel="stylesheet">
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
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<script src="js/fa.js"></script>
</head>
<body>
<header>
        <div class="header">
          <div class="container">
          <div class="col-md-5">
            <!--logo-->
            <div class="logo">
              <a class="navbar-brand">
                <a href="skiza.php">
                  <img src="../images/logo.jpg">
                </a>
              </a>
            </div>
          </div><!--col-md-5-->

          <div class="col-md-3">
            <center><p style="color: white; font-size: 1.7em; margin-top: 4%;">ADMIN SKIZA PORTAL</p></center> 
            
          </div><!--col-md-3-->

          <div class="col-md-2">
            <center><p style="color: white; font-size: 1.5em; margin-top:4%;"><?php echo $_SESSION['email'];  ?></p></center>
          </div><!--col-md--2-->

          <div class="col-md-2">
            <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                      <div class="signout">
                        <a href="Auth/logout.php"><input type="submit" class="btn btn-info" value="LogOut" style="margin-top:8%; "></a>
                      
                   
                      </ul><!--nav-->

                    </nav>
                </div>

           </div><!--col-md-2-->

          </div><!--container-->
        </div><!--header-->
      </header>

<section>
        <div class="page-content">
            <div class="row">
              <div class="col-md-2">
                <div class="list group" style="width:90%; padding:3%; font-size:1.7em; ">
                  <ul class="list-group" >
                    <li class="list-group-item"><a href="../index.php" style="color:#000000;"> <i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
                    <li class="list-group-item"><a href="../songs.php" style="color:#000000;"> <i class="glyphicon glyphicon-music"></i>Upload Songs</a></li>
                    <li class="list-group-item"><a href="../albumn.php" style="color:#000000;" > <i class="glyphicon glyphicon-th-list"></i>Upload Albumn</a></li>
                    <li class="list-group-item"><a href="../views.php" style="color:#000000;"> <i class="glyphicon glyphicon-cloud-download"></i>Download Views</a></li>
                    <li class="list-group-item"><a href="../users.php" style="color:#000000;"> <i class="glyphicon glyphicon-user"></i>&nbsp;Skiza Artistes</a></li>
                    <li class="list-group-item"><a href="../songviews.php" style="color:#000000;"> <i class="glyphicon glyphicon-music"></i>&nbsp;Song views</a></li>
                    <li class="list-group-item"><a href="../albumn.php" style="color:#000000;"> <i class="glyphicon glyphicon-th-list"></i>&nbsp; Albumn views</a></li>
                    <li class="list-group-item"><a href="../albumn.php" style="color:#000000;"> <i class="glyphicon glyphicon-question-sign"></i>&nbsp;Help</a></li>



                  </ul>
                  
                </div><!--listgroup-->
              </div><!--col-md-2-->
             <div class="well">
      <div class="col-md-10">
       <div class="row">
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
			<input id="input-6" type="file" name="files[]" multiple="multiple"><br>
			<input type="submit" class="btn btn-warning btn-lg" value="Upload">
		</form>

    <script>
    $(document).on('ready', function() {
        $("#input-6").fileinput({
            showUpload: false,
            maxFileCount: 20,
            mainClass: "input-group-sm"
        });
    });

  </script>
            

        </div><!--row-->
        </div><!--col-md-10-->
         </div><!--Jumbotron-->
    
            </div><!--row-->
        </div><!--page-content-->
        
    </section>



	
</div>
</body>
</html>
