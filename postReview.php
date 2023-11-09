<?php
include 'connection.php';
// Select data from the "reviews" table
$sql = "SELECT * FROM review";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo '<section id="reviews">';
    echo '<div class="reviews-heading">';
    echo '<span>Comments</span>';
    echo '<h1>Campers Say</h1>';
    echo '</div>';
    echo '<div class="reviews-box-container mb-5">';

    while ($row = $result->fetch_assoc()) {
        echo '<div class="swiper swiper-testemonials">
        <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <img src="/Images/family.png" width="30px">
                    <h6 class="m-0 ms-2">'. $row['FirstName'] . $row['LastName'] . '</h6>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, odio quas. Temporibus a suscipit, reiciendis illo placeat quidem fugiat cupiditate quas laborum animi cumque eaque laboriosam natus dolorem, repellat eligendi?</p>
                <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>';
        echo '<strong>' . $row['FirstName'] . ' ' . $row['LastName'] . '</strong>';
        echo '      </div>';
        echo '    </div>';
        echo '    <div class="review">';
        echo '<i class="fas fa-star"></i>'; // You can add the star rating here
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="camper-comment">';
        echo "<p>Comment: " . $row['ReviewText'] . "</p>";
        echo '  </div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</section>';
} else {
    echo "No reviews found.";
}

// Close the database connection when you're done using it
$con->close();
?>

<style>
    .reviews{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  width: 100%;
}

.reviews-heading{
  letter-spacing: 1px;
  margin: 30px 0px;
  padding: 10px 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.reviews-heading h1{
  font-size: 2.2rem;
  font-weight: 500;
  background-color: var(--second-color);
  color: var(--bg-color);
  padding: 10px 20px;
}

.reviews-heading span{
  font-size: 1.3rem;
  color: var(--text-color);
  margin-bottom: 10px;
  letter-spacing: 2px;
  text-transform: uppercase;
}

.reviews-box-container{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  width: 100%;
}

.reviews-box{
  width: 500px;
  box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  padding: 20px;
  margin: 15px;
  cursor: pointer;
}

.profile-img{
  width: 50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 10px;
}

.profile-img img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

.profile{
  display: flex;
  align-items: center;
}

.name-user{
  display: flex;
  flex-direction: column;
}

.name-user strong{
  color: var(--text-color);
  font-size: 1.1rem;
  letter-spacing: 0.5px;
}

.name-user span{
  color: var(--second-color);
  font-size: 0.8rem;
}

.review{
  color: #f9d71c;
}

.box-top{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.camper-comment p{
  font-size: 0.9rem;
}

.reviews-box:hover{
  transform: translateY(-10px);
  transition: all ease 0.3s;
}


@media(max-width:1992px){
  .reviews-box{
    width: 45%;
    padding: 10px;
    margin-right: 10px;
  }
}

@media(max-width:1060px){
  .reviews-box{
    width: 45%;
    padding: 10px;
  }
}

@media(max-width:790px){
  .reviews-box{
    width: 45%;
    padding: 10px;
  }
  .reviews-heading h1{
    font-size: 1.4rem;
  }
}

@media(max-width:414px){
  .reviews-box{
    width: 45%;
    padding: 10px;
  }
  .box-top{
    flex-wrap: wrap;
    margin-bottom: 10px;
  }
  .review{
    margin-top: 10px;
  }
}


</style>