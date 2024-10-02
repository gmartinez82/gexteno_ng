<?php
// -----------------------------------------------------------------------------
// control de que el presupuesto se encuentre activo
// -----------------------------------------------------------------------------
if (!$vta_presupuesto || $vta_presupuesto->getVtaPresupuestoTipoEstado()->getActivo() == 0) {
    echo "El presupuesto ya no se encuentra activo, no puede modificarse. <br />Redirigiendo hacia el inicio ... <br />";
    ?>
    <script>
        setTimeout(function(){
            location.href = 'index.php';
        }, 2000);
    </script>
        <?php
        exit;
}
if (!VtaPresupuesto::getPresupuestoActivo()) {
    echo "Debe seleccionar un presupuesto <br />";
    exit;
}
