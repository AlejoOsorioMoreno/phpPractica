<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de archivo</title>
</head>
<body>
    
    <h3>Subir archivo con PHP</h3>
    <form action="cargar.php" method="POST" enctype="multipart/form-data" class="formularios_ajax">
        <input type="file" name="fichero" accept=".png, .jpg , .jpeg">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <script src="ajax.js"></script>
</body>
</html>