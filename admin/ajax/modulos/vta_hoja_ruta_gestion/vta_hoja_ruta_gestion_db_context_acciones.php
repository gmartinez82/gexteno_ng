<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_hoja_ruta = VtaHojaRuta::getOxId($id);

$vta_hoja_ruta_tipo_estado = $vta_hoja_ruta->getVtaHojaRutaTipoEstado();

$vta_hoja_ruta_tipo_estado_en_ruta   = VtaHojaRutaTipoEstado::getOxCodigo(VtaHojaRutaTipoEstado::TIPO_EN_RUTA);
$vta_hoja_ruta_tipo_estado_entregado = VtaHojaRutaTipoEstado::getOxCodigo(VtaHojaRutaTipoEstado::TIPO_ENTREGADO);
?>
<div class="datos" identificador="<?php Gral::_echo($vta_hoja_ruta->getId()) ?>" modulo="vta_hoja_ruta">

    <div class="titulo">
        <?php Lang::_lang('Hoja Ruta') ?>: 
        <strong><?php Gral::_echo($vta_hoja_ruta->getDescripcion()) ?></strong>
    </div>
    <?php if (UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ADM_ACCION_CONFIG_EN_RUTA')): ?>
        <?php if($vta_hoja_ruta_tipo_estado->getEditable() ): ?>
        <div class="uno cambiar-estado-en-ruta gen-modal-open" modulo_estado="vta_hoja_ruta_estado" gen-modal-file="ajax/modulos/vta_hoja_ruta_gestion/modal_hoja_ruta_cambiar_estado.php?identificador=<?php echo $id ?>&hoja_ruta_tipo_estado_codigo=<?php echo $vta_hoja_ruta_tipo_estado_en_ruta->getCodigo(); ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="600" gen-modal-titulo="Cambiar Estado" gen-modal-callback="setInitVtaHojaRutaGestion(); setInit();">
            <img class="icono" src="imgs/vta_hoja_ruta_tipo_estado/<?php Gral::_echo($vta_hoja_ruta_tipo_estado_en_ruta->getCodigo()) ?>.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar ') ?> <?php Lang::_lang('estado a <b>En Ruta</b>') ?>
        </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if (UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ADM_ACCION_CONFIG_ENTREGADO')): ?>
        <?php if($vta_hoja_ruta_tipo_estado->getActivo() && !$vta_hoja_ruta_tipo_estado->getEditable()): ?>
        <div class="uno cambiar-estado-entregado gen-modal-open" modulo_estado="vta_hoja_ruta_estado" gen-modal-file="ajax/modulos/vta_hoja_ruta_gestion/modal_hoja_ruta_cambiar_estado.php?identificador=<?php echo $id ?>&hoja_ruta_tipo_estado_codigo=<?php echo $vta_hoja_ruta_tipo_estado_entregado->getCodigo(); ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="600" gen-modal-titulo="Cambiar Estado" gen-modal-callback="setInitVtaHojaRutaGestion(); setInit();">
            <img class="icono" src="imgs/vta_hoja_ruta_tipo_estado/<?php Gral::_echo($vta_hoja_ruta_tipo_estado_entregado->getCodigo()) ?>.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('estado a <b>Entregado</b>') ?>
        </div>
        <?php endif; ?>
    <?php endif; ?>
            
    <div class="uno agregar-remito gen-modal-open" gen-modal-file="ajax/modulos/vta_hoja_ruta_gestion/modal_agregar_comprobante.php?identificador=<?php echo $id; ?>" gen-modal-content=".div_modal" gen-modal-width="90%" gen-modal-height="600" gen-modal-titulo="Agregar Comprobante a <?php echo $vta_hoja_ruta->getCodigo(); ?>" gen-modal-callback="setInitVtaHojaRutaGestion(); setInit();" gen-modal-callback-onclose="refreshAdmUno('vta_hoja_ruta_gestion', <?php echo $id; ?>); setInit();">
        <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
        <?php Lang::_lang('Agregar') ?> <?php Lang::_lang('Comprobante') ?>
    </div>
    
    <br />
</div> 
<script>
    setInitVtaHojaRutaGestion();
    setInitAdm();
    setInit();
</script>
