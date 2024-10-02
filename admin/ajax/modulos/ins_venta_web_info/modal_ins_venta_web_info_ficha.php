<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_venta_web_info = InsVentaWebInfo::getOxId($id);
//Gral::prr($ins_venta_web_info);
?>

<div class="tabs ficha-ins_venta_web_info" identificador="<?php echo $ins_venta_web_info->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_venta_web_info id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_web_info->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_venta_web_info ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_web_info->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_web_info descripcion">
            <div class="label"><?php Lang::_lang('Titulo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_web_info->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_web_info codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_web_info->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_web_info destacado">
            <div class="label"><?php Lang::_lang('Destacado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_venta_web_info->getDestacado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_web_info badge">
            <div class="label"><?php Lang::_lang('Badge') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_web_info->getBadge()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_web_info descripcion_breve">
            <div class="label"><?php Lang::_lang('Desc Breve') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_web_info->getDescripcionBreve()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_web_info descripcion_ext">
            <div class="label"><?php Lang::_lang('Desc Extendida') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_web_info->getDescripcionExt()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_web_info observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_web_info->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_web_info orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_web_info->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_web_info estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_web_info->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

