<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
            height: 100%;
        }

        footer {
            background-color: white;
        }

        main {
            margin-bottom: 150px;
        }
    </style>
    <title>Consumo de Energia - Praticando CRUD</title>
</head>
<body class="container vh-100">

<div class="row text-center">
    <header class="sticky-top">
        <h1>Consumo de Energia</h1>
        <p>Este CRUD foi elaboradoro para a matéria de Sitios Web 3</p>
        <div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Painel</button>
                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="http://localhost/consumo_energia/src/functions/inserir.php">Inserir Consumidor</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="http://localhost/consumo_energia/src/functions/listagem.php">Listagem de Consumidores</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="http://localhost/consumo_energia/app/index.php">Voltar ao Início</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr />
    </header>
</div>

<main class="container">