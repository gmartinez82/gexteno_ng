<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_empresa_transportadora_id = Gral::getVars(2, 'id');
$gral_empresa_transportadora = GralEmpresaTransportadora::getOxId($gral_empresa_transportadora_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_empresa_transportadora->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_EMPRESA_TRANSPORTADORA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_empresa_transportadora->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_empresa_transportadora->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_EMPRESA_TRANSPORTADORA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_empresa_transportadora->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_empresa_transportadora->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_CLI_CLIENTE')){ ?>
            <li><a href="#tab_cli_cliente"><?php Lang::_lang('CliCliente') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_PRESUPUESTO')){ ?>
            <li><a href="#tab_vta_presupuesto"><?php Lang::_lang('VtaPresupuesto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO')){ ?>
            <li><a href="#tab_vta_remito"><?php Lang::_lang('VtaRemito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO_ESTADO')){ ?>
            <li><a href="#tab_vta_remito_estado"><?php Lang::_lang('VtaRemitoEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_PDE_ORDEN_PAGO_ESTADO')){ ?>
            <li><a href="#tab_pde_orden_pago_estado"><?php Lang::_lang('PdeOrdenPagoEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO_AJUSTE')){ ?>
            <li><a href="#tab_vta_remito_ajuste"><?php Lang::_lang('VtaRemitoAjuste') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO_AJUSTE_ESTADO')){ ?>
            <li><a href="#tab_vta_remito_ajuste_estado"><?php Lang::_lang('VtaRemitoAjusteEstado') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_CLI_CLIENTE')){ ?>
	<div id="tab_cli_cliente" class="bloque-relacion cli_cliente">
		
            <h4><?php Lang::_lang('CliCliente') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEmpresaTransportadora') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_empresa_transportadora->getCliClientesParaBloqueMasInfo() as $cli_cliente){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_CLI_CLIENTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliCliente::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente->getFiltrosArrXCampo('GralEmpresaTransportadora', 'gral_empresa_transportadora_id') ?>" >
                                <?php Lang::_lang('Ver CliClientes de ') ?> <strong><?php echo($gral_empresa_transportadora->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_PRESUPUESTO')){ ?>
	<div id="tab_vta_presupuesto" class="bloque-relacion vta_presupuesto">
		
            <h4><?php Lang::_lang('VtaPresupuesto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEmpresaTransportadora') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_empresa_transportadora->getVtaPresupuestosParaBloqueMasInfo() as $vta_presupuesto){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_PRESUPUESTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuesto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto->getFiltrosArrXCampo('GralEmpresaTransportadora', 'gral_empresa_transportadora_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestos de ') ?> <strong><?php echo($gral_empresa_transportadora->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO')){ ?>
	<div id="tab_vta_remito" class="bloque-relacion vta_remito">
		
            <h4><?php Lang::_lang('VtaRemito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEmpresaTransportadora') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_empresa_transportadora->getVtaRemitosParaBloqueMasInfo() as $vta_remito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito->getId() ?>" archivo="ajax/modulos/vta_remito/vta_remito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemito') ?>">
                                <a href="vta_remito_alta.php?id=<?php echo $vta_remito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemito::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito->getFiltrosArrXCampo('GralEmpresaTransportadora', 'gral_empresa_transportadora_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitos de ') ?> <strong><?php echo($gral_empresa_transportadora->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO_ESTADO')){ ?>
	<div id="tab_vta_remito_estado" class="bloque-relacion vta_remito_estado">
		
            <h4><?php Lang::_lang('VtaRemitoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEmpresaTransportadora') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_empresa_transportadora->getVtaRemitoEstadosParaBloqueMasInfo() as $vta_remito_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito_estado->getId() ?>" archivo="ajax/modulos/vta_remito_estado/vta_remito_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemitoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemitoEstado') ?>">
                                <a href="vta_remito_estado_alta.php?id=<?php echo $vta_remito_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_estado->getFiltrosArrXCampo('GralEmpresaTransportadora', 'gral_empresa_transportadora_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoEstados de ') ?> <strong><?php echo($gral_empresa_transportadora->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_estado_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemitoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_PDE_ORDEN_PAGO_ESTADO')){ ?>
	<div id="tab_pde_orden_pago_estado" class="bloque-relacion pde_orden_pago_estado">
		
            <h4><?php Lang::_lang('PdeOrdenPagoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEmpresaTransportadora') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_empresa_transportadora->getPdeOrdenPagoEstadosParaBloqueMasInfo() as $pde_orden_pago_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago_estado->getId() ?>" archivo="ajax/modulos/pde_orden_pago_estado/pde_orden_pago_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPagoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPagoEstado') ?>">
                                <a href="pde_orden_pago_estado_alta.php?id=<?php echo $pde_orden_pago_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_PDE_ORDEN_PAGO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_estado->getFiltrosArrXCampo('GralEmpresaTransportadora', 'gral_empresa_transportadora_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagoEstados de ') ?> <strong><?php echo($gral_empresa_transportadora->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPagoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO_AJUSTE')){ ?>
	<div id="tab_vta_remito_ajuste" class="bloque-relacion vta_remito_ajuste">
		
            <h4><?php Lang::_lang('VtaRemitoAjuste') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEmpresaTransportadora') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_empresa_transportadora->getVtaRemitoAjustesParaBloqueMasInfo() as $vta_remito_ajuste){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito_ajuste->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito_ajuste->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito_ajuste->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_ajuste->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito_ajuste->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_ajuste->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito_ajuste->getId() ?>" archivo="ajax/modulos/vta_remito_ajuste/vta_remito_ajuste_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemitoAjuste') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemitoAjuste') ?>">
                                <a href="vta_remito_ajuste_alta.php?id=<?php echo $vta_remito_ajuste->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO_AJUSTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_ajuste){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoAjuste::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_ajuste->getFiltrosArrXCampo('GralEmpresaTransportadora', 'gral_empresa_transportadora_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoAjustes de ') ?> <strong><?php echo($gral_empresa_transportadora->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_ajuste_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemitoAjuste') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO_AJUSTE_ESTADO')){ ?>
	<div id="tab_vta_remito_ajuste_estado" class="bloque-relacion vta_remito_ajuste_estado">
		
            <h4><?php Lang::_lang('VtaRemitoAjusteEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralEmpresaTransportadora') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_empresa_transportadora->getVtaRemitoAjusteEstadosParaBloqueMasInfo() as $vta_remito_ajuste_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito_ajuste_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito_ajuste_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito_ajuste_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_ajuste_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito_ajuste_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_ajuste_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito_ajuste_estado->getId() ?>" archivo="ajax/modulos/vta_remito_ajuste_estado/vta_remito_ajuste_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemitoAjusteEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemitoAjusteEstado') ?>">
                                <a href="vta_remito_ajuste_estado_alta.php?id=<?php echo $vta_remito_ajuste_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_MASINFO_VTA_REMITO_AJUSTE_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_ajuste_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoAjusteEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_ajuste_estado->getFiltrosArrXCampo('GralEmpresaTransportadora', 'gral_empresa_transportadora_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoAjusteEstados de ') ?> <strong><?php echo($gral_empresa_transportadora->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_ajuste_estado_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemitoAjusteEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

