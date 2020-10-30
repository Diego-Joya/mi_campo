<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registrarse</title>
</head>

<body>
    <div class="register">
        <form id="registro" action="" method="POST">
            <h1>Registrese</h1>
            
            <label for="">Nombres</label><br>
            <input type="text" name="nombres" id=""><br><br>
            <label for="">Apellidos</label><br>
            <input type="text" name="apellidos" id=""><br><br>
            <label for="">N° Documento</label><br>
            <input type="text" name="documento" id=""><br><br>
            <label for="">Celular</label><br>
            <input type="text" name="celular" id=""><br><br>
            <label for="">Email</label><br>
            <input type="text" name="email" id=""><br>
            <input type="button" id="register" value="Registrarme">
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="../ajax/ajax.js"></script>
</html>