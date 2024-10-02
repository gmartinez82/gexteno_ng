<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_motivo_emision_remito = EkuParamTipoMotivoEmisionRemito::getOxId($id);
//Gral::prr($eku_param_tipo_motivo_emision_remito);
?>

<div class="tabs ficha-eku_param_tipo_motivo_emision_remito" identificador="<?php echo $eku_param_tipo_motivo_emision_remito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_motivo_emision_remito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_remito->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_motivo_emision_remito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_remito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_motivo_emision_remito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_remito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_motivo_emision_remito codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_remito->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_motivo_emision_remito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_remito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_motivo_emision_remito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_motivo_emision_remito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_motivo_emision_remito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_motivo_emision_remito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

