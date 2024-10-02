<div class="titulo"><?php Lang::_lang('General') ?></div>

<div class="col c1">

    <div class="par cli-cliente id">
        <div class="label"><?php Lang::_lang('Id') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getId()) ?>
        </div>
    </div>


    <div class="par cli-cliente descripcion">
        <div class="label"><?php Lang::_lang('Descripcion') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
        </div>
    </div>

    <div class="par cli-cliente gral_tipo_personeria_id">
        <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par cli-cliente gral_condicion_iva_id">
        <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getGralCondicionIva()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par cli-cliente razon_social">
        <div class="label"><?php Lang::_lang('Razon Social') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getRazonSocial()) ?>
        </div>
    </div>

    <div class="par cli-cliente gral_tipo_documento_id">
        <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getGralTipoDocumento()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par cli-cliente cuit">
        <div class="label"><?php Lang::_lang('Documento') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getCuit()) ?>
        </div>
    </div>

    <div class="par cli-cliente domicilio_legal">
        <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getDomicilioLegal()) ?>
        </div>
    </div>

    <div class="par cli-cliente telefono">
        <div class="label"><?php Lang::_lang('Telefono') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getTelefono()) ?>
        </div>
    </div>

    <div class="par cli-cliente email">
        <div class="label"><?php Lang::_lang('Email') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getEmail()) ?>
        </div>
    </div>

    <div class="par cli-cliente codigo_postal">
        <div class="label"><?php Lang::_lang('Codigo Postal') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getCodigoPostal()) ?>
        </div>
    </div>

    <div class="par cli-cliente geo_localidad_id">
        <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getGeoLocalidad()->getDescripcionFull(false)) ?>
        </div>
    </div>

    <div class="par cli-cliente codigo">
        <div class="label"><?php Lang::_lang('Codigo') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getCodigo()) ?>
        </div>
    </div>
    
</div>

<div class="col c2">

    <div class="par cli-cliente cli_grupo_id">
        <div class="label"><?php Lang::_lang('CliGrupo') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getCliGrupo()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par cli-cliente cli_categoria_id">
        <div class="label"><?php Lang::_lang('CliCategoria') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getCliCategoria()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par cli-cliente observacion">
        <div class="label"><?php Lang::_lang('Observaciones') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getObservacion()) ?>
        </div>
    </div>

    <div class="par cli-cliente estado">
        <div class="label"><?php Lang::_lang('Estado') ?></div>
        <div class="dato">
            <?php Gral::_echo(GralSiNo::getOxId($cli_cliente->getEstado())->getDescripcion()) ?>
        </div>
    </div>
    
    <div class="par cli-cliente creado">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getCreado())) ?>
        </div>
    </div>

    <div class="par cli-cliente creado-por">
        <div class="label"><?php Lang::_lang('Creado Por') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getCreadoPorDescripcion()) ?>
        </div>
    </div>
    
    <div class="par cli-cliente modificado">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getModificado())) ?>
        </div>
    </div>

    <div class="par cli-cliente modificado-por">
        <div class="label"><?php Lang::_lang('Modificado Por') ?></div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getModificadoPorDescripcion()) ?>
        </div>
    </div>
    
</div>