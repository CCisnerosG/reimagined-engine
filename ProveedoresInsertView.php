<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Pagina Inicial" content="Sweet Seasons" />
    <meta name="Keywords" content="pasteles, cupcakes, postres, galletas, casas de" />
    <title>Sweet Seasons</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Mountains+of+Christmas:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="style/styles.css">
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
    <header class="head">
        <nav>
            <div>
                <ul class="MenuList">
                    <li class="ItemMenu"><a class="MenuText" href="index.html">Inicio </a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Productos.php">Productos</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Categorias.php">Categoría de productos</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="">Ventas </a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="">Compras</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Ingredientes.php">Ingredientes</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Proveedores.php">Proveedores</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Clientes.php">Clientes</a> </li>
                </ul>
            </div>
        </nav>
    </header>
    <br><br><br><br>
    <h3 class="h3">Agregar Proveedores</h3>
    <section>
        <form method="post" action="ProveedoresInsert.php" enctype="multipart/form-data"onsubmit="return validarFormularioProveedores()">
            <label for="Nombre">Digite el nombre que se desea agregar: </label>
            <input type="text" name="Nombre" placeholder="Digite el nombre">
            <br>
            <br>
            <label for="Primer_apellido">Digite el primer apellido que se desea agregar: </label>
            <input type="text" name="Primer_apellido" placeholder="Digite el primer apellido">
            <br>
            <br>
            <label for="Segundo_apellido">Digite el segundo apellido que se desea agregar: </label>
            <input type="text" name="Segundo_apellido" placeholder="Digite el segundo apellido">
            <br>
            <br>
            <label for="Numero_telefonico">Digite el número telefónico que se desea agregar: </label>
            <input type="text" name="Numero_telefonico" placeholder="Digite el número telefónico" >
            <br>
            <br>
            <label for="Correo">Digite el correo que se desea agregar: </label>
            <input type="text" name="Correo" placeholder="Digite el correo" >
            <br>
            <br>
            <label for="id_ingrediente">Seleccione el ingrediente que se desea agregar:</label>
            <select name="id_ingrediente">
                <?php
                    include('DAL/conexion.php');
                    $conexion = Conecta();
                    
                    $query = "SELECT id_ingrediente, Nombre FROM SweetSeasons.ingredientes";
                    $result = mysqli_query($conexion, $query);
    
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value=\"" . $row['id_ingrediente'] . "\">" . $row['Nombre'] . "</option>";
                        }
                    } else {
                        echo "<option value=\"\">Error al obtener los ingredientes</option>";
                    }
    
                    mysqli_close($conexion);
                ?>
            </select>
            <br>
            <br>
            <label for="Estado">Seleccione el Estado que se desea agregar:</label>
            <select name="Estado">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
            <br>
            <br>
            <label for="Imagen">Suba la imagen que se desea agregar: </label>
            <input class="input" type="file" name="Imagen" placeholder="">
            <br>
            <br>
            <input class="btn"type="submit" name="agregar" value="Agregar">
        </form>
    </section>

    <script src="ValidacionProveedores.js"></script>

    <footer class="footer">
        <nav>
            <div>
                <p class="FooterText">Sweet Seasons</p>
            </div>
        </nav>
    </footer>
</body>
</html>
