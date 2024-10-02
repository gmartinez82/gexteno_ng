<!-- CSS del Carrito -->
<?php if (file_exists(Gral::getPathAbs() . "admin/ajax/modulos/vta_presupuesto_carrito/css/vta_presupuesto_carrito.css")) { ?>
    <link rel='stylesheet' type='text/css' href='<?php Gral::_echo(Gral::getPathHttp()) ?>admin/ajax/modulos/vta_presupuesto_carrito/css/vta_presupuesto_carrito.css?<?php echo date('dH') ?>' />
<?php } elseif (file_exists(Gral::getPathAbs() . "css/admin/modulos/vta_presupuesto_carrito.css")) { ?>
    <link rel='stylesheet' type='text/css' href='<?php Gral::_echo(Gral::getPathHttp()) ?>css/admin/modulos/vta_presupuesto_carrito.css?<?php echo date('dH') ?>' />
<?php } ?>

<!-- JS del Carrito -->
<?php if (file_exists(Gral::getPathAbs() . "admin/ajax/modulos/vta_presupuesto_carrito/js/vta_presupuesto_carrito.js")) { ?>
    <script type='text/javascript' src='<?php Gral::_echo(Gral::getPathHttp()) ?>admin/ajax/modulos/vta_presupuesto_carrito/js/vta_presupuesto_carrito.js?<?php echo date('dH') ?>'></script>
<?php } elseif (file_exists(Gral::getPathAbs() . "js/admin/modulos/vta_presupuesto_carrito.js")) { ?>
    <script type='text/javascript' src='<?php Gral::_echo(Gral::getPathHttp()) ?>js/admin/modulos/vta_presupuesto_carrito.js?<?php echo date('dH') ?>'></script>
<?php } ?>
