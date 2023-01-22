<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="Style/style.css">

   <!-- bootstrap CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">SAS Traveling</a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>Book now</h1>
   </div>

   <!-- booking section starts  -->

   <section class="booking">

      <h1 class="heading-title">book your trip!</h1>

      <form action="book_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputBox">
               <span>phone :</span>
               <input type="number" placeholder="enter your number" name="phone">
            </div>

            <div class="inputBox">
               <span>address :</span>
               <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputBox">
               <span>where to :</span>
               <input type="text" placeholder="place you want to visit" name="location">
            </div>

            <div class="inputBox">
               <span>how many :</span>
               <input type="number" placeholder="number of guests" name="guests">
            </div>

            <div class="inputBox">
               <span>arrivals :</span>
               <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
               <span>leaving :</span>
               <input type="date" name="leaving">
            </div>



         </div>

         <input type="submit" value="submit" class="btn" name="send">

      </form>

   </section>

   <!-- booking section ends -->





   <div class="container mt-2">
      <div class="row">
         <div class="col-md-12">
            <div class="page-header">
               <h2>Booked Tours</h2>
            </div>
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">ID</th>
                     <th scope="col">name</th>
                     <th scope="col">email</th>
                     <th scope="col">phone</th>
                     <th scope="col">address</th>
                     <th scope="col">location</th>
                     <th scope="col">guest</th>


                  </tr>
               </thead>
               <tbody>
                  <?php include 'retrieve-data.php'; ?>
                  <?php if ($result->num_rows > 0) : ?>
                     <?php while ($array = mysqli_fetch_row($result)) : ?>
                        <tr>
                           <th scope="row"><?php echo $array[0]; ?></th>
                           <td><?php echo $array[1]; ?></td>
                           <td><?php echo $array[2]; ?></td>
                           <td><?php echo $array[3]; ?></td>
                           <td><?php echo $array[4]; ?></td>
                           <td><?php echo $array[5]; ?></td>
                           <td><?php echo $array[6]; ?></td>
                        </tr>
                     <?php endwhile; ?>
                  <?php else : ?>
                     <tr>
                        <td colspan="7" rowspan="1" headers="">No Data Found</td>
                     </tr>
                  <?php endif; ?>
                  <?php mysqli_free_result($result); ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>






   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>

         <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 702-046-3746 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91 779-287-0909 </a>
            <a href="#"> <i class="fas fa-envelope"></i> akashsawant9960@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Karad, Maharashtra - 415110 </a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15241.206700240857!2d74.1754109!3d17.252634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x719d14ba23859f1b!2sBharati%20Vidyapeeth%20Deemed%20University%2C%20Yashwantrao%20Mohite%20Institute%20of%20Management%2C%20Malkapur%2C%20Karad!5e0!3m2!1sen!2sin!4v1654159148247!5m2!1sen!2sin" width="250" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>

      <div class="credit"> created by <span>mr.Akash, mr.Sanket, mr.Shubham</span> | all rights reserved! </div>

   </section>

   <!-- footer section ends -->


   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- Bootstrap js -->
   <!-- JavaScript Bundle with Popper -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

   <!-- custom js file link  -->
   <script src="Script/script.js"></script>
</body>

</html>