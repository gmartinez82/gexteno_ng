<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_condicion_iva_vta_tipo_recibo = GralCondicionIvaVtaTipoRecibo::getOxId($id);
//Gral::prr($gral_condicion_iva_vta_tipo_recibo);
?>

<div class="tabs ficha-gral_condicion_iva_vta_tipo_recibo" identificador="<?php echo $gral_condicion_iva_vta_tipo_recibo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_condicion_iva_vta_tipo_recibo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_recibo->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_condicion_iva_vta_tipo_recibo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_recibo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_recibo gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_recibo->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_recibo vta_tipo_recibo_id">
            <div class="label"><?php Lang::_lang('VtaTipoRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_recibo->getVtaTipoRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_recibo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_recibo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_recibo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_recibo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_recibo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_recibo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_recibo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_condicion_iva_vta_tipo_recibo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

