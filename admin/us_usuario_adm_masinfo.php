<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$us_usuario_id = Gral::getVars(2, 'id');
$us_usuario = UsUsuario::getOxId($us_usuario_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario->getApellido())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario->getNombre())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Hash') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario->getHash())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario->getTelefono())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Celular') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario->getCelular())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario->getObservacion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Activado') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($us_usuario->getActivado())->getDescripcion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_USUARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_usuario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_USUARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_usuario->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_AGRUPADO')){ ?>
            <li><a href="#tab_us_agrupado"><?php Lang::_lang('UsAgrupado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_ACREDITADO')){ ?>
            <li><a href="#tab_us_acreditado"><?php Lang::_lang('UsAcreditado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_USUARIO_DATO')){ ?>
            <li><a href="#tab_us_usuario_dato"><?php Lang::_lang('UsUsuarioDatos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_USUARIO_AUDITORIA')){ ?>
            <li><a href="#tab_us_usuario_auditoria"><?php Lang::_lang('UsUsuarioAuditorias') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_MENSAJE')){ ?>
            <li><a href="#tab_us_mensaje"><?php Lang::_lang('UsMensajes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_MEMO')){ ?>
            <li><a href="#tab_us_memo"><?php Lang::_lang('UsMemo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_CLAVE')){ ?>
            <li><a href="#tab_us_clave"><?php Lang::_lang('UsClave') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_LOGIN')){ ?>
            <li><a href="#tab_us_login"><?php Lang::_lang('UsLogins') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_NAVEGACION')){ ?>
            <li><a href="#tab_us_navegacion"><?php Lang::_lang('UsNavegacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_GRAL_SUCURSAL_US_USUARIO')){ ?>
            <li><a href="#tab_gral_sucursal_us_usuario"><?php Lang::_lang('GralSucursalUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_GRAL_ZONA_US_USUARIO')){ ?>
            <li><a href="#tab_gral_zona_us_usuario"><?php Lang::_lang('GralZonaUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_GRAL_CENTRO_COSTO_US_USUARIO')){ ?>
            <li><a href="#tab_gral_centro_costo_us_usuario"><?php Lang::_lang('GralCentroCostoUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PRV_PROVEEDOR_US_USUARIO')){ ?>
            <li><a href="#tab_prv_proveedor_us_usuario"><?php Lang::_lang('PrvProveedorUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PAN_PANOL_US_USUARIO')){ ?>
            <li><a href="#tab_pan_panol_us_usuario"><?php Lang::_lang('PanPanolUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_VTA_VENDEDOR_US_USUARIO')){ ?>
            <li><a href="#tab_vta_vendedor_us_usuario"><?php Lang::_lang('VtaVendedorUsUsuario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDI_PEDIDO_DESTINATARIO')){ ?>
            <li><a href="#tab_pdi_pedido_destinatario"><?php Lang::_lang('PdiPedidoDestinatarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_PEDIDO_DESTINATARIO')){ ?>
            <li><a href="#tab_pde_pedido_destinatario"><?php Lang::_lang('PdePedidoDestinatarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_COTIZACION_DESTINATARIO')){ ?>
            <li><a href="#tab_pde_cotizacion_destinatario"><?php Lang::_lang('PdeCotizacionDestinatarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_OC_DESTINATARIO')){ ?>
            <li><a href="#tab_pde_oc_destinatario"><?php Lang::_lang('PdeOcDestinatario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_RECEPCION_DESTINATARIO')){ ?>
            <li><a href="#tab_pde_recepcion_destinatario"><?php Lang::_lang('PdeRecepcionDestinatarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_CENTRO_RECEPCION_US_USUARIO')){ ?>
            <li><a href="#tab_pde_centro_recepcion_us_usuario"><?php Lang::_lang('PdeCentroRecepcionUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_CENTRO_PEDIDO_US_USUARIO')){ ?>
            <li><a href="#tab_pde_centro_pedido_us_usuario"><?php Lang::_lang('PdeCentroPedidoUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_OC_RECLAMO_DESTINATARIO')){ ?>
            <li><a href="#tab_pde_oc_reclamo_destinatario"><?php Lang::_lang('PdeOcReclamoDestinatarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_NOV_NOVEDAD_DESTINATARIO')){ ?>
            <li><a href="#tab_nov_novedad_destinatario"><?php Lang::_lang('NovNovedadDestinatarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_NOV_NOVEDAD_OBSERVADO')){ ?>
            <li><a href="#tab_nov_novedad_observado"><?php Lang::_lang('NovNovedadObservados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_NOV_NOVEDAD_LEIDO')){ ?>
            <li><a href="#tab_nov_novedad_leido"><?php Lang::_lang('NovNovedadLeidos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_ALT_ALERTA_US_USUARIO')){ ?>
            <li><a href="#tab_alt_alerta_us_usuario"><?php Lang::_lang('AltAlertaUsUsuario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_ALT_CONTROL_US_USUARIO')){ ?>
            <li><a href="#tab_alt_control_us_usuario"><?php Lang::_lang('AltControlUsUsuario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_FND_CAJERO_US_USUARIO')){ ?>
            <li><a href="#tab_fnd_cajero_us_usuario"><?php Lang::_lang('FndCajeroUsUsuario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_APP_MOV_INSTALACION')){ ?>
            <li><a href="#tab_app_mov_instalacion"><?php Lang::_lang('AppMovInstalacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_OPE_CHOFER_US_USUARIO')){ ?>
            <li><a href="#tab_ope_chofer_us_usuario"><?php Lang::_lang('OpeChoferUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_VTA_PRESUPUESTO_MENSAJE')){ ?>
            <li><a href="#tab_vta_presupuesto_mensaje"><?php Lang::_lang('VtaPresupuestoMensajes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PER_PERSONA_US_USUARIO')){ ?>
            <li><a href="#tab_per_persona_us_usuario"><?php Lang::_lang('PerPersonaUsUsuario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PLN_JORNADA_US_USUARIO')){ ?>
            <li><a href="#tab_pln_jornada_us_usuario"><?php Lang::_lang('PlnJornadaUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_OPE_OPERARIO_US_USUARIO')){ ?>
            <li><a href="#tab_ope_operario_us_usuario"><?php Lang::_lang('OpeOperarioUsUsuarios') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_AGRUPADO')){ ?>
	<div id="tab_us_agrupado" class="bloque-relacion us_agrupado">
		
            <h4><?php Lang::_lang('UsAgrupado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getUsAgrupadosParaBloqueMasInfo() as $us_agrupado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_agrupado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_agrupado->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_agrupado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_agrupado->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_agrupado->getId() ?>" archivo="ajax/modulos/us_agrupado/us_agrupado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsAgrupado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_AGRUPADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsAgrupado') ?>">
                                <a href="us_agrupado_alta.php?id=<?php echo $us_agrupado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_AGRUPADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_agrupado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsAgrupado::getFiltrosArrGral() ?>&arr=<?php echo $us_agrupado->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver UsAgrupados de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_agrupado_alta.php" >
                            <?php Lang::_lang('Agregar UsAgrupado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_ACREDITADO')){ ?>
	<div id="tab_us_acreditado" class="bloque-relacion us_acreditado">
		
            <h4><?php Lang::_lang('UsAcreditado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getUsAcreditadosParaBloqueMasInfo() as $us_acreditado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_acreditado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_acreditado->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_acreditado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_acreditado->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_acreditado->getId() ?>" archivo="ajax/modulos/us_acreditado/us_acreditado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsAcreditado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_ACREDITADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsAcreditado') ?>">
                                <a href="us_acreditado_alta.php?id=<?php echo $us_acreditado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_ACREDITADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_acreditado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsAcreditado::getFiltrosArrGral() ?>&arr=<?php echo $us_acreditado->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver UsAcreditados de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_acreditado_alta.php" >
                            <?php Lang::_lang('Agregar UsAcreditado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_USUARIO_DATO')){ ?>
	<div id="tab_us_usuario_dato" class="bloque-relacion us_usuario_dato">
		
            <h4><?php Lang::_lang('UsUsuarioDato') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getUsUsuarioDatosParaBloqueMasInfo() as $us_usuario_dato){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_usuario_dato->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_usuario_dato->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_usuario_dato->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario_dato->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($us_usuario_dato->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario_dato->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_usuario_dato->getId() ?>" archivo="ajax/modulos/us_usuario_dato/us_usuario_dato_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsUsuarioDato') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_DATO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsUsuarioDato') ?>">
                                <a href="us_usuario_dato_alta.php?id=<?php echo $us_usuario_dato->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_USUARIO_DATO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_usuario_dato){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsUsuarioDato::getFiltrosArrGral() ?>&arr=<?php echo $us_usuario_dato->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver UsUsuarioDatos de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_usuario_dato_alta.php" >
                            <?php Lang::_lang('Agregar UsUsuarioDato') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_USUARIO_AUDITORIA')){ ?>
	<div id="tab_us_usuario_auditoria" class="bloque-relacion us_usuario_auditoria">
		
            <h4><?php Lang::_lang('UsUsuarioAuditoria') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getUsUsuarioAuditoriasParaBloqueMasInfo() as $us_usuario_auditoria){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_usuario_auditoria->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_usuario_auditoria->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_usuario_auditoria->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario_auditoria->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($us_usuario_auditoria->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario_auditoria->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_usuario_auditoria->getId() ?>" archivo="ajax/modulos/us_usuario_auditoria/us_usuario_auditoria_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsUsuarioAuditoria') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_AUDITORIA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsUsuarioAuditoria') ?>">
                                <a href="us_usuario_auditoria_alta.php?id=<?php echo $us_usuario_auditoria->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_USUARIO_AUDITORIA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_usuario_auditoria){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsUsuarioAuditoria::getFiltrosArrGral() ?>&arr=<?php echo $us_usuario_auditoria->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver UsUsuarioAuditorias de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_usuario_auditoria_alta.php" >
                            <?php Lang::_lang('Agregar UsUsuarioAuditoria') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_MENSAJE')){ ?>
	<div id="tab_us_mensaje" class="bloque-relacion us_mensaje">
		
            <h4><?php Lang::_lang('UsMensaje') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getUsMensajesParaBloqueMasInfo() as $us_mensaje){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_mensaje->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_mensaje->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_mensaje->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_mensaje->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($us_mensaje->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_mensaje->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_mensaje->getId() ?>" archivo="ajax/modulos/us_mensaje/us_mensaje_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsMensaje') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_MENSAJE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsMensaje') ?>">
                                <a href="us_mensaje_alta.php?id=<?php echo $us_mensaje->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_MENSAJE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_mensaje){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsMensaje::getFiltrosArrGral() ?>&arr=<?php echo $us_mensaje->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver UsMensajes de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_mensaje_alta.php" >
                            <?php Lang::_lang('Agregar UsMensaje') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_MEMO')){ ?>
	<div id="tab_us_memo" class="bloque-relacion us_memo">
		
            <h4><?php Lang::_lang('UsMemo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getUsMemosParaBloqueMasInfo() as $us_memo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_memo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_memo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_memo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_memo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($us_memo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_memo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_memo->getId() ?>" archivo="ajax/modulos/us_memo/us_memo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsMemo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_MEMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsMemo') ?>">
                                <a href="us_memo_alta.php?id=<?php echo $us_memo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_MEMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_memo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsMemo::getFiltrosArrGral() ?>&arr=<?php echo $us_memo->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver UsMemos de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_memo_alta.php" >
                            <?php Lang::_lang('Agregar UsMemo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_CLAVE')){ ?>
	<div id="tab_us_clave" class="bloque-relacion us_clave">
		
            <h4><?php Lang::_lang('UsClave') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getUsClavesParaBloqueMasInfo() as $us_clave){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_clave->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_clave->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_clave->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_clave->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($us_clave->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_clave->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_clave->getId() ?>" archivo="ajax/modulos/us_clave/us_clave_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsClave') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_CLAVE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsClave') ?>">
                                <a href="us_clave_alta.php?id=<?php echo $us_clave->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_CLAVE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_clave){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsClave::getFiltrosArrGral() ?>&arr=<?php echo $us_clave->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver UsClaves de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_clave_alta.php" >
                            <?php Lang::_lang('Agregar UsClave') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_LOGIN')){ ?>
	<div id="tab_us_login" class="bloque-relacion us_login">
		
            <h4><?php Lang::_lang('UsLogin') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getUsLoginsParaBloqueMasInfo() as $us_login){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_login->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_login->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_login->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_login->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($us_login->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_login->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_login->getId() ?>" archivo="ajax/modulos/us_login/us_login_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsLogin') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_LOGIN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsLogin') ?>">
                                <a href="us_login_alta.php?id=<?php echo $us_login->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_LOGIN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_login){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsLogin::getFiltrosArrGral() ?>&arr=<?php echo $us_login->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver UsLogins de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_login_alta.php" >
                            <?php Lang::_lang('Agregar UsLogin') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_NAVEGACION')){ ?>
	<div id="tab_us_navegacion" class="bloque-relacion us_navegacion">
		
            <h4><?php Lang::_lang('UsNavegacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getUsNavegacionsParaBloqueMasInfo() as $us_navegacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_navegacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_navegacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_navegacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_navegacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($us_navegacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_navegacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_navegacion->getId() ?>" archivo="ajax/modulos/us_navegacion/us_navegacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsNavegacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_NAVEGACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsNavegacion') ?>">
                                <a href="us_navegacion_alta.php?id=<?php echo $us_navegacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_US_NAVEGACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_navegacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsNavegacion::getFiltrosArrGral() ?>&arr=<?php echo $us_navegacion->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver UsNavegacions de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_navegacion_alta.php" >
                            <?php Lang::_lang('Agregar UsNavegacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_GRAL_SUCURSAL_US_USUARIO')){ ?>
	<div id="tab_gral_sucursal_us_usuario" class="bloque-relacion gral_sucursal_us_usuario">
		
            <h4><?php Lang::_lang('GralSucursalUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getGralSucursalUsUsuariosParaBloqueMasInfo() as $gral_sucursal_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_sucursal_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_sucursal_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_sucursal_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_sucursal_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_sucursal_us_usuario->getId() ?>" archivo="ajax/modulos/gral_sucursal_us_usuario/gral_sucursal_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralSucursalUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalUsUsuario') ?>">
                                <a href="gral_sucursal_us_usuario_alta.php?id=<?php echo $gral_sucursal_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_GRAL_SUCURSAL_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_sucursal_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralSucursalUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver GralSucursalUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_sucursal_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar GralSucursalUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_GRAL_ZONA_US_USUARIO')){ ?>
	<div id="tab_gral_zona_us_usuario" class="bloque-relacion gral_zona_us_usuario">
		
            <h4><?php Lang::_lang('GralZonaUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getGralZonaUsUsuariosParaBloqueMasInfo() as $gral_zona_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_zona_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_zona_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_zona_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_zona_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_zona_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_zona_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_zona_us_usuario->getId() ?>" archivo="ajax/modulos/gral_zona_us_usuario/gral_zona_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralZonaUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_ZONA_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralZonaUsUsuario') ?>">
                                <a href="gral_zona_us_usuario_alta.php?id=<?php echo $gral_zona_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_GRAL_ZONA_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_zona_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralZonaUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $gral_zona_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver GralZonaUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_zona_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar GralZonaUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_GRAL_CENTRO_COSTO_US_USUARIO')){ ?>
	<div id="tab_gral_centro_costo_us_usuario" class="bloque-relacion gral_centro_costo_us_usuario">
		
            <h4><?php Lang::_lang('GralCentroCostoUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getGralCentroCostoUsUsuariosParaBloqueMasInfo() as $gral_centro_costo_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_centro_costo_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_centro_costo_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_centro_costo_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_centro_costo_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_centro_costo_us_usuario->getId() ?>" archivo="ajax/modulos/gral_centro_costo_us_usuario/gral_centro_costo_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCentroCostoUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCentroCostoUsUsuario') ?>">
                                <a href="gral_centro_costo_us_usuario_alta.php?id=<?php echo $gral_centro_costo_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_GRAL_CENTRO_COSTO_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_centro_costo_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCentroCostoUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $gral_centro_costo_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver GralCentroCostoUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_centro_costo_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar GralCentroCostoUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PRV_PROVEEDOR_US_USUARIO')){ ?>
	<div id="tab_prv_proveedor_us_usuario" class="bloque-relacion prv_proveedor_us_usuario">
		
            <h4><?php Lang::_lang('PrvProveedorUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPrvProveedorUsUsuariosParaBloqueMasInfo() as $prv_proveedor_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_proveedor_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_proveedor_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_proveedor_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_proveedor_us_usuario->getId() ?>" archivo="ajax/modulos/prv_proveedor_us_usuario/prv_proveedor_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvProveedorUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvProveedorUsUsuario') ?>">
                                <a href="prv_proveedor_us_usuario_alta.php?id=<?php echo $prv_proveedor_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PRV_PROVEEDOR_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_proveedor_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvProveedorUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $prv_proveedor_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PrvProveedorUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_proveedor_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PrvProveedorUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PAN_PANOL_US_USUARIO')){ ?>
	<div id="tab_pan_panol_us_usuario" class="bloque-relacion pan_panol_us_usuario">
		
            <h4><?php Lang::_lang('PanPanolUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPanPanolUsUsuariosParaBloqueMasInfo() as $pan_panol_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pan_panol_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pan_panol_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pan_panol_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pan_panol_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pan_panol_us_usuario->getId() ?>" archivo="ajax/modulos/pan_panol_us_usuario/pan_panol_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PanPanolUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PanPanolUsUsuario') ?>">
                                <a href="pan_panol_us_usuario_alta.php?id=<?php echo $pan_panol_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PAN_PANOL_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pan_panol_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PanPanolUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $pan_panol_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PanPanolUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pan_panol_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PanPanolUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_VTA_VENDEDOR_US_USUARIO')){ ?>
	<div id="tab_vta_vendedor_us_usuario" class="bloque-relacion vta_vendedor_us_usuario">
		
            <h4><?php Lang::_lang('VtaVendedorUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getVtaVendedorUsUsuariosParaBloqueMasInfo() as $vta_vendedor_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_us_usuario->getId() ?>" archivo="ajax/modulos/vta_vendedor_us_usuario/vta_vendedor_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorUsUsuario') ?>">
                                <a href="vta_vendedor_us_usuario_alta.php?id=<?php echo $vta_vendedor_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_VTA_VENDEDOR_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDI_PEDIDO_DESTINATARIO')){ ?>
	<div id="tab_pdi_pedido_destinatario" class="bloque-relacion pdi_pedido_destinatario">
		
            <h4><?php Lang::_lang('PdiPedidoDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPdiPedidoDestinatariosParaBloqueMasInfo() as $pdi_pedido_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_pedido_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_pedido_destinatario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_pedido_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_pedido_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_pedido_destinatario->getId() ?>" archivo="ajax/modulos/pdi_pedido_destinatario/pdi_pedido_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiPedidoDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedidoDestinatario') ?>">
                                <a href="pdi_pedido_destinatario_alta.php?id=<?php echo $pdi_pedido_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDI_PEDIDO_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_pedido_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiPedidoDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido_destinatario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PdiPedidoDestinatarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_pedido_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar PdiPedidoDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_PEDIDO_DESTINATARIO')){ ?>
	<div id="tab_pde_pedido_destinatario" class="bloque-relacion pde_pedido_destinatario">
		
            <h4><?php Lang::_lang('PdePedidoDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPdePedidoDestinatariosParaBloqueMasInfo() as $pde_pedido_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido_destinatario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_pedido_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido_destinatario->getId() ?>" archivo="ajax/modulos/pde_pedido_destinatario/pde_pedido_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedidoDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedidoDestinatario') ?>">
                                <a href="pde_pedido_destinatario_alta.php?id=<?php echo $pde_pedido_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_PEDIDO_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedidoDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido_destinatario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidoDestinatarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar PdePedidoDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_COTIZACION_DESTINATARIO')){ ?>
	<div id="tab_pde_cotizacion_destinatario" class="bloque-relacion pde_cotizacion_destinatario">
		
            <h4><?php Lang::_lang('PdeCotizacionDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPdeCotizacionDestinatariosParaBloqueMasInfo() as $pde_cotizacion_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_cotizacion_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_cotizacion_destinatario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_cotizacion_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_cotizacion_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_cotizacion_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_cotizacion_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_cotizacion_destinatario->getId() ?>" archivo="ajax/modulos/pde_cotizacion_destinatario/pde_cotizacion_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCotizacionDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_COTIZACION_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCotizacionDestinatario') ?>">
                                <a href="pde_cotizacion_destinatario_alta.php?id=<?php echo $pde_cotizacion_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_COTIZACION_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_cotizacion_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCotizacionDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pde_cotizacion_destinatario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PdeCotizacionDestinatarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_cotizacion_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar PdeCotizacionDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_OC_DESTINATARIO')){ ?>
	<div id="tab_pde_oc_destinatario" class="bloque-relacion pde_oc_destinatario">
		
            <h4><?php Lang::_lang('PdeOcDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPdeOcDestinatariosParaBloqueMasInfo() as $pde_oc_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_destinatario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_destinatario->getId() ?>" archivo="ajax/modulos/pde_oc_destinatario/pde_oc_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcDestinatario') ?>">
                                <a href="pde_oc_destinatario_alta.php?id=<?php echo $pde_oc_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_OC_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_destinatario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcDestinatarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_RECEPCION_DESTINATARIO')){ ?>
	<div id="tab_pde_recepcion_destinatario" class="bloque-relacion pde_recepcion_destinatario">
		
            <h4><?php Lang::_lang('PdeRecepcionDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPdeRecepcionDestinatariosParaBloqueMasInfo() as $pde_recepcion_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recepcion_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recepcion_destinatario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recepcion_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recepcion_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recepcion_destinatario->getId() ?>" archivo="ajax/modulos/pde_recepcion_destinatario/pde_recepcion_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecepcionDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcionDestinatario') ?>">
                                <a href="pde_recepcion_destinatario_alta.php?id=<?php echo $pde_recepcion_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_RECEPCION_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcionDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion_destinatario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcionDestinatarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recepcion_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecepcionDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_CENTRO_RECEPCION_US_USUARIO')){ ?>
	<div id="tab_pde_centro_recepcion_us_usuario" class="bloque-relacion pde_centro_recepcion_us_usuario">
		
            <h4><?php Lang::_lang('PdeCentroRecepcionUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPdeCentroRecepcionUsUsuariosParaBloqueMasInfo() as $pde_centro_recepcion_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_recepcion_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_recepcion_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_recepcion_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_recepcion_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_recepcion_us_usuario->getId() ?>" archivo="ajax/modulos/pde_centro_recepcion_us_usuario/pde_centro_recepcion_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroRecepcionUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroRecepcionUsUsuario') ?>">
                                <a href="pde_centro_recepcion_us_usuario_alta.php?id=<?php echo $pde_centro_recepcion_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_CENTRO_RECEPCION_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_recepcion_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroRecepcionUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_recepcion_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroRecepcionUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_recepcion_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroRecepcionUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_CENTRO_PEDIDO_US_USUARIO')){ ?>
	<div id="tab_pde_centro_pedido_us_usuario" class="bloque-relacion pde_centro_pedido_us_usuario">
		
            <h4><?php Lang::_lang('PdeCentroPedidoUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPdeCentroPedidoUsUsuariosParaBloqueMasInfo() as $pde_centro_pedido_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_pedido_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_pedido_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_pedido_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_centro_pedido_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_pedido_us_usuario->getId() ?>" archivo="ajax/modulos/pde_centro_pedido_us_usuario/pde_centro_pedido_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroPedidoUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroPedidoUsUsuario') ?>">
                                <a href="pde_centro_pedido_us_usuario_alta.php?id=<?php echo $pde_centro_pedido_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_CENTRO_PEDIDO_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_pedido_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroPedidoUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_pedido_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroPedidoUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_pedido_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroPedidoUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_OC_RECLAMO_DESTINATARIO')){ ?>
	<div id="tab_pde_oc_reclamo_destinatario" class="bloque-relacion pde_oc_reclamo_destinatario">
		
            <h4><?php Lang::_lang('PdeOcReclamoDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPdeOcReclamoDestinatariosParaBloqueMasInfo() as $pde_oc_reclamo_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_reclamo_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_reclamo_destinatario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_reclamo_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_reclamo_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_reclamo_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_reclamo_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_reclamo_destinatario->getId() ?>" archivo="ajax/modulos/pde_oc_reclamo_destinatario/pde_oc_reclamo_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcReclamoDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcReclamoDestinatario') ?>">
                                <a href="pde_oc_reclamo_destinatario_alta.php?id=<?php echo $pde_oc_reclamo_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PDE_OC_RECLAMO_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_reclamo_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcReclamoDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_reclamo_destinatario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcReclamoDestinatarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_reclamo_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcReclamoDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_NOV_NOVEDAD_DESTINATARIO')){ ?>
	<div id="tab_nov_novedad_destinatario" class="bloque-relacion nov_novedad_destinatario">
		
            <h4><?php Lang::_lang('NovNovedadDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getNovNovedadDestinatariosParaBloqueMasInfo() as $nov_novedad_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($nov_novedad_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($nov_novedad_destinatario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($nov_novedad_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($nov_novedad_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $nov_novedad_destinatario->getId() ?>" archivo="ajax/modulos/nov_novedad_destinatario/nov_novedad_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NovNovedadDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NovNovedadDestinatario') ?>">
                                <a href="nov_novedad_destinatario_alta.php?id=<?php echo $nov_novedad_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_NOV_NOVEDAD_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($nov_novedad_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NovNovedadDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $nov_novedad_destinatario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver NovNovedadDestinatarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="nov_novedad_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar NovNovedadDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_NOV_NOVEDAD_OBSERVADO')){ ?>
	<div id="tab_nov_novedad_observado" class="bloque-relacion nov_novedad_observado">
		
            <h4><?php Lang::_lang('NovNovedadObservado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getNovNovedadObservadosParaBloqueMasInfo() as $nov_novedad_observado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($nov_novedad_observado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($nov_novedad_observado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($nov_novedad_observado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_observado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($nov_novedad_observado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_observado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $nov_novedad_observado->getId() ?>" archivo="ajax/modulos/nov_novedad_observado/nov_novedad_observado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NovNovedadObservado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_OBSERVADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NovNovedadObservado') ?>">
                                <a href="nov_novedad_observado_alta.php?id=<?php echo $nov_novedad_observado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_NOV_NOVEDAD_OBSERVADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($nov_novedad_observado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NovNovedadObservado::getFiltrosArrGral() ?>&arr=<?php echo $nov_novedad_observado->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver NovNovedadObservados de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="nov_novedad_observado_alta.php" >
                            <?php Lang::_lang('Agregar NovNovedadObservado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_NOV_NOVEDAD_LEIDO')){ ?>
	<div id="tab_nov_novedad_leido" class="bloque-relacion nov_novedad_leido">
		
            <h4><?php Lang::_lang('NovNovedadLeido') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getNovNovedadLeidosParaBloqueMasInfo() as $nov_novedad_leido){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($nov_novedad_leido->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($nov_novedad_leido->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($nov_novedad_leido->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_leido->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($nov_novedad_leido->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_leido->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $nov_novedad_leido->getId() ?>" archivo="ajax/modulos/nov_novedad_leido/nov_novedad_leido_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NovNovedadLeido') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_LEIDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NovNovedadLeido') ?>">
                                <a href="nov_novedad_leido_alta.php?id=<?php echo $nov_novedad_leido->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_NOV_NOVEDAD_LEIDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($nov_novedad_leido){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NovNovedadLeido::getFiltrosArrGral() ?>&arr=<?php echo $nov_novedad_leido->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver NovNovedadLeidos de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="nov_novedad_leido_alta.php" >
                            <?php Lang::_lang('Agregar NovNovedadLeido') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_ALT_ALERTA_US_USUARIO')){ ?>
	<div id="tab_alt_alerta_us_usuario" class="bloque-relacion alt_alerta_us_usuario">
		
            <h4><?php Lang::_lang('AltAlertaUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getAltAlertaUsUsuariosParaBloqueMasInfo() as $alt_alerta_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($alt_alerta_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($alt_alerta_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($alt_alerta_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_alerta_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $alt_alerta_us_usuario->getId() ?>" archivo="ajax/modulos/alt_alerta_us_usuario/alt_alerta_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AltAlertaUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltAlertaUsUsuario') ?>">
                                <a href="alt_alerta_us_usuario_alta.php?id=<?php echo $alt_alerta_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_ALT_ALERTA_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($alt_alerta_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AltAlertaUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $alt_alerta_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver AltAlertaUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="alt_alerta_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar AltAlertaUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_ALT_CONTROL_US_USUARIO')){ ?>
	<div id="tab_alt_control_us_usuario" class="bloque-relacion alt_control_us_usuario">
		
            <h4><?php Lang::_lang('AltControlUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getAltControlUsUsuariosParaBloqueMasInfo() as $alt_control_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($alt_control_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($alt_control_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($alt_control_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_control_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $alt_control_us_usuario->getId() ?>" archivo="ajax/modulos/alt_control_us_usuario/alt_control_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AltControlUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltControlUsUsuario') ?>">
                                <a href="alt_control_us_usuario_alta.php?id=<?php echo $alt_control_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_ALT_CONTROL_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($alt_control_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AltControlUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $alt_control_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver AltControlUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="alt_control_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar AltControlUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_FND_CAJERO_US_USUARIO')){ ?>
	<div id="tab_fnd_cajero_us_usuario" class="bloque-relacion fnd_cajero_us_usuario">
		
            <h4><?php Lang::_lang('FndCajeroUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getFndCajeroUsUsuariosParaBloqueMasInfo() as $fnd_cajero_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_cajero_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_cajero_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_cajero_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_cajero_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_cajero_us_usuario->getId() ?>" archivo="ajax/modulos/fnd_cajero_us_usuario/fnd_cajero_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajeroUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajeroUsUsuario') ?>">
                                <a href="fnd_cajero_us_usuario_alta.php?id=<?php echo $fnd_cajero_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_FND_CAJERO_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_cajero_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajeroUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $fnd_cajero_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver FndCajeroUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_cajero_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar FndCajeroUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_APP_MOV_INSTALACION')){ ?>
	<div id="tab_app_mov_instalacion" class="bloque-relacion app_mov_instalacion">
		
            <h4><?php Lang::_lang('AppMovInstalacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getAppMovInstalacionsParaBloqueMasInfo() as $app_mov_instalacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($app_mov_instalacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($app_mov_instalacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($app_mov_instalacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_instalacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($app_mov_instalacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_instalacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $app_mov_instalacion->getId() ?>" archivo="ajax/modulos/app_mov_instalacion/app_mov_instalacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AppMovInstalacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('APP_MOV_INSTALACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AppMovInstalacion') ?>">
                                <a href="app_mov_instalacion_alta.php?id=<?php echo $app_mov_instalacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_APP_MOV_INSTALACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($app_mov_instalacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AppMovInstalacion::getFiltrosArrGral() ?>&arr=<?php echo $app_mov_instalacion->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver AppMovInstalacions de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="app_mov_instalacion_alta.php" >
                            <?php Lang::_lang('Agregar AppMovInstalacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_OPE_CHOFER_US_USUARIO')){ ?>
	<div id="tab_ope_chofer_us_usuario" class="bloque-relacion ope_chofer_us_usuario">
		
            <h4><?php Lang::_lang('OpeChoferUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getOpeChoferUsUsuariosParaBloqueMasInfo() as $ope_chofer_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ope_chofer_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ope_chofer_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ope_chofer_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_chofer_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ope_chofer_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_chofer_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ope_chofer_us_usuario->getId() ?>" archivo="ajax/modulos/ope_chofer_us_usuario/ope_chofer_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OpeChoferUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OPE_CHOFER_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OpeChoferUsUsuario') ?>">
                                <a href="ope_chofer_us_usuario_alta.php?id=<?php echo $ope_chofer_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_OPE_CHOFER_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ope_chofer_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OpeChoferUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $ope_chofer_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver OpeChoferUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ope_chofer_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar OpeChoferUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_VTA_PRESUPUESTO_MENSAJE')){ ?>
	<div id="tab_vta_presupuesto_mensaje" class="bloque-relacion vta_presupuesto_mensaje">
		
            <h4><?php Lang::_lang('VtaPresupuestoMensaje') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getVtaPresupuestoMensajesParaBloqueMasInfo() as $vta_presupuesto_mensaje){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto_mensaje->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto_mensaje->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto_mensaje->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_mensaje->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto_mensaje->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_mensaje->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto_mensaje->getId() ?>" archivo="ajax/modulos/vta_presupuesto_mensaje/vta_presupuesto_mensaje_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuestoMensaje') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_MENSAJE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuestoMensaje') ?>">
                                <a href="vta_presupuesto_mensaje_alta.php?id=<?php echo $vta_presupuesto_mensaje->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_VTA_PRESUPUESTO_MENSAJE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto_mensaje){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuestoMensaje::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_mensaje->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestoMensajes de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_mensaje_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuestoMensaje') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PER_PERSONA_US_USUARIO')){ ?>
	<div id="tab_per_persona_us_usuario" class="bloque-relacion per_persona_us_usuario">
		
            <h4><?php Lang::_lang('PerPersonaUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPerPersonaUsUsuariosParaBloqueMasInfo() as $per_persona_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_persona_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_persona_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_persona_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_persona_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_persona_us_usuario->getId() ?>" archivo="ajax/modulos/per_persona_us_usuario/per_persona_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerPersonaUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerPersonaUsUsuario') ?>">
                                <a href="per_persona_us_usuario_alta.php?id=<?php echo $per_persona_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PER_PERSONA_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_persona_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerPersonaUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $per_persona_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PerPersonaUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_persona_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PerPersonaUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PLN_JORNADA_US_USUARIO')){ ?>
	<div id="tab_pln_jornada_us_usuario" class="bloque-relacion pln_jornada_us_usuario">
		
            <h4><?php Lang::_lang('PlnJornadaUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getPlnJornadaUsUsuariosParaBloqueMasInfo() as $pln_jornada_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pln_jornada_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pln_jornada_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pln_jornada_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_jornada_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pln_jornada_us_usuario->getId() ?>" archivo="ajax/modulos/pln_jornada_us_usuario/pln_jornada_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PlnJornadaUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PlnJornadaUsUsuario') ?>">
                                <a href="pln_jornada_us_usuario_alta.php?id=<?php echo $pln_jornada_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_PLN_JORNADA_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pln_jornada_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PlnJornadaUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $pln_jornada_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver PlnJornadaUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pln_jornada_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PlnJornadaUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_OPE_OPERARIO_US_USUARIO')){ ?>
	<div id="tab_ope_operario_us_usuario" class="bloque-relacion ope_operario_us_usuario">
		
            <h4><?php Lang::_lang('OpeOperarioUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsUsuario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_usuario->getOpeOperarioUsUsuariosParaBloqueMasInfo() as $ope_operario_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ope_operario_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ope_operario_us_usuario->getDescripcionVinculante('UsUsuario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ope_operario_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_operario_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ope_operario_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_operario_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ope_operario_us_usuario->getId() ?>" archivo="ajax/modulos/ope_operario_us_usuario/ope_operario_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OpeOperarioUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OpeOperarioUsUsuario') ?>">
                                <a href="ope_operario_us_usuario_alta.php?id=<?php echo $ope_operario_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_MASINFO_OPE_OPERARIO_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ope_operario_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OpeOperarioUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $ope_operario_us_usuario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>" >
                                <?php Lang::_lang('Ver OpeOperarioUsUsuarios de ') ?> <strong><?php echo($us_usuario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ope_operario_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar OpeOperarioUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

