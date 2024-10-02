<?php 
$prv_proveedor = $pde_nota_debito->getPrvProveedor(); 
$gral_tipo_personeria = $prv_proveedor->getGralTipoPersoneria(); 
$gral_condicion_iva = $prv_proveedor->getGralCondicionIva(); 
$geo_localidad = $prv_proveedor->getGeoLocalidad(); 

?>
<div class="par">
    <div class="label">
        <?php Lang::_lang("Proveedor"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($prv_proveedor->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Razon Social"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($prv_proveedor->getRazonSocial()); ?>
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
        <?php Gral::_echo($prv_proveedor->getCuit()); ?>
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
        <?php Gral::_echo($prv_proveedor->getDomicilioLegal()); ?>
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
        <?php Gral::_echo($prv_proveedor->getTelefono()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cod Postal"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($prv_proveedor->getCodigoPostal()); ?>
    </div>
</div>


