<?php
/* Smarty version 4.5.1, created on 2024-03-28 21:43:16
  from 'C:\Codes\2024-03-28 - SmartIBGENames\app\views\site\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6605e4743ccd91_40405556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ac3fedb0dd0d2258c62ae9f339f87b4b4d533f9' => 
    array (
      0 => 'C:\\Codes\\2024-03-28 - SmartIBGENames\\app\\views\\site\\master.tpl',
      1 => 1711662156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6605e4743ccd91_40405556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2513291026605e4743cbde3_43572287', 'title');
?>
</title>
</head>
<body>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16056595386605e4743cc403_19194916', 'header');
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12336288886605e4743cc777_49387276', 'body');
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12728257326605e4743cca89_15708613', 'footer');
?>

</body>
<?php }
/* {block 'title'} */
class Block_2513291026605e4743cbde3_43572287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2513291026605e4743cbde3_43572287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_16056595386605e4743cc403_19194916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_16056595386605e4743cc403_19194916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'body'} */
class Block_12336288886605e4743cc777_49387276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12336288886605e4743cc777_49387276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_12728257326605e4743cca89_15708613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_12728257326605e4743cca89_15708613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
