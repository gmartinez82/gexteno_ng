<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_comision_gral_fp_forma_pago_cheque = VtaComisionGralFpFormaPagoCheque::getOxId($id);
//Gral::prr($vta_comision_gral_fp_forma_pago_cheque);
?>

<div class="tabs ficha-vta_comision_gral_fp_forma_pago_cheque" identificador="<?php echo $vta_comision_gral_fp_forma_pago_cheque->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_comision_gral_fp_forma_pago_cheque id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_comision_gral_fp_forma_pago_cheque descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque vta_comision_id">
            <div class="label"><?php Lang::_lang('VtaComision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getVtaComision()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque vta_comision_gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('VtaComisionGralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getVtaComisionGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque gral_banco_id">
            <div class="label"><?php Lang::_lang('GralBanco') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getGralBanco()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque numero_cheque">
            <div class="label"><?php Lang::_lang('Numero de Cheque') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getNumeroCheque()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_comision_gral_fp_forma_pago_cheque->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque fecha_cobro">
            <div class="label"><?php Lang::_lang('Fecha de Cobro') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_comision_gral_fp_forma_pago_cheque->getFechaCobro())) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque firmante">
            <div class="label"><?php Lang::_lang('Firmante') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getFirmante()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque entregador">
            <div class="label"><?php Lang::_lang('Entregador') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getEntregador()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_gral_fp_forma_pago_cheque estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_comision_gral_fp_forma_pago_cheque->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

