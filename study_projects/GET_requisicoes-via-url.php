<?php

//  a fun��o addslaches remove caracteres especiais
// serve para proteger o sistema de inje��o de c�digo malicioso
// essencial quando recebemos dados via get

$nome = addslashes($_GET['produto']);
$preco = $_GET['preco'];

echo "O produto $nome custa $preco.";

//http://localhost:3000/?produto=tablet&preco=114,36
//O produto tablet custa 114,36.