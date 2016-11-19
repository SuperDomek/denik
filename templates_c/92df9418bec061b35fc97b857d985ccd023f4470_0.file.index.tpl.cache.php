<?php
/* Smarty version 3.1.30, created on 2016-11-19 18:38:09
  from "c:\wamp64\www\denik\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58309c112f0d30_36621179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92df9418bec061b35fc97b857d985ccd023f4470' => 
    array (
      0 => 'c:\\wamp64\\www\\denik\\templates\\index.tpl',
      1 => 1479580686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58309c112f0d30_36621179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2607458309c11215e08_60370663';
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <h1>Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, welcome to project <?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
!</h1>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
