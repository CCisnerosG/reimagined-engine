<?php
include "include/templates/header.php";
?>
    <br>
        <h3 class="h3">Proveedores </h3>
        <main>
            <section class="container">
                <?php
                echo "<button class='btn' type='submit' name='Insertar'><a href='ProveedoresInsertView.php'>Agregar</a></button>";
                echo '<form method ="post" action="ProveedoresModificarVista.php">';
                echo '<button class="btn" type="submit" name="modificar">Modificar</button>';
                echo '</form>';
                include_once('ProveedoresRead.php'); 
                ?>
            </section>
        </main>
<?php
include "include/templates/footer.php";
?>