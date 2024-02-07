<?php
include("db.php");
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $result = mysqli_query(CONEXCHION, $query);
    if (!$result) {
        die("Query failed");
    }
    $_SESSION['message'] = 'Task delete succesfully';
    header("Location:index.php");
}
?>