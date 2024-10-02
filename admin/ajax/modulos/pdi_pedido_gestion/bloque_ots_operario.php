<?php
if ($ope_operario && $veh_coche) {
    $tal_orden_trabajos_activas = $ope_operario->getTalOrdenTrabajosCmbEnCoche($veh_coche->getId());

    if ($tal_orden_trabajo) {
        $tal_tarea_resueltas_activas_cmb = $tal_orden_trabajo->getTalTareaResueltasActivasCmb();
    }
    ?>
    <div class="bloque-ots_operario">

        <div class="par">
            <div class="label"><?php Lang::_lang('OTs en') ?> <?php Gral::_echo($veh_coche->getDescripcion()) ?></div>
            <div class="dato">
                <?php if (count($tal_orden_trabajos_activas) > 0) { ?>
                    <?php Html::html_dib_select(1, 'pdi_pedido_entrega_cmb_tal_orden_trabajo_id', Gral::getCmbFiltro($tal_orden_trabajos_activas, '...'), $pdi_pedido_entrega_cmb_tal_orden_trabajo_id, 'textbox') ?>                
                    <img id="btn_ot_buscar" src="imgs/btn_lupa.png" width="25" alt="buscar" title="Buscar OTs" align="absmiddle" />

                <?php } else { ?>
                    No tiene OTs Activas
                <?php } ?>
                <div class="error insumo-identificado-label-error pdi_pedido_entrega_cmb_tal_orden_trabajo_id_error"><?php Gral::_echo($pdi_pedido_entrega_cmb_tal_orden_trabajo_id_error) ?></div>

                <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_ENTREGA_OPERARIO_CREAR_OT')) { ?>
                    <?php if ($veh_coche->getPermiteOtPanol()) { ?>
                        <div class="boton agregar-ot" title="Crear Nueva Orden de Trabajo">+ Crear Nueva OT</div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

        <?php if ($tal_orden_trabajo) { ?>

            <div class="bloque_ot_datos_resumen">

                <div class="resumen linea L1">
                    <div class="col c1 codigo"><?php Gral::_echo($tal_orden_trabajo->getCodigo()) ?></div>
                    <div class="col c1 estado"><?php Gral::_echo($tal_orden_trabajo->getTalOTEstado()->getTalOrdenTrabajoTipoEstado()->getDescripcion()) ?></div>
                    <div class="col c1 fecha"><?php Gral::_echo(Gral::getFechaToWeb($tal_orden_trabajo->getCreado())) ?></div>
                    <div class="col c1 origen"><?php Gral::_echo($tal_orden_trabajo->getTalOrdenTrabajoOrigen()->getTalOrdenTrabajoTipoOrigen()->getDescripcion()) ?></div>
                </div>

                <div class="resumen linea L2">
                    <?php foreach ($tal_orden_trabajo->getTalTareaAsignadas() as $tal_tarea_asignada_resumen) { ?>
                        - <label title="Tarea Asignada">TA</label>: <label class="tarea-asignada"> <?php Gral::_echo($tal_tarea_asignada_resumen->getDescripcion()) ?></label><br />

                        <div class="resumen linea L2-1">
                            <?php foreach ($tal_tarea_asignada_resumen->getTalTareaResueltas() as $tal_tarea_resuelta_resumen) { ?>
                                - <label title="Tarea Resuelta">TR</label>: <label class="tarea-resuelta"> <?php Gral::_echo($tal_tarea_resuelta_resumen->getDescripcion()) ?></label><br />

                                <div class="resumen linea L2-1-1">
                                    <?php foreach ($tal_tarea_resuelta_resumen->getTalInsumoAsignadosReal() as $tal_insumo_asignado_resumen) { ?>
                                        - <label title="Insumo Asignado">Ins</label>: <label class="insumo-asignado"> <?php Gral::_echo($tal_insumo_asignado_resumen->getInsInsumo()->getDescripcion()) ?>
                                            <?php Gral::_echo(($tal_insumo_asignado_resumen->getInsInsumoIdentificadoId() != 'null') ? $tal_insumo_asignado_resumen->getInsInsumoIdentificado()->getDescripcionLarga() : '') ?>
                                            el <?php Gral::_echo(Gral::getFechaHoraToWeb($tal_insumo_asignado_resumen->getFecha())) ?>
                                        </label>
                                        <br />
                                    <?php } ?>
                                </div>
                            <?php } ?>

                        </div>

                    <?php } ?>
                </div>    	
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Tarea Resuelta') ?></div>
                <div class="dato">
                    <?php if (count($tal_tarea_resueltas_activas_cmb) > 0) { ?>
                        <?php Html::html_dib_select(1, 'pdi_pedido_entrega_cmb_tal_tarea_resuelta_id', Gral::getCmbFiltro($tal_tarea_resueltas_activas_cmb, '...'), $pdi_pedido_entrega_cmb_tal_tarea_resuelta_id, 'textbox') ?>
                    <?php } else { ?>
                        No tiene Tareas Resueltas Activas
                    <?php } ?>
                    <div class="error insumo-identificado-label-error pdi_pedido_entrega_cmb_tal_tarea_resuelta_id_error"><?php Gral::_echo($pdi_pedido_entrega_cmb_tal_tarea_resuelta_id_error) ?></div>

                    <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_ENTREGA_OPERARIO_CREAR_TR')) { ?>
                        <div class="boton agregar-tarea_resuelta" title="Crear Nueva Tarea Resuelta">+ Crear Nueva TR</div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <?php if ($tal_tarea_resuelta) { ?>
            <?php if (count($tal_tarea_resuelta->getTalInsumoSolicitados()) > 0) { ?>
                <div class="par">
                    <div class="label"><?php Lang::_lang('Ins Solicitados') ?></div>
                    <div class="dato" style="font-size:10px; font-weight:normal; border-bottom:#CCC dotted 1px; padding:2px;">
                        <?php foreach ($tal_tarea_resuelta->getTalInsumoSolicitados() as $tal_insumo_solicitado) { ?>
                            <?php Gral::_echo($tal_insumo_solicitado->getInsInsumo()->getDescripcion()) ?>
                            <br />
                            <?php Gral::_echo($tal_insumo_solicitado->getPdiPedido()->getCodigo()) ?> (<?php Gral::_echo($tal_insumo_solicitado->getPdiPedido()->getPdiEstadoActual()->getPdiTipoEstado()->getDescripcion()) ?>) el <?php Gral::_echo(Gral::getFechaHoraToWeb($tal_insumo_solicitado->getCreado())) ?>
                        <?php } ?>
                        <div class="error insumo-identificado-label-error insumos_solicitados_error"><?php Gral::_echo($insumos_solicitados_error) ?></div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>

    </div>
    <?php
}
?>