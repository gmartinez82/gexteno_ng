<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Concepto"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Base Imponible"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Importe Tributo"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'>% <?php Lang::_lang("Alicuota"); ?></td>
    </tr>
    <?php

    $cont = 0;
    foreach ($vta_ajuste_debe_vta_tributos as $vta_ajuste_debe_vta_tributo) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        
        $vta_tributo = $vta_ajuste_debe_vta_tributo->getVtaTributo();

        ?>
        <tr>
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="descripcion">
                    <?php Gral::_echo($vta_tributo->getDescripcion()) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe">	
                    <?php Gral::_echoImp($vta_ajuste_debe_vta_tributo->getImporteImponible()) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe">	
                    <?php Gral::_echoImp($vta_ajuste_debe_vta_tributo->getImporteTributo()) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe">	
                    <?php Gral::_echoFloat($vta_ajuste_debe_vta_tributo->getAlicuotaPorcentual()) ?> %
                </div>
            </td>
            
        </tr>
    <?php } ?>
</table>