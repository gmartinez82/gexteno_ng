<div class="par">
    <div class="label">
        <?php Lang::_lang("PrvProveedor"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($prv_proveedor->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo Proveedor"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($prv_insumo->getCodigoProveedor()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("InsMarca"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($ins_marca->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo Marca"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($prv_insumo->getCodigoMarca()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("InsMarcaPieza"); ?>
    </div>
    <div class="dato">
        
        <?php Gral::_echo( ($ins_marca_pieza) ? $ins_marca_pieza->getDescripcion() : ""); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo OEM"); ?>
    </div>
    <div class="dato">
        
        <?php Gral::_echo($prv_insumo->getCodigoPieza()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("InsMatriz"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($ins_matriz->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Observacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($prv_insumo->getObservacion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha Actualizacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getFechaActualizacion())); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Claves"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($prv_insumo->getClaves()); ?>
    </div>
</div>
