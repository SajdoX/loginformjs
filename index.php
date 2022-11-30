<?php
require_once('class/User.class.php');

$user = new User('jsidlo', 'haslo123');

echo '<pre>';
var_dump($user);
?>