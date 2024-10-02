<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Concepto"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Base Imponible"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Importe Tributo"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'>% <?php Lang::_lang("Alicuota"); ?></td>
    </tr>
    <?php

    $cont = 0;
    foreach ($pde_nota_debito_pde_tributos as $pde_nota_debito_pde_tributo) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        
        $pde_tributo = $pde_nota_debito_pde_tributo->getPdeTributo();

        ?>
        <tr>
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="descripcion">
                    <?php Gral::_echo($pde_tributo->getDescripcion()) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe">	
                    <?php Gral::_echoImp($pde_nota_debito_pde_tributo->getImporteImponible()) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe">	
                    <?php Gral::_echoImp($pde_nota_debito_pde_tributo->getImporteTributo()) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe">	
                    <?php Gral::_echoFloat($pde_nota_debito_pde_tributo->getAlicuotaPorcentual()) ?> %
                </div>
            </td>
            
        </tr>
    <?php } ?>
</table>