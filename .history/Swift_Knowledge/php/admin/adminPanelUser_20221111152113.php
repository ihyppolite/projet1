<?php
require "../Model/User.php";

$set = 'no';
$user = new user;

$users = $user->findallUser();

$template = "../../View/admin/display_user.phtml";
require "../../View/layout.phtml";
