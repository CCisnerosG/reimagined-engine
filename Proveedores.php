<?php
include "include/templates/header.php";
?>
<br>
<h3 class="h3" style="text-align: center;">Proveedores </h3>
<div style="text-align: center;">
    <div class="btn-group" style="margin-left: 2.5rem;">
        <form method="post" action="ProveedoresInsertView.php">
            <button class='btn' type='submit' name='Insertar'>Agregar</button>
        </form>
    </div>

    <div class="btn-group" style="margin-left: 2.5rem;">
        <form method="post" action="ProveedoresModificarVista.php">
            <button class="btn" type="submit" name="modificar">Modificar</button>
        </form>
    </div>
</div>

<main>
    <section class="container">
        <?php
        include_once('ProveedoresRead.php');
        ?>
    </section>
</main>
<?php
include "include/templates/footer.php";
?>