<?php
include_once "_autoload.php";

$fnd_chq_tipo_emisor_id = $param["fnd_chq_tipo_emisor_id"];
$fnd_chq_tipo_emisor_id = FndChqTipoEmisor::getOxId($fnd_chq_tipo_emisor_id);

$fnd_chq_cheques = $param["fnd_chq_cheques"];

$fnd_chq_tipo_emisor_id = $param["fnd_chq_tipo_emisor_id"];
$fnd_chq_tipo_emision_id = $param["fnd_chq_tipo_emision_id"];
$fnd_chq_tipo_pago_id = $param["fnd_chq_tipo_pago_id"];
$gral_banco_id = $param["gral_banco_id"];
$fnd_chq_tipo_estado_id = $param["fnd_chq_tipo_estado_id"];
$fnd_chq_en_cartera = $param["fnd_chq_en_cartera"];
$fnd_chq_fecha_cobro_desde = $param["fnd_chq_fecha_cobro_desde"];
$fnd_chq_fecha_cobro_hasta = $param["fnd_chq_fecha_cobro_hasta"];

$arr_tipo_emision_fisico_electronica = array();

foreach ($fnd_chq_cheques as $i => $fnd_chq_cheque){
    if($fnd_chq_cheque->getFndChqTipoEmision()->getCodigo() == FndChqTipoEmision::TIPO_ELECTRONICO){
        $arr_tipo_emision_fisico_electronica['ELECTRONICO']['CANTIDAD']++; 
        $arr_tipo_emision_fisico_electronica['ELECTRONICO']['IMPORTE']+= $fnd_chq_cheque->getImporte(); 
    }else{
        $arr_tipo_emision_fisico_electronica['FISICO']['CANTIDAD']++; 
        $arr_tipo_emision_fisico_electronica['FISICO']['IMPORTE']+= $fnd_chq_cheque->getImporte();         
    }
}
?>
<style>
    .listado{
        font-size: 6px;
    }
    .saldo{
        font-size: 10px;
    }
    .saldo td{
        background-color: #dedede;
    }
    .adm_tbl_orden {text-decoration: none; color:#FFFFFF;}
    .adm_tbl_orden:link {   text-decoration: none;  color:#FFFFFF;}
    .adm_tbl_orden:visited {    text-decoration: none;  color:#FFFFFF;}
    .adm_tbl_orden:hover {text-decoration: none;    color:#CCCCCC;}

    .adm_tbl_titulo{
        font-weight: normal;
        text-decoration: none;
        color: #274D20;
        font-weight:bold;
        border-bottom:#CCCCCC solid 1px;

    }
    .adm_tbl_encabezado{
        font-weight: normal;
        text-decoration: none;
        color: #FFFFFF;
        background-color:#999999;
        padding:5px;
        line-height:12px;
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
        background-color:#CCCCCC;
        line-height:12px;
    }
    .adm_tbl_pie{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        background-color:#f1f1f1;
        border-bottom:#999 solid 1px;
        line-height:12px;
        padding:5px;
    }

    .adm_tbl_lineas{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        border-bottom:#CCCCCC solid 1px;
        line-height:12px;
    }

    .adm_tbl_lineas_saldo{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        border-bottom:#CCCCCC solid 1px;
        line-height:12px;
    }

    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }    

</style>

<table class="listado" id="listado_adm_vta_factura_gestion" border="0" align="center">
    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="30" align="center">
                #    
            </td>
            <td class="adm_tbl_encabezado" width="55" align="center">
                Tipo Emision
            </td>
            <td class="adm_tbl_encabezado" width="50" align="center">
                Emision
            </td>
            <td class="adm_tbl_encabezado" width="50" align="center">
                Cobro
            </td>
            <td class="adm_tbl_encabezado" width="50" align="center">
                Nro Cheque
            </td>
            <td class="adm_tbl_encabezado" width="115" align="center">
                Banco
            </td>
            <td class="adm_tbl_encabezado" width="70" align="center">
                Importe
            </td>
            <td class="adm_tbl_encabezado" width="85" align="center">
                Estado
            </td>
            <td class="adm_tbl_encabezado" width="35" align="center">
                En Cart
            </td>
        </tr>

        <?php
        $suma_importe = 0;
        foreach ($fnd_chq_cheques as $i => $fnd_chq_cheque):
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';
            ?>
            <tr id="tr_fnd_chq_cheque_uno_<?php echo $fnd_chq_cheque->getId() ?>" class="uno" identificador="<?php echo $fnd_chq_cheque->getId() ?>">
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="contador">
                        <?php Gral::_echo( ++$contador_cheques); ?>
                    </label>
                </td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="descripcion">
                        <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEmision()->getDescripcion()); ?>
                    </label>
                </td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha_emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($fnd_chq_cheque->getFechaEmision())); ?>
                    </label>
                </td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha_cobro">
                        <?php Gral::_echo(Gral::getFechaToWeb($fnd_chq_cheque->getFechaCobro())); ?>
                    </label>
                </td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="numero">
                        <?php Gral::_echo($fnd_chq_cheque->getNumero()); ?>
                    </label>
                </td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="banco">
                        <?php Gral::_echo(substr($fnd_chq_cheque->getGralBanco()->getDescripcionCorta(), 0, 22)); ?>
                    </label>
                </td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe">
                        <?php Gral::_echoImp($fnd_chq_cheque->getImporte()); ?>
                    </label>
                </td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="tipo_estado">
                        <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEstado()->getDescripcion()); ?>
                    </label>
                </td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="cartera">
                        <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_cheque->getFndChqTipoEstado()->getEnCartera())->getDescripcion()); ?>
                    </label>
                </td>
            </tr>
            <?php
            $suma_importe += $fnd_chq_cheque->getImporte();
        endforeach;
        ?>

        <tr>
            <td class="adm_tbl_encabezado" align="center">
                <label class="contador">
                    <?php Gral::_echo($contador_cheques); ?>
                </label>
            </td>
            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>
            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>
            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>
            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>
            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>
            <td class="adm_tbl_encabezado" align="right">
                <label class="importe-suma">
                    <?php if ($suma_importe != 0) { ?>
                        <?php Gral::_echoImp($suma_importe) ?>
                    <?php } ?>
                </label>
            </td>
            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>
            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>
        </tr>        

    </tbody>
</table>

<br />
<br />

<table class="listado" id="listado_adm_vta_factura_gestion" border="0" align="center" style="display: none;">
    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="100" align="center">
                Tipo Emision
            </td>
            <td class="adm_tbl_encabezado" width="100" align="center">
                Cantidad
            </td>
            <td class="adm_tbl_encabezado" width="100" align="center">
                Importe
            </td>
        </tr>
        <tr>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="tipo-emision">
                    Electronico
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="cantidad">
                    <?php Gral::_echo($arr_tipo_emision_fisico_electronica['ELECTRONICO']['CANTIDAD']) ?>
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="importe">
                    <?php Gral::_echoImp($arr_tipo_emision_fisico_electronica['ELECTRONICO']['IMPORTE']) ?>
                </label>
            </td>
        </tr>
        <tr>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="tipo-emision">
                    Fisica
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="cantidad">
                    <?php Gral::_echo($arr_tipo_emision_fisico_electronica['FISICO']['CANTIDAD']) ?>
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="importe">
                    <?php Gral::_echoImp($arr_tipo_emision_fisico_electronica['FISICO']['IMPORTE']) ?>
                </label>
            </td>
        </tr>


    </tbody>
</table>
