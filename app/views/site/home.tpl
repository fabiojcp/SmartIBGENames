{extends file="master.tpl"} {block name=title}Nomes populares{/block} {block
name=body} {include file="./styles/form.tpl"} {include
file="./styles/header.tpl"} {include file="./styles/footer.tpl"} {include
file="./styles/main.tpl"} {include file="./components/animation/animation.tpl"}

<script>
  const URLParams = window.location.search;

  if (URLParams === "" || !URLParams.includes("name=")) {
    window.location.href = "?name=Fábio";
  }
</script>
<canvas class="webgl"></canvas>
<main>
  {block name=header} {include file="./partials/header.tpl"} {/block} {include
  file="./components/chart.tpl"} {include file="./components/form.tpl"} {if
  $datas != undefined} {/if}
</main>

{block name=footer} {include file="./partials/footer.tpl"} {/block} {/block}
