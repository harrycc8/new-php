<?php
session_start();
#use echo statements to output the values stored in $_SESSION
echo '<BR>Food: ' . $_SESSION['myFavFood'];
echo '<BR>Drink: ' . $_SESSION['myFavDrink'];
echo 'Color: ' . $_SESSION['myFavColor'];