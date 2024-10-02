
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="avatar">
        <a href="<?php Gral::_echo($ins_insumo->getPathImagenPrincipal()) ?>" rel="ins-<?php Gral::_echo($ins_insumo->getId()) ?>">
            <img src='<?php Gral::_echo($ins_insumo->getPathImagenPrincipal(true)) ?>' width='40' border='0' />
        </a>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="id">
        <?php Gral::_echo($ins_insumo->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="ins_categoria_id">
        <?php Gral::_echo($ins_insumo->getInsCategoria()->getFamiliaDescripcion()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="descripcion" title="<?php Lang::_lang('Descripcion') ?>">
        <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
    </div>
    <div class="descripcion-corta" title="<?php Lang::_lang('Descripcion Corta') ?>">
        <?php Gral::_echo($ins_insumo->getDescripcionCorta()) ?>

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_BARCODE_GESTION_ACCION_MODIFICAR_DESCRIPCION_CORTA')) { ?>
            <img class="btn_editar_descripcion_corta" src="imgs/btn_modi.gif" width="12" title="<?php Lang::_lang('Editar Descripcion Corta') ?>" />
        <?php } ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo_barra">
        <?php Gral::_echo($ins_insumo->getCodigoBarra()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_BARCODE_GESTION_ACCION_VINCULAR')) { ?>
            <li class='adm_botones_accion'>
                <img class="boton accion vincular" src='imgs/icn_barcode.png' width='35' border='0' alt="Barcode" title="Vincular Codigo de Barra" />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_BARCODE_GESTION_ACCION_EMITIR_INTERNO')) { ?>
            <li class='adm_botones_accion'>
                <img class="boton accion interno" src='imgs/icn_barcode_interno.png' width='35' border='0' alt="Barcode" title="Generar Codigo Barra Interno" />
            </li>
        <?php } ?>

    </ul>
</td>


