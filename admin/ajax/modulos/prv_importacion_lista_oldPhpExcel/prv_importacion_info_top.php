<?php if($prv_importacion){ ?>
<div class="importacion-info-top">

    <div class="col id">ID #<?php Gral::_echo($prv_importacion->getId()) ?></div>
    <div class="col fecha"><?php Gral::_echo(Gral::getFechaHoraToWEB($prv_importacion->getCreado())) ?></div>
    <div class="col proveedor"><?php Gral::_echo($prv_importacion->getPrvProveedor()->getDescripcion()) ?></div>
    <div class="col descuento">Desc <?php Gral::_echo($prv_importacion->getDescuento()) ?> %</div>
    
</div>
<?php } ?>