
<!--Se ha creado  una variable en el controller (edit) el cual si existe se mostrará opción para editar el producto-->
<?php if(isset($edit) && isset($pro) && is_object($pro)): ?>
    <h1>Editar producto <?= $pro->nombre?></h1>
    <?php $url_action = base_url."/producto/save&id=".$pro->id;?>
<?php else: ?>
    <h1>Crear nuevos productos</h1>
    <?php $url_action = base_url."/producto/save"?>
<?php endif; ?>
    
<div class="form_container">

    <form action="<?= $url_action ?>" method="POST" enctype="multipart/form-data"><!--el enctype ayuda a que el formulario envíe la imagen-->
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?=isset($pro) && is_object($pro)? $pro->nombre : ''; ?>">

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" ><?=isset($pro) && is_object($pro)? $pro->nombre : ''; ?></textarea>

        <label for="precio">Precio</label>
        <input type="text" name="precio" value="<?=isset($pro) && is_object($pro)? $pro->precio : ''; ?>">

        <label for="nombre">Stock</label>
        <input type="number" name="stock" value="<?=isset($pro) && is_object($pro)? $pro->stock : ''; ?>">

        <label for="categoria">Categoria</label>
        <?php $categorias = Utils::showCategorias(); ?>
        <select name="categoria">
            <?php while ($cat = $categorias->fetch_object()): ?>
                <option value="<?= $cat->id ?>" <?=isset($pro) && is_object($pro) && $pro->categoria_id == $cat->id ? 'selected' : ''; ?>>
                    <?= $cat->nombre ?>
                </option>
            <?php endwhile; ?>
        </select>
        
        <label for="imagen">Imagen</label>
        <?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
        <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="thumb"/>
        <?php endif; ?>
        <input type="file" name="imagen">
        
        <input type="submit" value="Guardar">
        
            


    </form>
</div>

