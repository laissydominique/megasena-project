<?php

use App\Caixa\Loteria;

$resultado = Loteria::consultarResultado('megasena');
?>

<style>
    .dezena {
        border: 3px solid #ccc;
        border-radius: 50%;
        width: 80px;
        height: 80px;
        font-size: 30px;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 5px;
    }
</style>

<img class mb-5 src="/includes/imgs/mega-sena.png" width="400">

<p class="fs-2">
    Concurso:
    <span class="badge bg-success"><?= $resultado['numero'] ?></span>
</p>

<p class="fs-5">
    Data de apuração:
    <span class="badge bg-success"><?= $resultado['dataApuracao'] ?></span>
</p>

<p class="fs-5">
    Resultado:
    <span class="badge bg-success"><?= ($resultado['acumulado'] ? 'Acumudado' : 'Premiado') ?></span>
</p>

<p class="fs-3 mt-5 fw-bold">
    Dezenas sorteadas:
    <span class="badge bg-success"><?= ($resultado['acumulado'] ? 'Acumudado' : 'Premiado') ?></span>
</p>

<div class="d-flex justify-content-center">

    <?php
    foreach ($resultado['listaDezenas'] as $dezena) {
        echo '<span class="dezena">' . $dezena . '</span>';
    }
    ?>

</div>