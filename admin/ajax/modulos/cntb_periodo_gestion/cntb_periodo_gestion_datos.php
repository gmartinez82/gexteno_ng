
<?php include Gral::getPathAbs().'admin/parciales/buscadores/activos/cntb_periodo.php' ?>

<?php

if(count($cntb_periodos) > 0)
{
?> 

<table id='listado_adm_cntb_periodo_gestion' border='0' align='center' class='listado'>
    <tr>
        <td width='60' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Id') ?>
        </td>
        <td width='250' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Descripcion') ?>
        </td>
        <td width='120' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Ejercicio') ?>
        </td>
        <td width='350' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Comprobantes de Ventas') ?>
        </td>
        <td width='350' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Comprobantes de Compras') ?>
        </td>
        <td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
    </tr>
  
  
    <?php 
    foreach($cntb_periodos as $cntb_periodo)
    {
        $estado = ($cntb_periodo->getEstado()) ? 'habilitado' : 'deshabilitado';
    ?>

    <tr id="tr_cntb_periodo_gestion_uno_<?php Gral::_echo($cntb_periodo->getId()) ?>" class="uno" identificador="<?php Gral::_echo($cntb_periodo->getId()) ?>">
        <?php include "cntb_periodo_gestion_uno.php" ?>
    </tr>
  
  
    <tr id='tr_eliminar_<?php Gral::_echo($cntb_periodo->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($cntb_periodo->getId()) ?>" >
        <td colspan='8' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($cntb_periodo->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
            <br />
            <div>
                <input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($cntb_periodo->getId()) ?>,0)'/>
            </div>
            </div>
        </td>
        <td align='center'></td>
    </tr>

    <?php
    // auto hash de mas info de acuerdo al id recibido por url
    $id = Gral::getVars(2, 'id');
    $mi_display = "style='display:none;'";
    if(trim($id) == $cntb_periodo->getId()){ 
        $mi_display = '';
        $mi_hash = "location.hash = 'mi_".$id."';"; 
    }
    ?>
    <tr id='tr_mi_<?php Gral::_echo($cntb_periodo->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
        <td colspan='8' align='center' class='adm_tbl_lineas'>
            <div class="masinfo">
            <?php 
            if(trim($id) == $cntb_periodo->getId())
            { 
                include "cntb_periodo_adm_masinfo.php";
            }
            ?>
        </div>
            
        </td>
        <td align='center'></td>
    </tr>

    <?php
    }
    ?>
  
    <tr>
        <td align='center' class="adm_tbl_pie" >&nbsp;</td>
        <td align='center' class="adm_tbl_pie" >&nbsp;</td>
        <td align='center' class="adm_tbl_pie" >&nbsp;</td>
        <td align='center' class="adm_tbl_pie" >&nbsp;</td>
        <td align='center' class="adm_tbl_pie" >&nbsp;</td>
        <td align='center' class="adm_tbl_pie" >&nbsp;</td>
    </tr>

    <tr>
        <td colspan='8' align='center'><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php';?></td>
    </tr>
</table>

<?php
}
else
{
?>
<div class="mensaje-sin-resultado">
    <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
    <div class="paginador-oculto"><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php' ?></div>
</div>
<?php
}
?>