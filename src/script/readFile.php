<?php
# Definindo as constantes

define("__PASTA__", "../database");

$caminho = __PASTA__."/alunos.csv";

# A função realpath() irá corrigir o caminho do arquivo,
# independemente da plataforma (UNIX, WINDOWS, MAC OS) 

$caminho_real = realpath($caminho); 

# Modo de APENAS leitura
$modo = "r";

$arquivo = fopen($caminho_real, $modo);
$colunas = fgetcsv($arquivo, null, ",");

while($linha = fgetcsv($arquivo,null, ",")) {
    $alunos[] = array_combine($colunas, $linha);
}

fclose($arquivo);


