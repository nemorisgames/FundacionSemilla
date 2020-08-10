    <div class="container-fluid  bg-light">

        <div class="container">

            <ul class="nav nav-justified py-2 nav-pills">

            <?php if (isset($_GET["pagina"])): ?>

<?php if ($_GET["pagina"] == "registro"): ?>

<li class="nav-item">
    <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
</li>

<?php else: ?>

<li class="nav-item">
    <a class="nav-link" href="index.php?pagina=registro">Registro</a>
</li>

<?php endif ?>

<?php if ($_GET["pagina"] == "ingreso"): ?>

<li class="nav-item">
    <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
</li>

<?php else: ?>

<li class="nav-item">
    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
</li>

<?php endif ?>

<?php if ($_GET["pagina"] == "inicio"): ?>

<li class="nav-item">
    <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
</li>

<?php else: ?>

<li class="nav-item">
    <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
</li>

<?php endif ?>


<?php if ($_GET["pagina"] == "avatar"): ?>

<li class="nav-item">
    <a class="nav-link active" href="index.php?pagina=avatar">Avatar</a>
</li>

<?php else: ?>

<li class="nav-item">
    <a class="nav-link" href="index.php?pagina=avatar">Avatar</a>
</li>

<?php endif ?>




<?php if ($_GET["pagina"] == "salir"): ?>

<li class="nav-item">
    <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
</li>



<?php else: ?>

<li class="nav-item">
    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
</li>

<?php endif ?>



<?php else: ?>
<li class="nav-item">
    <a class="nav-link " href="index.php?pagina=registro">Registro</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
</li>

<li class="nav-item">
    <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="index.php?pagina=avatar">Avatar</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
</li>

<?php endif ?>


</ul>

</div>

</div>