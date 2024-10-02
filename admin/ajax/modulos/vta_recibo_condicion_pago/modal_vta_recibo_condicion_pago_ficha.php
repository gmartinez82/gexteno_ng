<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_recibo_condicion_pago = VtaReciboCondicionPago::getOxId($id);
//Gral::prr($vta_recibo_condicion_pago);
?>

<div class="tabs ficha-vta_recibo_condicion_pago" identificador="<?php echo $vta_recibo_condicion_pago->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_recibo_condicion_pago id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_condicion_pago->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_recibo_condicion_pago descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_condicion_pago->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_condicion_pago descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_condicion_pago->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_condicion_pago codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_condicion_pago->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_condicion_pago codigo_min">
            <div class="label"><?php Lang::_lang('Codigo Min') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_condicion_pago->getCodigoMin()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_condicion_pago color">
            <div class="label"><?php Lang::_lang('Color') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_condicion_pago->getColor()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_condicion_pago color_secundario">
            <div class="label"><?php Lang::_lang('Color Secundario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_condicion_pago->getColorSecundario()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_condicion_pago observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_condicion_pago->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_condicion_pago orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_condicion_pago->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_condicion_pago estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_recibo_condicion_pago->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

