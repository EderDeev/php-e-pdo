<?php

$caminhoAbsoluto = __DIR__ . '/banco.sqlite';
$pdo  = new PDO('sqlite:'.$caminhoAbsoluto);

echo 'Conectado';
