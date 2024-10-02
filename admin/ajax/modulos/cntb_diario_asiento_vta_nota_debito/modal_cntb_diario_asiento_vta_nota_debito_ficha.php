<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_diario_asiento_vta_nota_debito = CntbDiarioAsientoVtaNotaDebito::getOxId($id);
//Gral::prr($cntb_diario_asiento_vta_nota_debito);
?>

<div class="tabs ficha-cntb_diario_asiento_vta_nota_debito" identificador="<?php echo $cntb_diario_asiento_vta_nota_debito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_diario_asiento_vta_nota_debito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_diario_asiento_vta_nota_debito cntb_periodo_id">
            <div class="label"><?php Lang::_lang('CntbPeriodo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getCntbPeriodo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_vta_nota_debito cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_vta_nota_debito vta_nota_debito_id">
            <div class="label"><?php Lang::_lang('VtaNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getVtaNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_vta_nota_debito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cntb_diario_asiento_vta_nota_debito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

