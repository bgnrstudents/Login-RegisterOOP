<?php
require_once '../classes/session.php';

$session = new Session();
$session->destroy();
header("Location:../index.php");
exit()
?>