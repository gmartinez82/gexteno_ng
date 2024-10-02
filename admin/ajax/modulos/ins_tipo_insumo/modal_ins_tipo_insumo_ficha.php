<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_tipo_insumo = InsTipoInsumo::getOxId($id);
//Gral::prr($ins_tipo_insumo);
?>

<div class="tabs ficha-ins_tipo_insumo" identificador="<?php echo $ins_tipo_insumo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_tipo_insumo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_insumo->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_tipo_insumo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_insumo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_insumo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_insumo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_insumo cntb_cuenta_compra">
            <div class="label"><?php Lang::_lang('CntbCuentaCompra') ?></div>
            <div class="dato">
                <?php Gral::_echo(($ins_tipo_insumo->getCntbCuentaCompra() != 'null') ? CntbCuenta::getOxId($ins_tipo_insumo->getCntbCuentaCompra())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par ins_tipo_insumo cntb_cuenta_venta">
            <div class="label"><?php Lang::_lang('CntbCuentaVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo(($ins_tipo_insumo->getCntbCuentaVenta() != 'null') ? CntbCuenta::getOxId($ins_tipo_insumo->getCntbCuentaVenta())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par ins_tipo_insumo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_insumo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_insumo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_insumo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_insumo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_insumo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

