<?php

mysqli_report(MYSQLI_REPORT_STRICT);

require_once('../../app/config.php');

// Conexão com o banco de dados
function open_database() 
{
		$conexao = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if($conexao){
            return $conexao;
        } else {
            die("Ocorreu um erro!");
        }
}

// Encerrar conexão com o banco de dados
function close_database($conexao) 
{
    mysqli_close($conexao);
}

// Procura um registro pelo id
function buscar_um($table, $id = null) 
{
	$database = open_database();
	$found = null;

    if ($id) {
        $sql = "SELECT * FROM {$table} WHERE id_consumidor = {$id};";
        $result = $database->query($sql);
        
        if ($result->num_rows > 0) {
            $found = $result->fetch_assoc();
        }
    } else { // Este caso é o find_all() para recuperar todos os registros da tabela
        $sql = "SELECT * FROM {$table};";
        $result = $database->query($sql);
    
        if ($result->num_rows > 0) {
            $found = $result->fetch_all(MYSQLI_ASSOC);
        }
    }
	
	close_database($database);
	return $found;
}

// Recupera todos os registros da tabela
function buscar_todos($table) {
    return buscar_um($table);
}

// Inserção - Create
function inserir($table, $data) 
{
    $columns = null;
    $values = null;
    
    foreach ($data as $key => $value) {
        $columns .= trim($key, "'") . ",";
        $values .= "'$value',";
    }
    
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');
    
    $database = open_database();
    $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values});";
    $database->query($sql);
    close_database($database);

    header('location: ../functions/sucesso-inserir.php');
}

// Editar - UPDATE
function editar() 
{
    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        if (isset($_POST['consumidor'])) { // caso altere o registro

            $consumidor = $_POST['consumidor'];
            $items = null;
            $id = null;

            foreach ($consumidor as $key => $value) {
                if($key === "'id_consumidor'"){
                    $id = $value;
                } else {
                    $items .= trim($key, "'") . " = '$value',";
                }
            }

            alterar('consumidores', $id, $items);
            header('location: ./listagem.php');
        } else { // caso exibir os dados
            global $consumidor;
            $consumidor = buscar_um('consumidores', $id);
        } 
    }
}

function alterar($table, $id, $items) 
{
    $items = rtrim($items, ',');

    $sql  = "UPDATE {$table} SET {$items} WHERE id_consumidor = {$id};";
    $database = open_database();
    $database->query($sql);
     
    close_database($database);
}

function remover($table, $id) 
{
    if ($id) {
        $sql = "DELETE FROM {$table} WHERE id_consumidor = {$id};";
        $database = open_database();
        $result = $database->query($sql);
        close_database($database);
    }
}