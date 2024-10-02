<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_linea_produccion = PrdLineaProduccion::getOxId($id);
//Gral::prr($prd_linea_produccion);
?>

<div class="tabs ficha-prd_linea_produccion" identificador="<?php echo $prd_linea_produccion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_linea_produccion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_linea_produccion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion prd_proceso_productivo_id">
            <div class="label"><?php Lang::_lang('PrdProcesoProductivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion->getPrdProcesoProductivo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion->getNumero()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_linea_produccion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

