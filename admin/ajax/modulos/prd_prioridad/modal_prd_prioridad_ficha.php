<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_prioridad = PrdPrioridad::getOxId($id);
//Gral::prr($prd_prioridad);
?>

<div class="tabs ficha-prd_prioridad" identificador="<?php echo $prd_prioridad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_prioridad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_prioridad->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_prioridad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_prioridad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_prioridad descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_prioridad->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par prd_prioridad descripcion_publica">
            <div class="label"><?php Lang::_lang('Descr Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_prioridad->getDescripcionPublica()) ?>
            </div>
        </div>
		
        <div class="par prd_prioridad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_prioridad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_prioridad codigo_secundario">
            <div class="label"><?php Lang::_lang('Codigo Secundario') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_prioridad->getCodigoSecundario()) ?>
            </div>
        </div>
		
        <div class="par prd_prioridad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_prioridad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_prioridad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_prioridad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_prioridad estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_prioridad->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

