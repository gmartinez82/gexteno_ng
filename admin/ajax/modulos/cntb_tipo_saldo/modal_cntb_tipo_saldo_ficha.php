<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_tipo_saldo = CntbTipoSaldo::getOxId($id);
//Gral::prr($cntb_tipo_saldo);
?>

<div class="tabs ficha-cntb_tipo_saldo" identificador="<?php echo $cntb_tipo_saldo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_tipo_saldo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_saldo->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_tipo_saldo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_saldo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_saldo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_saldo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_saldo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_saldo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_saldo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_saldo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_saldo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_saldo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

