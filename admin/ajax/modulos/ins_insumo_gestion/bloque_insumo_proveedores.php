<table border="0" class="tabla-modal" id="tbl_insumo_gestion_ficha_proveedores">
    <tr>
        <td class="adm_tbl_encabezado" width="30" align='center'><?php Lang::_lang('Ref') ?></td>
        <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Proveedor') ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Cod Marca') ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Cod OEM') ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Imp Bruto') ?></td>
        <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Imp Neto') ?></td>
        <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Imp Net Ant') ?></td>
        <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Dif') ?></td>
        <td class="adm_tbl_encabezado" width="40" align='center'>&nbsp;</td>
    </tr>
    <?php
    $cont = 0;
    foreach ($prv_insumos as $prv_insumo) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';

        $prv_proveedor = $prv_insumo->getPrvProveedor();
        $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
        $prv_insumo_costo_anterior = $prv_insumo->getPrvInsumoCostoAnterior();

        if ($prv_insumo_costo_actual && $prv_insumo_costo_anterior) {
            $diferencia = $prv_insumo_costo_actual->getImporteNeto() - $prv_insumo_costo_anterior->getImporteNeto();
            $diferencia_porcentual = ((($prv_insumo_costo_actual->getImporteNeto() / $prv_insumo_costo_anterior->getImporteNeto()) - 1) * 100);
        }
        ?>
        <tr class="uno" prv_insumo_id="<?php Gral::_echo($prv_insumo->getId()) ?>">

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="referencial" title="<?php Gral::_echo(($prv_insumo->getReferencial()) ? 'El proveedor es referencial de precios' : 'No es referencia de precios') ?>">
                    <img src="imgs/btn_estado_<?php echo $prv_insumo->getReferencial() ?>.gif" width="18" alt="hab" />
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="proveedor">
                    <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
                </div>
                <div class="codigo">
                    Cod PRV: <strong><?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?></strong>
                </div>
                <div class="insumo">
                    <?php Gral::_echo($prv_insumo->getDescripcion()) ?>
                </div>                
                <div class="creado">
                    Creado el <?php Gral::_echo(Gral::getFechaHoraToWEB($prv_insumo->getCreado())) ?> por <?php Gral::_echo($prv_insumo->getCreadoPorDescripcion()) ?>
                </div>                
                <div class="modificado">
                    Modificado el <?php Gral::_echo(Gral::getFechaHoraToWEB($prv_insumo->getModificado())) ?> por <?php Gral::_echo($prv_insumo->getModificadoPorDescripcion()) ?>
                </div>                
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="marca-id">
                    <?php Gral::_echo($prv_insumo->getInsMarca()->getDescripcion()) ?>
                </div>
                <div class="marca-codigo">
                    <?php Gral::_echo($prv_insumo->getCodigoMarca()) ?>
                </div>                
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="oem-marca-id">
                    <?php Gral::_echo($prv_insumo->getInsMarcaPiezaObj()->getDescripcion()) ?>
                </div>
                <div class="oem-marca-codigo">
                    <?php Gral::_echo($prv_insumo->getCodigoPieza()) ?>
                </div>                
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <div class="importe-bruto">
                    <?php Gral::_echoImp($prv_insumo_costo_actual->getImporteBruto()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <div class="importe-neto">
                    <?php Gral::_echoImp($prv_insumo_costo_actual->getImporteNeto()) ?>
                </div>

                <?php if ($prv_insumo_costo_actual->getDescuento() != 0) { ?>
                    <div class="descuento">
                        <?php Gral::_echo($prv_insumo_costo_actual->getDescuento()) ?>% OFF
                    </div>
                <?php } ?>

                <div class="fecha">
                    el <?php Gral::_echo(Gral::getFechaToWEB($prv_insumo_costo_actual->getFechaActualizacion())) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <?php if ($prv_insumo_costo_anterior) { ?>
                    <div class="importe-neto-anterior">
                        <?php Gral::_echoImp($prv_insumo_costo_anterior->getImporteNeto()) ?>
                    </div>
                    <div class="fecha">
                        el <?php Gral::_echo(Gral::getFechaToWEB($prv_insumo_costo_anterior->getFechaActualizacion())) ?>
                    </div>
                <?php } ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <?php if ($prv_insumo_costo_anterior) { ?>
                    <div class="diferencia">
                        <?php Gral::_echoFloat($diferencia_porcentual) ?> %
                    </div>
                <?php } ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="acciones botonera">
                    <img class="accion actualizar-costo" src="imgs/btn_importe.png" width="15" alt="hab" title="Actualizar Costo de Insumo" />                    
                </div>
            </td>
        </tr>
    <?php } ?>
</table>