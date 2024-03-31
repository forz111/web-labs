<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userData = [
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'city' => $_POST['city']
    ];

    $_SESSION['userData'] = $userData;

    header("Location: output2c.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>I/O data</title>
</head>
<body>
<h2>Enter your info:</h2>
<form method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="age">Age:</label>
    <input type="text" id="age" name="age"><br><br>

    <label for="salary">Salary:</label>
    <input type="text" id="salary" name="salary"><br><br>

    <label for="city">Hometown:</label>
    <input type="text" id="city" name="city"><br><br>

    <input type="submit" value="Save">
</form>
</body>
</html>