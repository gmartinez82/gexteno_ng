
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ml_attribute_ins_atributo->getId() ?>" modulo="ml_attribute_ins_atributo">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($ml_attribute_ins_atributo->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ml_attribute_id <?php Gral::_echo($ml_attribute_ins_atributo->getMlAttribute()->getCodigo()) ?> ">	

        <?php Gral::_echo($ml_attribute_ins_atributo->getMlAttribute()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_atributo_id <?php Gral::_echo($ml_attribute_ins_atributo->getInsAtributo()->getCodigo()) ?> ">	

        <?php Gral::_echo($ml_attribute_ins_atributo->getInsAtributo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_INS_ATRIBUTO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ml_attribute_ins_atributo_alta.php?id=<?php Gral::_echo($ml_attribute_ins_atributo->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_INS_ATRIBUTO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ml_attribute_ins_atributo->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_INS_ATRIBUTO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($ml_attribute_ins_atributo->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('ML_ATTRIBUTE_INS_ATRIBUTO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ml_attribute_ins_atributo/ml_attribute_ins_atributo_db_context_acciones.php?id=<?php Gral::_echo($ml_attribute_ins_atributo->getId()) ?>' modulo_metodo_init="setInitMlAttributeInsAtributo()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


