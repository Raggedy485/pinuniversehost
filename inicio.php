<?php 

    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "pinuniverse";

    $conexion = mysqli_connect($servidor, $usuario, "") or die ("No se ha podido conectar al servidor de la base de datos");
    $db = mysqli_select_db($conexion, $basededatos) or die ("Ups! Parece ser que no se ha podido conectar a la base de datos");

    //establecer y realizar consulta. Guardar en variable.
	$consulta = "SELECT * FROM productos2 ORDER BY id DESC";
	$resultado = mysqli_query($conexion, $consulta) or die ("Algo ha salido mal en la consulta");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Estilos -->
    <link rel='stylesheet' type='text/css' media='screen' href='menu.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <!-- Fonts de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;700&family=IBM+Plex+Sans:wght@300;500;700&display=swap" rel="stylesheet">
    
    <title>PinUniverse - Inicio</title>
</head>
<body>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Header -->
    <header>
            <div class="row" id="headerMenu">
                <div class="col-3 logo">
                    <a href="inicio.php"><img src="Logo - PinUniverse.png"></a>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-2 buttons-nav "><a href="productos.php">Productos</a></div>
                        <div class="col-2 buttons-nav "><a href="eventos.php">Eventos</a></div>
                        <div class="col-2 buttons-nav"><a href="contact.html">Contacto</a></div>
                        <div class="col-2 buttons-nav"><a href="userCustom.html">Personalizados</a></div>
                    </div>
                </div>
            </div>
        </header>

    <!-- cuerpo inicio -->
    <div class="row">
        <div class="col-12">
            <div class="row align-items-center" id="slogan">
                <div class="col-6" id="frase_slogan">
                    <h1>Explora el <strong id="txt_morado">universo</strong> <br>de los pines<br>metálicos</h1>
                </div>
                <div class="col" id="img_slogan">
                    <img src="jupiter.png">
                </div>
            </div>
        </div>
        <div class="col-12" style="padding-left: 15%;">
            <h2>Novedades</h2>
        </div>
        
        <!--Carousel-->
        <div id="myCarousel" class="row carr mx-0 carousel slide">
            <div class="carousel-indicators" style="margin:0;">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner" style="display:flex;">

                <!--Slide 1-->
                <div class="carousel-item active">
                <!-- Cuadro de universo 1 -->
                    <div class="col-3 cuadro-univ">
                        <?php $producto = mysqli_fetch_array($resultado); ?>
                        <div class="row header-cuadro">
                            <div class="col-12 centrar"> 
                                <h3><?php echo $producto['nombre']; ?></h3>
                            </div>
                        </div>
                        <div class="row img-cuadro">
                            <div class="col-12 centrar"> 
                                <img src="<?php echo $producto['foto']; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Cuadro de universo 2 -->
                    <div class="col-3 cuadro-univ">
                    <?php $producto = mysqli_fetch_array($resultado); ?>
                        <div class="row header-cuadro">
                            <div class="col-12 centrar"> 
                                <h3><?php echo $producto['nombre']; ?></h3>
                            </div>
                        </div>
                        <div class="row img-cuadro">
                            <div class="col-12 centrar"> 
                                <img src="<?php echo $producto['foto']; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Cuadro de universo 3 -->
                    <div class="col-3 cuadro-univ">
                    <?php $producto = mysqli_fetch_array($resultado); ?>
                        <div class="row header-cuadro">
                            <div class="col-12 centrar"> 
                                <h3><?php echo $producto['nombre']; ?></h3>
                            </div>
                        </div>
                        <div class="row img-cuadro">
                            <div class="col-12 centrar"> 
                                <img src="<?php echo $producto['foto']; ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Segundo slide -->
                <div class="carousel-item">
                    <div class="col-3 cuadro-univ">
                    <?php $producto = mysqli_fetch_array($resultado); ?>
                        <div class="row header-cuadro">
                            <div class="col-12 centrar"> 
                                <h3><?php echo $producto['nombre']; ?></h3>
                            </div>
                        </div>
                        <div class="row img-cuadro">
                            <div class="col-12 centrar"> 
                                <img src="<?php echo $producto['foto']; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Cuadro de universo 2 -->
                    <div class="col-3 cuadro-univ">
                    <?php $producto = mysqli_fetch_array($resultado); ?>
                        <div class="row header-cuadro">
                            <div class="col-12 centrar"> 
                                <h3><?php echo $producto['nombre']; ?></h3>
                            </div>
                        </div>
                        <div class="row img-cuadro">
                            <div class="col-12 centrar"> 
                                <img src="<?php echo $producto['foto']; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Cuadro de universo 3 -->
                    <div class="col-3 cuadro-univ">
                    <?php $producto = mysqli_fetch_array($resultado); ?>
                        <div class="row header-cuadro">
                            <div class="col-12 centrar"> 
                                <h3><?php echo $producto['nombre']; ?></h3>
                            </div>
                        </div>
                        <div class="row img-cuadro">
                            <div class="col-12 centrar"> 
                                <img src="<?php echo $producto['foto']; ?>">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="row">
            <div class="col px-0">
                <h4>Términos y condiciones</h4>
                <p>Al utilizar nuestro sitio web, usted acepta cumplir con nuestros términos y condiciones. No nos hacemos responsables por cualquier daño que pueda resultar del uso del sitio.</p>
                <h4>Aviso de privacidad</h4>
                <p>Nos comprometemos a proteger su privacidad y a utilizar su información únicamente para fines específicos relacionados con nuestro sitio web. No compartiremos su información con terceros sin su consentimiento.</p>
                <h5>Copyright © PinUniverseMX</h5>
            </div>
        </div>
    </footer>


    <script>
        const carousel = new bootstrap.Carousel('#myCarousel');
    </script>
</body>
</html>