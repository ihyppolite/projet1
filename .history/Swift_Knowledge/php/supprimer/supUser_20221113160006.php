<?php

require "../../Model/User.php";

$id = $_GET['id'];

$user = new User();
$user->DelectUser($id);
