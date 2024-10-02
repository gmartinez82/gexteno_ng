
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $cli_subcategoria_gral_fp_forma_pago->getId() ?>" modulo="cli_subcategoria_gral_fp_forma_pago">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getDescripcion()) ?>
    </div>
    <?php if (count($cli_subcategoria_gral_fp_forma_pago->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($cli_subcategoria_gral_fp_forma_pago->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
                <?php if (trim($arr_descripcion_extendida['dato']) != '') { ?>
                    <div class="descripcion-extendida-uno <?php echo $i ?> ">
                        <div class="par">
                            <div class="label">
                                <?php Gral::_echo($arr_descripcion_extendida['label']) ?>            
                            </div>
                            <div class="dato">
                                <?php Gral::_echo($arr_descripcion_extendida['dato']) ?>            
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>                

</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cli_subcategoria_id <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getCliSubcategoria()->getCodigo()) ?> ">	

        <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getCliSubcategoria()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_fp_forma_pago_id <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getGralFpFormaPago()->getCodigo()) ?> ">	

        <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getGralFpFormaPago()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_GRAL_FP_FORMA_PAGO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='cli_subcategoria_gral_fp_forma_pago_alta.php?id=<?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getId()) ?>&hash=<?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_GRAL_FP_FORMA_PAGO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_GRAL_FP_FORMA_PAGO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_GRAL_FP_FORMA_PAGO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/cli_subcategoria_gral_fp_forma_pago/cli_subcategoria_gral_fp_forma_pago_db_context_acciones.php?id=<?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getId()) ?>' modulo_metodo_init="setInitCliSubcategoriaGralFpFormaPago()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


