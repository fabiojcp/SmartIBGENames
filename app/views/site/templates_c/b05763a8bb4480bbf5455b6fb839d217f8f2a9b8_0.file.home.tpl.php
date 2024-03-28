<?php
/* Smarty version 4.5.1, created on 2024-03-28 22:20:38
  from 'C:\Codes\2024-03-28 - SmartIBGENames\app\views\site\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6605ed36386bc1_64875510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b05763a8bb4480bbf5455b6fb839d217f8f2a9b8' => 
    array (
      0 => 'C:\\Codes\\2024-03-28 - SmartIBGENames\\app\\views\\site\\home.tpl',
      1 => 1711664437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./styles/form.tpl' => 1,
    'file:./styles/header.tpl' => 1,
    'file:./styles/footer.tpl' => 1,
    'file:./styles/main.tpl' => 1,
    'file:./components/animation/animation.tpl' => 1,
    'file:./partials/header.tpl' => 1,
    'file:./components/chart.tpl' => 1,
    'file:./components/form.tpl' => 1,
    'file:./partials/footer.tpl' => 1,
  ),
),false)) {
function content_6605ed36386bc1_64875510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11357607066605ed36379b96_26493975', 'title');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5287038986605ed3637ae08_52762611', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block 'title'} */
class Block_11357607066605ed36379b96_26493975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11357607066605ed36379b96_26493975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nomes populares<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_11069065036605ed36381299_07383584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:./partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1294240056605ed36386123_17662221 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:./partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'footer'} */
/* {block 'body'} */
class Block_5287038986605ed3637ae08_52762611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5287038986605ed3637ae08_52762611',
  ),
  'header' => 
  array (
    0 => 'Block_11069065036605ed36381299_07383584',
  ),
  'footer' => 
  array (
    0 => 'Block_1294240056605ed36386123_17662221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:./styles/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:./styles/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:./styles/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:./styles/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:./components/animation/animation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
  const URLParams = window.location.search;

  if (URLParams === "" || !URLParams.includes("name=")) {
    window.location.href = "?name=Fábio";
  }
<?php echo '</script'; ?>
>
<canvas class="webgl"></canvas>
<main>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11069065036605ed36381299_07383584', 'header', $this->tplIndex);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:./components/chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:./components/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php if ($_smarty_tpl->tpl_vars['datas']->value != 'undefined') {?> <?php }?>
</main>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1294240056605ed36386123_17662221', 'footer', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'body'} */
}
