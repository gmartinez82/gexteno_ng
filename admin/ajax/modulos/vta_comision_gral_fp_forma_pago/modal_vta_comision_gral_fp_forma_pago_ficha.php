<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_comision_gral_fp_forma_pago = VtaComisionGralFpFormaPago::getOxId($id);
//Gral::prr($vta_comision_gral_fp_forma_pago);
?>

<div class="tabs ficha-vta_comision_gral_fp_forma_pago" identificador="<?php echo $vta_comision_gral_fp_forma_pago->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_comision_gral_fp_forma_pago id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_comision_gral_fp_forma_pago descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago vta_comision_id">
            <div class="label"><?php Lang::_lang('VtaComision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getVtaComision()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago importe_afectado">
            <div class="label"><?php Lang::_lang('Imp Afectado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getImporteAfectado()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_comision_gral_fp_forma_pago->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

