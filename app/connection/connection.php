<?php

namespace app\connection;

define('CONNECTION', dirname(__FILE__, 3));

class Connection
{
    private const API_URL='https://servicodados.ibge.gov.br/api/v2/censos/nomes/';
    public static function byName($name = '', $sex = '', $UF = '', $location = '')
    {
        $url = self::API_URL.$name.'/';

        if (!empty($sex) || !empty($UF) || !empty($location)) {
            $url .= '?';
        }
        if (!empty($sex)) {
            $url .= 'sexo='.$sex;
        }
        if (!empty($UF)) {
            $url .= '&groupBy='.$UF;
        }
        if (!empty($location)) {
            $url .= '&localidade='.$location;
        }

        $json_data = file_get_contents($url);
        $decoded_data = json_decode($json_data, true);

        if (isset($decoded_data[0]['res'])) {
            return $decoded_data[0]['res'];
        } else {
            return null;
        }
    }
}