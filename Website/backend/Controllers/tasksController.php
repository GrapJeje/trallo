<?php
    session_start();

    $title = $_POST["title"];
    $description = $_POST["description"];
    $section = $_POST["section"];
    $status = $_POST["status"];

    // Test
    echo $title;
    echo "<br>";
    echo $description;
    echo "<br>";
    echo $section;
    echo "<br>";
    echo $status;

?>