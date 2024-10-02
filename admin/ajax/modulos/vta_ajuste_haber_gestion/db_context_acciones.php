<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_ajuste_haber = VtaAjusteHaber::getOxId($id);

$vta_ajuste_haber_tipo_estado = $vta_ajuste_haber->getVtaAjusteHaberTipoEstado();
?>
<div class="datos" vta_ajuste_haber_id="<?php Gral::_echo($vta_ajuste_haber->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('VtaAjusteHaber') ?>: 
        <strong><?php Gral::_echo($vta_ajuste_haber->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($vta_ajuste_haber_tipo_estado->getCodigo() == VtaAjusteHaberTipoEstado::TIPO_PENDIENTE) { ?>
            <div class="uno anular-ajuste_haber">
                <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Anular') ?> <?php Lang::_lang('VtaAjusteHaber') ?>
            </div>
        <?php } ?>
    <?php } ?>
    
    <br />
</div>