<?php
session_start();
if (isset($_POST['submit'])) {
    $_SESSION['user'] = [
        'surname' => $_POST['surname'],
        'name' => $_POST['name'],
        'age' => $_POST['age']
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>I/O data</title>
</head>
<body>
<form method="post">
    Surname: <input type="text" name="surname"><br>
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    <button type="submit" name="submit">Save</button>
</form>
</body>
</html>