<?php

require_once('../database/database.php');

$consumidores = null;
$consumidor = null;

// Inserir - CREATE
function create() 
{
    if (!empty($_POST['consumidor'])) {
        $consumidor = $_POST['consumidor'];
        inserir('consumidores', $consumidor);
    }
}

// Ler todos registros - READ
function read_all() 
{
    global $consumidores;
    $consumidores = buscar_todos('consumidores');
}

// Ler um registro - READ
function read_one($id) 
{
    global $contato;
    $contato = buscar_um('contatos', $id);
}

// Alterar - UPDATE
function update(){
    editar();
}

// Excluir - DELETE
function delete($id) 
{
    global $consumidor;
    $consumidor = remover('consumidores', $id);
}