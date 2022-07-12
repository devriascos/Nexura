<!--- Carga el archivo base de la App para user funciones del Framework -->
<?php include '../App/App.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Nexura Empleados</title>
    
    <?php include '../Public/Fonts/Fonts.html'; ?>
    <?php include '../Public/Icons/Icons.html'; ?>
    <style>
        <?php include '../Public/Css/App.css'; ?>
    </style>
    
    
</head>
<body>

    <main class="main-empleados">
    
        <h1>Agregar o actualizar empleados</h1>

        <section id="info-empleados">
        <button class="btn btn-nuevo">Nuevo</button>
            <table class="tabla-empleados">
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Sexo</th>
                    <th>Area</th>
                    <th>Boletín</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
                    <?php  
                        $Empleados = (Array) App::Inputs();
                        
                        foreach ($Empleados as $index => $Empleado) {
                            echo '<tr>';
                                echo  '<td>'.$Empleado['nombre'].'</td>';
                                echo  '<td>'.$Empleado['email'].'</td>';
                                echo  '<td>'.$Empleado['sexo'].'</td>';
                                echo  '<td>'.$Empleado['area'].'</td>';    

                                $Empleado['boletin'] == true ? printf('<td>Sí</td>') : printf('<td>No</td>');
                                
                                echo  '<td class="center"><a href="empleados/editar?id='.$Empleado['id'].'"><i class="bi bi-pencil-square pointer"></i></a></td>';
                                echo  '<td class="center"><a href="empleados/editar?id='.$Empleado['id'].'"><i class="bi bi-trash3 pointer"></i></a></td>';
                            echo '</tr>';
                        }
                    ?>
                </tr>            
            </table>
        </section>
    </main>
    
</body>
</html>
