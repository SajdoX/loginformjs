<?php
require_once('class/User.class.php');

$user = new User('jsidlo', 'haslo123');
//$user->register();
$user->login();

echo '<pre>';
var_dump($user);
?>