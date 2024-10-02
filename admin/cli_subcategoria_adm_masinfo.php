<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_subcategoria_id = Gral::getVars(2, 'id');
$cli_subcategoria = CliSubcategoria::getOxId($cli_subcategoria_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Limite Ctacte Imp') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_subcategoria->getLimiteCtacteImporte())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Limite Ctacte Dias') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_subcategoria->getLimiteCtacteDias())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_subcategoria->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_SUBCATEGORIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_subcategoria->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_SUBCATEGORIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_subcategoria->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_CLIENTE')){ ?>
            <li><a href="#tab_cli_cliente"><?php Lang::_lang('CliCliente') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_SUBCATEGORIA_INS_TIPO_LISTA_PRECIO')){ ?>
            <li><a href="#tab_cli_subcategoria_ins_tipo_lista_precio"><?php Lang::_lang('CliSubcategoriaInsTipoListaPrecios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO')){ ?>
            <li><a href="#tab_cli_subcategoria_vta_descuento_financiero"><?php Lang::_lang('CliSubcategoriaVtaDescuentoFinancieros') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_SUBCATEGORIA_GRAL_FP_FORMA_PAGO')){ ?>
            <li><a href="#tab_cli_subcategoria_gral_fp_forma_pago"><?php Lang::_lang('CliSubcategoriaGralFpFormaPagos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_CLIENTE')){ ?>
	<div id="tab_cli_cliente" class="bloque-relacion cli_cliente">
		
            <h4><?php Lang::_lang('CliCliente') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliSubcategoria') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_subcategoria->getCliClientesParaBloqueMasInfo() as $cli_cliente){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente->getId() ?>" archivo="ajax/modulos/cli_cliente/cli_cliente_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliCliente') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCliente') ?>">
                                <a href="cli_cliente_alta.php?id=<?php echo $cli_cliente->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_CLIENTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliCliente::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente->getFiltrosArrXCampo('CliSubcategoria', 'cli_subcategoria_id') ?>" >
                                <?php Lang::_lang('Ver CliClientes de ') ?> <strong><?php echo($cli_subcategoria->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_alta.php" >
                            <?php Lang::_lang('Agregar CliCliente') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_SUBCATEGORIA_INS_TIPO_LISTA_PRECIO')){ ?>
	<div id="tab_cli_subcategoria_ins_tipo_lista_precio" class="bloque-relacion cli_subcategoria_ins_tipo_lista_precio">
		
            <h4><?php Lang::_lang('CliSubcategoriaInsTipoListaPrecio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliSubcategoria') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_subcategoria->getCliSubcategoriaInsTipoListaPreciosParaBloqueMasInfo() as $cli_subcategoria_ins_tipo_lista_precio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_subcategoria_ins_tipo_lista_precio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_subcategoria_ins_tipo_lista_precio->getDescripcionVinculante('CliSubcategoria')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_subcategoria_ins_tipo_lista_precio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria_ins_tipo_lista_precio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_subcategoria_ins_tipo_lista_precio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria_ins_tipo_lista_precio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_subcategoria_ins_tipo_lista_precio->getId() ?>" archivo="ajax/modulos/cli_subcategoria_ins_tipo_lista_precio/cli_subcategoria_ins_tipo_lista_precio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliSubcategoriaInsTipoListaPrecio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_INS_TIPO_LISTA_PRECIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliSubcategoriaInsTipoListaPrecio') ?>">
                                <a href="cli_subcategoria_ins_tipo_lista_precio_alta.php?id=<?php echo $cli_subcategoria_ins_tipo_lista_precio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_SUBCATEGORIA_INS_TIPO_LISTA_PRECIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_subcategoria_ins_tipo_lista_precio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliSubcategoriaInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $cli_subcategoria_ins_tipo_lista_precio->getFiltrosArrXCampo('CliSubcategoria', 'cli_subcategoria_id') ?>" >
                                <?php Lang::_lang('Ver CliSubcategoriaInsTipoListaPrecios de ') ?> <strong><?php echo($cli_subcategoria->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_subcategoria_ins_tipo_lista_precio_alta.php" >
                            <?php Lang::_lang('Agregar CliSubcategoriaInsTipoListaPrecio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO')){ ?>
	<div id="tab_cli_subcategoria_vta_descuento_financiero" class="bloque-relacion cli_subcategoria_vta_descuento_financiero">
		
            <h4><?php Lang::_lang('CliSubcategoriaVtaDescuentoFinanciero') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliSubcategoria') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_subcategoria->getCliSubcategoriaVtaDescuentoFinancierosParaBloqueMasInfo() as $cli_subcategoria_vta_descuento_financiero){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getDescripcionVinculante('CliSubcategoria')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria_vta_descuento_financiero->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria_vta_descuento_financiero->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_subcategoria_vta_descuento_financiero->getId() ?>" archivo="ajax/modulos/cli_subcategoria_vta_descuento_financiero/cli_subcategoria_vta_descuento_financiero_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliSubcategoriaVtaDescuentoFinanciero') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliSubcategoriaVtaDescuentoFinanciero') ?>">
                                <a href="cli_subcategoria_vta_descuento_financiero_alta.php?id=<?php echo $cli_subcategoria_vta_descuento_financiero->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_subcategoria_vta_descuento_financiero){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliSubcategoriaVtaDescuentoFinanciero::getFiltrosArrGral() ?>&arr=<?php echo $cli_subcategoria_vta_descuento_financiero->getFiltrosArrXCampo('CliSubcategoria', 'cli_subcategoria_id') ?>" >
                                <?php Lang::_lang('Ver CliSubcategoriaVtaDescuentoFinancieros de ') ?> <strong><?php echo($cli_subcategoria->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_subcategoria_vta_descuento_financiero_alta.php" >
                            <?php Lang::_lang('Agregar CliSubcategoriaVtaDescuentoFinanciero') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_SUBCATEGORIA_GRAL_FP_FORMA_PAGO')){ ?>
	<div id="tab_cli_subcategoria_gral_fp_forma_pago" class="bloque-relacion cli_subcategoria_gral_fp_forma_pago">
		
            <h4><?php Lang::_lang('CliSubcategoriaGralFpFormaPago') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliSubcategoria') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_subcategoria->getCliSubcategoriaGralFpFormaPagosParaBloqueMasInfo() as $cli_subcategoria_gral_fp_forma_pago){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getDescripcionVinculante('CliSubcategoria')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria_gral_fp_forma_pago->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria_gral_fp_forma_pago->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_subcategoria_gral_fp_forma_pago->getId() ?>" archivo="ajax/modulos/cli_subcategoria_gral_fp_forma_pago/cli_subcategoria_gral_fp_forma_pago_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliSubcategoriaGralFpFormaPago') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_GRAL_FP_FORMA_PAGO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliSubcategoriaGralFpFormaPago') ?>">
                                <a href="cli_subcategoria_gral_fp_forma_pago_alta.php?id=<?php echo $cli_subcategoria_gral_fp_forma_pago->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_MASINFO_CLI_SUBCATEGORIA_GRAL_FP_FORMA_PAGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_subcategoria_gral_fp_forma_pago){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliSubcategoriaGralFpFormaPago::getFiltrosArrGral() ?>&arr=<?php echo $cli_subcategoria_gral_fp_forma_pago->getFiltrosArrXCampo('CliSubcategoria', 'cli_subcategoria_id') ?>" >
                                <?php Lang::_lang('Ver CliSubcategoriaGralFpFormaPagos de ') ?> <strong><?php echo($cli_subcategoria->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_subcategoria_gral_fp_forma_pago_alta.php" >
                            <?php Lang::_lang('Agregar CliSubcategoriaGralFpFormaPago') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

