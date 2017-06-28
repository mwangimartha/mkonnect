<?php

    require ('../db.php');
    $query = "SELECT * FROM job_applications ORDER BY id desc";
    $query1=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($query1)) {
      $id = $row['id'];
      $job_category = $row['category_id'];
      $query5 = "SELECT * FROM job_category WHERE id='".$job_category."' LIMIT 1";
      $query4 = mysqli_query($con,$query5);
      $row2 = mysqli_fetch_array($query4);
      $job = $row2['category'];
      $user_id = $row['user_id'];
      $query2 = "SELECT * FROM profiles WHERE user_id='".$user_id."' LIMIT 1";
      $query3 =mysqli_query($con,$query2);
      $row1 = mysqli_fetch_array($query3);
      $name=$row1['fullname'];
      $phone_number= $row1['phone_number'];
      $query6 = "SELECT * FROM users WHERE user_id='".$user_id."' LIMIT 1";
      $query7 = mysqli_query($con,$query6);
      $row4 = mysqli_fetch_array($query7);
      $email=$row4['email'];
      $data[] =["id"=>$id,"job_category"=>$job,"name"=>$name,"number"=>$phone_number,"email"=>$email];
    }
echo json_encode($data);
 ?>
