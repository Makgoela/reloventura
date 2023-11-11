<?php
include 'connection.php';
include 'functions.php';

// Function to validate email address
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate numbers
function validateNumber($number) {
    return is_numeric($number);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = $_POST["address"];
    $number = $_POST["Number"];
    $alt_number = $_POST["alt_number"];
    $email = $_POST["Email"];

    // Validation
    if (!validateEmail($email)) {
        echo '<script>alert("Invalid Email Address!; Please enter the correct addrress or enter another one! "); window.location = "Settings.php";</script>';
    } elseif (!validateNumber($number) || !validateNumber($alt_number)) {
        echo '<script>alert("Number is Invalid! "); window.location = "Settings.php";</script>';
    } else {
        // Update data in the database
        $sql = "UPDATE contact SET Address = ?, Number = ?, Alt_Number = ?, Email = ? WHERE contact_id = 1";
        $stmt = $con->prepare($sql);
        $stmt->execute([$address, $number, $alt_number, $email]);

        // Redirect or show a success message
        echo '<script>alert("Contact Information updated! "); window.location = "Settings.php";</script>';
        // You can redirect the user to a different page after a successful update if needed.
    }else{
                 echo "\nPDO::errorInfo():\n";
                print_r($con->errorInfo());

}

}
?>
