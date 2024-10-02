<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_ope_solicitud_opcional = WsFeOpeSolicitudOpcional::getOxId($id);
//Gral::prr($ws_fe_ope_solicitud_opcional);
?>

<div class="tabs ficha-ws_fe_ope_solicitud_opcional" identificador="<?php echo $ws_fe_ope_solicitud_opcional->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_ope_solicitud_opcional id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_opcional->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_ope_solicitud_opcional descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_opcional->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_opcional ws_fe_ope_solicitud_id">
            <div class="label"><?php Lang::_lang('WsFeOpeSolicitud') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_opcional->getWsFeOpeSolicitud()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_opcional ws_fe_afip_codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_opcional->getWsFeAfipCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_opcional ws_fe_afip_valor">
            <div class="label"><?php Lang::_lang('Valor') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_opcional->getWsFeAfipValor()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_opcional codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_opcional->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_opcional observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_opcional->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

