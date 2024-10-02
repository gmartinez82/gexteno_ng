<?php 
$cli_cliente = $vta_recibo->getCliCliente(); 
$gral_tipo_personeria = $cli_cliente->getGralTipoPersoneria(); 
$gral_condicion_iva = $cli_cliente->getGralCondicionIva(); 
$geo_localidad = $cli_cliente->getGeoLocalidad(); 

?>
<div class="par">
    <div class="label">
        <?php Lang::_lang("Cliente"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($cli_cliente->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Razon Social"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($cli_cliente->getRazonSocial()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Tipo de Personeria"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($gral_tipo_personeria->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cuit"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($cli_cliente->getCuit()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Condicion IVA"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($gral_condicion_iva->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Domicilio Legal"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($cli_cliente->getDomicilioLegal()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Localidad"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($geo_localidad->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Telefono"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($cli_cliente->getTelefono()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cod Postal"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($cli_cliente->getCodigoPostal()); ?>
    </div>
</div>


