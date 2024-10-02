<div class="titulo"><?php Lang::_lang('General') ?></div>

<div class="col c1">

    <div class="par prv_proveedor id">
        <div class="label"><?php Lang::_lang('Id') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getId()) ?>
        </div>
    </div>


    <div class="par prv_proveedor descripcion">
        <div class="label"><?php Lang::_lang('Descripcion') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
        </div>
    </div>

    <div class="par prv_proveedor gral_tipo_personeria_id">
        <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getGralTipoPersoneria()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par prv_proveedor gral_condicion_iva_id">
        <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getGralCondicionIva()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par prv_proveedor geo_localidad_id">
        <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getGeoLocalidad()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par prv_proveedor razon_social">
        <div class="label"><?php Lang::_lang('Razon Social') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getRazonSocial()) ?>
        </div>
    </div>

    <div class="par prv_proveedor cuit">
        <div class="label"><?php Lang::_lang('CUIT') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getCuit()) ?>
        </div>
    </div>

    <div class="par prv_proveedor domicilio_legal">
        <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getDomicilioLegal()) ?>
        </div>
    </div>

    <div class="par prv_proveedor telefono">
        <div class="label"><?php Lang::_lang('Telefono') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getTelefono()) ?>
        </div>
    </div>

    <div class="par prv_proveedor email">
        <div class="label"><?php Lang::_lang('Email') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getEmail()) ?>
        </div>
    </div>

    <div class="par prv_proveedor codigo">
        <div class="label"><?php Lang::_lang('Codigo') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getCodigo()) ?>
        </div>
    </div>

    <div class="par prv_proveedor codigo_min">
        <div class="label"><?php Lang::_lang('Codigo Min') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getCodigoMin()) ?>
        </div>
    </div>

</div>

<div class="col c2">

    <div class="par prv_proveedor prv_grupo_id">
        <div class="label"><?php Lang::_lang('PrvGrupo') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getPrvGrupo()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par prv_proveedor prv_categoria_id">
        <div class="label"><?php Lang::_lang('PrvCategoria') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getPrvCategoria()->getDescripcion()) ?>
        </div>
    </div>
    
    <div class="par prv_proveedor codigo_postal">
        <div class="label"><?php Lang::_lang('Cod Postal') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getCodigoPostal()) ?>
        </div>
    </div>

    <div class="par prv_proveedor puntaje_promedio">
        <div class="label"><?php Lang::_lang('Puntaje Promedio') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getPuntajePromedio()) ?>
        </div>
    </div>

    <div class="par prv_proveedor observacion">
        <div class="label"><?php Lang::_lang('Observaciones') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getObservacion()) ?>
        </div>
    </div>

    <div class="par prv_proveedor datos_migracion">
        <div class="label"><?php Lang::_lang('Datos Migracion') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getDatosMigracion()) ?>
        </div>
    </div>

    <div class="par prv_proveedor claves">
        <div class="label"><?php Lang::_lang('Claves') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getClaves()) ?>
        </div>
    </div>

    <div class="par prv_proveedor estado">
        <div class="label"><?php Lang::_lang('Estado') ?></div>
        <div class="dato">
            <?php Gral::_echo(GralSiNo::getOxId($prv_proveedor->getEstado())->getDescripcion()) ?>
        </div>
    </div>

    <div class="par prv-proveedor creado">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor->getCreado())) ?>
        </div>
    </div>

    <div class="par prv-proveedor creado-por">
        <div class="label"><?php Lang::_lang('Creado Por') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getCreadoPorDescripcion()) ?>
        </div>
    </div>
    
    <div class="par prv-proveedor modificado">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor->getModificado())) ?>
        </div>
    </div>

    <div class="par prv-proveedor modificado-por">
        <div class="label"><?php Lang::_lang('Modificado Por') ?></div>
        <div class="dato">
            <?php Gral::_echo($prv_proveedor->getModificadoPorDescripcion()) ?>
        </div>
    </div>
    
</div>