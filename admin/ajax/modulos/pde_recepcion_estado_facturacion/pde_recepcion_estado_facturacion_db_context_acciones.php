<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_recepcion_estado_facturacion = PdeRecepcionEstadoFacturacion::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_recepcion_estado_facturacion->getId()) ?>" modulo="pde_recepcion_estado_facturacion">

    <div class="titulo">
        <?php Lang::_lang('PdeRecepcionEstadoFacturacion') ?>: 
        <strong><?php Gral::_echo($pde_recepcion_estado_facturacion->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_RECEPCION_ESTADO_FACTURACION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeRecepcionEstadoFacturacion') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

