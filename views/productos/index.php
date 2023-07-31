<h1>Vista principal de productos</h1>
<ul>
<?php foreach ($productos as $key => $producto): ?>

    <li><?= $producto->producto_nombre  . $producto->producto_id  ?></li>

<?php endforeach ?>

</ul>