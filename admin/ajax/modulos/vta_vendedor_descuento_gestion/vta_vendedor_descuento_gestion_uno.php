
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_vendedor_descuento->getId() ?>" modulo="vta_vendedor_descuento_gestion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="id">
        <?php Gral::_echo($vta_vendedor_descuento->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="descripcion">
        <?php Gral::_echo($vta_vendedor_descuento->getDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="vta_vendedor_id">	

        <?php Gral::_echo($vta_vendedor_descuento->getVtaVendedor()->getDescripcion()) ?>
        <?php if ($vta_vendedor_descuento->getVtaVendedorId() != 'null') { ?>
            <label class="db_context trigger" archivo="ajax/modulos/vta_vendedor_descuento_gestion/db_context_vta_vendedor.php?vta_vendedor_descuento_id=<?php Gral::_echo($vta_vendedor_descuento->getId()) ?>" modulo_metodo_init="setInitVtaVendedorDescuentoGestion()" title="<?php Lang::_lang('Ver mas opciones de') ?> '<?php Gral::_echo($vta_vendedor_descuento->getVtaVendedor()->getDescripcion()) ?>' ">
                <img class="icono" src="imgs/btn_flecha_abajo.png" width="14" align="absmiddle" title="" />
            </label>
        <?php } ?>

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="ins_etiqueta_id">	

        <?php Gral::_echo($vta_vendedor_descuento->getInsEtiqueta()->getDescripcion()) ?>
        <?php if ($vta_vendedor_descuento->getInsEtiquetaId() != 'null') { ?>
            <label class="db_context trigger" archivo="ajax/modulos/vta_vendedor_descuento_gestion/db_context_ins_etiqueta.php?vta_vendedor_descuento_id=<?php Gral::_echo($vta_vendedor_descuento->getId()) ?>" modulo_metodo_init="setInitVtaVendedorDescuentoGestion()" title="<?php Lang::_lang('Ver mas opciones de') ?> '<?php Gral::_echo($vta_vendedor_descuento->getInsEtiqueta()->getDescripcion()) ?>' ">
                <img class="icono" src="imgs/btn_flecha_abajo.png" width="14" align="absmiddle" title="" />
            </label>
        <?php } ?>

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="descuento_maximo">
        <?php Gral::_echo($vta_vendedor_descuento->getDescuentoMaximo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($vta_vendedor_descuento->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('VTA_VENDEDOR_DESCUENTO_ADM_ACCION_MODIFICAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='vta_vendedor_descuento_alta.php?id=<?php Gral::_echo($vta_vendedor_descuento->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_VENDEDOR_DESCUENTO_ADM_ACCION_ELIMINAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='Javascript:eliminar(<?php Gral::_echo($vta_vendedor_descuento->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_VENDEDOR_DESCUENTO_ADM_ACCION_ESTADO')) { ?>
            <li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($vta_vendedor_descuento->getEstado()) ?>.gif' width='20' border='0' />
            </li>
        <?php } ?>

    </ul>
</td>


