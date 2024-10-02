<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_motivo_emision_credito_debito = EkuParamTipoMotivoEmisionCreditoDebito::getOxId($id);
//Gral::prr($eku_param_tipo_motivo_emision_credito_debito);
?>

<div class="tabs ficha-eku_param_tipo_motivo_emision_credito_debito" identificador="<?php echo $eku_param_tipo_motivo_emision_credito_debito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_motivo_emision_credito_debito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_credito_debito->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_motivo_emision_credito_debito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_credito_debito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_motivo_emision_credito_debito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_credito_debito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_motivo_emision_credito_debito codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_credito_debito->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_motivo_emision_credito_debito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_credito_debito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_motivo_emision_credito_debito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_credito_debito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_motivo_emision_credito_debito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_motivo_emision_credito_debito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

