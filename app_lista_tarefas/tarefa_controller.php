<?php

	require_once "../../app_lista_tarefas/tarefa.model.php";
	require_once "../../app_lista_tarefas/tarefa.service.php";
	require_once "../../app_lista_tarefas/conexao.php";

	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

	$tarefa = new Tarefa();
	$tarefa->__set('tarefa', $_POST['tarefa']);

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);

	echo '<pre>';
	print_r($tarefa);
	echo '</pre>';
?>