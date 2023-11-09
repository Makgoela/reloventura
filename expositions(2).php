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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Relo Ventura - Logged In Expo</title>
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/cart.css" />
  <link rel="website icon" type="png" href="Img/WhatsApp Image 2023-07-18 at 23.01.24.jpeg" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <!--font awesome icon link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!--Swiper css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body class="bg-light">


  <!--NAVIGATION-->
  <section>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
             </li>
        </div>
      </div>
    </nav>
  </section>



  <section id="activities">
    <div class="activities-heading mb-0">
      <span>Gallery</span>
      <h1>A wide view unto out campsites</h1>
      <p class="text-center">Scroll through the gallery to explore individual campsites, each uniquely curated to provide distinct experiences. Witness the joyous interactions at the Team Building campsite, or revel in the serene ambiance of the Holiday Club through our carefully selected photographs. </p>
    </div>

    <div class="container">
        <div class="row justify-content-center" style="display: flex;">
          <div class="col-12 col-md-6 col-lg-4">
          <div class="card h-70 m-4">
              <img src="Img/activity2.png" class="card-img-top" alt="...">
              <div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Team Building
</button>              
              </div>
            </div>
          </div>
          <!--Picture modal-->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" id="galleryModal">
          <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Team Building</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
            <div class="swiper mySwiper">
          <div class="swiper-wrapper">
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
           </div>
           
       </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
            </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
          </div>
          </div>
</div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-70 m-4">
              <img src="Img/campsite3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Lake View
</button>              
              </div>
            </div>
          </div>
          <!--Picture modal-->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" id="galleryModal">
          <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Lake View</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
            <div class="swiper mySwiper">
          <div class="swiper-wrapper">
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
           </div>
           
       </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
            </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
          </div>
          </div>
              </div>
        


          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-70 m-4">
              <img src="Img/activity1.1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Personality Test
</button>              
              </div>
            </div>
          </div>
          <!--Picture modal-->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" id="galleryModal">
          <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Personality Test</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
            <div class="swiper mySwiper">
          <div class="swiper-wrapper">
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
           </div>
           
       </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
            </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
          </div>
          </div>
              </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-70 m-4">
              <img src="Img/campsite1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Adventure Games
</button>              
              </div>
            </div>
          </div>
          <!--Picture modal-->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" id="galleryModal">
          <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Adventure Games</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
            <div class="swiper mySwiper">
          <div class="swiper-wrapper">
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
           </div>
           
       </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
            </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
          </div>
          </div>
              </div>
          
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-70 m-4">
              <img src="Img/activity4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Survival Skills
</button>              
              </div>
            </div>
          </div>
          <!--Picture modal-->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" id="galleryModal">
          <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Survival Skills</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
            <div class="swiper mySwiper">
          <div class="swiper-wrapper">
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
           </div>
           
       </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
            </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
          </div>
          </div>
              </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-70 m-4">
              <img src="Img/footer-background-1.jpg" style="height:428px;" class="card-img-top" alt="...">
              <div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Family Bonds
</button>              
              </div>
            </div>
          </div>
          <!--Picture modal-->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" id="galleryModal">
          <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Family Bonds</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
            <div class="swiper mySwiper">
          <div class="swiper-wrapper">
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
           </div>
           
       </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
            </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
          </div>
          </div>
              </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-70 m-4">
              <img src="Img/activity3.jpg" style="height:380px;" class="card-img-top" alt="...">
              <div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Leadership Games
</button>              
              </div>
            </div>
          </div>
          <!--Picture modal-->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" id="galleryModal">
          <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Leadership Games</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
            <div class="swiper mySwiper">
          <div class="swiper-wrapper">
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
           </div>
           
       </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
            </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
          </div>
          </div>
              </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-70 m-4">
              <img src="Img/campsite2.jpg" style="height:380px;" class="card-img-top" alt="...">
              <div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Group Challenges
</button>              
              </div>
            </div>
          </div>
          <!--Picture modal-->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" id="galleryModal">
          <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Group Challenges</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
            <div class="swiper mySwiper">
          <div class="swiper-wrapper">
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
           </div>
       </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
            </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
          </div>
          </div>
              </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-70 m-4">
              <img src="Img/portrait 3.jpg" style="height:380px;" class="card-img-top" alt="...">
              <div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Board Games
</button>              
              </div>
            </div>
          </div>
          <!--Picture modal-->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" id="galleryModal">
          <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Board Games</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
            <div class="swiper mySwiper">
          <div class="swiper-wrapper">
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
           </div>
           <div class="swiper-slide">
             <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
           </div>
       </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
            </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
          </div>
          </div>
              </div>
            </div>
      </div>


  </section>
  <br>
  <br>

  <!--footer section-->
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
  </section>

  <!--Javascript-->
  <script src="/js.js"></script>
  <script src="/js/activities.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

<script>
    var swiper = new Swiper(".mySwiper", {
      effect: "flip",
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

</html>