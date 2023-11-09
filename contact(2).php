<?php

// Connect to your database
// session_start();
include('authentication.php');
include("connection.php");



if (isset($_SESSION['user_id']) && isset($_SESSION['email'])  && isset($_SESSION['username'])) {
  $user_id = $_SESSION['user_id'];
  $email = $_SESSION['email'];
  $username = $_SESSION['username'];
  // Use $user_id and $email as needed in your code
} else {
  // User is not logged in, handle this case
  // You can redirect them to the login page or display an error message
}



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>Relo Ventura - Logged in CONTACT US</title>

        <link rel="stylesheet" href="CSS/style.css" />
        <link rel="website icon" type="png" href="Img/WhatsApp Image 2023-07-18 at 23.01.24.jpeg" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <!--font awesome icon link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>


<body class="bg-light">

<!--NAVIGATION-->
<section>
  <nav class="navbar navbar-expand-lg bg-body-primary">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img src="img/WhatsApp_Image_2023-07-18_at_23.01.24-removebg-preview.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="camps(2).php">Camps</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="expositions(2).php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact(2).php">Contact Us</a>
        </li>
      </ul>
      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="me-3 text-sm"><?php echo $username; ?>, <?php echo $email; ?></span><i class="fas fa-user"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                <li><a class="dropdown-item" href="profile.php">My Bookings</a></li>
              <li> <button class="btn btn-success " onsubmit="return submitForm(this);" type="button" data-bs-target="#loginModal"><a href="logout.php" style="text-decoration:none; color:white;">Logout </a></button>
            </li>
              </ul>
             </li>    </div>
  </div>
  </nav>
</section>


<div class="activities-heading mb-0">
    <span>Contact Us</span>
    <h1>Get in contact, and find us</h1>
    <p class="text-center">The "Contact Us" page of Relo Ventura provides visitors with a comprehensive view of how to reach out and engage with the campsite team. Furthermore, a dedicated section at the bottom invites campers to leave their reviews and feedback, allowing them to share their experiences and offer insights for potential future guests. </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1869440.0491746247!2d29.1460008!3d-23.7741069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ec6c91436cd30c1%3A0x62893d1e66c8dc4a!2sLimpopo!5e0!3m2!1spt-PT!2sza!4v1696661556514!5m2!1spt-PT!2sza" loading="lazy"></iframe>
          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/aQE1Cxs3vYBQ1RBaA" target="_blank" class="d-inline-block text-decoration-none text-dark">
            <?php
            require('connection.php');
            require('functions.php');

            $sql = "SELECT Address, Number, Alt_Number, Email FROM contact WHERE contact_id = 1"; // Replace '1' with the appropriate record identifier.

            // Prepare and execute the query
            $stmt = $con->prepare($sql);
            $stmt->execute();

            // Fetch the data
            $result = $stmt->get_result(); // Get the result set

            if ($row = $result->fetch_assoc()) {
              $address = $row['Address'];
              $number = $row['Number'];
              $alt_number = $row['Alt_Number'];
              $email = $row['Email'];

              // Display the data in the HTML
              echo '<i class="fas fa-map-marker"></i> ' . htmlspecialchars($address) . ', Limpopo.</a>';
              echo '<h5 class="mt-4">Call us</h5>';
              echo '<a href="tel: +27' . htmlspecialchars($number) . '" class="d-inline-block text-decoration-none text-dark">';
              echo '<i class="fas fa-phone"></i> +27' . htmlspecialchars($number) . '</a>';
              echo '<br>';
              echo '<a href="tel: +27' . htmlspecialchars($alt_number) . '" class="d-inline-block text-decoration-none text-dark">';
              echo '<i class="fas fa-phone"></i> +27' . htmlspecialchars($alt_number) . '</a>'; // Add the icon for alt_number
              echo '<br>';
              echo '<h5 class="mt-4">Email</h5>';
              echo '<a href="mailto:' . htmlspecialchars($email) . '" class="d-inline-block text-decoration-none text-dark"><i class ="fas fa-envelope"></i>';
              echo '<i class="bi bi-geo-alt-fill"></i> ' . htmlspecialchars($email) . '</a>';
            } else {
              echo "Data not found in the database.";
            }
            ?>




            <h5 class="mt-4">Follow us</h5>
            <a href="#" class="d-inline-block mb-3 fs-5 me-2">
              <i class="uil uil-twitter me-1"></i>
            </a>
            <a href="#" class="d-inline-block mb-3 fs-5 me-2">
              <i class="uil uil-instagram me-1"></i>
            </a>
            <a href="#" class="d-inline-block mb-3 fs-5">
              <i class="uil uil-facebook me-1"></i>
            </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">

          <form method="post" action="process_review.php">
            <h5>Leave a Review</h5>
            <div class="mb-3">
              <label class="form-label" style="font-weight:500;">Name</label>
              <input type="text" name="name" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label" style="font-weight:500;">Surname</label>
              <input type="text" name="surname" class="form-control shadow-none">
            </div>
            <label>Rating</label>
            <select name="dropdown">
              <option value="" disabled selected>Select a Rating</option> <!-- Placeholder option -->
              <option value="Bad">Bad</option>
              <option value="Very_Bad">Very Bad</option>
              <option value="Moderate">Moderate</option>
              <option value="Good">Good</option>
              <option value="Exellent">Exellent</option>
            </select>
            <div class="mb-3">
              <br>
              <label class="form-label" style="font-weight:500;">Review</label>
              <input type="text" name="review" class="form-control shadow-none">
            </div>
            <button type="submit" class="btn text-white bg-success mt-3">SEND</button>
          </form>
        </div>
      </div>
    </div>
  </div>



<footer>
    <div class="footer-Container">
      <div class="icons">
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-regular fa-envelope"></i></a>
      </div>
      <div class="footer-nav">
        <ul>
          <li><a href="index2.php">Home</a></li>
          <li><a href="camps(2).php">Camps</a></li>
          <li><a href="expositions(2).php">Gallery</a></li>
          <li><a href="contact(2).php">Contact Us</a></li>
         
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Copyright &copy;2023 Designed by <span>Sky T<a href="Admin/login.php">e</a>ch</span></p>
    </div>
  </footer>


  <!--Javascript-->
  <script src="js/js.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   

</body>
</html>