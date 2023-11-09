<?php
session_start(); 
require('connection.php');
require_once('functions.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $rating = $_POST['dropdown'];
    $review = $_POST['review'];
    $errorMessage = ""; // Initialize an error message variable

    if (empty($name)) {
        $errorMessage .= "Name is required. ";
    }
    if (empty($surname)) {
        $errorMessage .= "Surname is required. ";
    }
    if (empty($rating)) {
        $errorMessage .= "Rating is required. ";
    }
    if (empty($review)) {
        $errorMessage .= "Review is required. ";
    }

    if (empty($errorMessage)) {
        // No missing fields, proceed with insertion
        $query = "INSERT INTO review (FirstName, LastName, ReviewText, Rating) VALUES ('$name', '$surname', '$review', '$rating')";
        if (mysqli_query($con, $query)) {
            echo '<script type="text/javascript">';
            echo 'alert("Thanks for leaving a review!");';
            echo 'window.location = "contact.php";'; // Redirect to the desired page
            echo '</script>';
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        // There are missing fields, display the error message in an alert
        echo '<script type="text/javascript">';
        echo 'alert("Please correct the following issues: ' . $errorMessage . '");';
        echo 'window.history.back();'; // Redirect back one page
        echo '</script>';
    }
    
}

?>
