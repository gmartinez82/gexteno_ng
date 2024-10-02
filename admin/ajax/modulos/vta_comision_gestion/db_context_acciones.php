<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_comision = VtaComision::getOxId($id);

$vta_comision_tipo_estado = $vta_comision->getVtaComisionTipoEstado();
?>
<div class="datos" vta_comision_id="<?php Gral::_echo($vta_comision->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('VtaComision') ?>: 
        <strong><?php Gral::_echo($vta_comision->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_COMISION_GESTION_ACCION_ACCIONES_AUTORIZAR')) { ?>
        <?php if ($vta_comision_tipo_estado->getCodigo() == VtaComisionTipoEstado::TIPO_GENERADO) { ?>
            <div class="uno autorizar-comision">
                <img class="icono" src="imgs/btn_aceptar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Autorizar') ?> <?php Lang::_lang('VtaComision') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_COMISION_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($vta_comision_tipo_estado->getCodigo() == VtaComisionTipoEstado::TIPO_GENERADO
                || $vta_comision_tipo_estado->getCodigo() == VtaComisionTipoEstado::TIPO_AUTORIZADO) { ?>
            <div class="uno anular-comision">
                <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Anular') ?> <?php Lang::_lang('VtaComision') ?>
            </div>
        <?php } ?>
    <?php } ?>
    
    <?php if (UsCredencial::getEsAcreditado('VTA_COMISION_GESTION_ACCION_ACCIONES_PAGADO')) { ?>
        <?php if ($vta_comision_tipo_estado->getCodigo() == VtaComisionTipoEstado::TIPO_AUTORIZADO) { ?>
            <div class="uno pagar-comision">
                <img class="icono" src="imgs/btn_recibir.png" width="20" align="absmiddle" title="" />
                <?php Lang::_lang('Pago Recibido') ?>
            </div>
        <?php } ?>
    <?php } ?>
    
    <br />
</div>