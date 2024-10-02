<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_diario_asiento_vta_nota_credito = CntbDiarioAsientoVtaNotaCredito::getOxId($id);
//Gral::prr($cntb_diario_asiento_vta_nota_credito);
?>

<div class="tabs ficha-cntb_diario_asiento_vta_nota_credito" identificador="<?php echo $cntb_diario_asiento_vta_nota_credito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_diario_asiento_vta_nota_credito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_diario_asiento_vta_nota_credito cntb_periodo_id">
            <div class="label"><?php Lang::_lang('CntbPeriodo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getCntbPeriodo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_vta_nota_credito cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_vta_nota_credito vta_nota_credito_id">
            <div class="label"><?php Lang::_lang('VtaNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getVtaNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_vta_nota_credito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cntb_diario_asiento_vta_nota_credito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

