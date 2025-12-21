<?php
@include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $srno = $_POST["srno"];
    $newStatus = $_POST["new_status"];

    // Update the status in the "payment_details" table
    $sql = "UPDATE payment_details SET status = ? WHERE srno = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error in the database update.");
    } else {
        $stmt->bind_param("ii", $newStatus, $srno);
        $stmt->execute();
        $stmt->close();

        // Status updated successfully, do not redirect

        // Close the database connection
        $conn->close();

        // Return a response, indicating success
        http_response_code(200);
        echo "Status updated successfully.";
        exit;
    }
}

// If you want to handle the case where the request is not a POST request, you can do it here.

// If there's no redirect, you can put your JavaScript code here.
echo '<script type="text/javascript">';
echo 'console.log("lol");';
echo '</script>';