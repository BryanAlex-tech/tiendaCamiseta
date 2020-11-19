<!DOCTYPE HTML> 

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Tienda de Camisetas</title>
        <!--Se agrega el base_url porque ya no podemos usar un directorio, sino url por el rewrite-->
        <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
    </head>
    <body>
        <div id="container">
            <!--CABECERA-->
            <header id="header">
                <div id="logo">
                    <!--Se agrega el base_url porque ya no podemos usar un directorio, sino url por el rewrite-->
                    <img src="<?=base_url?>assets/img/camiseta.png" alt="Camiseta logo">
                    <a href="<?=base_url?>">
                        Tienda de camisetas
                    </a>
                </div>
            </header>

            <!--MENU-->
            <?php $categorias = Utils::showCategorias()?>
            <nav id="menu">
                <ul>
                    <li>
                        <a href="<?=base_url?>">Inicio</a>
                    </li>
                    <?php while($cat = $categorias->fetch_object()): ?>
                    <li>
                        <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </nav>

            <div id="content">