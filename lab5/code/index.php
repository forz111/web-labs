<?php
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_POST['email']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $category = $mysqli->real_escape_string($_POST['category']);
    $description = $mysqli->real_escape_string($_POST['description']);

    $mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')");
}

$arr = [];
if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
    $result->close();
}
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNS</title>
</head>
<body>
<h1>Message Board</h1>
<form action="index.php" method="post">
    <label for="email">Email</label><br>
    <input type="email" name="email" required><br><br>

    <label for="category">Category</label>
    <select id="category" name="category">
        <option value="graphics cards">graphics cards</option>
        <option value="motherboards">motherboards</option>
        <option value="processors">processors</option>
    </select> <br> <br>

    <label for="title">Title</label><br>
    <input type="text" name="title" required><br>

    <label for="description">Description</label><br>
    <textarea rows="3" name="description" required></textarea><br>

    <input type="submit" value="Save"><br>
</form>

<h1>Uploaded Ads</h1>
<table>
    <thead>
    <th>Email</th>
    <th>Category</th>
    <th>Title</th>
    <th>Description</th>
    <?php foreach ($arr as $item): ?>
        <tr>
            <td><?= $item['email'] ?></td>
            <td><?= $item['category'] ?></td>
            <td><?= $item['title'] ?></td>
            <td><?= $item['description'] ?></td>
        </tr>
    <?php endforeach; ?>
    </thead>

</table>
</body>
</html>