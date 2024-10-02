<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_transporte_responsable_flete = EkuParamTransporteResponsableFlete::getOxId($id);
//Gral::prr($eku_param_transporte_responsable_flete);
?>

<div class="tabs ficha-eku_param_transporte_responsable_flete" identificador="<?php echo $eku_param_transporte_responsable_flete->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_transporte_responsable_flete id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_responsable_flete->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_transporte_responsable_flete descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_responsable_flete->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_responsable_flete codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_responsable_flete->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_responsable_flete codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_responsable_flete->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_responsable_flete observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_responsable_flete->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_responsable_flete orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_responsable_flete->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_responsable_flete estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_transporte_responsable_flete->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

