<?php
/* Smarty version 4.5.1, created on 2024-03-28 18:50:56
  from 'C:\Codes\2024-03-28 - SmartIBGENames\app\views\site\components\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6605bc1099fb68_51852846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db6a3b89e03aa3463457f9d6f256c1d8bd36474' => 
    array (
      0 => 'C:\\Codes\\2024-03-28 - SmartIBGENames\\app\\views\\site\\components\\form.tpl',
      1 => 1711651546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6605bc1099fb68_51852846 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="scripts/name.php" method="GET">
  <label for="nome">Digite um nome:</label>
  <input type="text" id="nome" name="nome" value="Fábio" />
  <button type="submit">Buscar</button>
</form>
<?php }
}
