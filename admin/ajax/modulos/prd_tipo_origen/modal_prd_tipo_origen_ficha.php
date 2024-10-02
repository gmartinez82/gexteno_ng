<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_tipo_origen = PrdTipoOrigen::getOxId($id);
//Gral::prr($prd_tipo_origen);
?>

<div class="tabs ficha-prd_tipo_origen" identificador="<?php echo $prd_tipo_origen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_tipo_origen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_tipo_origen->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_tipo_origen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_tipo_origen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_tipo_origen descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_tipo_origen->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par prd_tipo_origen descripcion_publica">
            <div class="label"><?php Lang::_lang('Descr Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_tipo_origen->getDescripcionPublica()) ?>
            </div>
        </div>
		
        <div class="par prd_tipo_origen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_tipo_origen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_tipo_origen codigo_secundario">
            <div class="label"><?php Lang::_lang('Codigo Secundario') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_tipo_origen->getCodigoSecundario()) ?>
            </div>
        </div>
		
        <div class="par prd_tipo_origen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_tipo_origen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_tipo_origen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_tipo_origen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_tipo_origen estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_tipo_origen->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

