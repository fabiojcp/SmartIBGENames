<?php
/* Smarty version 4.5.1, created on 2024-03-28 18:51:53
  from 'C:\Codes\2024-03-28 - SmartIBGENames\app\views\site\components\chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6605bc49535919_76683372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2519d62fe44c0e0e54e631119c1d0aa180f330d3' => 
    array (
      0 => 'C:\\Codes\\2024-03-28 - SmartIBGENames\\app\\views\\site\\components\\chart.tpl',
      1 => 1711651894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6605bc49535919_76683372 (Smarty_Internal_Template $_smarty_tpl) {
?><canvas
  id="myChart"
  style="max-width: 90vw; max-height: 40vh"
  width="400"
  height="400"
></canvas>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

  let datas = <?php echo json_encode($_smarty_tpl->tpl_vars['datas']->value);?>
;


  let periods = datas.map(data => data.periodo);
  let frequencies = datas.map(data => data.frequencia);


  let ctx = document.getElementById('myChart').getContext('2d');
  let myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: periods,
          datasets: [{
              label: '',
              data: frequencies,
              borderColor: 'rgba(54, 162, 235, 1)',
              fill: true,
              fillColor: "rgba(220,220,220,0.2)",
              borderWidth: 2,
              tension: 0.1,
              legend: false
          }]
      },
      options: {
          legend: {
              display: false
          },
          plugins: {
            legend: {
                display: false
            },
        },
          scales: {
            x: {
              grid:{
                drawOnChartArea: false
              }
            },
            y: {
              grid:{
                drawOnChartArea: false
              }
            }
          },
      },
  });
<?php echo '</script'; ?>
><?php }
}
