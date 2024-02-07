<?php

include("db.php");
if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    echo $title;
    echo $description;
    $query = "INSERT INTO task(title,description) VALUES ('$title','$description')";
    $result = mysqli_query(CONEXCHION,$query);
    if(!$result){
        die("Query failed");
    }
    $_SESSION['message'] = 'Task Saved succesfully';
    $_SESSION['message_type'] ='danger';
    header("Location: index.php");
}


?>
