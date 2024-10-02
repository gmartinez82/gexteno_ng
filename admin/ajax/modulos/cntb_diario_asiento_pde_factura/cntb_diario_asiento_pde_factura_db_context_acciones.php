<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cntb_diario_asiento_pde_factura = CntbDiarioAsientoPdeFactura::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cntb_diario_asiento_pde_factura->getId()) ?>" modulo="cntb_diario_asiento_pde_factura">

    <div class="titulo">
        <?php Lang::_lang('CntbDiarioAsientoPdeFactura') ?>: 
        <strong><?php Gral::_echo($cntb_diario_asiento_pde_factura->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_FACTURA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CntbDiarioAsientoPdeFactura') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

