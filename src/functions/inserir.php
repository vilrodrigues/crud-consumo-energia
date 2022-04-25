<?php 

require_once('../../app/config.php'); 
require_once('../functions/functions.php');

include(HEADER); 
 
if(isset($_POST["salvar"])){
    create();
}

?>

<h2 class="text-center mb-5">Novo Registro</h2>

<div class="row">
    <form action="inserir.php" method="post">
        <div class="row mb-3">
            <div class="col">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="consumidor['nome']" id="nome" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <input type="text" class="form-control" name="consumidor['sexo']" id="sexo" placeholder="M ou F" required>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="consumidor['endereco']" id="endereco" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" name="consumidor['cep']" id="cep" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" name="consumidor['bairro']" id="bairro" id="bairro" required>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="consumidor['cpf']" id="cpf" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" format="yyyy-mm-dd" name="consumidor['nascimento']" id="nascimento" required>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-group">
                    <label for="vencimento">Data de Vencimento</label>
                    <input type="date" class="form-control" format="yyyy-mm-dd" name="consumidor['vencimento']" id="vencimento" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="unidade_consumidora">Unidade Consumidora</label>
                    <input type="text" class="form-control" name="consumidor['unidade_consumidora']" id="unidade_consumidora" required>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                    <div class="form-group">
                        <label for="kwh">Kwh</label>
                        <input type="text" class="form-control" name="consumidor['kwh']" id="kwh" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="total">Valor Total</label>
                    <input type="text" class="form-control" name="consumidor['total']" id="total" required>
                </div>
            </div>
        </div>
        <div id="actions" class="row mb-5">
            <div>
                <button type="submit" class="btn btn-primary btn-sm" name="salvar">Salvar</button>
                <a href="../../app/index.php" class="btn btn-secondary btn-sm">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php 

include(FOOTER); 

?>