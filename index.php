<?php

//Vlozeni tridy pro vytvareni templatu s vlastnimi cestami
require('setup.php');

$smarty = SmartySingleton::instance();

$smarty2 = SmartySingleton::instance();

$smarty->assign('name', 'Dominik');

$smarty->display('index.tpl');

?>