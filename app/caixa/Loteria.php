<?php

namespace App\Caixa;

class Loteria
{

    const URL_BASE = 'https://servicebus2.caixa.gov.br/portaldeloterias/api';

    public static function consultarResultado($loteria, $concurso = null)
    {
        $endpoint = self::URL_BASE . '/' . $loteria . '/' . $concurso;

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return strlen($response) ? json_decode($response, true) : [];
    }
}
