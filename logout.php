
<?php
// Logout
session_start();
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
}

// JavaScript for SweetAlert
echo 'alert<script>
    swal({
        title: "Passwords do not match!",
        icon: "error",
        button: "OK!"
    });
</script>';

// Redirect to index.php
header("Location: index.php");
?>
