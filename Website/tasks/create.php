<h1>Taak toevoegen</h1>
<p>Voeg met het onderstaande formulier een nieuwe taak toe</p>

<form action="../backend/tasksController.php" method="POST">
    <label for="title">Titel</label>
    <input type="text" id="title" name="title" required>

    <lable for="description">Beschrijving</lable>
    <textarea id="description" name="description" required></textarea>

    <label for="department">Afdeling</label>
    <select name="department" id="department">
        <option value="department1">department1</option>
        <option value="department2">department2</option>
        <option value="department3">department3</option>
    </select>

    <!-- Status is op todo bij aanmaken -->
    <input type="hidden" name="status" value="todo">

    <input type="submit" value="Voeg Taak toe">
</form>