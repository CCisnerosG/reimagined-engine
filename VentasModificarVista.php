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
    <header class="head">
        <nav>
            <div>
                <ul class="MenuList">
                    <li class="ItemMenu"><a class="MenuText" href="index.html">Inicio </a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Productos.php">Productos</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Categorias.php">Categoría de productos</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Ventas.php">Ventas </a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Compras.php">Compras</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Ingredientes.php">Ingredientes</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Proveedores.php">Proveedores</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Clientes.php">Clientes</a> </li>
                </ul>
                
            </div>
        </nav>
    </header>
</head>
<body>

    <br><br><br><br>
    <h3 class="h3">Modificar Venta</h3>
    <section>
        <form method="post" action="VentasModificar.php" onsubmit="return validateFormVM()">
            <label for="id_venta">Digite la venta que desea modificar: </label>
            <select name="Venta">
            <?php
                include('DAL/conexion.php');
                $conexion = Conecta();
                
                $query = "SELECT id_venta FROM SweetSeasons.ventas";
                $result = mysqli_query($conexion, $query);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=\"" . $row['id_venta'] . "\">" . $row['id_venta'] .  "</option>";
                    }
                } else {
                    echo "<option value=\"\">Error al obtener compras</option>";
                }

            ?>
            </select>
            <br>
            <br>
            <label for="Fecha_venta">Ingrese la fecha en la que se realizó la venta: </label>
            <input type="date" name="Fecha_venta">
            <br>
            <br>
            <label for="Cliente">Seleccione el cliente que realizó la compra: </label>
        <select name="Cliente">
            <?php

            $query = "SELECT id_cliente, Nombre FROM SweetSeasons.clientes";
            $result = mysqli_query($conexion, $query);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value=\"" . $row['id_cliente'] . "\">" . $row['Nombre'] . "</option>";
                }
            } else {
                echo "<option value=\"\">Error al obtener clientes</option>";
            }
            ?>
        </select>
        <br>
        <br>
            <label for="Producto">Seleccione el producto: </label>
            <select name="Producto">
            <?php
                
                $query = "SELECT id_producto, Nombre, Precio FROM SweetSeasons.Productos";
                $result = mysqli_query($conexion, $query);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=\"" . $row['id_producto'] . "\">" . $row['Nombre'] . "</option>";
                    }
                } else {
                    echo "<option value=\"\">Error al obtener productos</option>";
                }

                mysqli_close($conexion);
            ?>

            </select>
            <br>
            <br>
            <label for="cantidad">Digite la cantidad: </label>
            <input type="number" name="cantidad" placeholder="Digite la cantidad" onblur="validateCantidadVM()">
            <br>
            <br>
            <label for="precio">Digite el precio: </label>
            <input type="number" name="precio" placeholder="Digite el precio" onblur="validatePrecioVM()">
            <br>
            <br>
            <label for="total">Digite el total: </label>
            <input type="number" name="total" placeholder="Digite el total" onblur="validateTotalVM()">
            <br>
            <br>
            <input class="btn" type="submit" name="modificarVentas" value="Modificar">
        </form>
    </section>

    <script src="ValidacionVentas.js"></script>


    <footer class="footer">
        <nav>
            <div>
                <p class="FooterText">Sweet Seasons</p>
            </div>
        </nav>
    </footer>
</body>
</html>