<?php

require '../../vendor/autoload.php';

use app\connection\Connection; // Ajuste o namespace conforme necessário

// Verifica se o parâmetro 'nome' foi enviado via método GET
if (isset($_GET['nome'])) {
    // Captura o valor do parâmetro 'nome' enviado
    $nome = $_GET['nome'];

    // Consulta os dados relacionados ao nome fornecido usando a classe Connection
    $connectionByName = Connection::byName($nome);

    // Processa os dados conforme necessário
    foreach ($connectionByName as &$data) {
        $data['periodo'] = str_replace(['[', ']'], '', $data['periodo']);
    }
    unset($data);

    // Envie os dados processados para o template Smarty
    $site = new SiteTemplate;
    $site->assign(['datas' => $connectionByName]);
    $site->display('home.tpl');
} else {
    // Se o parâmetro 'nome' não foi enviado, redirecione ou exiba uma mensagem de erro
    echo "Por favor, forneça um nome.";
}