<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_caja_ingreso = FndCajaIngreso::getOxId($id);
//Gral::prr($fnd_caja_ingreso);
?>

<div class="tabs ficha-fnd_caja_ingreso" identificador="<?php echo $fnd_caja_ingreso->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_caja_ingreso id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_ingreso->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_caja_ingreso descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_ingreso->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_ingreso fnd_caja_id">
            <div class="label"><?php Lang::_lang('FndCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_ingreso->getFndCaja()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_ingreso fnd_caja_tipo_ingreso_id">
            <div class="label"><?php Lang::_lang('FndCajaTipoIngreso') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_ingreso->getFndCajaTipoIngreso()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_ingreso codigo_referencia">
            <div class="label"><?php Lang::_lang('Cod Ref') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_ingreso->getCodigoReferencia()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_ingreso importe">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_ingreso->getImporte()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_ingreso gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_ingreso->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_ingreso codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_ingreso->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_ingreso observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_ingreso->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_ingreso orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_ingreso->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_ingreso estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_ingreso->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

