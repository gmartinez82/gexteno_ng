<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_oc_tipo_estado_facturacion = PdeOcTipoEstadoFacturacion::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_oc_tipo_estado_facturacion->getId()) ?>" modulo="pde_oc_tipo_estado_facturacion">

    <div class="titulo">
        <?php Lang::_lang('PdeOcTipoEstadoFacturacion') ?>: 
        <strong><?php Gral::_echo($pde_oc_tipo_estado_facturacion->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_FACTURACION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeOcTipoEstadoFacturacion') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

