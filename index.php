<?php

//Vlozeni tridy pro vytvareni templatu s vlastnimi cestami
require('setup.php');

$smarty = SmartySingleton::instance();

$smarty2 = SmartySingleton::instance();

$smarty->assign('account', 'Dominik');
$smarty->assign('name', 'Baodur');
$smarty->assign('race', 'člověk');
$smarty->assign('age', '28');
$smarty->assign('sex', 'muž');
$smarty->assign('height', '195 cm');
$smarty->assign('weight', '85 kg');
$smarty->assign('level', '6');
$smarty->assign('experience', '4311');

$smarty->display('index.tpl');

?>