<?php
/* Smarty version 4.5.1, created on 2024-03-28 22:06:27
  from 'C:\Codes\2024-03-28 - SmartIBGENames\app\views\site\components\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6605e9e36f3277_98380530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db6a3b89e03aa3463457f9d6f256c1d8bd36474' => 
    array (
      0 => 'C:\\Codes\\2024-03-28 - SmartIBGENames\\app\\views\\site\\components\\form.tpl',
      1 => 1711663570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6605e9e36f3277_98380530 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="NameForm" method="GET">
  <label for="nome">Digite um nome:</label>
  <input type="text" id="nome" name="nome" value="<?php echo $_GET['name'];?>
" />
  <label for="gender">Sexo:</label>
  <select name="gender" id="gender" value="<?php echo $_GET['gender'];?>
">
    <option value="A">Ambos</option>
    <option value="M">Masculino</option>
    <option value="F">Feminino</option>
  </select>
  <button type="submit">Buscar</button>
</form>

<?php echo '<script'; ?>
>
  window.addEventListener(
    "load",
    function () {
      const searchParams = new URLSearchParams(window.location.search);

      document.getElementById("gender").value =
        searchParams.get("gender") || "A";
    },
    false
  );

  document
    .getElementById("NameForm")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      const NomePesquisado = document.getElementById("nome").value;

      const SexoPesquisado = document.getElementById("gender").value;

      if (!NomePesquisado || !NomePesquisado.length) {
        return;
      }

      const NomeHREF = NomePesquisado ?? "Fábio";
      const SexoHREF = SexoPesquisado ?? "A";

      window.location.href = "?name=" + NomeHREF + "&gender=" + SexoHREF;
    });
<?php echo '</script'; ?>
>
<?php }
}
