<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_factura = VtaFactura::getOxId($id);

$vta_factura_tipo_estado = $vta_factura->getVtaFacturaTipoEstado();
$vta_tipo_origen_factura = $vta_factura->getVtaTipoOrigenFactura();

$eku_de = $vta_factura->getEkuDeActualDelComprobante();
if($eku_de){
    
}
        
?>
<div class="datos" vta_factura_id="<?php Gral::_echo($vta_factura->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('VtaFactura') ?>: 
        <strong><?php Gral::_echo($vta_factura->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if (($vta_factura_tipo_estado->getAprobadoAfip() == 0 || empty($vta_factura->getCae())) && $vta_factura_tipo_estado->getAnulado() == 0) { ?>
            <div class="uno anular-factura">
                <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Anular') ?> <?php Lang::_lang('VtaFactura') ?> (<?php Lang::_lang('Sin CAE') ?>)
            </div>
        <?php } ?>
    <?php } ?>
    
    <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_ACCIONES_GENERAR_RECIBO')) { ?>
        <?php if ($vta_factura_tipo_estado->getActivo() == 1) { ?>
            <div class="uno generar-recibo gen-modal-open" gen-modal-file="ajax/modulos/vta_factura_gestion/modal_vta_factura_gestion_generar_recibo.php?vta_factura_id=<?php echo $vta_factura->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="85%" gen-modal-height="500" gen-modal-titulo="Generar Recibo de Cobro" gen-modal-callback="setInitVtaFacturaGestion()">
                <img class="icono" src="imgs/btn_pagar.png" width="12" align="absmiddle" title="" />
                <?php Lang::_lang('Generar Recibo') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (false) { ?>
    <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_ACCIONES_REASIGNAR_NUMERO')) { ?>
        <?php if (!$vta_factura_tipo_estado->getAnulado()) { ?>
            <div class="uno reasignar-numero gen-modal-open" gen-modal-file="ajax/modulos/vta_factura_gestion/modal_reasignar_numero_comprobante.php?vta_factura_id=<?php echo $vta_factura->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Reasignar Numero de Comprobante" gen-modal-callback="setInitVtaFacturaGestion()">
                <img class="icono" src="imgs/btn_refresh.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Reasignar Numero') ?>
            </div>
        <?php } ?>
    <?php } ?>
    <?php } ?>

    <?php if($eku_de){ ?>
    <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_ACCIONES_VER_XML')) { ?>
    <div class="uno">
        <a href="ajax/modulos/vta_factura_gestion/xml_factura.php?id=<?php echo $vta_factura->getId() ?>&hash=<?php echo $vta_factura->getHash() ?>" target="_blank" title="Ver Factura en SIFEN">
            <img class="icono" src="imgs/icn_xml.png" width="22" align="absmiddle" title="" />
            <?php Lang::_lang('Descargar XML') ?>
        </a>
    </div>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_ACCIONES_VER_EN_SIFEN')) { ?>
    <div class="uno">
        <a href="<?php echo $vta_factura->getSIFEN_DTE_URL() ?>" target="_blank" title="Ver Factura en SIFEN">
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
    
    <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_ACCIONES_EVENTO_CANCELAR')) { ?>
    <div class="uno gen-modal-open" gen-modal-file="ajax/modulos/vta_factura_gestion/modal_sifen_de_evento_cancelar.php?vta_factura_id=<?php echo $vta_factura->getId() ?>&hash=<?php echo $vta_factura->getHash() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Cancelar DE en SIFEN" gen-modal-callback="setInitVtaFacturaGestion()">
        <img class="icono" src="imgs/btn_eliminar.png" width="14" align="absmiddle" title="" />
        <?php Lang::_lang('Cancelar DE') ?>
    </div>
    <?php } ?>
    
    <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_ACCIONES_EVENTO_INUTILIZAR')) { ?>
    <div class="uno gen-modal-open" gen-modal-file="ajax/modulos/vta_factura_gestion/modal_sifen_de_evento_inutilizar.php?vta_factura_id=<?php echo $vta_factura->getId() ?>&hash=<?php echo $vta_factura->getHash() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Inutilizar DE en SIFEN" gen-modal-callback="setInitVtaFacturaGestion()">
        <img class="icono" src="imgs/btn_anular.png" width="14" align="absmiddle" title="" />
        <?php Lang::_lang('Inutilizar DE') ?>
    </div>
    <?php } ?>

    <br />
    <br />
    <div class="titulo">
        Importar Eventos SIFEN
    </div>
    
    <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_ACCIONES_EVENTO_CONSULTAR')) { ?>
    <div class="uno gen-modal-open" gen-modal-file="ajax/modulos/vta_factura_gestion/modal_sifen_de_evento_consultar.php?vta_factura_id=<?php echo $vta_factura->getId() ?>&hash=<?php echo $vta_factura->getHash() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Consultar Eventos en SIFEN" gen-modal-callback="refreshAdmUno('vta_factura_gestion', <?php echo $vta_factura->getId() ?>)">
        <img class="icono" src="imgs/icn_download.png" width="16" align="absmiddle" title="" />
        <?php Lang::_lang('Consultar Eventos') ?>
    </div>
    <?php } ?>
        
    <br />
</div>
<script>
    setInit();
</script>