{extends file="master.tpl"} {block name=title}Nomes populares{/block} {block
name=body}
<h1>Nomes populares</h1>
{include file="./components/form.tpl"}
<b>{$smarty.get.name}</b>
{include file="./components/chart.tpl"}
<b></b>
{/block}
