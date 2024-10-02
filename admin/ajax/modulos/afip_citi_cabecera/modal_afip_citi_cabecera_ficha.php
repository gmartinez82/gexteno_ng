<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$afip_citi_cabecera = AfipCitiCabecera::getOxId($id);
//Gral::prr($afip_citi_cabecera);
?>

<div class="tabs ficha-afip_citi_cabecera" identificador="<?php echo $afip_citi_cabecera->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par afip_citi_cabecera id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getId()) ?>
            </div>
        </div>

	
        <div class="par afip_citi_cabecera descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_prc_id">
            <div class="label"><?php Lang::_lang('AfipCitiPrc') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiPrc()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($afip_citi_cabecera->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($afip_citi_cabecera->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_cuit_informante">
            <div class="label"><?php Lang::_lang('Cuit Informante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiCuitInformante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_periodo">
            <div class="label"><?php Lang::_lang('Periodo') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiPeriodo()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_secuencia">
            <div class="label"><?php Lang::_lang('Secuencia') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiSecuencia()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_sin_movimiento">
            <div class="label"><?php Lang::_lang('Sin Movimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiSinMovimiento()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_prorratear_cf_computable">
            <div class="label"><?php Lang::_lang('Prorratear Cred Fiscal computable') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiProrratearCfComputable()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_cf_computable_o_comprobante">
            <div class="label"><?php Lang::_lang('Cred Fiscal Computable o Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiCfComputableOComprobante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_importe_cf_computable_global">
            <div class="label"><?php Lang::_lang('Importe Cred Fiscal Computable Global') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableGlobal()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_importe_cf_computable_asignacion_directa">
            <div class="label"><?php Lang::_lang('Importe Cred Fiscal Computable Asignacion Directa') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableAsignacionDirecta()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_importe_cf_computable_prorrateo">
            <div class="label"><?php Lang::_lang('Importe Cred Fiscal Computable Prorrateo') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableProrrateo()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_importe_cf_no_computable_global">
            <div class="label"><?php Lang::_lang('Importe Cred Fiscal No Computable Global') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfNoComputableGlobal()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_importe_cf_contribuyente_ss_y_oc">
            <div class="label"><?php Lang::_lang('Importe Cred Fiscal Contribuyente Seg Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfContribuyenteSsYOc()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera afip_citi_importe_cf_computable_ss_y_oc">
            <div class="label"><?php Lang::_lang('Importe Cred Fiscal Computable Seg Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableSsYOc()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getOrden()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_cabecera estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_cabecera->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

