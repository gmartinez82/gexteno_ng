<?php
require_once "_autoload.php";
//Gral::prr($per_persona);
//Gral::prr($per_mov_movimientos);
if (!$per_persona) {
    $per_persona_id = Gral::getVars(1, "per_persona_id", 0);
    $fecha = Gral::getVars(1, "hdn_fecha", "");
    $per_persona = PerPersona::getOxId($per_persona_id);
    if ($per_persona) {
        $per_mov_movimientos = $per_persona->getPerMovMovimientosEnFecha($fecha, PerMovTipoMovimiento::TIPO_ENTRADA);
    }
}
?>

<div class="titulo"><?php Lang::_lang('Movimientos') ?></div>
<table id='listado_per_mov_movimiento_calendario_ficha' border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Id'); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Fecha'); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Hora'); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Movimiento'); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Sector'); ?></td>
        <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Estado'); ?></td>
        <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Modificado'); ?></td>
        <td class="adm_tbl_encabezado" width="200" align='center'><?php Lang::_lang('Observaciones'); ?></td>
        <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang('Cred'); ?></td>
        <td class="adm_tbl_encabezado" width="40" align='center'>

            <?php if (UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_ACCION_AGREGAR_MOVIMIENTO_ENTRADA')) { ?>
                <div class="agregar-per-movimiento-entrada">
                    <img src='imgs/btn_add.gif' width='20' border='0' title="Agregar nuevo movimiento de entrada" />
                </div>
            <?php } ?>

        </td>
    </tr>
    <?php
    $cont = 0;
    foreach ($per_mov_movimientos as $per_mov_movimiento):
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        $per_mov_movimiento_par_contrario = $per_mov_movimiento->getPerMovMovimientoParContrario();
        //Gral::prr($per_mov_movimiento_par_contrario);
        $per_mov_tipo_movimiento_codigo = $per_mov_movimiento->getPerMovTipoMovimiento()->getCodigo();
        $per_mov_tipo_movimiento_codigo_par_contrario = $per_mov_movimiento_par_contrario->getPerMovTipoMovimiento()->getCodigo();
        ?>
        <tr class="uno-movimiento" per_movimiento_id="<?php Gral::_echo($per_mov_movimiento->getId()); ?>" >
            <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo; ?>" align="center">
                <div class="movimiento-id">
                    <?php Gral::_echo($per_mov_movimiento->getId()); ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo; ?>" align="center">
                <div class="fecha">
                    <?php Gral::_echo(Gral::getFechaToWeb($per_mov_movimiento->getFechahora())); ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo; ?>" align="center">
                <div class="hora">
                    <?php Gral::_echo(Gral::getHoraToWeb($per_mov_movimiento->getFechahora())); ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo; ?>" align="center">
                <div class="tipo-movimiento">
                    <?php Gral::_echo($per_mov_movimiento->getPerMovTipoMovimiento()->getDescripcion()); ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo; ?>" align="center">
                <div class="ctrl-sector">
                    <?php Gral::_echo($per_mov_movimiento->getCtrlSector()->getDescripcion()); ?>
                </div>
                <div class="ctrl-equipo">
                    <?php Gral::_echo($per_mov_movimiento->getCtrlEquipo()->getDescripcion()); ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo; ?>" align="center">
                <img src='imgs/btn_estado_<?php Gral::_echo($per_mov_movimiento->getEstado()); ?>.gif' width='14' border='0' />
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo; ?>" align="center">
                <?php if ($per_mov_movimiento->getModificadoPor() != "null"): ?>
                    <div class="modificado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_movimiento->getModificado())); ?>
                    </div>
                    <div class="modificado-por">
                        <?php Gral::_echo($per_mov_movimiento->getModificadoPorDescripcion()); ?>
                    </div>
                <?php endif; ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo; ?>" align="left">
                <div class="observacion">
                    <?php Gral::_echo($per_mov_movimiento->getObservacion()); ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo; ?>" align="center">
                <?php if ($per_mov_movimiento->getCodigo() != "") { ?>
                    <div class="codigo-credencial">
                        <?php Gral::_echo($per_mov_movimiento->getCodigo()); ?>
                    </div>
                <?php } ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo; ?>" align="left">

                <?php if (UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_ACCION_EDITAR_MOVIMIENTO')) { ?>
                    <label for="btn_modi" class="editar per-movimiento"><img src='imgs/btn_modi.gif' width='20' border='0'  title="Editar Movimiento"/></label>
                <?php } ?>

                <?php if (UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_ACCION_AGREGAR_MOVIMIENTO_SALIDA')) { ?>
                    <?php if ($per_mov_tipo_movimiento_codigo == PerMovTipoMovimiento::TIPO_ENTRADA): ?>
                        <?php if ($per_mov_movimiento_par_contrario->getId() == null): ?>
                            <label class="agregar-per-movimiento-salida"><img src='imgs/btn_add.gif' width='20' border='0' title="Agregar nuevo movimiento de salida "/></label>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php } ?>

            </td>
        </tr>

        <?php if ($per_mov_movimiento_par_contrario->getId() != ""): ?>
            <tr class="uno-movimiento" per_movimiento_id="<?php Gral::_echo($per_mov_movimiento_par_contrario->getId()); ?>" >
                <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo_par_contrario; ?>" align="center">
                    <div class="movimiento-id">
                        <?php Gral::_echo($per_mov_movimiento_par_contrario->getId()); ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo_par_contrario; ?>" align="center">
                    <div class="fecha">
                        <?php Gral::_echo(Gral::getFechaToWeb($per_mov_movimiento_par_contrario->getFechahora())); ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo_par_contrario; ?>" align="center">
                    <div class="hora">
                        <?php Gral::_echo(Gral::getHoraToWeb($per_mov_movimiento_par_contrario->getFechahora())); ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo_par_contrario; ?>" align="center">
                    <?php Gral::_echo($per_mov_movimiento_par_contrario->getPerMovTipoMovimiento()->getDescripcion()); ?>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo_par_contrario; ?>" align="center">
                    <div class="ctrl-sector">
                        <?php Gral::_echo($per_mov_movimiento_par_contrario->getCtrlSector()->getDescripcion()); ?>
                    </div>
                    <div class="ctrl-equipo">
                        <?php Gral::_echo($per_mov_movimiento_par_contrario->getCtrlEquipo()->getDescripcion()); ?>
                    </div>                                                
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo_par_contrario; ?>" align="center">
                    <img src='imgs/btn_estado_<?php Gral::_echo($per_mov_movimiento_par_contrario->getEstado()); ?>.gif' width='14' border='0' />
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo_par_contrario; ?>" align="center">
                    <?php if ($per_mov_movimiento_par_contrario->getModificadoPor() != "null"): ?>
                        <div class="modificado">
                            <?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_movimiento_par_contrario->getModificado())); ?>
                        </div>
                        <div class="modificado-por">
                            <?php Gral::_echo($per_mov_movimiento_par_contrario->getModificadoPorDescripcion()); ?>
                        </div>
                    <?php endif; ?>

                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo_par_contrario; ?>" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($per_mov_movimiento_par_contrario->getObservacion()); ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo_par_contrario; ?>" align="center">
                    <?php if ($per_mov_movimiento_par_contrario->getCodigo() != "") { ?>
                        <div class="codigo-credencial">
                            <?php Gral::_echo($per_mov_movimiento_par_contrario->getCodigo()); ?>
                        </div>
                    <?php } ?>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?> <?php echo $per_mov_tipo_movimiento_codigo_par_contrario; ?>" align="left">

                    <?php if (UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_ACCION_EDITAR_MOVIMIENTO')) { ?>
                        <label class="editar per-movimiento"><img src='imgs/btn_modi.gif' width='20' border='0'  title="Editar Movimiento"/></label>
                    <?php } ?>

                </td>
            </tr>
        <?php endif; ?>

        <?php
    endforeach;
    ?>
    <tr>
        <?php
        //una fila mas para agregar el total de horas, se necesitan estos datos para llamar al metodo que calcula.

        $desde = $fecha; //dato que se recupera en el modal de la ficha
        $hasta = $fecha; //dato que se recupera en el modal de la ficha
        $per_legajo = $per_persona->getLegajo(); //objeto per_persona se recupera en el modal de la ficha
        $per_descripcion = $per_persona->getDescripcion();
        $per_tipo_documento = $per_persona->getGralTipoDocumento()->getDescripcion();
        $per_documento = $per_persona->getDocumento();
        //$co_sector = $per_persona->getCoSector();
        $gral_empresa = $per_persona->getGralEmpresa();

        if ($co_sector) {
            $co_sector_id = $co_sector->getId();
            $co_centro_operativo = $co_sector->getCoCentroOperativo();
            if ($co_centro_operativo) {
                $co_centro_operativo_id = $co_centro_operativo->getId();
            }
        }

        if ($gral_empresa) {
            $gral_empresa_id = $gral_empresa->getId();
        }

        //Gral::prr($per_persona);
        /* Gral::pr($per_persona_id, "per_persona_id");
          Gral::pr($desde, "desde");
          Gral::pr($hasta, "hasta");
          Gral::pr($per_legajo, "per_legajo");
          Gral::pr($per_descripcion, "per_descripcion");
          Gral::pr($per_tipo_documento, "per_tipo_documento");
          Gral::pr($per_documento, "per_documento");
          Gral::pr($co_sector_id, "co_sector_id");
          Gral::pr($co_centro_operativo_id, "co_centro_operativo_id");
          Gral::pr($gral_empresa_id, "gral_empresa_id");
         */

        $array = PerMovMovimiento::getGrillaCantidadHorasParaCalendario($desde, $hasta, $co_centro_operativo_id, $co_sector_id, $per_persona_id, $gral_empresa_id);
        //Gral::prr($array);
        if ($array) {
            $arr_datos = $array[$co_sector_id][$per_persona_id][$desde];
        }
        //Gral::prr($arr_datos);
        ?>

        <td class="adm_tbl_lineas " align="center">
            <div class="total-horas">
                <?php Gral::_echo("TOTAL"); ?>
            </div>
        </td>
        <td  class="adm_tbl_lineas " align="center">
            <div class="total-horas">
                <?php Gral::_echoHoras($arr_datos["cantidad_horas"], 'hm'); ?>
            </div>
        </td>
        <td colspan="8" class="adm_tbl_lineas "  align="center">
            <div>
            </div>
        </td>
    </tr>
</table>
