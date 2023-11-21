<?php
include 'include/templates/header.php';
?>
<br><br>
<h3 class="h3">Productos </h3>
        <main>
            <section class="container">
                
                    <?php
                        include('DAL/conexion.php');
                        $conexion = Conecta();

                        $query = "SELECT id_producto, Nombre, id_categoria, Cantidad, Descripcion, Tamano, Precio,ruta_imagen FROM SweetSeasons.Productos";
                        $result = mysqli_query($conexion, $query);
                        echo "<button class='btn' type='submit' name='Insertar'><a href='ProductosInsertView.php'>Agregar</a></button>";
                        echo"<br>";
                        echo '<form method ="post" action="ProductosModificarVista.php">';      
                            echo '<button class="btn" type="submit" name="modificar">Modificar</button>';
                        echo '</form>';
                        echo"<br>";
                        echo"<br>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo"<br>";
                            echo "<img class='img' src=" . $row['ruta_imagen'] . ">";
                            echo "<p class='text'><strong>Nombre:</strong> " . $row['Nombre'] . "</p>";
                            echo "<p class='text'><strong>Descripción:</strong> " . $row['Descripcion'] . "</p>";
                            echo "<p class='text'><strong>Cantidad:</strong> " . $row['Cantidad'] . "</p>";
                            echo "<p class='text'><strong>Tamaño:</strong> " . $row['Tamano'] . "</p>";
                            echo "<p class='text'><strong>Precio:</strong> " . $row['Precio'] . "</p>";
                            echo '<form method ="post" action="ProductosDelete.php">';      
                            echo '<input type="hidden" name="id_producto" value="' . $row['id_producto'] . '">';
                            echo '<button class="btn" type="submit" name="eliminar">Eliminar</button>';
                            echo '</form>';

                        }   
                    ?> 
            
            </section>
        </main>


<?php
include "include/templates/footer.php";
?>