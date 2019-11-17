<?php include "view/header.php" ?>
<h1>Login Administrador</h1>

<form method="post" action="adm">

    <div class="row">   
    <div class="col-md-4">
        <div class="input-group mb-3" >
        
        <input type="text" name="nome"  placeholder="usuario" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

        </div>

        <div class="input-group mb-3">
       
        <input type="password" name="senha"  placeholder="senha" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

        </div>
        <button class="btn btn-primary">Entrar</button>
    </div>
    </div>
</form>

<?php include "view/footer.php" ?>