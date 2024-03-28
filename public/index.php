<?php

require '../vendor/autoload.php';
// require '../scripts/name.php';

$name = $_GET['name'] ?? 'Fábio';
$gender = $_GET['gender'] ?? null;

use app\connection\connection;

$connectionByName = CONNECTION::byName($name, $gender == 'A' ? null : $gender);
foreach ($connectionByName as &$data) {
    $data['periodo'] = str_replace(['[', ']'], '', $data['periodo']);
}
unset($data);

use app\libraries\SiteTemplate;

$site = new SiteTemplate;
$site->assign(['datas' => $connectionByName]);
$site->display('home.tpl');
