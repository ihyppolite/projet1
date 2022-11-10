<?php
require "./Model/User.php";
$user = new user;

$users=$user->findallUser();

