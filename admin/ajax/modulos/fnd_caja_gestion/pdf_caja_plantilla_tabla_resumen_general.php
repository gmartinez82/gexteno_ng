<?php
include_once "_autoload.php";

//$fnd_caja_id = Gral::getVars(Gral::VARS_GET, 'fnd_caja_id', 0);
$fnd_caja_id = $param["fnd_caja_id"];
$arr_resumen_caja = $param["arr_resumen_caja"];
//Gral::prr($arr_resumen_caja);
//exit;

$fnd_caja = FndCaja::getOxId($fnd_caja_id);
$fnd_caja_tipo_estado = $fnd_caja->getFndCajaTipoEstado();
?>
<style>
    .listado{
        font-size: 8px;
    }
    .adm_tbl_orden {text-decoration: none; color:#FFFFFF;}
    .adm_tbl_orden:link {	text-decoration: none;	color:#FFFFFF;}
    .adm_tbl_orden:visited {	text-decoration: none;	color:#FFFFFF;}
    .adm_tbl_orden:hover {text-decoration: none;	color:#CCCCCC;}

    .adm_tbl_titulo{
        text-align: left;
        color: #000;
        font-weight:bold;
        font-size: 10px;
        line-height: 22px;
    }
    .adm_tbl_encabezado{
        font-weight: normal;
        text-decoration: none;
        color: #FFFFFF;
        background-color:#999999;
        padding:5px;
        line-height:20px;
    }
    .adm_tbl_encabezado a{
        color:#FFFFFF;
        cursor:pointer;
    }
    .adm_tbl_encabezado img{
        float:right;
    }
    .ver_buscador img{
        float:none;
        cursor:pointer;
    }
    .adm_tbl_encabezado_gris{
        font-weight: normal;
        text-decoration: none;
        color: #333333;
        font-weight:bold;
        background-color:#dddddd;
        line-height:20px;
    }
    .adm_tbl_pie{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        background-color:#f1f1f1;
        border-bottom:#999 solid 1px;
        line-height:20px;
        padding:5px;
    }

    .adm_tbl_lineas{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        border-bottom:#CCCCCC solid 1px;
        line-height:20px;
    }
    .adm_tbl_lineas_chico{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        border-bottom:#CCCCCC solid 1px;
        line-height:15px;        
        font-size: 6px;
    }

    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }

</style>


<table class="listado" id="listado_adm_fnd_caja_gestion" border="0">
    <tbody>
        <tr>
            <td class="" width="50%" align="center">

                <div class="adm_tbl_titulo">
                    Resumen General por Concepto
                </div>

                <table class="listado" id="listado_adm_fnd_caja_gestion" border="0">

                    <tbody>
                        <tr>
                            <td class="adm_tbl_encabezado" width="120" align="center">
                                Concepto
                            </td>

                            <td class="adm_tbl_encabezado" width="60" align="center">
                                Cantidad
                            </td>

                            <td class="adm_tbl_encabezado" width="80" align="center">
                                Importe
                            </td>
                        </tr>

                        <?php
                        $total_concepto_importe = 0;
                        foreach ($arr_resumen_caja['general'] as $i => $arr_resumen):
                            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

                            if ($arr_resumen['suma']) {
                                $total_concepto_importe += $arr_resumen['importe'];
                            } else {
                                $total_concepto_importe -= $arr_resumen['importe'];
                            }
                            ?>
                            <tr class="uno" identificador="<?php echo $i ?>">

                                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                                    <label class="descripcion">
                                        <?php Gral::_echo($arr_resumen['descripcion']) ?>
                                    </label>
                                </td>	

                                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                                    <label class="cantidad">
                                        <?php Gral::_echo($arr_resumen['cantidad']) ?>
                                    </label>
                                </td>	

                                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                                    <label class="importe">
                                        <?php echo (!$arr_resumen['suma']) ? '-' : '' ?>
                                        <?php Gral::_echoImp($arr_resumen['importe']) ?>
                                    </label>
                                </td>	

                            </tr>
                            <?php
                        endforeach;
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="adm_tbl_encabezado" width="120" align="center">

                            </td>

                            <td class="adm_tbl_encabezado" width="60" align="center">

                            </td>

                            <td class="adm_tbl_encabezado" width="80" align="right">
                                <?php Gral::_echoImp($total_concepto_importe) ?>
                            </td>
                        </tr>
                    </tfoot>

                </table>

            </td>

            <td class="" width="50%" align="center">

                <div class="adm_tbl_titulo">
                    Resumen General por Forma de Pago
                </div>

                <table class="listado" id="listado_adm_fnd_caja_gestion" border="0">

                    <tbody>
                        <tr>
                            <td class="adm_tbl_encabezado" width="120" align="center">
                                Forma de Pago
                            </td>

                            <td class="adm_tbl_encabezado" width="60" align="center">
                                Cantidad
                            </td>

                            <td class="adm_tbl_encabezado" width="80" align="center">
                                Importe
                            </td>
                        </tr>

                        <?php
                        foreach ($arr_resumen_caja['forma_pago'] as $i => $arr_resumen):
                            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';
                            ?>
                            <tr class="uno" identificador="<?php echo $i ?>">

                                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                                    <label class="descripcion">
                                        <?php Gral::_echo($arr_resumen['descripcion']) ?>
                                    </label>
                                </td>	

                                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                                    <label class="cantidad">
                                        <?php Gral::_echo($arr_resumen['cantidad']) ?>
                                    </label>
                                </td>	

                                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                                    <label class="importe">
                                        <?php Gral::_echoImp($arr_resumen['importe']) ?>
                                    </label>
                                </td>	

                            </tr>
                            <?php
                        endforeach;
                        ?>

                    </tbody>
                </table>

            </td>

        </tr>

        <?php if (!$fnd_caja_tipo_estado->getActivo()) { ?>
            <tr>
                <td class="" width="50%" align="center">

                    <div class="adm_tbl_titulo">
                        Resumen General por Tipo de Billete
                    </div>

                    <table class="listado" id="listado_adm_fnd_caja_gestion" border="0">

                        <tbody>
                            <tr>
                                <td class="adm_tbl_encabezado" width="120" align="center">
                                    Billete
                                </td>

                                <td class="adm_tbl_encabezado" width="60" align="center">
                                    Cantidad
                                </td>

                                <td class="adm_tbl_encabezado" width="80" align="center">
                                    Importe
                                </td>
                            </tr>

                            <?php
                            foreach ($fnd_caja->getFndCajaGralBilletes(null, null, true) as $i => $fnd_caja_gral_billete):
                                $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

                                $gral_billete = $fnd_caja_gral_billete->getGralBillete();
                                ?>
                                <tr class="uno" identificador="<?php echo $i ?>">

                                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                                        <label class="descripcion">
                                            <?php Gral::_echo($gral_billete->getDescripcion()) ?>
                                        </label>
                                    </td>	

                                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                                        <label class="cantidad">
                                            <?php Gral::_echo($fnd_caja_gral_billete->getCantidad()) ?>
                                        </label>
                                    </td>	

                                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                                        <label class="importe">
                                            <?php Gral::_echoImp($fnd_caja_gral_billete->getImporteTotal()) ?>
                                        </label>
                                    </td>	

                                </tr>
                                <?php
                            endforeach;
                            ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="adm_tbl_encabezado" width="120" align="center">

                                </td>

                                <td class="adm_tbl_encabezado" width="60" align="center">

                                </td>

                                <td class="adm_tbl_encabezado" width="80" align="right">
                                    <?php Gral::_echoImp($fnd_caja->getImporteEfectivoFinalInformado()) ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </td>

                <td class="" width="50%" align="center">

                    <div class="adm_tbl_titulo">
                        Resumen General de Efectivo
                    </div>

                    <table class="listado" id="listado_adm_fnd_caja_gestion" border="0">

                        <tbody>
                            <tr>
                                <td class="adm_tbl_encabezado" width="180" align="center">
                                    Descripcion
                                </td>

                                <td class="adm_tbl_encabezado" width="80" align="center">
                                    Importe
                                </td>
                            </tr>

                            <tr class="uno" identificador="<?php echo $i ?>">

                                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                                    <label class="descripcion">
                                        Efectivo Registrado en Caja
                                    </label>
                                </td>	

                                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                                    <label class="importe">
                                        <?php Gral::_echoImp($fnd_caja->getImporteEfectivoFinalRegistrado()) ?>
                                    </label>
                                </td>	

                            </tr>

                            <tr class="uno" identificador="<?php echo $i ?>">

                                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                                    <label class="descripcion">
                                        Efectivo Informado en Billetes
                                    </label>
                                </td>	

                                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                                    <label class="importe">
                                        <?php Gral::_echoImp($fnd_caja->getImporteEfectivoFinalInformado()) ?>
                                    </label>
                                </td>	

                            </tr>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="adm_tbl_encabezado" width="180" align="left">
                                    Saldo de Caja
                                </td>

                                <td class="adm_tbl_encabezado" width="80" align="right" >
                                    <?php Gral::_echoImp($fnd_caja->getImporteEfectivoFinalDiferencia()) ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </td>                
            </tr>
        <?php } ?>
    </tbody>
</table>

<br pagebreak="true"/>
<div class="adm_tbl_titulo">
    Resumen General por Concepto y Forma de Pago
</div>

<table class="listado" id="listado_adm_fnd_caja_gestion" border="0">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="140" align="center">
                Concepto
            </td>

            <td class="adm_tbl_encabezado" width="140" align="center">
                Forma de Pago
            </td>

            <td class="adm_tbl_encabezado" width="60" align="center">
                Cantidad
            </td>

            <td class="adm_tbl_encabezado" width="90" align="center">
                Ingresos
            </td>

            <td class="adm_tbl_encabezado" width="90" align="center">
                Egresos
            </td>
        </tr>

        <?php
        foreach ($arr_resumen_caja['general'] as $i => $arr_resumen_concepto) {
            if (count($arr_resumen_concepto['forma_pago']) == 0)
                continue;
            ?>
            <tr class="uno" identificador="<?php echo $i ?>">

                <td class="adm_tbl_encabezado_gris" align="left">
                    <label class="descripcion">
                        <?php Gral::_echo($arr_resumen_concepto['descripcion']) ?>
                    </label>
                </td>	

                <td class="adm_tbl_encabezado_gris" align="left">
                    <label class="descripcion">
                    </label>
                </td>	

                <td class="adm_tbl_encabezado_gris" align="center">
                    <label class="cantidad">
                        <?php //Gral::_echo($arr_resumen_concepto['cantidad'])    ?>
                    </label>
                </td>	


                <td class="adm_tbl_encabezado_gris" align="right">
                    <label class="importe">
                        <?php if ($arr_resumen_concepto['tipo'] == 'ingreso'): ?>
                            <?php Gral::_echoImp($arr_resumen_concepto['importe']) ?>
                        <?php else: ?>
                            -    
                        <?php endif; ?>
                    </label>
                </td>	

                <td class="adm_tbl_encabezado_gris" align="right">
                    <label class="importe">
                        <?php if ($arr_resumen_concepto['tipo'] == 'egreso'): ?>
                            <?php Gral::_echoImp($arr_resumen_concepto['importe']) ?>
                        <?php else: ?>
                            -    
                        <?php endif; ?>
                    </label>
                </td>

            </tr>

            <?php
            foreach ($arr_resumen_concepto['forma_pago'] as $ii => $arr_resumen_concepto_forma_pago) {
                ?>
                <tr class="uno" identificador="<?php echo $i ?>">

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <label class="descripcion">
                        </label>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <label class="descripcion">
                            <?php Gral::_echo($arr_resumen_concepto_forma_pago['descripcion']) ?>
                        </label>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <label class="cantidad">
                            <?php Gral::_echo($arr_resumen_concepto_forma_pago['cantidad']) ?>
                        </label>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                        <label class="importe">
                            <?php if ($arr_resumen_concepto['tipo'] == 'ingreso'): ?>
                                <?php Gral::_echoImp($arr_resumen_concepto_forma_pago['importe']) ?>
                            <?php else: ?>
                                -    
                            <?php endif; ?>
                        </label>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                        <label class="importe">
                            <?php if ($arr_resumen_concepto['tipo'] == 'egreso'): ?>
                                <?php Gral::_echoImp($arr_resumen_concepto_forma_pago['importe']) ?>
                            <?php else: ?>
                                -    
                            <?php endif; ?>
                        </label>
                    </td>
                </tr>
            <?php } ?>

        <?php } ?>

    </tbody>
</table>

<br />

<div class="adm_tbl_titulo">
    Resumen General por Forma de Pago y Concepto
</div>

<table class="listado" id="listado_adm_fnd_caja_gestion" border="0">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="120" align="center">
                Forma de Pago
            </td>

            <td class="adm_tbl_encabezado" width="120" align="center">
                Concepto
            </td>

            <td class="adm_tbl_encabezado" width="60" align="center">
                Cantidad
            </td>

            <td class="adm_tbl_encabezado" width="80" align="center">
                Ingresos
            </td>

            <td class="adm_tbl_encabezado" width="80" align="center">
                Egresos
            </td>

            <td class="adm_tbl_encabezado" width="80" align="center">
                Saldo
            </td>
        </tr>

        <?php
        foreach ($arr_resumen_caja['forma_pago'] as $i => $arr_resumen_forma_pago) {
            ?>
            <tr class="uno" identificador="<?php echo $i ?>">

                <td class="adm_tbl_encabezado_gris" align="left">
                    <label class="descripcion">
                        <?php Gral::_echo($arr_resumen_forma_pago['descripcion']) ?>
                    </label>
                </td>   

                <td class="adm_tbl_encabezado_gris" align="left">
                    <label class="descripcion">
                    </label>
                </td>   

                <td class="adm_tbl_encabezado_gris" align="center">
                    <label class="cantidad">
                        <?php //Gral::_echo($arr_resumen_concepto['cantidad'])    ?>
                    </label>
                </td>   


                <td class="adm_tbl_encabezado_gris" align="right">
                    <label class="importe">
                        &nbsp;
                    </label>
                </td>   

                <td class="adm_tbl_encabezado_gris" align="right">
                    <label class="importe">
                        &nbsp;
                    </label>
                </td>

                <td class="adm_tbl_encabezado_gris" align="right">
                    <label class="importe">
                        &nbsp;
                    </label>
                </td>

            </tr>

            <?php
            foreach ($arr_resumen_forma_pago['concepto'] as $ii => $arr_resumen_forma_pago_concepto) {
                ?>
                <tr class="uno" identificador="<?php echo $i ?>">

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <label class="descripcion">
                        </label>
                    </td>   

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <label class="descripcion">
                            <?php Gral::_echo($arr_resumen_forma_pago_concepto['descripcion']) ?>
                        </label>
                    </td>   

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <label class="cantidad">
                            <?php Gral::_echo($arr_resumen_forma_pago_concepto['cantidad']) ?>
                        </label>
                    </td>   

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                        <label class="importe">
                            <?php if ($arr_resumen_forma_pago_concepto['tipo'] == 'ingreso'): ?>
                                <?php Gral::_echoImp($arr_resumen_forma_pago_concepto['importe']) ?>
                            <?php else: ?>
                                -    
                            <?php endif; ?>
                        </label>
                    </td>   

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                        <label class="importe">
                            <?php if ($arr_resumen_forma_pago_concepto['tipo'] == 'egreso'): ?>
                                <?php Gral::_echoImp($arr_resumen_forma_pago_concepto['importe']) ?>
                            <?php else: ?>
                                -    
                            <?php endif; ?>
                        </label>
                    </td>

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                        <label class="importe">
                            <?php Gral::_echoImp($arr_resumen_forma_pago_concepto['saldo']) ?>
                        </label>
                    </td>

                </tr>
            <?php } ?>

        <?php } ?>

    </tbody>
</table>


<br pagebreak="true"/>

<div class="adm_tbl_titulo">
    Cheques Vinculados a la Caja
</div>

<table class="listado" id="listado_adm_fnd_caja_gestion" border="0">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="200" align="center">
                Descripcion
            </td>

            <td class="adm_tbl_encabezado" width="85" align="center">
                Cliente
            </td>

            <td class="adm_tbl_encabezado" width="85" align="center">
                Firmante
            </td>

            <td class="adm_tbl_encabezado" width="85" align="center">
                Entregador
            </td>

            <td class="adm_tbl_encabezado" width="75" align="right">
                Importe
            </td>
        </tr>

        <?php foreach ($arr_resumen_caja['forma_pago'][GralFpFormaPago::TIPO_CHEQUE]['cheques'] as $forma_pago_cheque_id => $arr_cheque_info) { ?>
            <tr class="uno" identificador="<?php echo $i ?>">

                <td class="adm_tbl_lineas_chico" align="left">
                    <label class="descripcion">
                        <?php Gral::_echo(substr($arr_cheque_info['descripcion'], 0, 55)); ?>
                    </label>
                </td>   

                <td class="adm_tbl_lineas_chico" align="center">
                    <label class="descripcion">
                        <?php Gral::_echo(substr($arr_cheque_info['cliente'], 0, 15)); ?>
                    </label>
                </td>   

                <td class="adm_tbl_lineas_chico" align="center">
                    <label class="descripcion">
                        <?php Gral::_echo(substr($arr_cheque_info['firmante'], 0, 15)); ?>
                    </label>
                </td>   

                <td class="adm_tbl_lineas_chico" align="center">
                    <label class="descripcion">
                        <?php Gral::_echo(substr($arr_cheque_info['entregador'], 0, 15)); ?>
                    </label>
                </td>   

                <td class="adm_tbl_lineas_chico" align="right">
                    <label class="importe">
                        <?php Gral::_echoImp($arr_cheque_info['importe']); ?>
                    </label>
                </td>   

            </tr>

        <?php } ?>

    </tbody>
</table>

<br />

<div class="adm_tbl_titulo">
    Cupones o Comprobantes Vinculados a la Caja
</div>

<table class="listado" id="listado_adm_fnd_caja_gestion" border="0">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="35" align="center">
                Tipo
            </td>

            <td class="adm_tbl_encabezado" width="100" align="center">
                Descripcion
            </td>

            <td class="adm_tbl_encabezado" width="115" align="center">
                Cliente
            </td>

            <td class="adm_tbl_encabezado" width="70" align="center">
                Forma de Pago
            </td>

            <td class="adm_tbl_encabezado" width="70" align="center">
                Referencia
            </td>

            <td class="adm_tbl_encabezado" width="70" align="center">
                Fecha Hora
            </td>

            <td class="adm_tbl_encabezado" width="70" align="right">
                Importe
            </td>
        </tr>

        <?php foreach ($fnd_caja->getCuponesVinculadosParaRendir() as $arr_cupon) { ?>
            <tr class="uno" identificador="<?php echo $i ?>">

                <td class="adm_tbl_lineas_chico" align="center">
                    <label class="importe"><?php Gral::_echo($arr_cupon['tipo']); ?></label>
                </td>   

                <td class="adm_tbl_lineas_chico" align="left">
                    <label class="descripcion">
                        <?php Gral::_echo(substr($arr_cupon['descripcion'], 0, 55)); ?>
                    </label>
                </td>   

                <td class="adm_tbl_lineas_chico" align="center">
                    <label class="descripcion">
                        <?php Gral::_echo(substr($arr_cupon['persona_descripcion'], 0, 15)); ?>
                    </label>
                </td>   

                <td class="adm_tbl_lineas_chico" align="center">
                    <label class="descripcion">
                        <?php Gral::_echo(substr($arr_cupon['gral_fp_forma_pago_descripcion'], 0, 15)); ?>
                    </label>
                </td>   

                <td class="adm_tbl_lineas_chico" align="center">
                    <label class="codigo">
                        <?php Gral::_echo($arr_cupon['codigo']); ?>
                    </label>
                </td>   

                <td class="adm_tbl_lineas_chico" align="center">
                    <label class="descripcion">
                        <?php Gral::_echo(Gral::getFechaHoraToWEB($arr_cupon['fechahora'])); ?>
                    </label>
                </td>   

                <td class="adm_tbl_lineas_chico" align="right">
                    <label class="importe">
                        <?php Gral::_echoImp($arr_cupon['importe']); ?>
                    </label>
                </td>   

            </tr>

        <?php } ?>

    </tbody>
</table>