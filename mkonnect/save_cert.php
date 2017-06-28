<?php
require ("db.php");
$user_id = $_SESSION['id'];
$valid_formats = array("jpg", "png", "gif", "doc","docx");
$max_file_size = 1024*1000; //100 kb
$path = "uploads/"; // Upload directory
$count = 0;

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
// echo "<script>$('#thankyouModal').modal('show')</script>";
 continue; // Skip invalid file formats
}
   else{ // No error found! Move uploaded files
       if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)) {

         $query ="insert into files(name,path,user_id) values('$name','$path.$name','$user_id')";
         $ros = mysqli_query($con,$query);
         if($ros!=true)
         {
           $message[]= "Error inserting data to the database";
           continue;
         }
         $count++; // Number of successfully uploaded files
       } else {
$message[]= "Unable to move file";             }
   }
}
}
}

# error messages
if (isset($message)) {
  $_SESSION['msg1']=$message;
  // $e_msg=$_SESSION['msg'];
  // foreach ($e_msg as $msg) {
  //   printf("<p class='text-danger'>%s</p></ br>\n", $msg);
  // }
}
# success message
if($count !=0){
  $_SESSION['count1'] = $count;
  // printf("<p class='text-success'>%d files added and database updated successfully !</p>\n", $count);

}

echo"<script>window.open('jobs.php#cert','_self')</script>";


 ?>
