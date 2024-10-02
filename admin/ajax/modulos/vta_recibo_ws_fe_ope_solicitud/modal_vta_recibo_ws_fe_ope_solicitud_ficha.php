<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_recibo_ws_fe_ope_solicitud = VtaReciboWsFeOpeSolicitud::getOxId($id);
//Gral::prr($vta_recibo_ws_fe_ope_solicitud);
?>

<div class="tabs ficha-vta_recibo_ws_fe_ope_solicitud" identificador="<?php echo $vta_recibo_ws_fe_ope_solicitud->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_recibo_ws_fe_ope_solicitud id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_recibo_ws_fe_ope_solicitud descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_ws_fe_ope_solicitud vta_recibo_id">
            <div class="label"><?php Lang::_lang('VtaRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getVtaRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_ws_fe_ope_solicitud ws_fe_ope_solicitud_id">
            <div class="label"><?php Lang::_lang('WsFeOpeSolicitud') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getWsFeOpeSolicitud()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_ws_fe_ope_solicitud codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_ws_fe_ope_solicitud observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_ws_fe_ope_solicitud orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_ws_fe_ope_solicitud->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_ws_fe_ope_solicitud estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_recibo_ws_fe_ope_solicitud->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

