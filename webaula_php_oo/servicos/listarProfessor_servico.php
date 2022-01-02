<?php

/* insere apenas uma vez os arquivos com as funcoes e classes utilizadas */
require_once '../bd/professor_bd.php';

/* criar uma sessao */
session_start();

/* lista os professores */
$professores = listar();

$_SESSION['professores'] = $professores;

header('location: ../listarProfessor_bs.php');
