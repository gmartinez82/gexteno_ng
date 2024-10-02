<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_recibo_concepto = VtaReciboConcepto::getOxId($id);
//Gral::prr($vta_recibo_concepto);
?>

<div class="tabs ficha-vta_recibo_concepto" identificador="<?php echo $vta_recibo_concepto->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_recibo_concepto id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_concepto->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_recibo_concepto descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_concepto->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_concepto codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_concepto->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_concepto es_retencion">
            <div class="label"><?php Lang::_lang('Es Retencion') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_recibo_concepto->getEsRetencion())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_concepto es_retencion_iibb">
            <div class="label"><?php Lang::_lang('Es Retencion IIBB') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_recibo_concepto->getEsRetencionIibb())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_concepto cntb_cuenta_id">
            <div class="label"><?php Lang::_lang('CntbCuenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_concepto->getCntbCuenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_concepto observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_concepto->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_concepto orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_concepto->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_concepto estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_concepto->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

