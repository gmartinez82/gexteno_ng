<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_caja_egreso = FndCajaEgreso::getOxId($id);
//Gral::prr($fnd_caja_egreso);
?>

<div class="tabs ficha-fnd_caja_egreso" identificador="<?php echo $fnd_caja_egreso->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_caja_egreso id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_egreso->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_caja_egreso descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_egreso->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_egreso fnd_caja_id">
            <div class="label"><?php Lang::_lang('FndCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_egreso->getFndCaja()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_egreso fnd_caja_tipo_egreso_id">
            <div class="label"><?php Lang::_lang('FndCajaTipoEgreso') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_egreso->getFndCajaTipoEgreso()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_egreso codigo_referencia">
            <div class="label"><?php Lang::_lang('Cod Ref') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_egreso->getCodigoReferencia()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_egreso importe">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_egreso->getImporte()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_egreso gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_egreso->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_egreso codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_egreso->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_egreso observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_egreso->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_egreso orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_egreso->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_egreso estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_egreso->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

