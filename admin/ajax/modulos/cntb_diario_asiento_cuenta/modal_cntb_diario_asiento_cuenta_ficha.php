<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_diario_asiento_cuenta = CntbDiarioAsientoCuenta::getOxId($id);
//Gral::prr($cntb_diario_asiento_cuenta);
?>

<div class="tabs ficha-cntb_diario_asiento_cuenta" identificador="<?php echo $cntb_diario_asiento_cuenta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_diario_asiento_cuenta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_diario_asiento_cuenta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_cuenta cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_cuenta cntb_tipo_saldo_id">
            <div class="label"><?php Lang::_lang('CntbTipoSaldo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getCntbTipoSaldo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_cuenta cntb_cuenta_id">
            <div class="label"><?php Lang::_lang('CntbCuenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getCntbCuenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_cuenta importe_debe">
            <div class="label"><?php Lang::_lang('Importe Debe') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getImporteDebe()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_cuenta importe_haber">
            <div class="label"><?php Lang::_lang('Importe Haber') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getImporteHaber()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_cuenta importe_saldo">
            <div class="label"><?php Lang::_lang('Importe Saldo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getImporteSaldo()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_cuenta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_cuenta codigo_comprobante">
            <div class="label"><?php Lang::_lang('Cod Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getCodigoComprobante()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_cuenta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_cuenta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_cuenta estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_cuenta->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

