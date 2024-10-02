<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_param_punto_venta = WsFeParamPuntoVenta::getOxId($id);
//Gral::prr($ws_fe_param_punto_venta);
?>

<div class="tabs ficha-ws_fe_param_punto_venta" identificador="<?php echo $ws_fe_param_punto_venta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_param_punto_venta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_param_punto_venta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_punto_venta gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_punto_venta cuit">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getCuit()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_punto_venta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_punto_venta numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getNumero()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_punto_venta tipo_emision">
            <div class="label"><?php Lang::_lang('Tipo de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getTipoEmision()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_punto_venta bloqueado">
            <div class="label"><?php Lang::_lang('Bloqueado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getBloqueado()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_punto_venta fecha_baja">
            <div class="label"><?php Lang::_lang('Fecha de Baja') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getFechaBaja()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_punto_venta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_punto_venta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_punto_venta estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_punto_venta->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

