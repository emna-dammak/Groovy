<?php

include_once 'autoload.php';

$timezone=date_default_timezone_set("Africa/Tunis");
$con=connexionBD::getInstance();
$account=new Account($con);


?>