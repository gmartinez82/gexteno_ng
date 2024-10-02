<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_factura_pde_oc = PdeFacturaPdeOc::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_factura_pde_oc->getId()) ?>" modulo="pde_factura_pde_oc">

    <div class="titulo">
        <?php Lang::_lang('PdeFacturaPdeOc') ?>: 
        <strong><?php Gral::_echo($pde_factura_pde_oc->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_OC_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeFacturaPdeOc') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

