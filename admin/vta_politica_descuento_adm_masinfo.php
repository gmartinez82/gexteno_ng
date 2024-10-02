<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_politica_descuento_id = Gral::getVars(2, 'id');
$vta_politica_descuento = VtaPoliticaDescuento::getOxId($vta_politica_descuento_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_politica_descuento->getCodigo())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_POLITICA_DESCUENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_politica_descuento->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_politica_descuento->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_POLITICA_DESCUENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_politica_descuento->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_politica_descuento->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_PRESUPUESTO_INS_INSUMO')){ ?>
            <li><a href="#tab_vta_presupuesto_ins_insumo"><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_orden_venta"><?php Lang::_lang('VtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_RANGO')){ ?>
            <li><a href="#tab_vta_politica_descuento_rango"><?php Lang::_lang('VtaPoliticaDescuentoRangos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_INS_TIPO_LISTA_PRECIO')){ ?>
            <li><a href="#tab_vta_politica_descuento_ins_tipo_lista_precio"><?php Lang::_lang('VtaPoliticaDescuentoInsTipoListaPrecios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_INS_CATEGORIA')){ ?>
            <li><a href="#tab_vta_politica_descuento_ins_categoria"><?php Lang::_lang('VtaPoliticaDescuentoInsCategorias') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_INS_INSUMO')){ ?>
            <li><a href="#tab_vta_politica_descuento_ins_insumo"><?php Lang::_lang('VtaPoliticaDescuentoInsInsumos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_PRESUPUESTO_INS_INSUMO')){ ?>
	<div id="tab_vta_presupuesto_ins_insumo" class="bloque-relacion vta_presupuesto_ins_insumo">
		
            <h4><?php Lang::_lang('VtaPresupuestoInsInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPoliticaDescuento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_politica_descuento->getVtaPresupuestoInsInsumosParaBloqueMasInfo() as $vta_presupuesto_ins_insumo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto_ins_insumo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_ins_insumo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto_ins_insumo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_ins_insumo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto_ins_insumo->getId() ?>" archivo="ajax/modulos/vta_presupuesto_ins_insumo/vta_presupuesto_ins_insumo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuestoInsInsumo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuestoInsInsumo') ?>">
                                <a href="vta_presupuesto_ins_insumo_alta.php?id=<?php echo $vta_presupuesto_ins_insumo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_PRESUPUESTO_INS_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto_ins_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuestoInsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_ins_insumo->getFiltrosArrXCampo('VtaPoliticaDescuento', 'vta_politica_descuento_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestoInsInsumos de ') ?> <strong><?php echo($vta_politica_descuento->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_ins_insumo_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuestoInsInsumo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_orden_venta" class="bloque-relacion vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPoliticaDescuento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_politica_descuento->getVtaOrdenVentasParaBloqueMasInfo() as $vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('VtaPoliticaDescuento', 'vta_politica_descuento_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentas de ') ?> <strong><?php echo($vta_politica_descuento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_RANGO')){ ?>
	<div id="tab_vta_politica_descuento_rango" class="bloque-relacion vta_politica_descuento_rango">
		
            <h4><?php Lang::_lang('VtaPoliticaDescuentoRango') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPoliticaDescuento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_politica_descuento->getVtaPoliticaDescuentoRangosParaBloqueMasInfo() as $vta_politica_descuento_rango){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_politica_descuento_rango->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_politica_descuento_rango->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_politica_descuento_rango->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_politica_descuento_rango->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_politica_descuento_rango->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_politica_descuento_rango->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_politica_descuento_rango->getId() ?>" archivo="ajax/modulos/vta_politica_descuento_rango/vta_politica_descuento_rango_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPoliticaDescuentoRango') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_RANGO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPoliticaDescuentoRango') ?>">
                                <a href="vta_politica_descuento_rango_alta.php?id=<?php echo $vta_politica_descuento_rango->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_RANGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_politica_descuento_rango){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPoliticaDescuentoRango::getFiltrosArrGral() ?>&arr=<?php echo $vta_politica_descuento_rango->getFiltrosArrXCampo('VtaPoliticaDescuento', 'vta_politica_descuento_id') ?>" >
                                <?php Lang::_lang('Ver VtaPoliticaDescuentoRangos de ') ?> <strong><?php echo($vta_politica_descuento->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_politica_descuento_rango_alta.php" >
                            <?php Lang::_lang('Agregar VtaPoliticaDescuentoRango') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_INS_TIPO_LISTA_PRECIO')){ ?>
	<div id="tab_vta_politica_descuento_ins_tipo_lista_precio" class="bloque-relacion vta_politica_descuento_ins_tipo_lista_precio">
		
            <h4><?php Lang::_lang('VtaPoliticaDescuentoInsTipoListaPrecio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPoliticaDescuento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_politica_descuento->getVtaPoliticaDescuentoInsTipoListaPreciosParaBloqueMasInfo() as $vta_politica_descuento_ins_tipo_lista_precio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getDescripcionVinculante('VtaPoliticaDescuento')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_INS_TIPO_LISTA_PRECIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_politica_descuento_ins_tipo_lista_precio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPoliticaDescuentoInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $vta_politica_descuento_ins_tipo_lista_precio->getFiltrosArrXCampo('VtaPoliticaDescuento', 'vta_politica_descuento_id') ?>" >
                                <?php Lang::_lang('Ver VtaPoliticaDescuentoInsTipoListaPrecios de ') ?> <strong><?php echo($vta_politica_descuento->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_INS_CATEGORIA')){ ?>
	<div id="tab_vta_politica_descuento_ins_categoria" class="bloque-relacion vta_politica_descuento_ins_categoria">
		
            <h4><?php Lang::_lang('VtaPoliticaDescuentoInsCategoria') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPoliticaDescuento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_politica_descuento->getVtaPoliticaDescuentoInsCategoriasParaBloqueMasInfo() as $vta_politica_descuento_ins_categoria){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_politica_descuento_ins_categoria->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_politica_descuento_ins_categoria->getDescripcionVinculante('VtaPoliticaDescuento')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_politica_descuento_ins_categoria->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_politica_descuento_ins_categoria->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_politica_descuento_ins_categoria->getId() ?>" archivo="ajax/modulos/vta_politica_descuento_ins_categoria/vta_politica_descuento_ins_categoria_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsCategoria') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_CATEGORIA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsCategoria') ?>">
                                <a href="vta_politica_descuento_ins_categoria_alta.php?id=<?php echo $vta_politica_descuento_ins_categoria->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_INS_CATEGORIA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_politica_descuento_ins_categoria){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPoliticaDescuentoInsCategoria::getFiltrosArrGral() ?>&arr=<?php echo $vta_politica_descuento_ins_categoria->getFiltrosArrXCampo('VtaPoliticaDescuento', 'vta_politica_descuento_id') ?>" >
                                <?php Lang::_lang('Ver VtaPoliticaDescuentoInsCategorias de ') ?> <strong><?php echo($vta_politica_descuento->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_politica_descuento_ins_categoria_alta.php" >
                            <?php Lang::_lang('Agregar VtaPoliticaDescuentoInsCategoria') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_INS_INSUMO')){ ?>
	<div id="tab_vta_politica_descuento_ins_insumo" class="bloque-relacion vta_politica_descuento_ins_insumo">
		
            <h4><?php Lang::_lang('VtaPoliticaDescuentoInsInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPoliticaDescuento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_politica_descuento->getVtaPoliticaDescuentoInsInsumosParaBloqueMasInfo() as $vta_politica_descuento_ins_insumo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_politica_descuento_ins_insumo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_politica_descuento_ins_insumo->getDescripcionVinculante('VtaPoliticaDescuento')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_politica_descuento_ins_insumo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_politica_descuento_ins_insumo->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_politica_descuento_ins_insumo->getId() ?>" archivo="ajax/modulos/vta_politica_descuento_ins_insumo/vta_politica_descuento_ins_insumo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsInsumo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_INSUMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsInsumo') ?>">
                                <a href="vta_politica_descuento_ins_insumo_alta.php?id=<?php echo $vta_politica_descuento_ins_insumo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_MASINFO_VTA_POLITICA_DESCUENTO_INS_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_politica_descuento_ins_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPoliticaDescuentoInsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $vta_politica_descuento_ins_insumo->getFiltrosArrXCampo('VtaPoliticaDescuento', 'vta_politica_descuento_id') ?>" >
                                <?php Lang::_lang('Ver VtaPoliticaDescuentoInsInsumos de ') ?> <strong><?php echo($vta_politica_descuento->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_politica_descuento_ins_insumo_alta.php" >
                            <?php Lang::_lang('Agregar VtaPoliticaDescuentoInsInsumo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

