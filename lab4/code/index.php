<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNS</title>
</head>
<body>
<h1>Message Board</h1>
<form action="spreadsheet.php" method="post">
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
    </thead>
    <?php
    require_once __DIR__ . "/vendor/autoload.php";
    $client = new Google_Client();
    $client->setAuthConfig("credentials.json");
    $client->addScope(Google_Service_Sheets::SPREADSHEETS_READONLY);
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = "1Zyi9uxCbRKa2ZjNEvFRR4WBruYiR9XUb5bjA0HpiER8";
    $range = "A1:D";

    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();

    if (!empty($values))
    {
        foreach ($values as $row)
        {
            echo "<tr>";
            echo "<td>{$row[0]}</td>";
            echo "<td>{$row[1]}</td>";
            echo "<td>{$row[2]}</td>";
            echo "<td>{$row[3]}</td>";
            echo "</tr>";
        }
    }
    ?>
</table>
</body>
</html>