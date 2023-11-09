<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Relo Ventura - Pay Now</title>
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/pay-now.css" />
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
    <a class="navbar-brand" href="index.php">RELO VENTURA</a>
    <button class="bg-success rounded"><a href="camps(2).php" class="text-light text-decoration-none">CANCEL</a></button>
  </div>
  </nav>
</section>
<div class="container">
 
    <div class="card-container">
 
        <div class="front">
            <div class="image">
                <img src="/Img/chip.png" alt="">
                <img src="/Img/visa.png" alt="">
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>Card Holder</span>
                    <div class="card-holder-name">Full Name</div>
                </div>
                <div class="box">
                    <span>Expires</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">yy</span>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="image/visa.png" alt="">
            </div>
        </div>
 
    </div>
 
    <form action="">
        <div class="inputBox">
            <span>Card Number</span>
            <input type="text" maxlength="16" class="card-number-input">
        </div>
        <div class="inputBox">
            <span>Card Holder</span>
            <input type="text" class="card-holder-input">
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>Expiry mm</span>
                <select name="" id="" class="month-input">
                    <option value="month" selected disabled>month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="inputBox">
                <span>Expiry yy</span>
                <select name="" id="" class="year-input">
                    <option value="year" selected disabled>year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input type="text" maxlength="4" class="cvv-input">
            </div>
        </div>
        <input type="submit" value="PAY" class="submit-btn">
    </form>
 
</div>    
   
 
 
 
 
 
<script>
 
document.querySelector('.card-number-input').oninput = () =>{
    document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
}
 
document.querySelector('.card-holder-input').oninput = () =>{
    document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
}
 
document.querySelector('.month-input').oninput = () =>{
    document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
}
 
document.querySelector('.year-input').oninput = () =>{
    document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
}
 
document.querySelector('.cvv-input').onmouseenter = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
}
 
document.querySelector('.cvv-input').onmouseleave = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
}
 
document.querySelector('.cvv-input').oninput = () =>{
    document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
}
 
</script>
 
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
          <li><a class="#" href="#">Home</a></li>
          <li><a href="activities(2).php">Activities</a></li>
          <li><a href="expositions(2).php">Gallery</a></li>
          <li><a href="contact(2).php">Contact Us</a></li>
          <li><a href="camps(2).php">Camps</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Copyright &copy;2023 Designed by <span>Sky T<a href="Admin/login.php">e</a>ch</span></p>
    </div>
  </footer>
 
 
 
 
 
 
</body>
</html>