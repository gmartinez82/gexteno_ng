<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_tipo_asiento = CntbTipoAsiento::getOxId($id);
//Gral::prr($cntb_tipo_asiento);
?>

<div class="tabs ficha-cntb_tipo_asiento" identificador="<?php echo $cntb_tipo_asiento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_tipo_asiento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_asiento->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_tipo_asiento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_asiento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_asiento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_asiento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_asiento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_asiento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_asiento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_asiento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_asiento estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_asiento->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

