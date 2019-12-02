<?php include "view/header.php" ?>

<div class="row">
    <?php foreach($lista2 as $produto) { ?>

    <div class="col-md-3 produto-item">
    <img width="100%" src='/view/img/produtos/<?php echo $produto['imagem']; ?>'>
        <p><?php echo $produto['nome']; ?></p>
        <p>R$ <?php echo number_format($produto['preco'],2,",","."); ?></p>
        <a href="<?php echo $produto['id'] ?>" class="btn btn-success">Comprar</a>
    </div>
    <?php } ?>
</div>


<?php include "view/footer.php" ?>