<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_hoja_ruta = VtaHojaRuta::getOxId($id);

$vta_hoja_ruta_tipo_estado = $vta_hoja_ruta->getVtaHojaRutaTipoEstado();

?>
<div class="datos" identificador="<?php Gral::_echo($vta_hoja_ruta->getId()) ?>" modulo="vta_hoja_ruta">

    <div class="titulo">
        <?php Lang::_lang('VtaHojaRuta') ?>: 
        <strong><?php Gral::_echo($vta_hoja_ruta->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaHojaRuta') ?>
        </div>
    <?php endif; ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ADM_ACCION_CONFIG_CAMBIAR_VTA_HOJA_RUTA_ESTADO')): ?>
        <div class="uno cambiar-estado" modulo_estado="vta_hoja_ruta_estado">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('VtaHojaRutaEstado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

