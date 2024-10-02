<?php if($prv_importacion){ ?>
<div class="importacion-info-top">

    <div class="col par id">
        <div class="label">ID</div>
        <div class="dato">#<?php Gral::_echo($prv_importacion->getId()) ?></div>
    </div>
    <div class="col par fecha">
        <div class="label">Creado:</div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWEB($prv_importacion->getCreado())) ?></div>
    </div>
    <div class="col par proveedor">
        <div class="label">Proveed:</div>
        <div class="dato"><?php Gral::_echo($prv_importacion->getPrvProveedor()->getDescripcion()) ?></div>
    </div>
    <div class="col par descuento">
        <div class="label">Desc:</div>
        <div class="dato"><?php Gral::_echo($prv_importacion->getDescuento()) ?> %</div>
    </div>
    <div class="col par filas filas-tab2">
        <div class="label">Tab2:</div>
        <div class="dato"><?php Gral::_echo($prv_importacion->getCantidadTab2()) ?> Filas</div>
    </div>
    <div class="col par filas filas-tab3">
        <div class="label">Tab3:</div>
        <div class="dato"><?php Gral::_echo($prv_importacion->getCantidadTab3()) ?> Filas</div>
    </div>
    
</div>
<?php } ?>