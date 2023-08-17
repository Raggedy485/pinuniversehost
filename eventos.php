<?php

require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT fotoEvent, nombreEvento, descriptionEvent, dateEvent, locationEvent FROM eventos ORDER BY dateEvent");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Estilos -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        
        <!-- Fonts de Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;700&family=IBM+Plex+Sans:wght@300;500;700&display=swap" rel="stylesheet">
        
        <title>PinUniverse - Eventos</title>
    </head>
    <body>

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
                        <div class="col-2 buttons-nav opcSeleccionada"><a href="eventos.php">Eventos</a></div>
                        <div class="col-2 buttons-nav"><a href="contact.html">Contacto</a></div>
                        <div class="col-2 buttons-nav"><a href="userCustom.html">Personalizados</a></div>
                    </div>
                </div>
            </div>
        </header>


        <h1>Próximos eventos</h1>
        <?php foreach ($resultado as $row) { ?>
            <div class="evento">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img  src="<?php echo $row['fotoEvent']; ?>" class="card-img" alt="Mercadito">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title event-title"><?php echo $row ['nombreEvento']; ?></h5>
                                <div class="row">
                                    <div class="col">
                                        <p class="card-text"><?php echo $row ['descriptionEvent'];?></p>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col">
                                        <p class="card-text"><b>Fecha: </b><?php echo $row ['dateEvent']; ?></p>
                                    </div>
                                    <div class="col">
                                        <a href="<?php echo $row ['locationEvent']; ?>" class="btn btn-bd-primary">Más información</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

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
    </body>
</html>
