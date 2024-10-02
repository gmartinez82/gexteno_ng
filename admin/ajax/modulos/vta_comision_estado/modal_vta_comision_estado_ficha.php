<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_comision_estado = VtaComisionEstado::getOxId($id);
//Gral::prr($vta_comision_estado);
?>

<div class="tabs ficha-vta_comision_estado" identificador="<?php echo $vta_comision_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_comision_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_comision_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_estado vta_comision_id">
            <div class="label"><?php Lang::_lang('VtaComision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_estado->getVtaComision()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_estado vta_comision_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaComisionTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_estado->getVtaComisionTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_comision_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_comision_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_estado nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_estado->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_estado nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_estado->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_comision_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

