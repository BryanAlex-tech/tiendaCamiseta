<?php if (isset($product)): ?>
    <h1><?= $product->nombre ?></h1>

    <div id="detail-product">
        <div class="image">
            <!--Si existe la imagen se mpstrá, si no, no-->
            <?php if ($product->imagen != NULL): ?>
                <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>">
            <?php else: ?>
                <img src="<?= base_url ?>assets/img/camiseta.png">
            <?php endif; ?>
        </div>
        <div class="data">
            <p><?= $product->descripcion ?></p>
            <p><?= $product->precio ?></p>
            <a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
        </div>
            
        

    </div>

<?php else: ?>
    <h1>El producto no existe</h1>
<?php endif; ?>
