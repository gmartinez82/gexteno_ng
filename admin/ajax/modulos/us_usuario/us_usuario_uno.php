
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $us_usuario->getId() ?>" modulo="us_usuario">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($us_usuario->getId()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" gral_lenguaje_id <?php Gral::_echo($us_usuario->getGralLenguaje()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($us_usuario->getGralLenguaje()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($us_usuario->getDescripcion()) ?>
    </div>
    <?php if (count($us_usuario->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($us_usuario->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
    <div class=" usuario">
        <?php Gral::_echo($us_usuario->getUsuario()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo">
        <?php Gral::_echo($us_usuario->getCodigo()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" email">
        <?php Gral::_echo($us_usuario->getEmail()) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='us_usuario_alta.php?id=<?php Gral::_echo($us_usuario->getId()) ?>&hash=<?php Gral::_echo($us_usuario->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($us_usuario->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($us_usuario->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_ADM_ACCION_US_ABSOLUTO')){ ?>
	<li class='adm_botones_accion'>
            <a href='?id=<?php echo $us_usuario->getId()?>&chabs=<?php echo $us_usuario->getAbsoluto() ? 0 : 1 ?>' title='<?php Lang::_lang('Absoluto') ?>'>
                <img src='imgs/btn_absoluto_<?php echo $us_usuario->getAbsoluto() ?>.gif' width='20' border='0' />
            </a>
        </li>	
	<?php } ?>
        

	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_ADM_ACCION_US_CLAVE')){ ?>
	<li class='adm_botones_accion'>
            <a href='us_usuario_clave.php?id=<?php echo $us_usuario->getId()?>' title='<?php Lang::_lang('Actualizar Clave') ?>'>
                <img src='imgs/btn_claves.png' width='22' border='0' />
            </a>
        </li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('US_USUARIO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/us_usuario/us_usuario_db_context_acciones.php?id=<?php Gral::_echo($us_usuario->getId()) ?>' modulo_metodo_init="setInitUsUsuario()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


