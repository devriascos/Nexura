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
    
        <h1>Editar empleado</h1>

        <?php 

            //Carga la información que llega del empleado
            $Empleado = (Array) App::Inputs(); 
            
        ?>
        <section id="info-empleados">
            <form action="editar?id=3" method="POST">



                <div class="input-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" placeholder="Nombre del empleado" value="<?php echo $Empleado[0]['nombre']; ?>" require>
                </div>
                <div class="input-group">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" placeholder="juan@nexura.com" value="<?php echo $Empleado[0]['email']; ?>" require>
                </div>
                <div class="input-group"> 
                <div class="input-group">
                    <label for="sexo">Sexo</label>
                    <div class="input-group">
                        <input type="checkbox" name="sexo" value="F" <?php $Empleado[0]['sexo'] == 'F' ? print('checked') : '';?> >Femenino</input>
                        
                        <input type="checkbox" name="sexo" value="M" <?php $Empleado[0]['sexo'] == 'M' ? print('checked') : '';?> >Masculino</input>
                    </div>
                </div>
                </div>
                <div class="input-group">
                    <label for="area_id">Area</label>
                    <select name="area_id" id="">
                        <option value="<?php echo $Empleado[0]['area_id']; ?>"><?php echo $Empleado[0]['area_id']; ?></option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Descripción de la experiencia del empleado">
                    <?php echo $Empleado[0]['descripcion']; ?>
                    </textarea>
                </div>
                <div class="input-group">
                    <label for="roles">Roles</label>
                    <input type="checkbox" name="roles" id="">Deseo recibir...</input>
                    <input type="checkbox" name="roles" id="">Deseo recibir...</input>
                    <input type="checkbox" name="roles" id="">Deseo recibir...</input>
                    <input type="checkbox" name="roles" id="">Deseo recibir...</input>
                    <input type="checkbox" name="roles" id="">Deseo recibir...</input>
                    <input type="checkbox" name="roles" id="">Deseo recibir...</input>
                </div>

                <button class="btn btn-guardar">Guardar</button>
            </form>
        </section>
    </main>
    
</body>
</html>
