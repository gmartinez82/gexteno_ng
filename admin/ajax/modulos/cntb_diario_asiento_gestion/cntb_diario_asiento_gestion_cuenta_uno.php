<?php
include_once "_autoload.php";

$agregar = Gral::getVars(Gral::VARS_GET, 'agregar', 0);
if($agregar == 1){
    $row = Gral::getVars(Gral::VARS_GET, 'row', 0);
    $cntb_cuenta = new CntbCuenta();
}else{
    $importe_debe = $cntb_diario_asiento_cuenta->getImporteDebe();
    $importe_haber = $cntb_diario_asiento_cuenta->getImporteHaber();
}
?>
<tr class="uno">

    <td align='center' class='adm_tbl_lineas'>
        <?php echo $row ?>
    </td>
    
    <td align='left' class='adm_tbl_lineas'>
        <?php echo Html::html_get_dbsuggest(1, 'dbsug_cntb_cuenta_'.$row, 'ajax/modulos/cntb_cuenta/cntb_cuenta_dbsuggest_custom.php?imputable=1', false, true, '', 'Ingrese ...', $cntb_cuenta->getId(), $cntb_cuenta->getDescripcion(), 50) ?>
        <div class="label-error" id="dbsug_cntb_cuenta_<?php echo $row ?>_error"></div>        
    </td>

    <td align='center' class='adm_tbl_lineas'>
        <input type="text" class="textbox" id="txt_comprobante_<?php echo $row ?>" name="txt_comprobante[<?php echo $row ?>]" value="<?php Gral::_echo($txt_comprobante) ?>" size="15" />
        <div class="label-error" id="txt_comprobante_<?php echo $row ?>_error"></div>        
    </td>

    <td align='center' class='adm_tbl_lineas'>
        AR$ <input type="text" class="textbox moneda txt_importe txt_importe_debe" id="txt_importe_debe_<?php echo $row ?>" name="txt_importe_debe[<?php echo $row ?>]" value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($importe_debe)) ?>" size="15" />
        <div class="label-error" id="txt_importe_debe_<?php echo $row ?>_error"></div>        
    </td>

    <td align='center' class='adm_tbl_lineas'>
        AR$ <input type="text" class="textbox moneda txt_importe txt_importe_haber" id="txt_importe_haber_<?php echo $row ?>" name="txt_importe_haber[<?php echo $row ?>]" value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($importe_haber)) ?>" size="15" />
        <div class="label-error" id="txt_importe_haber_<?php echo $row ?>_error"></div>        
    </td>

    <td align='center' class='adm_tbl_lineas'>
        <div class="accion eliminar-cuenta">
            <img src="imgs/btn_elim.gif" width="22" title="<?php Lang::_lang('Eliminar Cuenta') ?>">
        </div>

    </td>
</tr>

