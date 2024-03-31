<!DOCTYPE html>
<html>
<head>
    <title>Count</title>
</head>
<body>
<form method="post">
    <textarea name="text"></textarea>
    <br>
    <input type="submit" name="submit" value="Count it">
</form>
<?php
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $wordCount = str_word_count($text);
    $charCount = strlen($text);

    echo "<p>Word count: $wordCount</p>";
    echo "<p>Number of characters: $charCount</p>";
}
?>
</body>