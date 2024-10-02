<?php 
$importe_diferencia_debe_haber = $importe_debe_total_calculado - $importe_haber_total_calculado;

if($importe_debe_total_calculado != 0 || $importe_haber_total_calculado != 0){
    $css_importes_total = (abs($importe_diferencia_debe_haber) > 0.01 ) ? 'desiguales' : 'iguales';
}
?>
<tr>
    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
    <td align='center' class='adm_tbl_encabezado_gris <?php echo $css_importes_total ?>'><?php Gral::_echoImp($importe_debe_total_calculado) ?></td>
    <td align='center' class='adm_tbl_encabezado_gris <?php echo $css_importes_total ?>'><?php Gral::_echoImp($importe_haber_total_calculado) ?></td>
    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
</tr>
<?php if(abs($importe_diferencia_debe_haber) > 0.01 ){ ?>
<tr>
    <td align='center' class='adm_tbl_encabezado_gris' colspan="6">
        No coinciden los importes del DEBE y HABER, diferencia de <?php Gral::_echoImp($importe_diferencia_debe_haber) ?>
    </td>
</tr>
<?php } ?>
