
<div class="titulo"><?php Lang::_lang('Asiento Contable del Comprobante') ?></div>

<div class="bloque-asiento">

    <link href='<?php echo Gral::getPathHttp(); ?>css/admin/modulos/cntb_diario_asiento_gestion.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />

    <table id='listado_adm_cntb_diario_asiento_gestion' class='listado' border='0' align='center' >
        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'>&nbsp;</td>
            <td width='150' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Asiento') ?>
            </td>
            <td width='550' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Concepto'); ?>
            </td>
            <td width='200' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Debe'); ?>
            </td>
            <td width='200' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Haber'); ?>
            </td>
            <td width='50' align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>
        
<?php if ($cntb_diario_asiento && $cntb_diario_asiento->getId() != 'null'){ ?>
        <tr id="tr_cntb_diario_asiento_gestion_uno_<?php Gral::_echo($cntb_diario_asiento->getId()) ?>" class="uno" identificador="<?php Gral::_echo($cntb_diario_asiento->getId()) ?>">
            <?php include Gral::getPathAbs().'admin/ajax/modulos/cntb_diario_asiento_gestion/cntb_diario_asiento_gestion_uno.php' ?>
        </tr>
        <?php } ?>

    </table>
</div>
<br/>
