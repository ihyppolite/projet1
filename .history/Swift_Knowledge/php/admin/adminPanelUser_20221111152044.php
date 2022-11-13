<?php
require "../Model/User.php";
$user = new user;

$users = $user->findallUser();

$template = "../../View/admin/display_user.phtml";
require "../../View/layout.phtml";
