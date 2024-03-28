<?php
/* Smarty version 4.5.1, created on 2024-03-28 18:47:20
  from 'C:\Codes\2024-03-28 - SmartIBGENames\app\views\site\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6605bb38da5018_58036412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ac3fedb0dd0d2258c62ae9f339f87b4b4d533f9' => 
    array (
      0 => 'C:\\Codes\\2024-03-28 - SmartIBGENames\\app\\views\\site\\master.tpl',
      1 => 1711651632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6605bb38da5018_58036412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4519522176605bb38da4701_18598727', 'title');
?>
</title>
</head>
<body>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15731231216605bb38da4cd1_60819323', 'body');
?>

  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nostrum in
    dolore eaque suscipit neque aspernatur nam ratione saepe cumque amet non
    laudantium, aliquid natus doloremque quis soluta! Inventore, minima.
  </p>
</body>
<?php }
/* {block 'title'} */
class Block_4519522176605bb38da4701_18598727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4519522176605bb38da4701_18598727',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_15731231216605bb38da4cd1_60819323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15731231216605bb38da4cd1_60819323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
