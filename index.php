<?php

require __DIR__.'/vendor/autoload.php';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/footer.php';
include __DIR__ . '/includes/error.php';
include __DIR__ . '/includes/result.php';


use \App\Caixa\Loteria;

$concurso = $_GET['concurso'] ?? null;


$resultado = Loteria::consultarResultado('megasena', $concurso);

