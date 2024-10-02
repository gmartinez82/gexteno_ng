<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$id = Gral::getVars(Gral::VARS_GET, 'id', 0, Gral::TIPO_INTEGER);
$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($id);

$prd_proceso_productivo_id = $prd_orden_trabajo->getPrdProcesoProductivoId();
$prd_proceso_productivo = PrdProcesoProductivo::getOxId($prd_proceso_productivo_id);

?>
<div class="datos" prd_orden_trabajo_id="<?php Gral::_echo($prd_orden_trabajo->getId()) ?>">
    <div class="titulo">
        <?php Lang::_lang('Orden Trabajo') ?>: 
        <strong><?php Gral::_echo($prd_orden_trabajo->getCodigo()) ?></strong>
    </div>
    
    <?php if  ( UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_GESTION_ACCION_ACCIONES_CONFIGURAR_OT') ) { ?>
        <div class="uno configurar-ot gen-modal-open" gen-modal-file="ajax/modulos/prd_orden_trabajo_gestion/modal_orden_trabajo_configuracion.php?identificador=<?php echo $prd_orden_trabajo->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="60%" gen-modal-height="600" gen-modal-titulo="Configurar Orden de Trabajo" gen-modal-callback="setInitPrdOrdenTrabajoGestion();">
            <img class="icono" src="imgs/btn_refresh.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Configurar OT'); ?>
        </div>
    <?php } ?>
    
    <?php if ( $prd_proceso_productivo && $prd_proceso_productivo->getConfigurado() == 1  ) {?>
    <?php if  ( UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_GESTION_ACCION_ACCIONES_EDITAR_OT') ) { ?>
        <div class="uno editar-ot">
            <a href='prd_orden_trabajo_edicion.php?id=<?php Gral::_echo($prd_orden_trabajo->getId()) ?>&hash=<?php Gral::_echo($prd_orden_trabajo->getHash()) ?>' title='<?php Lang::_lang('Modificar OT configurada') ?>' target="_blank">
                <img class="icono" src='imgs/btn_modi.gif' width='16' />
                <?php Lang::_lang('Editar Operaciones OT'); ?>
            </a>
        </div>
    <?php } ?>
    <?php } ?>
    
    <?php if  ( UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_GESTION_ACCION_ACCIONES_EDITAR_PRIORIDAD') ) { ?>
        <div class="uno editar-prioridad-ot gen-modal-open" gen-modal-file="ajax/modulos/prd_orden_trabajo_gestion/modal_orden_trabajo_editar_prioridad.php?identificador=<?php echo $prd_orden_trabajo->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="60%" gen-modal-height="600" gen-modal-titulo="Editar Prioridad Orden de Trabajo" gen-modal-callback="setInitPrdOrdenTrabajoGestion();">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar Prioridad OT'); ?>
        </div>
    <?php } ?>
    <br />
</div>
<script>
    setInit();
</script>

