<?php
$vta_presupuesto_ins_insumo = $vta_presupuesto_conflicto->getVtaPresupuestoInsInsumo();
$vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();
$us_usuario_resolucion = UsUsuario::getOxId($vta_presupuesto_conflicto->getUsUsuarioResolucion());
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_presupuesto_conflicto->getId() ?>" modulo="vta_presupuesto_conflicto">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo-vta-presupuesto">
        <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
    </div>
    <div class="fecha-vta-presupuesto">
        <?php Gral::_echo(Gral::getFechaToWEB($vta_presupuesto->getFecha())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($vta_presupuesto_conflicto->getCodigo()) ?>
    </div>
    <div class="fecha">
        <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_presupuesto_conflicto->getCreado())) ?>
    </div>
    <div class="creado-por">
        <?php Gral::_echo($vta_presupuesto_conflicto->getCreadoPorDescripcion()) ?>
    </div>
</td>		

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cliente">	
        <?php Gral::_echo($vta_presupuesto_conflicto->getVtaPresupuestoInsInsumo()->getVtaPresupuesto()->getPersonaDescripcion()) ?>
    </div>
    <div class="insumo">	
        <?php Gral::_echo($vta_presupuesto_conflicto->getVtaPresupuestoInsInsumo()->getDescripcion()) ?>
    </div>
    <div class="codigo-interno">	
        C.I.: <?php Gral::_echo($vta_presupuesto_conflicto->getVtaPresupuestoInsInsumo()->getInsInsumo()->getCodigoInterno()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe_inicial">
        <?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteInicial()) ?>
    </div>
</td>	

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe_actualizado">
        <?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteActualizado()) ?>
    </div>
    <div class="importe_diferencia">
        DIF: <?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteActualizado() - $vta_presupuesto_conflicto->getImporteInicial()) ?>
    </div>
</td>	

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <?php if ($vta_presupuesto_conflicto->getResuelto()) { ?>
        <div class="importe_resuelto">
            <?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteResuelto()) ?>
        </div>
        <div class="fecha-resolucion">
            <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_presupuesto_conflicto->getModificado())) ?>
        </div>
        <?php if ($us_usuario_resolucion) { ?>
            <div class="fecha-resolucion">
                <?php Gral::_echo($us_usuario_resolucion->getDescripcion()) ?>
            </div>
        <?php } ?>

    <?php } else { ?>
        -
    <?php } ?>

</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="observacion">
        <?php Gral::_echo($vta_presupuesto_conflicto->getObservacion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado("VTA_PRESUPUESTO_CONFLICTO_GESTION_ACCION_CONFIG")): ?>
            <?php if ($vta_presupuesto_conflicto->getEstado()): ?>
                <li class="adm_botones_accion db_context" archivo="<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_presupuesto_conflicto_gestion/vta_presupuesto_conflicto_gestion_acciones_db_context.php?vta_presupuesto_conflicto_id=<?php Gral::_echo($vta_presupuesto_conflicto->getId()) ?>" modulo_metodo_init="setInitVtaPresupuestoConflictoGestion()" title="<?php Lang::_lang("Ver Acciones") ?>">
                    <img src="imgs/btn_config.png" width="20" border="0" />
                </li>
            <?php endif; ?>
        <?php endif; ?>

    </ul>
</td>


