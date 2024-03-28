<?php
/* Smarty version 4.5.1, created on 2024-03-28 18:57:55
  from 'C:\Codes\2024-03-28 - SmartIBGENames\app\views\site\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6605bdb3af16d1_33454772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b05763a8bb4480bbf5455b6fb839d217f8f2a9b8' => 
    array (
      0 => 'C:\\Codes\\2024-03-28 - SmartIBGENames\\app\\views\\site\\home.tpl',
      1 => 1711652270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./components/form.tpl' => 1,
    'file:./components/chart.tpl' => 1,
  ),
),false)) {
function content_6605bdb3af16d1_33454772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9863137046605bdb3aec010_70049807', 'title');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6943783056605bdb3aec737_35358359', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block 'title'} */
class Block_9863137046605bdb3aec010_70049807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9863137046605bdb3aec010_70049807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nomes populares<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_6943783056605bdb3aec737_35358359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6943783056605bdb3aec737_35358359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Nomes populares</h1>
<?php $_smarty_tpl->_subTemplateRender("file:./components/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<b><?php echo $_GET['name'];?>
</b>
<?php $_smarty_tpl->_subTemplateRender("file:./components/chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<b></b>
<?php
}
}
/* {/block 'body'} */
}
