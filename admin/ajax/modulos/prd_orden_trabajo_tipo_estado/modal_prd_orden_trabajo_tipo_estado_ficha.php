<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_orden_trabajo_tipo_estado = PrdOrdenTrabajoTipoEstado::getOxId($id);
//Gral::prr($prd_orden_trabajo_tipo_estado);
?>

<div class="tabs ficha-prd_orden_trabajo_tipo_estado" identificador="<?php echo $prd_orden_trabajo_tipo_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_orden_trabajo_tipo_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_tipo_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_orden_trabajo_tipo_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_tipo_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_tipo_estado descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_tipo_estado->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_tipo_estado activo">
            <div class="label"><?php Lang::_lang('Activo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo_tipo_estado->getActivo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_tipo_estado terminal">
            <div class="label"><?php Lang::_lang('Terminal') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo_tipo_estado->getTerminal())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_tipo_estado anulado">
            <div class="label"><?php Lang::_lang('Anulado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo_tipo_estado->getAnulado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_tipo_estado gestionable">
            <div class="label"><?php Lang::_lang('Gestionable') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo_tipo_estado->getGestionable())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_tipo_estado color">
            <div class="label"><?php Lang::_lang('Color') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_tipo_estado->getColor()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_tipo_estado color_secundario">
            <div class="label"><?php Lang::_lang('Color Secundario') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_tipo_estado->getColorSecundario()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_tipo_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_tipo_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_tipo_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_tipo_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_tipo_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_tipo_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_tipo_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo_tipo_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

