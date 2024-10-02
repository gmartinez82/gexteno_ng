<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_tipo_origen = CntbTipoOrigen::getOxId($id);
//Gral::prr($cntb_tipo_origen);
?>

<div class="tabs ficha-cntb_tipo_origen" identificador="<?php echo $cntb_tipo_origen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_tipo_origen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_origen->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_tipo_origen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_origen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_origen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_origen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_origen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_origen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_origen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_origen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_origen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_origen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

