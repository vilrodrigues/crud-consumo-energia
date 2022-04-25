<?php 

require_once('./functions.php'); 
require_once('../../app/config.php');

read_all(); 

include(HEADER); 

?>

<h2 class="text-center mb-5">Listagem de Consumidores</h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Unidade Consumidora</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($consumidores) : ?>
    <?php foreach ($consumidores as $consumidor) : ?>
        <div class="modal fade text-left" id="modal<?= $consumidor['id_consumidor']; ?>" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-label">Detalhes do Registro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <dl>
                            <dt>Id:</dt>
                            <dd><?= $consumidor['id_consumidor']; ?></dd>
                        </dl>
                        <dl>
                            <dt>Nome:</dt>
                            <dd><?= $consumidor['nome']; ?></dd>
                        </dl>
                        <dl>
                            <dt>Sexo:</dt>
                            <dd><?= $consumidor['sexo']; ?></dd>
                        </dl>
                        <dl>
                            <dt>Endereço:</dt>
                            <dd><?= $consumidor['endereco']; ?></dd>
                        </dl>
                        <dl>
                            <dt>CEP:</dt>
                            <dd><?= $consumidor['cep']; ?></dd>
                        </dl>
                        <dl>
                            <dt>Bairro:</dt>
                            <dd><?= $consumidor['bairro']; ?></dd>
                        </dl>
                        <dl>
                            <dt>CPF:</dt>
                            <dd><?= $consumidor['cpf']; ?></dd>
                        </dl>
                        <dl>
                            <dt>Data de Nascimento:</dt>
                            <dd><?= $consumidor['nascimento']; ?></dd>
                        </dl>
                        <dl>
                            <dt>Data de Vencimento:</dt>
                            <dd><?= $consumidor['vencimento']; ?></dd>
                        </dl>
                        <dl>
                            <dt>Kwh:</dt>
                            <dd><?= $consumidor['kwh']; ?></dd>
                        </dl>
                        <dl>
                            <dt>Valor Total:</dt>
                            <dd>R$ <?= $consumidor['total']; ?></dd>
                        </dl>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <tr>
            <td><?= $consumidor['id_consumidor']; ?></td>
            <td><?= $consumidor['nome']; ?></td>
            <td><?= $consumidor['unidade_consumidora']; ?></td>
            <td class="actions">
                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modal<?= $consumidor['id_consumidor']; ?>">
                    <i class="fa fa-eye"></i>
                </a>
                <a href="editar.php?id=<?= $consumidor['id_consumidor']; ?>" class="btn btn-sm btn-warning">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="remover.php?id=<?= $consumidor['id_consumidor']; ?>" class="btn btn-sm btn-danger">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>

<?php 

include(FOOTER); 

?>