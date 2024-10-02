<?php 
$vta_comprador = $vta_presupuesto->getVtaComprador(); 
$vta_tipo_comprador = $vta_comprador->getVtaTipoComprador(); 
$geo_localidad = $vta_comprador->getGeoLocalidad(); 

?>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Comprador"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_comprador->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Tipo de Comprador"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_tipo_comprador->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Email"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_comprador->getEmail()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Telefono"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_comprador->getTelefono()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Celular"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_comprador->getCelular()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Domicilio"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_comprador->getDomicilio()); ?>
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

