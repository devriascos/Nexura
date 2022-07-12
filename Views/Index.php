<!--- Carga el archivo base de la App para user funciones del Framework -->
<?php include '../App/App.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Nexura Home</title>
    
    <?php include '../Public/Fonts/Fonts.html'; ?>
    <style>
        <?php include '../Public/Css/App.css'; ?>
    </style>
    
    
</head>
<body>

    <main>
        <h1>Control de empleados</h1>
        <section id="buttons">
            <a href="empleados">
                <button class="btn btn-gestionar">Gestionar</button>
            </a>
        </section>
    </main>
    
</body>
</html>
