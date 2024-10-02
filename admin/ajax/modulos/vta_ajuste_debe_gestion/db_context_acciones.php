<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_ajuste_debe = VtaAjusteDebe::getOxId($id);

$vta_ajuste_debe_tipo_estado = $vta_ajuste_debe->getVtaAjusteDebeTipoEstado();
$vta_tipo_origen_ajuste_debe = $vta_ajuste_debe->getVtaTipoOrigenAjusteDebe();
?>
<div class="datos" vta_ajuste_debe_id="<?php Gral::_echo($vta_ajuste_debe->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('VtaAjusteDebe') ?>: 
        <strong><?php Gral::_echo($vta_ajuste_debe->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if (($vta_ajuste_debe_tipo_estado->getAprobadoAfip() == 0 || empty($vta_ajuste_debe->getCae())) && $vta_ajuste_debe_tipo_estado->getAnulado() == 0) { ?>
            <div class="uno anular-ajuste-debe">
                <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Anular') ?> <?php Lang::_lang('VtaAjusteDebe') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <br />
</div>
