<?php
// Change this to your own configuration
$link = new mysqli('120.48.13.87:3306/eat_minigame','Eat_MiniGame','5YCs2Hsn77F82hkt','eat_minigame');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "kano_rank";
