<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_escenario_id = Gral::getVars(2, 'id');
$gral_escenario = GralEscenario::getOxId($gral_escenario_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_escenario->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_ESCENARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_escenario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_escenario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_ESCENARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_escenario->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_escenario->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_PRESUPUESTO')){ ?>
            <li><a href="#tab_vta_presupuesto"><?php Lang::_lang('VtaPresupuesto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_vta_nota_credito"><?php Lang::_lang('VtaNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_NOTA_DEBITO')){ ?>
            <li><a href="#tab_vta_nota_debito"><?php Lang::_lang('VtaNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_VENDEDOR_GRAL_ESCENARIO')){ ?>
            <li><a href="#tab_vta_vendedor_gral_escenario"><?php Lang::_lang('VtaVendedorGralEscenario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_FACTURA')){ ?>
            <li><a href="#tab_vta_factura"><?php Lang::_lang('VtaFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_PDE_FACTURA')){ ?>
            <li><a href="#tab_pde_factura"><?php Lang::_lang('PdeFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_PDE_NOTA_CREDITO')){ ?>
            <li><a href="#tab_pde_nota_credito"><?php Lang::_lang('PdeNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_PDE_NOTA_DEBITO')){ ?>
            <li><a href="#tab_pde_nota_debito"><?php Lang::_lang('PdeNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_AJUSTE_DEBE')){ ?>
            <li><a href="#tab_vta_ajuste_debe"><?php Lang::_lang('VtaAjusteDebes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO')){ ?>
            <li><a href="#tab_eku_param_tipo_presencia_gral_escenario"><?php Lang::_lang('EkuParamTipoPresenciaGralEscenarios') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_PRESUPUESTO')){ ?>
	<div id="tab_vta_presupuesto" class="bloque-relacion vta_presupuesto">
		
            <h4><?php Lang::_lang('VtaPresupuesto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEscenario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_escenario->getVtaPresupuestosParaBloqueMasInfo() as $vta_presupuesto){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_PRESUPUESTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuesto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto->getFiltrosArrXCampo('GralEscenario', 'gral_escenario_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestos de ') ?> <strong><?php echo($gral_escenario->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_vta_nota_credito" class="bloque-relacion vta_nota_credito">
		
            <h4><?php Lang::_lang('VtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEscenario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_escenario->getVtaNotaCreditosParaBloqueMasInfo() as $vta_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito->getId() ?>" archivo="ajax/modulos/vta_nota_credito/vta_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCredito') ?>">
                                <a href="vta_nota_credito_alta.php?id=<?php echo $vta_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito->getFiltrosArrXCampo('GralEscenario', 'gral_escenario_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditos de ') ?> <strong><?php echo($gral_escenario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_NOTA_DEBITO')){ ?>
	<div id="tab_vta_nota_debito" class="bloque-relacion vta_nota_debito">
		
            <h4><?php Lang::_lang('VtaNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEscenario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_escenario->getVtaNotaDebitosParaBloqueMasInfo() as $vta_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_debito->getId() ?>" archivo="ajax/modulos/vta_nota_debito/vta_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebito') ?>">
                                <a href="vta_nota_debito_alta.php?id=<?php echo $vta_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito->getFiltrosArrXCampo('GralEscenario', 'gral_escenario_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitos de ') ?> <strong><?php echo($gral_escenario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_VENDEDOR_GRAL_ESCENARIO')){ ?>
	<div id="tab_vta_vendedor_gral_escenario" class="bloque-relacion vta_vendedor_gral_escenario">
		
            <h4><?php Lang::_lang('VtaVendedorGralEscenario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEscenario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_escenario->getVtaVendedorGralEscenariosParaBloqueMasInfo() as $vta_vendedor_gral_escenario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_gral_escenario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_gral_escenario->getDescripcionVinculante('GralEscenario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_gral_escenario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_gral_escenario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_gral_escenario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_gral_escenario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_gral_escenario->getId() ?>" archivo="ajax/modulos/vta_vendedor_gral_escenario/vta_vendedor_gral_escenario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorGralEscenario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_GRAL_ESCENARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorGralEscenario') ?>">
                                <a href="vta_vendedor_gral_escenario_alta.php?id=<?php echo $vta_vendedor_gral_escenario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_VENDEDOR_GRAL_ESCENARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_gral_escenario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorGralEscenario::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_gral_escenario->getFiltrosArrXCampo('GralEscenario', 'gral_escenario_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorGralEscenarios de ') ?> <strong><?php echo($gral_escenario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_gral_escenario_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorGralEscenario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_FACTURA')){ ?>
	<div id="tab_vta_factura" class="bloque-relacion vta_factura">
		
            <h4><?php Lang::_lang('VtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEscenario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_escenario->getVtaFacturasParaBloqueMasInfo() as $vta_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura->getId() ?>" archivo="ajax/modulos/vta_factura/vta_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFactura') ?>">
                                <a href="vta_factura_alta.php?id=<?php echo $vta_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura->getFiltrosArrXCampo('GralEscenario', 'gral_escenario_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturas de ') ?> <strong><?php echo($gral_escenario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_alta.php" >
                            <?php Lang::_lang('Agregar VtaFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_PDE_FACTURA')){ ?>
	<div id="tab_pde_factura" class="bloque-relacion pde_factura">
		
            <h4><?php Lang::_lang('PdeFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEscenario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_escenario->getPdeFacturasParaBloqueMasInfo() as $pde_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura->getId() ?>" archivo="ajax/modulos/pde_factura/pde_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFactura') ?>">
                                <a href="pde_factura_alta.php?id=<?php echo $pde_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_PDE_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura->getFiltrosArrXCampo('GralEscenario', 'gral_escenario_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturas de ') ?> <strong><?php echo($gral_escenario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_alta.php" >
                            <?php Lang::_lang('Agregar PdeFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_PDE_NOTA_CREDITO')){ ?>
	<div id="tab_pde_nota_credito" class="bloque-relacion pde_nota_credito">
		
            <h4><?php Lang::_lang('PdeNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEscenario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_escenario->getPdeNotaCreditosParaBloqueMasInfo() as $pde_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito->getId() ?>" archivo="ajax/modulos/pde_nota_credito/pde_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCredito') ?>">
                                <a href="pde_nota_credito_alta.php?id=<?php echo $pde_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_PDE_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito->getFiltrosArrXCampo('GralEscenario', 'gral_escenario_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditos de ') ?> <strong><?php echo($gral_escenario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_PDE_NOTA_DEBITO')){ ?>
	<div id="tab_pde_nota_debito" class="bloque-relacion pde_nota_debito">
		
            <h4><?php Lang::_lang('PdeNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEscenario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_escenario->getPdeNotaDebitosParaBloqueMasInfo() as $pde_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito->getId() ?>" archivo="ajax/modulos/pde_nota_debito/pde_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebito') ?>">
                                <a href="pde_nota_debito_alta.php?id=<?php echo $pde_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_PDE_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito->getFiltrosArrXCampo('GralEscenario', 'gral_escenario_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitos de ') ?> <strong><?php echo($gral_escenario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_AJUSTE_DEBE')){ ?>
	<div id="tab_vta_ajuste_debe" class="bloque-relacion vta_ajuste_debe">
		
            <h4><?php Lang::_lang('VtaAjusteDebe') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEscenario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_escenario->getVtaAjusteDebesParaBloqueMasInfo() as $vta_ajuste_debe){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_ajuste_debe->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_ajuste_debe->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_ajuste_debe->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_ajuste_debe->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_ajuste_debe->getId() ?>" archivo="ajax/modulos/vta_ajuste_debe/vta_ajuste_debe_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaAjusteDebe') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaAjusteDebe') ?>">
                                <a href="vta_ajuste_debe_alta.php?id=<?php echo $vta_ajuste_debe->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_VTA_AJUSTE_DEBE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_debe){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteDebe::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe->getFiltrosArrXCampo('GralEscenario', 'gral_escenario_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteDebes de ') ?> <strong><?php echo($gral_escenario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_ajuste_debe_alta.php" >
                            <?php Lang::_lang('Agregar VtaAjusteDebe') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO')){ ?>
	<div id="tab_eku_param_tipo_presencia_gral_escenario" class="bloque-relacion eku_param_tipo_presencia_gral_escenario">
		
            <h4><?php Lang::_lang('EkuParamTipoPresenciaGralEscenario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEscenario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_escenario->getEkuParamTipoPresenciaGralEscenariosParaBloqueMasInfo() as $eku_param_tipo_presencia_gral_escenario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_tipo_presencia_gral_escenario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_tipo_presencia_gral_escenario->getDescripcionVinculante('GralEscenario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_tipo_presencia_gral_escenario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_presencia_gral_escenario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_tipo_presencia_gral_escenario->getId() ?>" archivo="ajax/modulos/eku_param_tipo_presencia_gral_escenario/eku_param_tipo_presencia_gral_escenario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamTipoPresenciaGralEscenario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoPresenciaGralEscenario') ?>">
                                <a href="eku_param_tipo_presencia_gral_escenario_alta.php?id=<?php echo $eku_param_tipo_presencia_gral_escenario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_MASINFO_EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_tipo_presencia_gral_escenario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamTipoPresenciaGralEscenario::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_presencia_gral_escenario->getFiltrosArrXCampo('GralEscenario', 'gral_escenario_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamTipoPresenciaGralEscenarios de ') ?> <strong><?php echo($gral_escenario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_tipo_presencia_gral_escenario_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamTipoPresenciaGralEscenario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

