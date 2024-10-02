<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_nota_credito = VtaNotaCredito::getOxId($id);

$vta_nota_credito_tipo_estado = $vta_nota_credito->getVtaNotaCreditoTipoEstado();
$vta_tipo_origen_nota_credito = $vta_nota_credito->getVtaTipoOrigenNotaCredito();

$eku_de = $vta_nota_credito->getEkuDeActualDelComprobante();
if($eku_de){
    
}
?>
<div class="datos" vta_nota_credito_id="<?php Gral::_echo($vta_nota_credito->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('VtaNotaCredito') ?>: 
        <strong><?php Gral::_echo($vta_nota_credito->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($vta_tipo_origen_nota_credito->getCodigo() == VtaTipoOrigenNotaCredito::ORIGEN_ITEM) { ?>
            <?php if ($vta_nota_credito_tipo_estado->getAprobadoAfip() == 0) { ?>
                <div class="uno anular-nota-credito">
                    <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                    <?php Lang::_lang('Anular') ?> <?php Lang::_lang('VtaNotaCredito') ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>

    <?php if (false) { ?>
    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_ACCIONES_REASIGNAR_NUMERO')) { ?>
        <?php if (!$vta_nota_credito_tipo_estado->getAnulado()) { ?>
            <div class="uno reasignar-numero gen-modal-open" gen-modal-file="ajax/modulos/vta_nota_credito_gestion/modal_reasignar_numero_comprobante.php?vta_nota_credito_id=<?php echo $vta_nota_credito->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Reasignar Numero de Comprobante" gen-modal-callback="setInitVtaNotaCreditoGestion()">
                <img class="icono" src="imgs/btn_refresh.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Reasignar Numero') ?>
            </div>
        <?php } ?>
    <?php } ?>    
    <?php } ?>    
        
    <?php if($eku_de){ ?>
    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_ACCIONES_VER_XML')) { ?>
    <div class="uno">
        <a href="ajax/modulos/vta_nota_credito_gestion/xml_nota_credito.php?id=<?php echo $vta_nota_credito->getId() ?>&hash=<?php echo $vta_nota_credito->getHash() ?>" target="_blank" title="Ver Factura en SIFEN">
            <img class="icono" src="imgs/icn_xml.png" width="22" align="absmiddle" title="" />
            <?php Lang::_lang('Descargar XML') ?>
        </a>
    </div>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_ACCIONES_VER_EN_SIFEN')) { ?>
    <div class="uno">
        <a href="<?php echo $vta_nota_credito->getSIFEN_DTE_URL() ?>" target="_blank" title="Ver Factura en SIFEN">
            <img class="icono" src="imgs/icn_enlace.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Ver Comprobante en SIFEN') ?>
        </a>
    </div>
    <?php } ?>
    <?php } ?>

    <br />
    <br />
    <div class="titulo">
        Eventos SIFEN
    </div>
    
    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_ACCIONES_EVENTO_CANCELAR')) { ?>
    <div class="uno gen-modal-open" gen-modal-file="ajax/modulos/vta_nota_credito_gestion/modal_sifen_de_evento_cancelar.php?vta_nota_credito_id=<?php echo $vta_nota_credito->getId() ?>&hash=<?php echo $vta_nota_credito->getHash() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Cancelar DE en SIFEN" gen-modal-callback="setInitVtaNotaCreditoGestion()">
        <img class="icono" src="imgs/btn_eliminar.png" width="14" align="absmiddle" title="" />
        <?php Lang::_lang('Cancelar DE') ?>
    </div>
    <?php } ?>
    
    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_ACCIONES_EVENTO_INUTILIZAR')) { ?>
    <div class="uno gen-modal-open" gen-modal-file="ajax/modulos/vta_nota_credito_gestion/modal_sifen_de_evento_inutilizar.php?vta_nota_credito_id=<?php echo $vta_nota_credito->getId() ?>&hash=<?php echo $vta_nota_credito->getHash() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Inutilizar DE en SIFEN" gen-modal-callback="setInitVtaNotaCreditoGestion()">
        <img class="icono" src="imgs/btn_anular.png" width="14" align="absmiddle" title="" />
        <?php Lang::_lang('Inutilizar DE') ?>
    </div>
    <?php } ?>

    <br />
    <br />
    <div class="titulo">
        Importar Eventos SIFEN
    </div>
    
    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_ACCIONES_EVENTO_CONSULTAR')) { ?>
    <div class="uno gen-modal-open" gen-modal-file="ajax/modulos/vta_nota_credito_gestion/modal_sifen_de_evento_consultar.php?vta_nota_credito_id=<?php echo $vta_nota_credito->getId() ?>&hash=<?php echo $vta_nota_credito->getHash() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Consultar Eventos en SIFEN" gen-modal-callback="refreshAdmUno('vta_nota_credito_gestion', <?php echo $vta_nota_credito->getId() ?>)">
        <img class="icono" src="imgs/icn_download.png" width="16" align="absmiddle" title="" />
        <?php Lang::_lang('Consultar Eventos') ?>
    </div>
    <?php } ?>

    <br />
</div>
<script>
    setInit();
</script>