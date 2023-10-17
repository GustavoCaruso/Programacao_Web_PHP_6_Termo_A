




<?php
  require '../src/View/cabecalho.php';
  ?>
<h1>excluir Categoria</h1>

<form method="post" action="/categoria/deletar/<?=$resultado['id']?>">
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">
                    descrição:
                </label>
                <input type="text" class="form-control" 
                    name="descricao" id="descricao" value="<?=$resultado['descricao']?> "disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                    <h5 class="text-danger">
                    Deseja realmente excluir
                    </h5>
                <button type="submit" class="btn btn-danger">
                    Excluir
                </button>
            </div>
        </div>
        </form>
<?php
  require '../src/View/rodape.php';