<?php
// Change this to your own configuration
$link = new mysqli('jdbc:mysql://120.48.13.87','Eat_MiniGame','5YCs2Hsn77F82hkt','eat_minigame',3306);
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "kano_rank";
