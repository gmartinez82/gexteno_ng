<link href='<?php echo Gral::getPath('path_http') ?>css/admin/modulos/cntb_diario_asiento_gestion.css' rel='stylesheet' type='text/css' />

<div class="titulo"><?php Lang::_lang('Asientos Contables') ?></div>

<div class="bloque-vta-ajuste-debe-asientos">
    <table border='0' align='center' class='listado' id='listado_adm_cntb_diario_asiento_gestion'>

        <tr>
            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Ejercicio') ?>                
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Asiento') ?>
            </td>

            <td width='500' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Concepto') ?>
            </td>

            <td width='200' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Debe') ?>
            </td>

            <td width='200' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Haber') ?>
            </td>

        </tr>


        <?php
        foreach ($cntb_diario_asientos as $cntb_diario_asiento) {
            $estado = ($cntb_diario_asiento->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_cntb_diario_asiento_gestion_uno_<?php Gral::_echo($cntb_diario_asiento->getId()) ?>" class="uno" identificador="<?php Gral::_echo($cntb_diario_asiento->getId()) ?>">
                <?php
                $cntb_diario_asiento_cuentas = $cntb_diario_asiento->getCntbDiarioAsientoCuentas();
                $cntb_ejercicio = $cntb_diario_asiento->getCntbEjercicio();
                ?>
                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="cntb-ejercicio">
                        <?php Gral::_echo($cntb_ejercicio->getDescripcion()) ?>
                    </div>
                    <div class="fecha-inicio">
                        <?php Gral::_echo(Gral::getFechaToWEB($cntb_ejercicio->getFechaInicio())) ?>
                    </div>
                    al
                    <div class="fecha-fin">
                        <?php Gral::_echo(Gral::getFechaToWEB($cntb_ejercicio->getFechaFin())) ?>
                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="numero">
                        <?php Gral::_echo($cntb_diario_asiento->getNumero()) ?>
                    </div>
                    <div class="fecha" title="<?php Gral::_echo(Gral::getFechaHoraToWEB($cntb_diario_asiento->getCreado())) ?>">
                        <?php Gral::_echo(Gral::getFechaToWEB($cntb_diario_asiento->getFecha())) ?>
                    </div>
                    <div class="cntb_tipo_origen_id">	
                        <?php Gral::_echo($cntb_diario_asiento->getCntbTipoOrigen()->getDescripcion()) ?>
                    </div>
                </td>	

                <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>' colspan="3">

                    <div class="descripcion-asiento">
                        <?php Gral::_echo($cntb_diario_asiento->getGralActividad()->getDescripcion()) ?> - 
                        <?php Gral::_echo($cntb_diario_asiento->getCntbTipoMovimiento()->getDescripcion()) ?> - 
                        <?php Gral::_echo($cntb_diario_asiento->getDescripcion()) ?>
                    </div>

                    <div class="observacion-asiento">
                        <?php Gral::_echo($cntb_diario_asiento->getObservacion()) ?>
                    </div>

                    <div class="cntb_ejercicio_id">	
                        <?php //Gral::_echo($cntb_diario_asiento->getCntbEjercicio()->getDescripcion()) ?>
                    </div>
                    <div class="cntb_tipo_asiento_id">	
                        <?php //Gral::_echo($cntb_diario_asiento->getCntbTipoAsiento()->getDescripcion()) ?>
                    </div>
                    <div class="cntb_tipo_movimiento_id">	
                        <?php //Gral::_echo($cntb_diario_asiento->getCntbTipoMovimiento()->getDescripcion()) ?>
                    </div>

                    <?php if (count($cntb_diario_asiento_cuentas) > 0) { ?>
                        <div class="diario-asiento-cuentas">

                            <?php
                            foreach ($cntb_diario_asiento_cuentas as $cntb_diario_asiento_cuenta) {
                                $cntb_cuenta = $cntb_diario_asiento_cuenta->getCntbCuenta();
                                $cntb_tipo_saldo = $cntb_diario_asiento_cuenta->getCntbTipoSaldo();
                                ?>
                                <div class="diario-asiento-cuenta">

                                    <div class="descripcion">
                                        <?php echo ($cntb_tipo_saldo->getCodigo() == CntbTipoSaldo::TIPO_ACREEDOR) ? '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a ' : '' ?>

                                        <?php Gral::_echo($cntb_cuenta->getDescripcion()) ?>

                                    </div>

                                    <div class="importe-debe">
                                        <?php if ($cntb_diario_asiento_cuenta->getImporteDebe() != 0) { ?>
                                            <?php Gral::_echoImp($cntb_diario_asiento_cuenta->getImporteDebe()) ?>
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </div>

                                    <div class="importe-haber">
                                        <?php if ($cntb_diario_asiento_cuenta->getImporteHaber() != 0) { ?>
                                            <?php Gral::_echoImp($cntb_diario_asiento_cuenta->getImporteHaber()) ?>
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </div>

                                </div>
                            <?php } ?>

                        </div>
                    <?php } ?>

                </td>

            </tr>

        <?php } ?>

    </table>
</div>
<br />
