<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_diario_asiento_pde_recibo = CntbDiarioAsientoPdeRecibo::getOxId($id);
//Gral::prr($cntb_diario_asiento_pde_recibo);
?>

<div class="tabs ficha-cntb_diario_asiento_pde_recibo" identificador="<?php echo $cntb_diario_asiento_pde_recibo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_diario_asiento_pde_recibo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_pde_recibo->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_diario_asiento_pde_recibo cntb_periodo_id">
            <div class="label"><?php Lang::_lang('CntbPeriodo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_pde_recibo->getCntbPeriodo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_pde_recibo cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_pde_recibo->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_pde_recibo pde_recibo_id">
            <div class="label"><?php Lang::_lang('PdeRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_pde_recibo->getPdeRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_pde_recibo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cntb_diario_asiento_pde_recibo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

