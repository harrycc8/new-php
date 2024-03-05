<?php
session_start();
$_SESSION['myFavFood'] = 'Pizza';
$_SESSION['myFavDrink'] = 'Cola';
$_SESSION['myFavColor'] = 'Orange';

#updating a session varaible
$_SESSION['myFavDrink'] = 'Beer';

#deleting a session variable
unset($_SESSION['myFavColor']);