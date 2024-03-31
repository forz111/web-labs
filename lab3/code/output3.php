<?php
function redirectToHome()
{
    header("Location: task3.php");
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$category = $_POST['category'];
$email = $_POST['email'];
$title = $_POST['title'];
$desc = $_POST['description'];
$categoryFolder = "./categories/$category";
$filePath = "$categoryFolder/$title.txt";
$content = "$email\n$title\n$desc";

file_put_contents($filePath, $content);
redirectToHome();
?>