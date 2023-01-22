<?php

    $hName='localhost'; // host name

    $uName='root';   // database user name

    $password='';   // database password

    $dbName = "book_db"; // database name

    $dbCon = mysqli_connect($hName,$uName,$password,"$dbName");

      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysql_error());
      }

      $query="select * from book_form limit 50"; // Fetch all the data from the table customers
$result=mysqli_query($dbCon,$query);
?>