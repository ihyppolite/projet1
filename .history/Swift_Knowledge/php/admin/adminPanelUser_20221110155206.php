<?php
require "../Model/User.php";
$user = new user;

$users=$user->findallUser();

$template = "../admin/View/.phtml";
require "../View/layout.phtml";