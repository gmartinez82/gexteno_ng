<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_tipo_cuenta = CntbTipoCuenta::getOxId($id);
//Gral::prr($cntb_tipo_cuenta);
?>

<div class="tabs ficha-cntb_tipo_cuenta" identificador="<?php echo $cntb_tipo_cuenta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_tipo_cuenta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_cuenta->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_tipo_cuenta cntb_tipo_clasificacion_id">
            <div class="label"><?php Lang::_lang('CntbTipoClasificacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_cuenta->getCntbTipoClasificacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_cuenta cntb_tipo_saldo_id">
            <div class="label"><?php Lang::_lang('CntbTipoSaldo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_cuenta->getCntbTipoSaldo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_cuenta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_cuenta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_cuenta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_cuenta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_cuenta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_cuenta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_cuenta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_cuenta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cntb_tipo_cuenta estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_tipo_cuenta->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

