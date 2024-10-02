
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_param_geo_pais_geo_pais->getId() ?>" modulo="eku_param_geo_pais_geo_pais">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_param_geo_pais_geo_pais->getId()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" eku_param_geo_pais_id <?php Gral::_echo($eku_param_geo_pais_geo_pais->getEkuParamGeoPais()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_param_geo_pais_geo_pais->getEkuParamGeoPais()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" geo_pais_id <?php Gral::_echo($eku_param_geo_pais_geo_pais->getGeoPais()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_param_geo_pais_geo_pais->getGeoPais()->getDescripcion()) ?>
    </div>
    
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_param_geo_pais_geo_pais_alta.php?id=<?php Gral::_echo($eku_param_geo_pais_geo_pais->getId()) ?>&hash=<?php Gral::_echo($eku_param_geo_pais_geo_pais->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_param_geo_pais_geo_pais->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_param_geo_pais_geo_pais/eku_param_geo_pais_geo_pais_db_context_acciones.php?id=<?php Gral::_echo($eku_param_geo_pais_geo_pais->getId()) ?>' modulo_metodo_init="setInitEkuParamGeoPaisGeoPais()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


