
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Sigma</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="js/funciones.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <header class="sitio-header contenedor centrar-texto">
        <img src="img/sigma-logo.png" alt="">

        <h1 class=" fw-300 centrar-texto titulo">Prueba de desarrollo Sigma</h1>

        <p class="centrar-texto"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </header>


<main  class="contenedor-main">
    <div class="main-imagen">
        <img src="img/sigma-image.png" alt="">
    </div>
    <div class="formulario-main formulario-contacto">
        <form id="frmRegistro" action="clases/Registar.php" method="post" onsubmit="return validar();">
            <div class="campo">
                <label for="departamento">Departemento*</label>
                <select  name="departamento" id="departamento" class="formulario-select">
                    <option value="">Antioquia</option>
                </select>
            </div>
            <div class="campo">
                <label for="ciudad">Ciudad*</label>
                <select  name="ciudad" id="ciudad" class="formulario-select">
                    <option value="">Medellin</option>
                </select>
            </div>
            <div class="campo">
                <label for="">Nombre*</label>
                <input class="formulario-imput" type="text" name="nombre" id="nombre" placeholder="Pepito de Jesus" required>
            </div>
            <div class="campo">
                <label for="correo">Correo*</label>
                <input class="formulario-input" type="email" name="correo" id="correo" placeholder="Pepetiodejesusu@gmail.com" required>
            </div>
            <div class="centrar-texto boton-input">
                <input type="submit" value="Enviar" class="boton boton-rosado" id="entrarSistema">
            </div>

        </form>
    </div>
</main>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<script></script>

