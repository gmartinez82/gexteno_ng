
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $cli_cliente_cli_rubro->getId() ?>" modulo="cli_cliente_cli_rubro">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($cli_cliente_cli_rubro->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cli_cliente_id <?php Gral::_echo($cli_cliente_cli_rubro->getCliCliente()->getCodigo()) ?> ">	

        <?php Gral::_echo($cli_cliente_cli_rubro->getCliCliente()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cli_rubro_id <?php Gral::_echo($cli_cliente_cli_rubro->getCliRubro()->getCodigo()) ?> ">	

        <?php Gral::_echo($cli_cliente_cli_rubro->getCliRubro()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_CLI_RUBRO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='cli_cliente_cli_rubro_alta.php?id=<?php Gral::_echo($cli_cliente_cli_rubro->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_CLI_RUBRO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($cli_cliente_cli_rubro->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_CLI_RUBRO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/cli_cliente_cli_rubro/cli_cliente_cli_rubro_db_context_acciones.php?id=<?php Gral::_echo($cli_cliente_cli_rubro->getId()) ?>' modulo_metodo_init="setInitCliClienteCliRubro()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


