<?php
// Change this to your own configuration
$link = new mysqli('154.9.254.215','kano','SJa5688j7Ny4Rd4B','kano');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "kano_rank";