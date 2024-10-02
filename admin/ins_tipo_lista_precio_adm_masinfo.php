<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_tipo_lista_precio_id = Gral::getVars(2, 'id');
$ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_precio_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_tipo_lista_precio->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_tipo_lista_precio->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_TIPO_LISTA_PRECIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_tipo_lista_precio->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_tipo_lista_precio->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_TIPO_LISTA_PRECIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_tipo_lista_precio->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_tipo_lista_precio->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_INS_LISTA_PRECIO')){ ?>
            <li><a href="#tab_ins_lista_precio"><?php Lang::_lang('InsListaPrecios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_CLI_CATEGORIA_INS_TIPO_LISTA_PRECIO')){ ?>
            <li><a href="#tab_cli_categoria_ins_tipo_lista_precio"><?php Lang::_lang('CliCategoriaInsTipoListaPrecio') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_CLI_CLIENTE_INS_TIPO_LISTA_PRECIO')){ ?>
            <li><a href="#tab_cli_cliente_ins_tipo_lista_precio"><?php Lang::_lang('CliClienteInsTipoListaPrecio') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_PRESUPUESTO')){ ?>
            <li><a href="#tab_vta_presupuesto"><?php Lang::_lang('VtaPresupuesto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_orden_venta"><?php Lang::_lang('VtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO')){ ?>
            <li><a href="#tab_vta_vendedor_ins_tipo_lista_precio"><?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_POLITICA_DESCUENTO_INS_TIPO_LISTA_PRECIO')){ ?>
            <li><a href="#tab_vta_politica_descuento_ins_tipo_lista_precio"><?php Lang::_lang('VtaPoliticaDescuentoInsTipoListaPrecios') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_INS_LISTA_PRECIO')){ ?>
	<div id="tab_ins_lista_precio" class="bloque-relacion ins_lista_precio">
		
            <h4><?php Lang::_lang('InsListaPrecio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsTipoListaPrecio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_tipo_lista_precio->getInsListaPreciosParaBloqueMasInfo() as $ins_lista_precio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_lista_precio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_lista_precio->getDescripcionVinculante('InsTipoListaPrecio')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_lista_precio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_lista_precio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_lista_precio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_lista_precio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_lista_precio->getId() ?>" archivo="ajax/modulos/ins_lista_precio/ins_lista_precio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsListaPrecio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_LISTA_PRECIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsListaPrecio') ?>">
                                <a href="ins_lista_precio_alta.php?id=<?php echo $ins_lista_precio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_INS_LISTA_PRECIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_lista_precio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $ins_lista_precio->getFiltrosArrXCampo('InsTipoListaPrecio', 'ins_tipo_lista_precio_id') ?>" >
                                <?php Lang::_lang('Ver InsListaPrecios de ') ?> <strong><?php echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_lista_precio_alta.php" >
                            <?php Lang::_lang('Agregar InsListaPrecio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_CLI_CATEGORIA_INS_TIPO_LISTA_PRECIO')){ ?>
	<div id="tab_cli_categoria_ins_tipo_lista_precio" class="bloque-relacion cli_categoria_ins_tipo_lista_precio">
		
            <h4><?php Lang::_lang('CliCategoriaInsTipoListaPrecio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsTipoListaPrecio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_tipo_lista_precio->getCliCategoriaInsTipoListaPreciosParaBloqueMasInfo() as $cli_categoria_ins_tipo_lista_precio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_categoria_ins_tipo_lista_precio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_categoria_ins_tipo_lista_precio->getDescripcionVinculante('InsTipoListaPrecio')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_categoria_ins_tipo_lista_precio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_categoria_ins_tipo_lista_precio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_categoria_ins_tipo_lista_precio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_categoria_ins_tipo_lista_precio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_categoria_ins_tipo_lista_precio->getId() ?>" archivo="ajax/modulos/cli_categoria_ins_tipo_lista_precio/cli_categoria_ins_tipo_lista_precio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliCategoriaInsTipoListaPrecio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CATEGORIA_INS_TIPO_LISTA_PRECIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCategoriaInsTipoListaPrecio') ?>">
                                <a href="cli_categoria_ins_tipo_lista_precio_alta.php?id=<?php echo $cli_categoria_ins_tipo_lista_precio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_CLI_CATEGORIA_INS_TIPO_LISTA_PRECIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_categoria_ins_tipo_lista_precio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliCategoriaInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $cli_categoria_ins_tipo_lista_precio->getFiltrosArrXCampo('InsTipoListaPrecio', 'ins_tipo_lista_precio_id') ?>" >
                                <?php Lang::_lang('Ver CliCategoriaInsTipoListaPrecios de ') ?> <strong><?php echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_categoria_ins_tipo_lista_precio_alta.php" >
                            <?php Lang::_lang('Agregar CliCategoriaInsTipoListaPrecio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_CLI_CLIENTE_INS_TIPO_LISTA_PRECIO')){ ?>
	<div id="tab_cli_cliente_ins_tipo_lista_precio" class="bloque-relacion cli_cliente_ins_tipo_lista_precio">
		
            <h4><?php Lang::_lang('CliClienteInsTipoListaPrecio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsTipoListaPrecio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_tipo_lista_precio->getCliClienteInsTipoListaPreciosParaBloqueMasInfo() as $cli_cliente_ins_tipo_lista_precio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_ins_tipo_lista_precio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_ins_tipo_lista_precio->getDescripcionVinculante('InsTipoListaPrecio')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_ins_tipo_lista_precio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_ins_tipo_lista_precio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_ins_tipo_lista_precio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_ins_tipo_lista_precio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_ins_tipo_lista_precio->getId() ?>" archivo="ajax/modulos/cli_cliente_ins_tipo_lista_precio/cli_cliente_ins_tipo_lista_precio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteInsTipoListaPrecio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INS_TIPO_LISTA_PRECIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteInsTipoListaPrecio') ?>">
                                <a href="cli_cliente_ins_tipo_lista_precio_alta.php?id=<?php echo $cli_cliente_ins_tipo_lista_precio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_CLI_CLIENTE_INS_TIPO_LISTA_PRECIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_ins_tipo_lista_precio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_ins_tipo_lista_precio->getFiltrosArrXCampo('InsTipoListaPrecio', 'ins_tipo_lista_precio_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteInsTipoListaPrecios de ') ?> <strong><?php echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_ins_tipo_lista_precio_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteInsTipoListaPrecio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_PRESUPUESTO')){ ?>
	<div id="tab_vta_presupuesto" class="bloque-relacion vta_presupuesto">
		
            <h4><?php Lang::_lang('VtaPresupuesto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsTipoListaPrecio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_tipo_lista_precio->getVtaPresupuestosParaBloqueMasInfo() as $vta_presupuesto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto->getId() ?>" archivo="ajax/modulos/vta_presupuesto/vta_presupuesto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuesto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuesto') ?>">
                                <a href="vta_presupuesto_alta.php?id=<?php echo $vta_presupuesto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_PRESUPUESTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuesto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto->getFiltrosArrXCampo('InsTipoListaPrecio', 'ins_tipo_lista_precio_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestos de ') ?> <strong><?php echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuesto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_orden_venta" class="bloque-relacion vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsTipoListaPrecio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_tipo_lista_precio->getVtaOrdenVentasParaBloqueMasInfo() as $vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_orden_venta/vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVenta') ?>">
                                <a href="vta_orden_venta_alta.php?id=<?php echo $vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('InsTipoListaPrecio', 'ins_tipo_lista_precio_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentas de ') ?> <strong><?php echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO')){ ?>
	<div id="tab_vta_vendedor_ins_tipo_lista_precio" class="bloque-relacion vta_vendedor_ins_tipo_lista_precio">
		
            <h4><?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsTipoListaPrecio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_tipo_lista_precio->getVtaVendedorInsTipoListaPreciosParaBloqueMasInfo() as $vta_vendedor_ins_tipo_lista_precio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getDescripcionVinculante('InsTipoListaPrecio')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_ins_tipo_lista_precio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_ins_tipo_lista_precio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_ins_tipo_lista_precio->getId() ?>" archivo="ajax/modulos/vta_vendedor_ins_tipo_lista_precio/vta_vendedor_ins_tipo_lista_precio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?>">
                                <a href="vta_vendedor_ins_tipo_lista_precio_alta.php?id=<?php echo $vta_vendedor_ins_tipo_lista_precio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_ins_tipo_lista_precio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_ins_tipo_lista_precio->getFiltrosArrXCampo('InsTipoListaPrecio', 'ins_tipo_lista_precio_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorInsTipoListaPrecios de ') ?> <strong><?php echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_ins_tipo_lista_precio_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorInsTipoListaPrecio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_POLITICA_DESCUENTO_INS_TIPO_LISTA_PRECIO')){ ?>
	<div id="tab_vta_politica_descuento_ins_tipo_lista_precio" class="bloque-relacion vta_politica_descuento_ins_tipo_lista_precio">
		
            <h4><?php Lang::_lang('VtaPoliticaDescuentoInsTipoListaPrecio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsTipoListaPrecio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_tipo_lista_precio->getVtaPoliticaDescuentoInsTipoListaPreciosParaBloqueMasInfo() as $vta_politica_descuento_ins_tipo_lista_precio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getDescripcionVinculante('InsTipoListaPrecio')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_politica_descuento_ins_tipo_lista_precio->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_politica_descuento_ins_tipo_lista_precio->getId() ?>" archivo="ajax/modulos/vta_politica_descuento_ins_tipo_lista_precio/vta_politica_descuento_ins_tipo_lista_precio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsTipoListaPrecio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_TIPO_LISTA_PRECIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsTipoListaPrecio') ?>">
                                <a href="vta_politica_descuento_ins_tipo_lista_precio_alta.php?id=<?php echo $vta_politica_descuento_ins_tipo_lista_precio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_MASINFO_VTA_POLITICA_DESCUENTO_INS_TIPO_LISTA_PRECIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_politica_descuento_ins_tipo_lista_precio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPoliticaDescuentoInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $vta_politica_descuento_ins_tipo_lista_precio->getFiltrosArrXCampo('InsTipoListaPrecio', 'ins_tipo_lista_precio_id') ?>" >
                                <?php Lang::_lang('Ver VtaPoliticaDescuentoInsTipoListaPrecios de ') ?> <strong><?php echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_politica_descuento_ins_tipo_lista_precio_alta.php" >
                            <?php Lang::_lang('Agregar VtaPoliticaDescuentoInsTipoListaPrecio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

