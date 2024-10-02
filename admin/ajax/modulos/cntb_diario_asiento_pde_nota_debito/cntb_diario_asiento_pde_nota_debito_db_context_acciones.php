<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cntb_diario_asiento_pde_nota_debito = CntbDiarioAsientoPdeNotaDebito::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getId()) ?>" modulo="cntb_diario_asiento_pde_nota_debito">

    <div class="titulo">
        <?php Lang::_lang('CntbDiarioAsientoPdeNotaDebito') ?>: 
        <strong><?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_NOTA_DEBITO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaDebito') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

