<?php include "view/header.php";?>

<form class="form-horizontal" method="POST" action='adm'>
<fieldset>

<!-- Form Name -->
<legend>Login Administrador</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome"></label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="nome" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha"></label>  
  <div class="col-md-4">
  <input id="senha" name="senha" type="text" placeholder="senha" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="entrar"></label>
  <div class="col-md-4">
    <button id="entrar" name="entrar" class="btn btn-primary">Entrar</button>
  </div>
</div>

</fieldset>
</form>

<?php include "view/footer.php"; ?>