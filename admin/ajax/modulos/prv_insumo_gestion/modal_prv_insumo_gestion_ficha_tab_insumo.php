
<div class="par">
    <div class="label"><?php Lang::_lang('InsCategoria') ?></div>
    <div class="dato">
        <?php Gral::_echo($ins_categoria->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Descripcion corta') ?></div>
    <div class="dato">
        <?php Gral::_echo($ins_insumo->getDescripcionCorta()); ?>
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('InsMarca') ?></div>
    <div class="dato">
        <?php Gral::_echo($ins_marca->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Codigo Marca') ?></div>
    <div class="dato">
        <?php Gral::_echo($ins_insumo->getCodigoMarca()); ?>
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
    <div class="dato">
        <?php Gral::_echo($ins_insumo->getCodigoInterno()); ?>
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Codigo Barra') ?></div>
    <div class="dato">
        <?php Gral::_echo($ins_insumo->getCodigoBarra()); ?>
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Codigo Barra Int') ?></div>
    <div class="dato">
        <?php Gral::_echo($ins_insumo->getCodigoBarraInterno()); ?>
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Unidad Medida') ?></div>
    <div class="dato">
        <?php Gral::_echo($ins_unidad_medida->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Tipo IVA') ?></div>
    <div class="dato">
        <?php Gral::_echo(($ins_insumo->getGralTipoIvaVenta()) ? GralTipoIva::getOxId($ins_insumo->getGralTipoIvaVenta())->getDescripcion() : '') ?>
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Notas Internas') ?></div>
    <div class="dato">
        <?php Gral::_echo($ins_insumo->getNotasInternas()) ?>
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Observacion') ?></div>
    <div class="dato">
        <?php Gral::_echo($ins_insumo->getObservacion()) ?>
    </div>
</div>

<div class="fotos">
    
    <div class="titulo">Fotos del Producto</div>
    
    <?php foreach($ins_insumo_imagens as $ins_insumo_imagen){ ?>
    <div class="foto avatar">
        <a href="<?php echo $ins_insumo_imagen->getPathImagen() ?>">
            <img src="<?php echo $ins_insumo_imagen->getPathImagen(true) ?>" alt="img-prd" />
        </a>
    </div>
    <?php } ?>
    
</div>