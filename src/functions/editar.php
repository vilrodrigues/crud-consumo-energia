<?php 

require_once('functions.php'); 

update();

include(HEADER); 

?>

<h2 class="text-center mb-5">Atualizar Registro</h2>

<form class="text-left" action="editar.php?id=<?= $consumidor['id']; ?>" method="post">
    <input type="hidden" name="consumidor['id_consumidor']" value="<?= $consumidor['id_consumidor']; ?>">
    <div class="row mb-3">
        <div class="col">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="consumidor['nome']" id="nome" value="<?=  $consumidor['nome']; ?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="sexo">Sexo</label>
                <input type="text" class="form-control" name="consumidor['sexo']" id="sexo" value="<?=  $consumidor['sexo']; ?>">
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="consumidor['endereco']" id="endereco" value="<?=  $consumidor['endereco']; ?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="consumidor['cep']" id="cep" value="<?=  $consumidor['cep']; ?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="consumidor['bairro']" id="bairro" id="bairro" value="<?=  $consumidor['bairro']; ?>">
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="consumidor['cpf']" id="cpf" value="<?=  $consumidor['cpf']; ?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" format="yyyy-mm-dd" name="consumidor['nascimento']" id="nascimento" value="<?=  $consumidor['nascimento']; ?>">
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <div class="form-group">
                <label for="vencimento">Data de Vencimento</label>
                <input type="date" class="form-control" format="yyyy-mm-dd" name="consumidor['vencimento']" id="vencimento" value="<?=  $consumidor['vencimento']; ?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="unidade_consumidora">Unidade Consumidora</label>
                <input type="text" class="form-control" name="consumidor['unidade_consumidora']" id="unidade_consumidora" value="<?=  $consumidor['unidade_consumidora']; ?>">
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
                <div class="form-group">
                    <label for="kwh">Kwh</label>
                    <input type="text" class="form-control" name="consumidor['kwh']" id="kwh" value="<?=  $consumidor['kwh']; ?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="total">Valor Total</label>
                <input type="text" class="form-control" name="consumidor['total']" id="total" value="<?=  $consumidor['total']; ?>">
            </div>
        </div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="./listagem.php" class="btn btn-secondary btn-sm">Cancelar</a>
            <a href="remover.php?id=<?= $consumidor['id_consumidor']; ?>" class="btn btn-danger btn-sm">
                <i class="fa fa-trash"></i> Excluir
            </a>
        </div>
    </div>
</form>

<?php 

include(FOOTER); 

?>