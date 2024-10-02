<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante = PdeTipoNotaDebitoWsFeParamTipoComprobante::getOxId($id);
//Gral::prr($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante);
?>

<div class="tabs ficha-pde_tipo_nota_debito_ws_fe_param_tipo_comprobante" identificador="<?php echo $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_tipo_nota_debito_ws_fe_param_tipo_comprobante id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_tipo_nota_debito_ws_fe_param_tipo_comprobante descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_nota_debito_ws_fe_param_tipo_comprobante pde_tipo_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeTipoNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getPdeTipoNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_nota_debito_ws_fe_param_tipo_comprobante ws_fe_param_tipo_comprobante_id">
            <div class="label"><?php Lang::_lang('WsFeParamTipoComprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getWsFeParamTipoComprobante()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_nota_debito_ws_fe_param_tipo_comprobante codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_nota_debito_ws_fe_param_tipo_comprobante observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_nota_debito_ws_fe_param_tipo_comprobante orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_nota_debito_ws_fe_param_tipo_comprobante estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

