<?php
/* Smarty version 3.1.30, created on 2016-11-19 18:02:51
  from "c:\wamp64\www\denik\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583093cb6b3fd1_01631728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92df9418bec061b35fc97b857d985ccd023f4470' => 
    array (
      0 => 'c:\\wamp64\\www\\denik\\templates\\index.tpl',
      1 => 1479578570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583093cb6b3fd1_01631728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '28143583093cb60b414_16786100';
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Testovaci stranka projektu Denik</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1>Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, welcome to project <?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
!</h1>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
