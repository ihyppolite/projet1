<?php
require "../Model/User.php";
$user = new user;

$users=$user->findallUser();

$template = "../../admin/View/display_user.phtml";
require "../../View/layout.phtml";