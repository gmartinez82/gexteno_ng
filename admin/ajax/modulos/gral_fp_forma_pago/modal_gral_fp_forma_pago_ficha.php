<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_fp_forma_pago = GralFpFormaPago::getOxId($id);
//Gral::prr($gral_fp_forma_pago);
?>

<div class="tabs ficha-gral_fp_forma_pago" identificador="<?php echo $gral_fp_forma_pago->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_fp_forma_pago id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_fp_forma_pago->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_fp_forma_pago descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago descripcion_corta">
            <div class="label"><?php Lang::_lang('Desc Cta') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_fp_forma_pago->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_fp_forma_pago->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago contado">
            <div class="label"><?php Lang::_lang('Contado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getContado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago credito">
            <div class="label"><?php Lang::_lang('Credito') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getCredito())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago inmediato">
            <div class="label"><?php Lang::_lang('Inmediato') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getInmediato())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago recibo_automatico">
            <div class="label"><?php Lang::_lang('Rbo Autom') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getReciboAutomatico())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago para_compra">
            <div class="label"><?php Lang::_lang('Compra') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaCompra())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago para_venta">
            <div class="label"><?php Lang::_lang('Venta') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaVenta())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago para_cobro">
            <div class="label"><?php Lang::_lang('Cobro') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaCobro())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago para_pago">
            <div class="label"><?php Lang::_lang('Pago') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaPago())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago cntb_cuenta_compra">
            <div class="label"><?php Lang::_lang('CntbCuentaCompra') ?></div>
            <div class="dato">
                <?php Gral::_echo(($gral_fp_forma_pago->getCntbCuentaCompra() != 'null') ? CntbCuenta::getOxId($gral_fp_forma_pago->getCntbCuentaCompra())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago cntb_cuenta_venta">
            <div class="label"><?php Lang::_lang('CntbCuentaVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo(($gral_fp_forma_pago->getCntbCuentaVenta() != 'null') ? CntbCuenta::getOxId($gral_fp_forma_pago->getCntbCuentaVenta())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago requiere_referencia">
            <div class="label"><?php Lang::_lang('Req Referencia') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereReferencia())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago requiere_info_extendida">
            <div class="label"><?php Lang::_lang('Req Info Ext') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereInfoExtendida())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago requiere_conciliacion">
            <div class="label"><?php Lang::_lang('Req Conciliacion') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereConciliacion())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_fp_forma_pago->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_fp_forma_pago->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_forma_pago estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

