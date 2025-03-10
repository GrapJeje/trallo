<?php
    session_start();

    $title = $_POST["title"];
    $description = $_POST["description"];
    $department = $_POST["department"];
    $status = $_POST["status"];

    // Test
    echo $title;
    echo "<br>";
    echo $description;
    echo "<br>";
    echo $department;
    echo "<br>";
    echo $status;

?>