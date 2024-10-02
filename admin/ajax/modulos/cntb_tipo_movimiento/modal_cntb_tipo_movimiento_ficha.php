<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_tipo_movimiento = CntbTipoMovimiento::getOxId($id);
//Gral::prr($cntb_tipo_movimiento);
?>

<div class="tabs ficha-cntb_tipo_movimiento" identificador="<?php echo $cntb_tipo_movimiento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_tipo_movimiento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_movimiento->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_tipo_movimiento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_movimiento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_movimiento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_movimiento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_movimiento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_movimiento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_movimiento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_movimiento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_movimiento estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_movimiento->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

