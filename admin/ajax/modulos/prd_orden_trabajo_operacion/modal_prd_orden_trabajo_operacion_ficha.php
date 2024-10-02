<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_orden_trabajo_operacion = PrdOrdenTrabajoOperacion::getOxId($id);
//Gral::prr($prd_orden_trabajo_operacion);
?>

<div class="tabs ficha-prd_orden_trabajo_operacion" identificador="<?php echo $prd_orden_trabajo_operacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

        <li><a href="#tab_prd_orden_trabajo_operacion_estado"><?php Lang::_lang(PrdOrdenTrabajoOperacionEstado) ?></a></li>
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_orden_trabajo_operacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_orden_trabajo_operacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion prd_orden_trabajo_ciclo_id">
            <div class="label"><?php Lang::_lang('PrdOrdenTrabajoCiclo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion->getPrdOrdenTrabajoCiclo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion prd_param_operacion_id">
            <div class="label"><?php Lang::_lang('PrdParamOperacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion->getPrdParamOperacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion prd_orden_trabajo_operacion_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PrdOrdenTrabajoOperacionTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion cantidad_operarios">
            <div class="label"><?php Lang::_lang('Cant Operarios') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion->getCantidadOperarios()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion cantidad_equipos">
            <div class="label"><?php Lang::_lang('Cant Equipos') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion->getCantidadEquipos()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion->getNumero()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo_operacion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

    <!-- Tab PrdOrdenTrabajoOperacionEstado -->
    <div id="tab_prd_orden_trabajo_operacion_estado" class="datos">

        <div class="titulo"><?php Lang::_lang('Historial de PrdOrdenTrabajoOperacionEstado del PrdOrdenTrabajoOperacion') ?></div>

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
                $prd_orden_trabajo_operacion_estados = $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionEstados(null, null, null, array(array('campo' => 'id', 'orden' => 'desc')));
                $cont = 0;
                foreach ($prd_orden_trabajo_operacion_estados as $prd_orden_trabajo_operacion_estado) {
                    $cont++;
                    $strong = ($cont == 1) ? 'strong' : '';
                    ?>
                    <tr class="uno prd_orden_trabajo_operacion_estado_id_<?php echo $prd_orden_trabajo_operacion_estado->getId() ?>" identificador="<?php echo $prd_orden_trabajo_operacion_estado->getId() ?>">
                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="fecha">
                                <?php Gral::_echo(Gral::getFechaHoraToWEB($prd_orden_trabajo_operacion_estado->getCreado())); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="tipo-estado">
                                <img src="imgs/prd_orden_trabajo_operacion_tipo_estado/<?php Gral::_echo($prd_orden_trabajo_operacion_estado->getPrdOrdenTrabajoOperacionTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                                <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getPrdOrdenTrabajoOperacionTipoEstado()->getDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="observacion">
                                <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getObservacion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="creado-por-descripcion">
                                <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getCreadoPorDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="actual">
                                <img src="imgs/btn_estado_<?php echo $prd_orden_trabajo_operacion_estado->getActual(); ?>.gif" width="15" alt="hab" />
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

