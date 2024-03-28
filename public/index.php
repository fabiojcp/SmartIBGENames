<?php

require '../vendor/autoload.php';
// require '../scripts/name.php';

use app\connection\connection;

$connectionByName = CONNECTION::byName('Fábio');
foreach ($connectionByName as &$data) {
    $data['periodo'] = str_replace(['[', ']'], '', $data['periodo']);
}
unset($data);

use app\libraries\SiteTemplate;

$site = new SiteTemplate;
$site->assign(['datas' => $connectionByName]);
$site->display('home.tpl');
