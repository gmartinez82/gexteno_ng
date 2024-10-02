<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_factura = PdeFactura::getOxId($id);

$pde_factura_tipo_estado = $pde_factura->getPdeFacturaTipoEstado();
$pde_tipo_origen_factura = $pde_factura->getPdeTipoOrigenFactura();
?>
<div class="datos" pde_factura_id="<?php Gral::_echo($pde_factura->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('PdeFactura') ?>: 
        <strong><?php Gral::_echo($pde_factura->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($pde_factura_tipo_estado->getCodigo() == PdeFacturaTipoEstado::TIPO_PENDIENTE) { ?>
            <div class="uno anular-recibo">
                <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Anular') ?> <?php Lang::_lang('Factura') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_ACCION_ACCIONES_EDITAR_FACTURA')) { ?>
        <?php if ($pde_factura_tipo_estado->getCodigo() == PdeFacturaTipoEstado::TIPO_PENDIENTE) { ?>
            <div class="uno editar-factura">
                <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Editar Factura') ?>
            </div>
        <?php } ?>
    <?php } ?>
    
    <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_ACCION_ACCIONES_EDITAR_OC')) { ?>
        <?php if ($pde_factura_tipo_estado->getCodigo() == PdeFacturaTipoEstado::TIPO_PENDIENTE) { ?>
            <div class="uno editar-factura-oc">
                <img class="icono" src="imgs/btn_ficha.png" width="15" align="absmiddle" title="" />
                <?php Lang::_lang('Editar OCs de Factura') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_ACCION_ACCIONES_EDITAR_NOTA_INTERNA')) { ?>
        <div class="uno editar-nota-interna">
            <img class="icono" src="imgs/btn_atributos.png" width="17" align="absmiddle" title="" />
            <?php Lang::_lang('Editar Nota Interna') ?>
        </div>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_ACCION_IMPUTAR_CENTRO_COSTO')) { ?>
        <div class='uno gen-modal-open' gen-modal-file="ajax/modulos/pde_factura_gestion/modal_imputar_centro_costo.php?identificador=<?php echo $id ?>" gen-modal-content=".div_modal" gen-modal-width="80%" gen-modal-height="650" gen-modal-titulo="Imputar Centros de Costo" gen-modal-callback="setInit()" >
            <img class="icono" src="imgs/icon_centro_costo.png" width="22" align="absmiddle" title="" />
            <?php Lang::_lang('Imputar a Centro de Costo') ?>
        </div>       
    <?php } ?>
    
    <br />
</div>

<script>
    setInitPdeFacturaGestion();
    setInit();
</script>