<?php 

    // Base de Datos 
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Consultamos los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo por mensajes de errores
    $errores = [];

    // Creo las variables para que en caso de que no complete todos los campos y toque el boton de "Crear Propiedad", queden guardados los campos que escribio para que no los vuelve a escribir.
    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';

    // Ejectuar el codigo despues de que el usuario envio el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        // echo "<pre>";
        // var_dump($_FILES); // $_FILES es para subir archivos multimedia.
        // echo "</pre>";


        $titulo = mysqli_real_escape_string( $db, $_POST['titulo']); // En caso de que alguien inyecte SQL o algun script no lo toma en cuenta.
        $precio = mysqli_real_escape_string( $db, $_POST['precio']);
        $descripcion = mysqli_real_escape_string( $db, $_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string( $db, $_POST['habitaciones']);
        $wc = mysqli_real_escape_string( $db, $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string( $db, $_POST['estacionamiento']);
        $vendedorId = mysqli_real_escape_string( $db, $_POST['vendedorId']);
        $creado = date('Y/m/d');

        // Asignar files a una variable

        $imagen = $_FILES['imagen'];


        if(!$titulo) {
            $errores[] = "Debes agregar el titulo";
        }

        if(!$precio) {
            $errores[] = "Debes agregar el precio";
        }

        if(!$imagen['name'] || $imagen['error']){
            $errores[] = "La imagen es obligatoria";
        }

        // Validar por tamaño
        $medida = 1000 * 100; // 100Kb

        if($imagen['size'] > $medida) {
            $errores[] = "La imagen es muy pesada";
        }
        
        if(strlen($descripcion) < 50) {
            $errores[] = "Debes agregar una descripcion mayor a 50 caracteres";
        }
        
        if(!$habitaciones) {
            $errores[] = "Debes agregar el numero de habitaciones";
        }

        if(!$wc) {
            $errores[] = "Debes agregar el numero de baños";
        }

        if(!$estacionamiento) {
            $errores[] = "Debes agregar el numero de estacionamientos";
        }

        if(!$vendedorId) {
            $errores[] = "Debes agregar el vendedor";
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        // Revisar que el arreglo de errores este vacio

        if(empty($errores)) {
            // Insertar en la Base de datos
    
            $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";
    
            //echo $query;
    
            $resultado = mysqli_query($db, $query);
    
            if($resultado) {
                // Redireccionar al usuario. En esta caso a la pagina donde tenemos el boton para crear nuevas propiedades.
                // Hay que redireccionar antes de escribir algo de HTML, luego no se puede

                header('Location: /admin'); // Redireccionamos para que el usuario no meta datos duplicados.
            }
        }
    }


    require '../../includes/funciones.php'; 
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin/index.php" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
           <div class="alerta error">
                <?php echo $error; ?>
           </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input 
                    type="text" 
                    id="titulo" 
                    name="titulo" 
                    placeholder="Titulo propiedad" 
                    value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input 
                    type="number" 
                    id="precio" 
                    name="precio" 
                    placeholder="Precio propiedad" 
                    value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input 
                    type="file" 
                    id="imagen" 
                    accept="image/jpeg, image/png"
                    name="imagen">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input 
                    type="number" 
                    id="habitaciones" 
                    name="habitaciones" 
                    placeholder="Ej: 3" 
                    min="1" 
                    max="9" 
                    value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños:</label>
                <input 
                    type="number" 
                    name="wc" 
                    id="wc" 
                    placeholder="Ej: 3" 
                    min="1" 
                    max="9" 
                    value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input 
                    type="number" 
                    id="estacionamiento" 
                    name="estacionamiento" 
                    placeholder="Ej: 1" 
                    min="1" 
                    max="5" 
                    value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedorId">
                    <option value="">-- Seleccione --</option>
                    <?php while($row = mysqli_fetch_assoc($resultado)): ?>
                        <option <?php echo $vendedorId === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id'] ?>"> <?php echo $row['nombre'] . " " . $row['apellido'] ?></option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>
