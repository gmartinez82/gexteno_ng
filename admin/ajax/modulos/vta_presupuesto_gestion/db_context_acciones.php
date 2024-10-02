<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_presupuesto = VtaPresupuesto::getOxId($id);

$vta_presupuesto_tipo_estado = $vta_presupuesto->getVtaPresupuestoTipoEstado();
?>
<div class="datos" vta_presupuesto_id="<?php Gral::_echo($vta_presupuesto->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('VtaPrespuesto') ?>: 
        <strong><?php Gral::_echo($vta_presupuesto->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_CONFIG_DUPLICAR')): ?>
        <?php if ($vta_presupuesto_tipo_estado->getCodigo() != VtaPresupuestoTipoEstado::TIPO_EN_PROCESO_TIENDA): ?>
            <div class="uno duplicar-presupuesto">
                <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaPrespuesto') ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    
    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($vta_presupuesto_tipo_estado->getCodigo() == VtaPresupuestoTipoEstado::TIPO_APROBADO) { ?>
            <div class="uno anular-presupuesto">
                <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Anular') ?> <?php Lang::_lang('VtaPrespuesto') ?>
            </div>
        <?php } ?>
    <?php } ?>    

    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_CONFIG_CAMBIAR_LISTA_PRECIO')): ?>
        <?php if ($vta_presupuesto_tipo_estado->getCodigo() == VtaPresupuestoTipoEstado::TIPO_EN_PROCESO_TIENDA): ?>
            <div class="uno cambiar-lista-precio">
                <img class="icono" src="imgs/btn_importe.png" width="12" align="absmiddle" title="" />
                <?php Lang::_lang('Cambiar Lista de Precio') ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_CONFIG_CAMBIAR_ESTADO_PREAPROBADO')): ?>
        <?php if ($vta_presupuesto_tipo_estado->getCodigo() == VtaPresupuestoTipoEstado::TIPO_EN_CURSO): ?>
            <div class="uno cambiar-estado gen-modal-open" gen-modal-file="ajax/modulos/vta_presupuesto_gestion/modal_cambiar_estado.php?vta_presupuesto_id=<?php echo $vta_presupuesto->getId() ?>&tipo_estado=<?php echo VtaPresupuestoTipoEstado::TIPO_PREAPROBADO ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Cambiar Estado" gen-modal-callback="setInitVtaPresupuestoGestion()">
                <img class="icono" src="imgs/vta_presupuesto_tipo_estado/<?php echo VtaPresupuestoTipoEstado::TIPO_PREAPROBADO ?>.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Cambiar a') ?> <?php echo VtaPresupuestoTipoEstado::TIPO_PREAPROBADO ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_CONFIG_CAMBIAR_ESTADO_EN_CURSO')): ?>
        <?php if ($vta_presupuesto_tipo_estado->getCodigo() == VtaPresupuestoTipoEstado::TIPO_PREAPROBADO 
                || $vta_presupuesto_tipo_estado->getCodigo() == VtaPresupuestoTipoEstado::TIPO_EN_PRODUCCION): ?>
            <div class="uno cambiar-estado gen-modal-open" gen-modal-file="ajax/modulos/vta_presupuesto_gestion/modal_cambiar_estado.php?vta_presupuesto_id=<?php echo $vta_presupuesto->getId() ?>&tipo_estado=<?php echo VtaPresupuestoTipoEstado::TIPO_EN_CURSO ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Cambiar Estado" gen-modal-callback="setInitVtaPresupuestoGestion()">
                <img class="icono" src="imgs/vta_presupuesto_tipo_estado/<?php echo VtaPresupuestoTipoEstado::TIPO_EN_CURSO ?>.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Cambiar a') ?> <?php echo VtaPresupuestoTipoEstado::TIPO_EN_CURSO ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_CONFIG_CAMBIAR_ESTADO_EN_PRODUCCION')): ?>
        <?php if ($vta_presupuesto_tipo_estado->getCodigo() == VtaPresupuestoTipoEstado::TIPO_PREAPROBADO || $vta_presupuesto_tipo_estado->getCodigo() == VtaPresupuestoTipoEstado::TIPO_EN_CURSO || $vta_presupuesto_tipo_estado->getCodigo() == VtaPresupuestoTipoEstado::TIPO_EXTENDIDO): ?>
            <div class="uno cambiar-estado gen-modal-open" gen-modal-file="ajax/modulos/vta_presupuesto_gestion/modal_cambiar_estado.php?vta_presupuesto_id=<?php echo $vta_presupuesto->getId() ?>&tipo_estado=<?php echo VtaPresupuestoTipoEstado::TIPO_EN_PRODUCCION ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Cambiar Estado" gen-modal-callback="setInitVtaPresupuestoGestion()">
                <img class="icono" src="imgs/vta_presupuesto_tipo_estado/<?php echo VtaPresupuestoTipoEstado::TIPO_EN_PRODUCCION ?>.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Cambiar a') ?> <?php echo VtaPresupuestoTipoEstado::TIPO_EN_PRODUCCION ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_CONFIG_CAMBIAR_ESTADO_PRODUCCION_FINALIZADA')): ?>
        <?php if ($vta_presupuesto_tipo_estado->getCodigo() == VtaPresupuestoTipoEstado::TIPO_EN_PRODUCCION): ?>
            <div class="uno cambiar-estado gen-modal-open" gen-modal-file="ajax/modulos/vta_presupuesto_gestion/modal_cambiar_estado.php?vta_presupuesto_id=<?php echo $vta_presupuesto->getId() ?>&tipo_estado=<?php echo VtaPresupuestoTipoEstado::TIPO_PRODUCCION_FINALIZADA ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Cambiar Estado" gen-modal-callback="setInitVtaPresupuestoGestion()">
                <img class="icono" src="imgs/vta_presupuesto_tipo_estado/<?php echo VtaPresupuestoTipoEstado::TIPO_PRODUCCION_FINALIZADA ?>.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Cambiar a') ?> <?php echo VtaPresupuestoTipoEstado::TIPO_PRODUCCION_FINALIZADA ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    
    <br />
</div>
<script>
    setInit();
    setInitVtaPresupuestoGestion();
</script>