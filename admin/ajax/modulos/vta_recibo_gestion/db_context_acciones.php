<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_recibo = VtaRecibo::getOxId($id);

$vta_recibo_tipo_estado = $vta_recibo->getVtaReciboTipoEstado();
?>
<div class="datos" vta_recibo_id="<?php Gral::_echo($vta_recibo->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('VtaRecibo') ?>: 
        <strong><?php Gral::_echo($vta_recibo->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($vta_recibo_tipo_estado->getCodigo() == VtaReciboTipoEstado::TIPO_PENDIENTE) { ?>
            <div class="uno anular-recibo">
                <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Anular') ?> <?php Lang::_lang('VtaRecibo') ?>
            </div>
        <?php } ?>
    <?php } ?>
    
    <br />
</div>