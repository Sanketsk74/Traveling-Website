<?php

    $connection = mysqli_connect('localhost','root', '', 'book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = " insert into book_form(name, email, phone,	address, location, guests, arrivals, leaving) values ('$name','$email','$phone', '$address','$location','$guests','$arrivals','$leaving')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'something went wrong try again';
    }
    
    // SQL QUERY
  $query = "SELECT * FROM `book_form`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo "booking id " .
                $row["id"]. " - Name: " .
                $row["email"]. " |phone : " . 
                $row["guests"]. " | arrival: " . 
                $row["leaving"]. "<br>";
        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();


?>