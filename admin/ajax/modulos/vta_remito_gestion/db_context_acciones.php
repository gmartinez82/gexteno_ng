<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_remito = VtaRemito::getOxId($id);

$vta_remito_tipo_estado = $vta_remito->getVtaRemitoTipoEstado();
?>
<div class="datos" vta_remito_id="<?php Gral::_echo($vta_remito->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('VtaRemito') ?>: 
        <strong><?php Gral::_echo($vta_remito->getCodigo()) ?></strong>
        <?php Lang::_lang('CliCliente') ?>: 
        <strong><?php Gral::_echo($vta_remito->getPersonaDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_ACCIONES_ASIGNAR_NUMERO')) { ?>
        <?php if (!$vta_remito_tipo_estado->getTerminal()) { ?>
            <?php if (!$vta_remito->getTieneNumeroComprobanteAsignado()) { ?>
                <div class="uno reasignar-numero gen-modal-open" gen-modal-file="ajax/modulos/vta_remito_gestion/modal_asignar_numero_comprobante.php?vta_remito_id=<?php echo $vta_remito->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="80%" gen-modal-height="400" gen-modal-titulo="Asignar Numero de Comprobante" gen-modal-callback="setInitVtaRemitoGestion()">
                    <img class="icono" src="imgs/btn_refresh.png" width="16" align="absmiddle" title="" />
                    <?php Lang::_lang('Asignar Numero') ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    
    <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_ACCIONES_REASIGNAR_NUMERO')) { ?>
        <?php if (!$vta_remito_tipo_estado->getTerminal()) { // considerar cambiar por ANULADO ?>
            <?php if ($vta_remito->getTieneNumeroComprobanteAsignado()) { ?>
                <div class="uno reasignar-numero gen-modal-open" gen-modal-file="ajax/modulos/vta_remito_gestion/modal_reasignar_numero_comprobante.php?vta_remito_id=<?php echo $vta_remito->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="80%" gen-modal-height="400" gen-modal-titulo="Reasignar Numero de Comprobante" gen-modal-callback="setInitVtaRemitoGestion()">
                    <img class="icono" src="imgs/btn_refresh.png" width="16" align="absmiddle" title="" />
                    <?php Lang::_lang('Reasignar Numero') ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    
    <br />
</div>
<script>
    setInit();
</script>