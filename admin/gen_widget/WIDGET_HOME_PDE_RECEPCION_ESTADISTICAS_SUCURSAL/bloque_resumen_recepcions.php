<!-- Tabla de Resumen de Recepciones de Compras -->
<table border="0" align="center"> 
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="7">
            <?php Gral::_echo('Ultimas Recepciones de Compras') ?>
        </td>
    </tr>

    <tr>
        <td class="adm_tbl_encabezado" align="center" width="40">#</td>
        <td class="adm_tbl_encabezado" align="center" width="130">Fecha RCP</td>
        <td class="adm_tbl_encabezado" align="center" width="100">Cod Interno</td>
        <td class="adm_tbl_encabezado" align="left" width="450">Producto</td>
        <td class="adm_tbl_encabezado" align="center" width="80">Cantidad</td>
        <td class="adm_tbl_encabezado" align="center" width="140">Centro RCP</td>
        <td class="adm_tbl_encabezado" align="center" width="110">Cod RCP</td>
    </tr>
    
    <?php
    $cont = 0;
    foreach ($pde_recepcions as $pde_recepcion) {
    ?>
        <tr>
            <td class="adm_tbl_lineas" align="center"><?php Gral::_echoInt(++$cont) ?></td>
            
            <td class="adm_tbl_lineas" align="center">
                <?php Gral::_echo(Gral::getFechaHoraToWEB($pde_recepcion->getCreado())) ?>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <?php Gral::_echo($pde_recepcion->getInsInsumo()->getCodigoInterno()) ?>
            </td>
            
            <td class="adm_tbl_lineas" align="left">
                <strong>
                    <?php Gral::_echo($pde_recepcion->getInsInsumo()->getDescripcion()) ?>
                </strong>
            </td>

            <td class="adm_tbl_lineas" align="center">
                 <?php Gral::_echoFloatDyn($pde_recepcion->getCantidad()) ?>
            </td>

            <td class="adm_tbl_lineas" align="center">
                 <?php Gral::_echo($pde_recepcion->getPdeCentroRecepcion()->getDescripcion()) ?>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <?php Gral::_echo($pde_recepcion->getCodigo()) ?>
            </td>
        </tr>
    <?php } ?>
</table>
