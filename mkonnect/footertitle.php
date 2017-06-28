 <?php
 
      //$mcomp_name = $mcomp_year ="";
      $select_qry="SELECT * FROM sys_parf ";
      $query = mysqli_query($con, $select_qry);
      $row = mysqli_fetch_array($query);
     // fill our variables with sys_parf details
      $mcomp_name = $row['name'];
      $mcomp_year =$row['year'];
      echo " ".$mcomp_year;

     ?>