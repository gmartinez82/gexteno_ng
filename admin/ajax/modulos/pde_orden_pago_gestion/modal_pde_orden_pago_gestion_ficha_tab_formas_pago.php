
<div class="titulo"><?php Lang::_lang('Formas de Pago') ?></div>

<div class="bloque-historial-formas_pago">
    <table border="0" class="tabla-modal">
        <tr>

            <td class="adm_tbl_encabezado" width="70" align="center">
                ID
            </td>
            
            <td class="adm_tbl_encabezado" width="200" align="center">
                Forma de Pago
            </td>

            <td class="adm_tbl_encabezado" width="400" align="center">
                Descripcion
            </td>

            <td class="adm_tbl_encabezado" width="140" align="center">
                Importe Afectado
            </td>

            <td class="adm_tbl_encabezado" width="100" align="center">
                Estado
            </td>

        </tr>
        <?php
        $cont = 0;
        foreach ($pde_orden_pago_gral_forma_pagos as $pde_orden_pago_gral_forma_pago) {
            $cont++;
            $strong = ($cont == 1) ? 'strong' : '';

            $gral_fp_forma_pago = $pde_orden_pago_gral_forma_pago->getGralFpFormaPago();
            $importe_afectado = $pde_orden_pago_gral_forma_pago->getImporteAfectado();
            ?>
            <tr id="tr_pde_orden_pago_pde_comprobante_gestion_uno_<?php echo $pde_orden_pago_gral_forma_pago->getId() ?>" class="uno" identificador="<?php echo $pde_orden_pago_gral_forma_pago->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="id">
                        <?php Gral::_echo($pde_orden_pago_gral_forma_pago->getId()) ?>
                    </label>
                </td>
                
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="gral-fp-forma-pago">
                        <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="descripcion">
                        <?php Gral::_echo($pde_orden_pago_gral_forma_pago->getDescripcion()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-afectado">
                        <?php Gral::_echoImp($importe_afectado) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="estado">
                        <img src='imgs/btn_estado_<?php Gral::_echo($pde_orden_pago_gral_forma_pago->getEstado()) ?>.gif' width='20' border='0' />
                    </label>
                </td>	

            </tr>
        <?php } ?>
    </table>
</div>
<br />

