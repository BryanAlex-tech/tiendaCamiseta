<!DOCTYPE HTML> 

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div id="container">
            <!--CABECERA-->
            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="Camiseta logo">
                    <a href="index.php">
                        Tienda de camisetas
                    </a>
                </div>
            </header>

            <!--MENU-->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="">Inicio</a>
                    </li>
                    <li>
                        <a href="">Categoria 1</a>
                    </li>
                    <li>
                        <a href="">Categoria 2</a>
                    </li>
                    <li>
                        <a href="">Categoria 3</a>
                    </li>
                    <li>
                        <a href="">Categoria 4</a>
                    </li>
                    <li>
                        <a href="">Categoria 5</a>
                    </li>
                </ul>
            </nav>

            <div id="content">

                <!--BARRA LATERAL-->
                <aside id="lateral"><!--esta etiqueta se usa para barras laterales-->

                    <div id="login" class="block_aside">
                        <form action="#" method="post">
                            <label for="email">Email</label>
                            <input type="email" name="email">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password">
                            <input type="submit" value="Enviar">
                        </form>

                        <a href="#">Mis pedidos</a>
                        <a href="#">Gestionar pedidos</a>
                        <a href="#">Gestionar categorias</a>

                    </div>
                </aside>

                <!--CONTENIDO PRINCIPAL-->
                <div id="central">
                    <h1>Productos destacados</h1>
                    <div class="product">
                        <img src="assets/img/camiseta.png">
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 dolares</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png">
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 dolares</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png">
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 dolares</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                </div>


            </div>

            <!--PIE DE PAGINA-->
            <footer id="footer">
                <p>Desarrollado por Bryan Alexander Calles &copy; <?= date('Y') ?></p>
            </footer>

        </div>

    </body>

</html>