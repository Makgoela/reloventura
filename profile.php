<?php
// session_start();



include('authentication.php');
include("connection.php");



if (isset($_SESSION['user_id']) && isset($_SESSION['email'])  && isset($_SESSION['username'])&& isset($_SESSION['user_number'])) {
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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Relo Ventura - User Profile</title>
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/profile.css" />
 
  <link rel="website icon" type="png" href="Img/WhatsApp Image 2023-07-18 at 23.01.24.jpeg" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
 
  <!--font awesome icon link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
</head>
<body>
<div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                Relo<span>Ventura</span>
            </div>
            <div class="user-profile">
              <img class="profile-img" src="Img/user.png" alt="">
            </div>
            <ul>
                <li class="active">
                <a class="nav-link" href="index2.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                <li><a class="nav-link" href="camps(2).php"><i class="fas fa-campground"></i> Camps</a></li>
                <li><i class="fa-brands fa-envelope"></i> Gmail</li>
                <li><i class="fa-brands fa-facebook"></i> Facebook</li>
                <li><i class="fa-brands fa-instagram"></i> Instagram</li>
            </ul>
            <button id="logoutButton" class="bg-black rounded m-5">Logout</button>
        </div>
</div>
        <!-- Main Content -->
       
        <div class="wrapper">
        <div class="content">
        <div class="profile-card">
        <h1><?php echo   $username ?></h1>
        <div class="user-info">
        <p><span>Email:</span> <?php echo   $email ?></p>
        <p>Phone: </p>
        </div>
<p>Account status:<span class="status text-success">  Active</span>
<span class="status text-danger">Inactive</span></p>
        <button id="editButton" class="bg-success rounded">Edit Profile</button>
        
    </div>
    </div>
        </div>
 
 
        <div class="wrapper">
        <div class="content">
    <div class="booking-card">
        <h2>Bookings</h2>
        <div class="book-info">
        <div class="column">
                <h5>Camps</h5>
                <p>Team Building</p>
                <p>Holiday Club</p>
        </div>
                <div class="column">
                <h5>Activities</h5>
                <p>Personality test</p>
                </div>
            <div class="column">
                <h5>Booking status</h5>
                <div class="approved text-success">Approved</div>
                <div class="pending text-warning">Pending</div>
                <div class="cancelled text-danger">Cancelled</div>
            </div>
        </div>
    </div>
</div>
 
</div>
 
 
<div class="wrapper">
        <div class="content">
    <div class="booking-card">
        <h2>Booking History</h2>
        <div class="book-info">
        <div class="column">
                <h5>Camps</h5>
                <p>Team Building</p>
                <p>Holiday Club</p>
        </div>
                <div class="column">
                <h5>Activities</h5>
                <p>Personality test</p>
                </div>
            <div class="column">
                <h5>Payment History</h5>
                <div class="approved text-success">Paid</div>
                <div class="pending text-warning">Pending</div>
                <div class="cancelled text-danger">Not paid</div>
            </div>
        </div>
    </div>
</div>
</div>
 
 
<div class="wrapper">
        <div class="content">
        <div class="profile-card">
        <h2>Reviews</h2>
        <div class="user-info">
          <h5>Past Reviews</h5>
          <div class="reviews-box-container mb-5">
      <div class="reviews-box w-100">
        <div class="box-top">
          <div class="profile">
            <div class="profile-img">
              <img src="/Img/user-1.jpg" alt="">
            </div>
            <div class="name-user">
              <strong>Heaven Moore</strong>
              <span>@heavenmoore</span>
            </div>
          </div>
          <div class="review">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
 
        <div class="camper-comment">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure reiciendis id neque quisquam aspernatur eius vitae, nobis corrupti, magni tenetur accusamus modi quod dolorem! Quod nesciunt earum facilis iure dicta?</p>
        </div>
      </div>
    </div>
    </div>
    <button id="reviewButton" class="bg-success rounded ">Leave A Review</button>
 
        </div>
        </div>
</div>
 
<div id="reviewModal" class="modal">
    <div class="modal-content">
        <span class="close-button me-4">&times;</span>
        <h2>Leave a Review</h2>
                <form action="">
                    <div class="mb-3 p-2">
                        <label class="form-label" style="font-weight:500;">Username</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                   
                    <div class="mb-3 p-2">
                        <label class="form-label" style="font-weight:500;">Review</label>
                        <textarea class="form-control shadow-none" rows="4" style="resize: none;"></textarea>
                        <h6>Rate the service:</h6>
        <div class="star-rating" id="service-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
        </div>
        <h6>Rate the experience:</h6>
        <div class="star-rating" id="experience-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
        </div>
        <button id="submitReviewButton" class="bg-success rounded">Submit Review</button>
    </div>
</div>                    </div>
                </form>
            </div>
        </div>
          </div>
</div>
   <section>
 
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
          <li><a class="#" href="index2.php">Home</a></li>
          <li><a href="camps(2).php">Camps</a></li>
          <li><a href="expositions(2).php">Gallery</a></li>
          <li><a href="contact(2).php">Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Copyright &copy;2023 Designed by <span>Sky T<a href="Admin/login.php">e</a>ch</span></p>
    </div>
  </footer>
   </section>
 
  <!--Javascript-->
  <script src="js.js"></script>
  <script src="js/profile.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>