<?php

session_start();
if (isset($_SESSION['user'])) {
    echo "Surname: " . $_SESSION['user']['surname'] . "<br>";
    echo "Name: " . $_SESSION['user']['name'] . "<br>";
    echo "Age: " . $_SESSION['user']['age'];
}
