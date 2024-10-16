<?php
// Update the status in the database based on the received parameters

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    // Include the database connection file
    include 'koneksi.php';

    // Prepare the update query using prepared statements to prevent SQL injection
    $query = "UPDATE kunjungan SET status=? WHERE id=?";
    $stmt = mysqli_prepare($koneksi, $query);

    // Bind the parameters to the query
    mysqli_stmt_bind_param($stmt, "si", $status, $id);

    // Execute the update query
    if (mysqli_stmt_execute($stmt)) {
        // If the update is successful, send a success response to the AJAX request
        echo 'success';
    } else {
        // If the update fails, send an error response with the error message
        echo 'error: ' . mysqli_error($koneksi);
    }

    // Close the statement and the database connection
    mysqli_stmt_close($stmt);
    mysqli_close($koneksi);
} else {
    // If the required parameters are not provided, send an error response
    echo 'error: Invalid parameters';
}
?>
