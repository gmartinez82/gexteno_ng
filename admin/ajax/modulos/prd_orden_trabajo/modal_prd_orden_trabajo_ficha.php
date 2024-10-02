<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($id);
//Gral::prr($prd_orden_trabajo);
?>

<div class="tabs ficha-prd_orden_trabajo" identificador="<?php echo $prd_orden_trabajo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

        <li><a href="#tab_prd_orden_trabajo_estado"><?php Lang::_lang(PrdOrdenTrabajoEstado) ?></a></li>
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_orden_trabajo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_orden_trabajo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo vta_presupuesto_id">
            <div class="label"><?php Lang::_lang('VtaPresupuesto') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getVtaPresupuesto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo vta_presupuesto_ins_insumo_id">
            <div class="label"><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getVtaPresupuestoInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo prd_tipo_origen_id">
            <div class="label"><?php Lang::_lang('PrdTipoOrigen') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getPrdTipoOrigen()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo prd_proceso_productivo_id">
            <div class="label"><?php Lang::_lang('PrdProcesoProductivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getPrdProcesoProductivo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo prd_prioridad_id">
            <div class="label"><?php Lang::_lang('PrdPrioridad') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getPrdPrioridad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo prd_orden_trabajo_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PrdOrdenTrabajoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($prd_orden_trabajo->getFecha())) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

    <!-- Tab PrdOrdenTrabajoEstado -->
    <div id="tab_prd_orden_trabajo_estado" class="datos">

        <div class="titulo"><?php Lang::_lang('Historial de PrdOrdenTrabajoEstado del PrdOrdenTrabajo') ?></div>

        <div class="bloque-historial-estados">

            <table border="0" class="tabla-modal">
                <tr>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Fecha"); ?></td>
                    <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
                    <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang("Observaciones"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Creado por"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
                </tr>
                <?php
                $prd_orden_trabajo_estados = $prd_orden_trabajo->getPrdOrdenTrabajoEstados(null, null, null, array(array('campo' => 'id', 'orden' => 'desc')));
                $cont = 0;
                foreach ($prd_orden_trabajo_estados as $prd_orden_trabajo_estado) {
                    $cont++;
                    $strong = ($cont == 1) ? 'strong' : '';
                    ?>
                    <tr class="uno prd_orden_trabajo_estado_id_<?php echo $prd_orden_trabajo_estado->getId() ?>" identificador="<?php echo $prd_orden_trabajo_estado->getId() ?>">
                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="fecha">
                                <?php Gral::_echo(Gral::getFechaHoraToWEB($prd_orden_trabajo_estado->getCreado())); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="tipo-estado">
                                <img src="imgs/prd_orden_trabajo_tipo_estado/<?php Gral::_echo($prd_orden_trabajo_estado->getPrdOrdenTrabajoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                                <?php Gral::_echo($prd_orden_trabajo_estado->getPrdOrdenTrabajoTipoEstado()->getDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="observacion">
                                <?php Gral::_echo($prd_orden_trabajo_estado->getObservacion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="creado-por-descripcion">
                                <?php Gral::_echo($prd_orden_trabajo_estado->getCreadoPorDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="actual">
                                <img src="imgs/btn_estado_<?php echo $prd_orden_trabajo_estado->getActual(); ?>.gif" width="15" alt="hab" />
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <br />
        
    </div>    

    <!-- Tab  -->
    <div id="tab_" class="datos">

        <div class="titulo"><?php Lang::_lang('') ?></div>

        <div class="bloque-">
            <?php if(file_exists('modal_ficha_bloque_.php')){ ?>
                <?php include 'modal_ficha_bloque_.php' ?>
            <?php }else{ ?>
                Debe incluir el bloque HTML en el archivo 'modal_ficha_bloque_.php'
            <?php } ?>
        </div>
        
    </div>
        
</div>

