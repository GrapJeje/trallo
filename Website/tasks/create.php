<?php
    session_start();
    $user_id = $_SESSION["user_id"];

    // Check of gebruiker al een planbord heeft
    require_once "../backend/conn.php";

    $query = "SELECT * FROM planning_board WHERE user_id = :user_id";

    $statement = $conn->prepare($query);

    $statement->execute([
        ":user_id" => $user_id,
    ]);

    $board = $statement->fetch(PDO::FETCH_ASSOC);

    if ($board){
        $msg = "U kan geen planbord aanmaken als er al een bestaat!";
        header("Location: $base_url/index.php?msg=$msg");
    }
?>

<h1>Taak toevoegen</h1>
<p>Voeg met het onderstaande formulier een nieuwe taak toe</p>

<form action="../backend/Controllers/tasksController.php" method="POST">
    <label for="title">Titel</label>
    <input type="text" id="title" name="title" required>

    <lable for="description">Beschrijving</lable>
    <textarea id="description" name="description" required></textarea>

    <label for="section">Afdeling</label>
    <select name="section" id="section">
        <option value="section1">section1</option>
        <option value="section2">section2</option>
        <option value="section3">section3</option>
    </select>

    <!-- Status is op todo bij aanmaken -->
    <input type="hidden" name="status" value="todo">

    <input type="submit" value="Voeg Taak toe">
</form>