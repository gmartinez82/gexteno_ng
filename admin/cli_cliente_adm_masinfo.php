<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_cliente_id = Gral::getVars(2, 'id');
$cli_cliente = CliCliente::getOxId($cli_cliente_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getGralTipoPersoneria()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CliTipoCliente') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCliTipoCliente()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getRazonSocial())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Nro Casa') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getNumeroCasa())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getEmail())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo Postal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCodigoPostal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getGeoLocalidad()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GeoZona') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getGeoZona()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCodigo())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CliGrupo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCliGrupo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CliCategoria') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCliCategoria()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Limite Ctacte Imp') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getLimiteCtacteImporte())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Limite Ctacte Dias') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getLimiteCtacteDias())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Tipo Gestion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCliClienteTipoGestion()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Periodicidad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCliClientePeriodicidadGestion()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Tipo Estado') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCliClienteTipoEstado()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Tipo Estado Venta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCliClienteTipoEstadoVenta()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Tipo Estado Cobro') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCliClienteTipoEstadoCobro()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Tipo Estado Cuenta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCliClienteTipoEstadoCuenta()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Tipo Estado Satisfaccion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getCliClienteTipoEstadoSatisfaccion()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('IVA Exceptuado') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($cli_cliente->getIvaExceptuado())->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Datos Migracion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getDatosMigracion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Claves') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente->getClaves())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CLIENTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_cliente->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CLIENTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_cliente->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_SUCURSAL_VALORACION')){ ?>
            <li><a href="#tab_gral_sucursal_valoracion"><?php Lang::_lang('GralSucursalValoracions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_SUCURSAL_VALORACION_AGRUPACION')){ ?>
            <li><a href="#tab_gral_sucursal_valoracion_agrupacion"><?php Lang::_lang('GralSucursalValoracionAgrupacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_SUCURSAL_CLI_CLIENTE')){ ?>
            <li><a href="#tab_gral_sucursal_cli_cliente"><?php Lang::_lang('GralSucursalCliClientes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION')){ ?>
            <li><a href="#tab_gral_ruta_geo_localidad_cli_centro_recepcion"><?php Lang::_lang('GralRutaGeoLocalidads') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_ZONA_CLI_CLIENTE')){ ?>
            <li><a href="#tab_gral_zona_cli_cliente"><?php Lang::_lang('GralZonaCliClientes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_RESUMEN_CUENTA')){ ?>
            <li><a href="#tab_cli_cliente_resumen_cuenta"><?php Lang::_lang('CliClienteResumenCuentas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO')){ ?>
            <li><a href="#tab_cli_cliente_estado"><?php Lang::_lang('CliClienteEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_VENTA')){ ?>
            <li><a href="#tab_cli_cliente_estado_venta"><?php Lang::_lang('CliClienteEstadoVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_COBRO')){ ?>
            <li><a href="#tab_cli_cliente_estado_cobro"><?php Lang::_lang('CliClienteEstadoCobro') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_CUENTA')){ ?>
            <li><a href="#tab_cli_cliente_estado_cuenta"><?php Lang::_lang('CliClienteEstadoCuenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_SATISFACCION')){ ?>
            <li><a href="#tab_cli_cliente_estado_satisfaccion"><?php Lang::_lang('CliClienteEstadoSatisfaccion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_TELEFONO')){ ?>
            <li><a href="#tab_cli_telefono"><?php Lang::_lang('CliTelefono') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_EMAIL')){ ?>
            <li><a href="#tab_cli_email"><?php Lang::_lang('CliEmail') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_DOMICILIO')){ ?>
            <li><a href="#tab_cli_domicilio"><?php Lang::_lang('CliDomicilio') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_CLI_RUBRO')){ ?>
            <li><a href="#tab_cli_cliente_cli_rubro"><?php Lang::_lang('CliClienteCliRubro') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CENTRO_RECEPCION')){ ?>
            <li><a href="#tab_cli_centro_recepcion"><?php Lang::_lang('CliCentroRecepcion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CENTRO_PEDIDO')){ ?>
            <li><a href="#tab_cli_centro_pedido"><?php Lang::_lang('CliCentroPedido') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_MEDIO_DIGITAL')){ ?>
            <li><a href="#tab_cli_medio_digital"><?php Lang::_lang('CliMedioDigital') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_VENDEDOR')){ ?>
            <li><a href="#tab_cli_cliente_vta_vendedor"><?php Lang::_lang('CliClienteVtaVendedor') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_INS_TIPO_LISTA_PRECIO')){ ?>
            <li><a href="#tab_cli_cliente_ins_tipo_lista_precio"><?php Lang::_lang('CliClienteInsTipoListaPrecio') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_PREVENTISTA')){ ?>
            <li><a href="#tab_cli_cliente_vta_preventista"><?php Lang::_lang('CliClienteVtaPreventista') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_COMPRADOR')){ ?>
            <li><a href="#tab_cli_cliente_vta_comprador"><?php Lang::_lang('CliClienteVtaComprador') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_GRAL_FP_AGRUPACION')){ ?>
            <li><a href="#tab_cli_cliente_gral_fp_agrupacion"><?php Lang::_lang('CliClienteGralFpAgrupacion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_GRAL_FP_CUOTA')){ ?>
            <li><a href="#tab_cli_cliente_gral_fp_cuota"><?php Lang::_lang('CliClienteGralFpCuota') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_GRAL_ACTIVIDAD')){ ?>
            <li><a href="#tab_cli_cliente_gral_actividad"><?php Lang::_lang('CliClienteGralActividads') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_PUNTO_VENTA')){ ?>
            <li><a href="#tab_cli_cliente_vta_punto_venta"><?php Lang::_lang('CliClienteVtaPuntoVentas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_INFO_SIFEN')){ ?>
            <li><a href="#tab_cli_cliente_info_sifen"><?php Lang::_lang('CliClienteInfoSifens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_VENDEDOR_VALORACION')){ ?>
            <li><a href="#tab_vta_vendedor_valoracion"><?php Lang::_lang('VtaVendedorValoracions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_VENDEDOR_VALORACION_AGRUPACION')){ ?>
            <li><a href="#tab_vta_vendedor_valoracion_agrupacion"><?php Lang::_lang('VtaVendedorValoracionAgrupacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_PRESUPUESTO')){ ?>
            <li><a href="#tab_vta_presupuesto"><?php Lang::_lang('VtaPresupuesto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_TRIBUTO_EXENCION')){ ?>
            <li><a href="#tab_vta_tributo_exencion"><?php Lang::_lang('VtaTributoExencions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_vta_nota_credito"><?php Lang::_lang('VtaNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_NOTA_DEBITO')){ ?>
            <li><a href="#tab_vta_nota_debito"><?php Lang::_lang('VtaNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_recibo"><?php Lang::_lang('VtaRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_REMITO')){ ?>
            <li><a href="#tab_vta_remito"><?php Lang::_lang('VtaRemito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_FACTURA')){ ?>
            <li><a href="#tab_vta_factura"><?php Lang::_lang('VtaFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_AJUSTE_DEBE')){ ?>
            <li><a href="#tab_vta_ajuste_debe"><?php Lang::_lang('VtaAjusteDebes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_AJUSTE_HABER')){ ?>
            <li><a href="#tab_vta_ajuste_haber"><?php Lang::_lang('VtaAjusteHabers') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_REMITO_AJUSTE')){ ?>
            <li><a href="#tab_vta_remito_ajuste"><?php Lang::_lang('VtaRemitoAjuste') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CAT_CATALOGO_CLI_CLIENTE')){ ?>
            <li><a href="#tab_cat_catalogo_cli_cliente"><?php Lang::_lang('CatCatalogoCliClientes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA')){ ?>
            <li><a href="#tab_cli_cliente_tienda"><?php Lang::_lang('CliClienteTienda') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA_CLAVE')){ ?>
            <li><a href="#tab_cli_cliente_tienda_clave"><?php Lang::_lang('CliClienteTiendaClave') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA_LOGIN')){ ?>
            <li><a href="#tab_cli_cliente_tienda_login"><?php Lang::_lang('CliClienteTiendaLogins') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA_NAVEGACION')){ ?>
            <li><a href="#tab_cli_cliente_tienda_navegacion"><?php Lang::_lang('CliClienteTiendaNavegacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_TND_TIENDA_BUSQUEDA')){ ?>
            <li><a href="#tab_tnd_tienda_busqueda"><?php Lang::_lang('TndTiendaBusquedas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_PRD_ORDEN_TRABAJO')){ ?>
            <li><a href="#tab_prd_orden_trabajo"><?php Lang::_lang('PrdOrdenTrabajos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_SUCURSAL_VALORACION')){ ?>
	<div id="tab_gral_sucursal_valoracion" class="bloque-relacion gral_sucursal_valoracion">
		
            <h4><?php Lang::_lang('GralSucursalValoracion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getGralSucursalValoracionsParaBloqueMasInfo() as $gral_sucursal_valoracion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_sucursal_valoracion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_sucursal_valoracion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_sucursal_valoracion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_sucursal_valoracion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_sucursal_valoracion->getId() ?>" archivo="ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralSucursalValoracion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalValoracion') ?>">
                                <a href="gral_sucursal_valoracion_alta.php?id=<?php echo $gral_sucursal_valoracion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_SUCURSAL_VALORACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_sucursal_valoracion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralSucursalValoracion::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_valoracion->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver GralSucursalValoracions de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_sucursal_valoracion_alta.php" >
                            <?php Lang::_lang('Agregar GralSucursalValoracion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_SUCURSAL_VALORACION_AGRUPACION')){ ?>
	<div id="tab_gral_sucursal_valoracion_agrupacion" class="bloque-relacion gral_sucursal_valoracion_agrupacion">
		
            <h4><?php Lang::_lang('GralSucursalValoracionAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getGralSucursalValoracionAgrupacionsParaBloqueMasInfo() as $gral_sucursal_valoracion_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_sucursal_valoracion_agrupacion->getId() ?>" archivo="ajax/modulos/gral_sucursal_valoracion_agrupacion/gral_sucursal_valoracion_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralSucursalValoracionAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalValoracionAgrupacion') ?>">
                                <a href="gral_sucursal_valoracion_agrupacion_alta.php?id=<?php echo $gral_sucursal_valoracion_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_SUCURSAL_VALORACION_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_sucursal_valoracion_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralSucursalValoracionAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_valoracion_agrupacion->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver GralSucursalValoracionAgrupacions de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_sucursal_valoracion_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar GralSucursalValoracionAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_SUCURSAL_CLI_CLIENTE')){ ?>
	<div id="tab_gral_sucursal_cli_cliente" class="bloque-relacion gral_sucursal_cli_cliente">
		
            <h4><?php Lang::_lang('GralSucursalCliCliente') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getGralSucursalCliClientesParaBloqueMasInfo() as $gral_sucursal_cli_cliente){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_sucursal_cli_cliente->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_sucursal_cli_cliente->getDescripcionVinculante('CliCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_sucursal_cli_cliente->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_cli_cliente->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_sucursal_cli_cliente->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_cli_cliente->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_sucursal_cli_cliente->getId() ?>" archivo="ajax/modulos/gral_sucursal_cli_cliente/gral_sucursal_cli_cliente_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralSucursalCliCliente') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_CLI_CLIENTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalCliCliente') ?>">
                                <a href="gral_sucursal_cli_cliente_alta.php?id=<?php echo $gral_sucursal_cli_cliente->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_SUCURSAL_CLI_CLIENTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_sucursal_cli_cliente){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralSucursalCliCliente::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_cli_cliente->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver GralSucursalCliClientes de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_sucursal_cli_cliente_alta.php" >
                            <?php Lang::_lang('Agregar GralSucursalCliCliente') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION')){ ?>
	<div id="tab_gral_ruta_geo_localidad_cli_centro_recepcion" class="bloque-relacion gral_ruta_geo_localidad_cli_centro_recepcion">
		
            <h4><?php Lang::_lang('GralRutaGeoLocalidadCliCentroRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getGralRutaGeoLocalidadCliCentroRecepcionsParaBloqueMasInfo() as $gral_ruta_geo_localidad_cli_centro_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad_cli_centro_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad_cli_centro_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion->getId() ?>" archivo="ajax/modulos/gral_ruta_geo_localidad_cli_centro_recepcion/gral_ruta_geo_localidad_cli_centro_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralRutaGeoLocalidadCliCentroRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralRutaGeoLocalidadCliCentroRecepcion') ?>">
                                <a href="gral_ruta_geo_localidad_cli_centro_recepcion_alta.php?id=<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_ruta_geo_localidad_cli_centro_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralRutaGeoLocalidadCliCentroRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver GralRutaGeoLocalidadCliCentroRecepcions de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_ruta_geo_localidad_cli_centro_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar GralRutaGeoLocalidadCliCentroRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_ZONA_CLI_CLIENTE')){ ?>
	<div id="tab_gral_zona_cli_cliente" class="bloque-relacion gral_zona_cli_cliente">
		
            <h4><?php Lang::_lang('GralZonaCliCliente') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getGralZonaCliClientesParaBloqueMasInfo() as $gral_zona_cli_cliente){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_zona_cli_cliente->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_zona_cli_cliente->getDescripcionVinculante('CliCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_zona_cli_cliente->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_zona_cli_cliente->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_zona_cli_cliente->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_zona_cli_cliente->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_zona_cli_cliente->getId() ?>" archivo="ajax/modulos/gral_zona_cli_cliente/gral_zona_cli_cliente_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralZonaCliCliente') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_ZONA_CLI_CLIENTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralZonaCliCliente') ?>">
                                <a href="gral_zona_cli_cliente_alta.php?id=<?php echo $gral_zona_cli_cliente->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_GRAL_ZONA_CLI_CLIENTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_zona_cli_cliente){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralZonaCliCliente::getFiltrosArrGral() ?>&arr=<?php echo $gral_zona_cli_cliente->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver GralZonaCliClientes de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_zona_cli_cliente_alta.php" >
                            <?php Lang::_lang('Agregar GralZonaCliCliente') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_RESUMEN_CUENTA')){ ?>
	<div id="tab_cli_cliente_resumen_cuenta" class="bloque-relacion cli_cliente_resumen_cuenta">
		
            <h4><?php Lang::_lang('CliClienteResumenCuenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteResumenCuentasParaBloqueMasInfo() as $cli_cliente_resumen_cuenta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_resumen_cuenta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_resumen_cuenta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_resumen_cuenta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_resumen_cuenta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_resumen_cuenta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_resumen_cuenta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_resumen_cuenta->getId() ?>" archivo="ajax/modulos/cli_cliente_resumen_cuenta/cli_cliente_resumen_cuenta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteResumenCuenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_RESUMEN_CUENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteResumenCuenta') ?>">
                                <a href="cli_cliente_resumen_cuenta_alta.php?id=<?php echo $cli_cliente_resumen_cuenta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_RESUMEN_CUENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_resumen_cuenta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteResumenCuenta::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_resumen_cuenta->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteResumenCuentas de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_resumen_cuenta_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteResumenCuenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO')){ ?>
	<div id="tab_cli_cliente_estado" class="bloque-relacion cli_cliente_estado">
		
            <h4><?php Lang::_lang('CliClienteEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteEstadosParaBloqueMasInfo() as $cli_cliente_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_estado->getId() ?>" archivo="ajax/modulos/cli_cliente_estado/cli_cliente_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteEstado') ?>">
                                <a href="cli_cliente_estado_alta.php?id=<?php echo $cli_cliente_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteEstado::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_estado->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteEstados de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_estado_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_VENTA')){ ?>
	<div id="tab_cli_cliente_estado_venta" class="bloque-relacion cli_cliente_estado_venta">
		
            <h4><?php Lang::_lang('CliClienteEstadoVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteEstadoVentasParaBloqueMasInfo() as $cli_cliente_estado_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_estado_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_estado_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_estado_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_estado_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_estado_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_estado_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_estado_venta->getId() ?>" archivo="ajax/modulos/cli_cliente_estado_venta/cli_cliente_estado_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteEstadoVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ESTADO_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteEstadoVenta') ?>">
                                <a href="cli_cliente_estado_venta_alta.php?id=<?php echo $cli_cliente_estado_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_estado_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteEstadoVenta::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_estado_venta->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteEstadoVentas de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_estado_venta_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteEstadoVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_COBRO')){ ?>
	<div id="tab_cli_cliente_estado_cobro" class="bloque-relacion cli_cliente_estado_cobro">
		
            <h4><?php Lang::_lang('CliClienteEstadoCobro') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteEstadoCobrosParaBloqueMasInfo() as $cli_cliente_estado_cobro){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_estado_cobro->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_estado_cobro->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_estado_cobro->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_estado_cobro->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_estado_cobro->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_estado_cobro->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_estado_cobro->getId() ?>" archivo="ajax/modulos/cli_cliente_estado_cobro/cli_cliente_estado_cobro_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteEstadoCobro') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ESTADO_COBRO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteEstadoCobro') ?>">
                                <a href="cli_cliente_estado_cobro_alta.php?id=<?php echo $cli_cliente_estado_cobro->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_COBRO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_estado_cobro){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteEstadoCobro::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_estado_cobro->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteEstadoCobros de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_estado_cobro_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteEstadoCobro') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_CUENTA')){ ?>
	<div id="tab_cli_cliente_estado_cuenta" class="bloque-relacion cli_cliente_estado_cuenta">
		
            <h4><?php Lang::_lang('CliClienteEstadoCuenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteEstadoCuentasParaBloqueMasInfo() as $cli_cliente_estado_cuenta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_estado_cuenta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_estado_cuenta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_estado_cuenta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_estado_cuenta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_estado_cuenta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_estado_cuenta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_estado_cuenta->getId() ?>" archivo="ajax/modulos/cli_cliente_estado_cuenta/cli_cliente_estado_cuenta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteEstadoCuenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ESTADO_CUENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteEstadoCuenta') ?>">
                                <a href="cli_cliente_estado_cuenta_alta.php?id=<?php echo $cli_cliente_estado_cuenta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_CUENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_estado_cuenta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteEstadoCuenta::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_estado_cuenta->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteEstadoCuentas de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_estado_cuenta_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteEstadoCuenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_SATISFACCION')){ ?>
	<div id="tab_cli_cliente_estado_satisfaccion" class="bloque-relacion cli_cliente_estado_satisfaccion">
		
            <h4><?php Lang::_lang('CliClienteEstadoSatisfaccion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteEstadoSatisfaccionsParaBloqueMasInfo() as $cli_cliente_estado_satisfaccion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_estado_satisfaccion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_estado_satisfaccion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_estado_satisfaccion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_estado_satisfaccion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_estado_satisfaccion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_estado_satisfaccion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_estado_satisfaccion->getId() ?>" archivo="ajax/modulos/cli_cliente_estado_satisfaccion/cli_cliente_estado_satisfaccion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteEstadoSatisfaccion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ESTADO_SATISFACCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteEstadoSatisfaccion') ?>">
                                <a href="cli_cliente_estado_satisfaccion_alta.php?id=<?php echo $cli_cliente_estado_satisfaccion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_ESTADO_SATISFACCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_estado_satisfaccion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteEstadoSatisfaccion::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_estado_satisfaccion->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteEstadoSatisfaccions de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_estado_satisfaccion_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteEstadoSatisfaccion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_TELEFONO')){ ?>
	<div id="tab_cli_telefono" class="bloque-relacion cli_telefono">
		
            <h4><?php Lang::_lang('CliTelefono') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliTelefonosParaBloqueMasInfo() as $cli_telefono){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_telefono->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_telefono->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_telefono->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_telefono->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_telefono->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_telefono->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_telefono->getId() ?>" archivo="ajax/modulos/cli_telefono/cli_telefono_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliTelefono') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_TELEFONO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliTelefono') ?>">
                                <a href="cli_telefono_alta.php?id=<?php echo $cli_telefono->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_TELEFONO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_telefono){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliTelefono::getFiltrosArrGral() ?>&arr=<?php echo $cli_telefono->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliTelefonos de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_telefono_alta.php" >
                            <?php Lang::_lang('Agregar CliTelefono') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_EMAIL')){ ?>
	<div id="tab_cli_email" class="bloque-relacion cli_email">
		
            <h4><?php Lang::_lang('CliEmail') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliEmailsParaBloqueMasInfo() as $cli_email){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_email->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_email->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_email->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_email->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_email->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_email->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_email->getId() ?>" archivo="ajax/modulos/cli_email/cli_email_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliEmail') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_EMAIL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliEmail') ?>">
                                <a href="cli_email_alta.php?id=<?php echo $cli_email->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_EMAIL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_email){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliEmail::getFiltrosArrGral() ?>&arr=<?php echo $cli_email->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliEmails de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_email_alta.php" >
                            <?php Lang::_lang('Agregar CliEmail') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_DOMICILIO')){ ?>
	<div id="tab_cli_domicilio" class="bloque-relacion cli_domicilio">
		
            <h4><?php Lang::_lang('CliDomicilio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliDomiciliosParaBloqueMasInfo() as $cli_domicilio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_domicilio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_domicilio->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_domicilio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_domicilio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_domicilio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_domicilio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_domicilio->getId() ?>" archivo="ajax/modulos/cli_domicilio/cli_domicilio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliDomicilio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_DOMICILIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliDomicilio') ?>">
                                <a href="cli_domicilio_alta.php?id=<?php echo $cli_domicilio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_DOMICILIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_domicilio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliDomicilio::getFiltrosArrGral() ?>&arr=<?php echo $cli_domicilio->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliDomicilios de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_domicilio_alta.php" >
                            <?php Lang::_lang('Agregar CliDomicilio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_CLI_RUBRO')){ ?>
	<div id="tab_cli_cliente_cli_rubro" class="bloque-relacion cli_cliente_cli_rubro">
		
            <h4><?php Lang::_lang('CliClienteCliRubro') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteCliRubrosParaBloqueMasInfo() as $cli_cliente_cli_rubro){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_cli_rubro->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_cli_rubro->getDescripcionVinculante('CliCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_cli_rubro->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_cli_rubro->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_cli_rubro->getId() ?>" archivo="ajax/modulos/cli_cliente_cli_rubro/cli_cliente_cli_rubro_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteCliRubro') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_CLI_RUBRO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteCliRubro') ?>">
                                <a href="cli_cliente_cli_rubro_alta.php?id=<?php echo $cli_cliente_cli_rubro->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_CLI_RUBRO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_cli_rubro){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteCliRubro::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_cli_rubro->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteCliRubros de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_cli_rubro_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteCliRubro') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CENTRO_RECEPCION')){ ?>
	<div id="tab_cli_centro_recepcion" class="bloque-relacion cli_centro_recepcion">
		
            <h4><?php Lang::_lang('CliCentroRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliCentroRecepcionsParaBloqueMasInfo() as $cli_centro_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_centro_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_centro_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_centro_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_centro_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_centro_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_centro_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_centro_recepcion->getId() ?>" archivo="ajax/modulos/cli_centro_recepcion/cli_centro_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliCentroRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CENTRO_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCentroRecepcion') ?>">
                                <a href="cli_centro_recepcion_alta.php?id=<?php echo $cli_centro_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CENTRO_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_centro_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliCentroRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $cli_centro_recepcion->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliCentroRecepcions de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_centro_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar CliCentroRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CENTRO_PEDIDO')){ ?>
	<div id="tab_cli_centro_pedido" class="bloque-relacion cli_centro_pedido">
		
            <h4><?php Lang::_lang('CliCentroPedido') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliCentroPedidosParaBloqueMasInfo() as $cli_centro_pedido){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_centro_pedido->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_centro_pedido->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_centro_pedido->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_centro_pedido->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_centro_pedido->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_centro_pedido->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_centro_pedido->getId() ?>" archivo="ajax/modulos/cli_centro_pedido/cli_centro_pedido_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliCentroPedido') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CENTRO_PEDIDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCentroPedido') ?>">
                                <a href="cli_centro_pedido_alta.php?id=<?php echo $cli_centro_pedido->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CENTRO_PEDIDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_centro_pedido){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliCentroPedido::getFiltrosArrGral() ?>&arr=<?php echo $cli_centro_pedido->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliCentroPedidos de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_centro_pedido_alta.php" >
                            <?php Lang::_lang('Agregar CliCentroPedido') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_MEDIO_DIGITAL')){ ?>
	<div id="tab_cli_medio_digital" class="bloque-relacion cli_medio_digital">
		
            <h4><?php Lang::_lang('CliMedioDigital') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliMedioDigitalsParaBloqueMasInfo() as $cli_medio_digital){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_medio_digital->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_medio_digital->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_medio_digital->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_medio_digital->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_medio_digital->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_medio_digital->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_medio_digital->getId() ?>" archivo="ajax/modulos/cli_medio_digital/cli_medio_digital_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliMedioDigital') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_MEDIO_DIGITAL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliMedioDigital') ?>">
                                <a href="cli_medio_digital_alta.php?id=<?php echo $cli_medio_digital->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_MEDIO_DIGITAL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_medio_digital){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliMedioDigital::getFiltrosArrGral() ?>&arr=<?php echo $cli_medio_digital->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliMedioDigitals de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_medio_digital_alta.php" >
                            <?php Lang::_lang('Agregar CliMedioDigital') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_VENDEDOR')){ ?>
	<div id="tab_cli_cliente_vta_vendedor" class="bloque-relacion cli_cliente_vta_vendedor">
		
            <h4><?php Lang::_lang('CliClienteVtaVendedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteVtaVendedorsParaBloqueMasInfo() as $cli_cliente_vta_vendedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_vta_vendedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_vta_vendedor->getDescripcionVinculante('CliCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_vta_vendedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_vendedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_vta_vendedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_vendedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_vta_vendedor->getId() ?>" archivo="ajax/modulos/cli_cliente_vta_vendedor/cli_cliente_vta_vendedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteVtaVendedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_VTA_VENDEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteVtaVendedor') ?>">
                                <a href="cli_cliente_vta_vendedor_alta.php?id=<?php echo $cli_cliente_vta_vendedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_VENDEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_vta_vendedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteVtaVendedor::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_vta_vendedor->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteVtaVendedors de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_vta_vendedor_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteVtaVendedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_INS_TIPO_LISTA_PRECIO')){ ?>
	<div id="tab_cli_cliente_ins_tipo_lista_precio" class="bloque-relacion cli_cliente_ins_tipo_lista_precio">
		
            <h4><?php Lang::_lang('CliClienteInsTipoListaPrecio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteInsTipoListaPreciosParaBloqueMasInfo() as $cli_cliente_ins_tipo_lista_precio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_ins_tipo_lista_precio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_ins_tipo_lista_precio->getDescripcionVinculante('CliCliente')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_INS_TIPO_LISTA_PRECIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_ins_tipo_lista_precio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_ins_tipo_lista_precio->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteInsTipoListaPrecios de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_PREVENTISTA')){ ?>
	<div id="tab_cli_cliente_vta_preventista" class="bloque-relacion cli_cliente_vta_preventista">
		
            <h4><?php Lang::_lang('CliClienteVtaPreventista') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteVtaPreventistasParaBloqueMasInfo() as $cli_cliente_vta_preventista){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_vta_preventista->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_vta_preventista->getDescripcionVinculante('CliCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_vta_preventista->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_preventista->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_vta_preventista->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_preventista->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_vta_preventista->getId() ?>" archivo="ajax/modulos/cli_cliente_vta_preventista/cli_cliente_vta_preventista_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteVtaPreventista') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_VTA_PREVENTISTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteVtaPreventista') ?>">
                                <a href="cli_cliente_vta_preventista_alta.php?id=<?php echo $cli_cliente_vta_preventista->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_PREVENTISTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_vta_preventista){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteVtaPreventista::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_vta_preventista->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteVtaPreventistas de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_vta_preventista_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteVtaPreventista') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_COMPRADOR')){ ?>
	<div id="tab_cli_cliente_vta_comprador" class="bloque-relacion cli_cliente_vta_comprador">
		
            <h4><?php Lang::_lang('CliClienteVtaComprador') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteVtaCompradorsParaBloqueMasInfo() as $cli_cliente_vta_comprador){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_vta_comprador->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_vta_comprador->getDescripcionVinculante('CliCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_vta_comprador->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_comprador->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_vta_comprador->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_comprador->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_vta_comprador->getId() ?>" archivo="ajax/modulos/cli_cliente_vta_comprador/cli_cliente_vta_comprador_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteVtaComprador') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_VTA_COMPRADOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteVtaComprador') ?>">
                                <a href="cli_cliente_vta_comprador_alta.php?id=<?php echo $cli_cliente_vta_comprador->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_COMPRADOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_vta_comprador){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteVtaComprador::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_vta_comprador->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteVtaCompradors de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_vta_comprador_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteVtaComprador') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_GRAL_FP_AGRUPACION')){ ?>
	<div id="tab_cli_cliente_gral_fp_agrupacion" class="bloque-relacion cli_cliente_gral_fp_agrupacion">
		
            <h4><?php Lang::_lang('CliClienteGralFpAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteGralFpAgrupacionsParaBloqueMasInfo() as $cli_cliente_gral_fp_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_gral_fp_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_gral_fp_agrupacion->getDescripcionVinculante('CliCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_gral_fp_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_gral_fp_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_gral_fp_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_gral_fp_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_gral_fp_agrupacion->getId() ?>" archivo="ajax/modulos/cli_cliente_gral_fp_agrupacion/cli_cliente_gral_fp_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteGralFpAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_GRAL_FP_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteGralFpAgrupacion') ?>">
                                <a href="cli_cliente_gral_fp_agrupacion_alta.php?id=<?php echo $cli_cliente_gral_fp_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_GRAL_FP_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_gral_fp_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteGralFpAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_gral_fp_agrupacion->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteGralFpAgrupacions de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_gral_fp_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteGralFpAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_GRAL_FP_CUOTA')){ ?>
	<div id="tab_cli_cliente_gral_fp_cuota" class="bloque-relacion cli_cliente_gral_fp_cuota">
		
            <h4><?php Lang::_lang('CliClienteGralFpCuota') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteGralFpCuotasParaBloqueMasInfo() as $cli_cliente_gral_fp_cuota){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_gral_fp_cuota->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_gral_fp_cuota->getDescripcionVinculante('CliCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_gral_fp_cuota->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_gral_fp_cuota->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_gral_fp_cuota->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_gral_fp_cuota->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_gral_fp_cuota->getId() ?>" archivo="ajax/modulos/cli_cliente_gral_fp_cuota/cli_cliente_gral_fp_cuota_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteGralFpCuota') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_GRAL_FP_CUOTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteGralFpCuota') ?>">
                                <a href="cli_cliente_gral_fp_cuota_alta.php?id=<?php echo $cli_cliente_gral_fp_cuota->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_GRAL_FP_CUOTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_gral_fp_cuota){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteGralFpCuota::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_gral_fp_cuota->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteGralFpCuotas de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_gral_fp_cuota_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteGralFpCuota') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_GRAL_ACTIVIDAD')){ ?>
	<div id="tab_cli_cliente_gral_actividad" class="bloque-relacion cli_cliente_gral_actividad">
		
            <h4><?php Lang::_lang('CliClienteGralActividad') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteGralActividadsParaBloqueMasInfo() as $cli_cliente_gral_actividad){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_gral_actividad->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_gral_actividad->getDescripcionVinculante('CliCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_gral_actividad->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_gral_actividad->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_gral_actividad->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_gral_actividad->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_gral_actividad->getId() ?>" archivo="ajax/modulos/cli_cliente_gral_actividad/cli_cliente_gral_actividad_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteGralActividad') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_GRAL_ACTIVIDAD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteGralActividad') ?>">
                                <a href="cli_cliente_gral_actividad_alta.php?id=<?php echo $cli_cliente_gral_actividad->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_GRAL_ACTIVIDAD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_gral_actividad){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteGralActividad::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_gral_actividad->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteGralActividads de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_gral_actividad_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteGralActividad') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_PUNTO_VENTA')){ ?>
	<div id="tab_cli_cliente_vta_punto_venta" class="bloque-relacion cli_cliente_vta_punto_venta">
		
            <h4><?php Lang::_lang('CliClienteVtaPuntoVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteVtaPuntoVentasParaBloqueMasInfo() as $cli_cliente_vta_punto_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_vta_punto_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_vta_punto_venta->getDescripcionVinculante('CliCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_vta_punto_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_punto_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_vta_punto_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_punto_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_vta_punto_venta->getId() ?>" archivo="ajax/modulos/cli_cliente_vta_punto_venta/cli_cliente_vta_punto_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteVtaPuntoVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_VTA_PUNTO_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteVtaPuntoVenta') ?>">
                                <a href="cli_cliente_vta_punto_venta_alta.php?id=<?php echo $cli_cliente_vta_punto_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_VTA_PUNTO_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_vta_punto_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteVtaPuntoVenta::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_vta_punto_venta->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteVtaPuntoVentas de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_vta_punto_venta_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteVtaPuntoVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_INFO_SIFEN')){ ?>
	<div id="tab_cli_cliente_info_sifen" class="bloque-relacion cli_cliente_info_sifen">
		
            <h4><?php Lang::_lang('CliClienteInfoSifen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteInfoSifensParaBloqueMasInfo() as $cli_cliente_info_sifen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_info_sifen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_info_sifen->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_info_sifen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_info_sifen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_info_sifen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_info_sifen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_info_sifen->getId() ?>" archivo="ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteInfoSifen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INFO_SIFEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteInfoSifen') ?>">
                                <a href="cli_cliente_info_sifen_alta.php?id=<?php echo $cli_cliente_info_sifen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_INFO_SIFEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_info_sifen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteInfoSifen::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_info_sifen->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteInfoSifens de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_info_sifen_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteInfoSifen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_VENDEDOR_VALORACION')){ ?>
	<div id="tab_vta_vendedor_valoracion" class="bloque-relacion vta_vendedor_valoracion">
		
            <h4><?php Lang::_lang('VtaVendedorValoracion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaVendedorValoracionsParaBloqueMasInfo() as $vta_vendedor_valoracion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_valoracion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_valoracion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_valoracion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_valoracion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_valoracion->getId() ?>" archivo="ajax/modulos/vta_vendedor_valoracion/vta_vendedor_valoracion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorValoracion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorValoracion') ?>">
                                <a href="vta_vendedor_valoracion_alta.php?id=<?php echo $vta_vendedor_valoracion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_VENDEDOR_VALORACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_valoracion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorValoracion::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_valoracion->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorValoracions de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_valoracion_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorValoracion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_VENDEDOR_VALORACION_AGRUPACION')){ ?>
	<div id="tab_vta_vendedor_valoracion_agrupacion" class="bloque-relacion vta_vendedor_valoracion_agrupacion">
		
            <h4><?php Lang::_lang('VtaVendedorValoracionAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaVendedorValoracionAgrupacionsParaBloqueMasInfo() as $vta_vendedor_valoracion_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_valoracion_agrupacion->getId() ?>" archivo="ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorValoracionAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorValoracionAgrupacion') ?>">
                                <a href="vta_vendedor_valoracion_agrupacion_alta.php?id=<?php echo $vta_vendedor_valoracion_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_VENDEDOR_VALORACION_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_valoracion_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorValoracionAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_valoracion_agrupacion->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorValoracionAgrupacions de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_valoracion_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorValoracionAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_PRESUPUESTO')){ ?>
	<div id="tab_vta_presupuesto" class="bloque-relacion vta_presupuesto">
		
            <h4><?php Lang::_lang('VtaPresupuesto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaPresupuestosParaBloqueMasInfo() as $vta_presupuesto){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_PRESUPUESTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuesto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestos de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_TRIBUTO_EXENCION')){ ?>
	<div id="tab_vta_tributo_exencion" class="bloque-relacion vta_tributo_exencion">
		
            <h4><?php Lang::_lang('VtaTributoExencion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaTributoExencionsParaBloqueMasInfo() as $vta_tributo_exencion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_tributo_exencion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_tributo_exencion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_tributo_exencion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo_exencion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_tributo_exencion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo_exencion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_tributo_exencion->getId() ?>" archivo="ajax/modulos/vta_tributo_exencion/vta_tributo_exencion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaTributoExencion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_EXENCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTributoExencion') ?>">
                                <a href="vta_tributo_exencion_alta.php?id=<?php echo $vta_tributo_exencion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_TRIBUTO_EXENCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_tributo_exencion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaTributoExencion::getFiltrosArrGral() ?>&arr=<?php echo $vta_tributo_exencion->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaTributoExencions de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_tributo_exencion_alta.php" >
                            <?php Lang::_lang('Agregar VtaTributoExencion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_vta_nota_credito" class="bloque-relacion vta_nota_credito">
		
            <h4><?php Lang::_lang('VtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaNotaCreditosParaBloqueMasInfo() as $vta_nota_credito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditos de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_NOTA_DEBITO')){ ?>
	<div id="tab_vta_nota_debito" class="bloque-relacion vta_nota_debito">
		
            <h4><?php Lang::_lang('VtaNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaNotaDebitosParaBloqueMasInfo() as $vta_nota_debito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitos de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_RECIBO')){ ?>
	<div id="tab_vta_recibo" class="bloque-relacion vta_recibo">
		
            <h4><?php Lang::_lang('VtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaRecibosParaBloqueMasInfo() as $vta_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo->getId() ?>" archivo="ajax/modulos/vta_recibo/vta_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRecibo') ?>">
                                <a href="vta_recibo_alta.php?id=<?php echo $vta_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaRecibos de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_alta.php" >
                            <?php Lang::_lang('Agregar VtaRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_REMITO')){ ?>
	<div id="tab_vta_remito" class="bloque-relacion vta_remito">
		
            <h4><?php Lang::_lang('VtaRemito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaRemitosParaBloqueMasInfo() as $vta_remito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_REMITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemito::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitos de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_FACTURA')){ ?>
	<div id="tab_vta_factura" class="bloque-relacion vta_factura">
		
            <h4><?php Lang::_lang('VtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaFacturasParaBloqueMasInfo() as $vta_factura){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturas de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_AJUSTE_DEBE')){ ?>
	<div id="tab_vta_ajuste_debe" class="bloque-relacion vta_ajuste_debe">
		
            <h4><?php Lang::_lang('VtaAjusteDebe') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaAjusteDebesParaBloqueMasInfo() as $vta_ajuste_debe){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_AJUSTE_DEBE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_debe){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteDebe::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteDebes de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_AJUSTE_HABER')){ ?>
	<div id="tab_vta_ajuste_haber" class="bloque-relacion vta_ajuste_haber">
		
            <h4><?php Lang::_lang('VtaAjusteHaber') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaAjusteHabersParaBloqueMasInfo() as $vta_ajuste_haber){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_ajuste_haber->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_ajuste_haber->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_ajuste_haber->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_haber->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_ajuste_haber->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_haber->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_ajuste_haber->getId() ?>" archivo="ajax/modulos/vta_ajuste_haber/vta_ajuste_haber_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaAjusteHaber') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaAjusteHaber') ?>">
                                <a href="vta_ajuste_haber_alta.php?id=<?php echo $vta_ajuste_haber->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_AJUSTE_HABER_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_haber){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteHaber::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_haber->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteHabers de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_ajuste_haber_alta.php" >
                            <?php Lang::_lang('Agregar VtaAjusteHaber') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_REMITO_AJUSTE')){ ?>
	<div id="tab_vta_remito_ajuste" class="bloque-relacion vta_remito_ajuste">
		
            <h4><?php Lang::_lang('VtaRemitoAjuste') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getVtaRemitoAjustesParaBloqueMasInfo() as $vta_remito_ajuste){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_VTA_REMITO_AJUSTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_ajuste){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoAjuste::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_ajuste->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoAjustes de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CAT_CATALOGO_CLI_CLIENTE')){ ?>
	<div id="tab_cat_catalogo_cli_cliente" class="bloque-relacion cat_catalogo_cli_cliente">
		
            <h4><?php Lang::_lang('CatCatalogoCliCliente') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCatCatalogoCliClientesParaBloqueMasInfo() as $cat_catalogo_cli_cliente){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cat_catalogo_cli_cliente->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cat_catalogo_cli_cliente->getDescripcionVinculante('CliCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cat_catalogo_cli_cliente->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cat_catalogo_cli_cliente->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cat_catalogo_cli_cliente->getId() ?>" archivo="ajax/modulos/cat_catalogo_cli_cliente/cat_catalogo_cli_cliente_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CatCatalogoCliCliente') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CAT_CATALOGO_CLI_CLIENTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CatCatalogoCliCliente') ?>">
                                <a href="cat_catalogo_cli_cliente_alta.php?id=<?php echo $cat_catalogo_cli_cliente->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CAT_CATALOGO_CLI_CLIENTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cat_catalogo_cli_cliente){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CatCatalogoCliCliente::getFiltrosArrGral() ?>&arr=<?php echo $cat_catalogo_cli_cliente->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CatCatalogoCliClientes de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cat_catalogo_cli_cliente_alta.php" >
                            <?php Lang::_lang('Agregar CatCatalogoCliCliente') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA')){ ?>
	<div id="tab_cli_cliente_tienda" class="bloque-relacion cli_cliente_tienda">
		
            <h4><?php Lang::_lang('CliClienteTienda') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteTiendasParaBloqueMasInfo() as $cli_cliente_tienda){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_tienda->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_tienda->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_tienda->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_tienda->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_tienda->getId() ?>" archivo="ajax/modulos/cli_cliente_tienda/cli_cliente_tienda_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteTienda') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteTienda') ?>">
                                <a href="cli_cliente_tienda_alta.php?id=<?php echo $cli_cliente_tienda->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_tienda){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteTienda::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_tienda->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteTiendas de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_tienda_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteTienda') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA_CLAVE')){ ?>
	<div id="tab_cli_cliente_tienda_clave" class="bloque-relacion cli_cliente_tienda_clave">
		
            <h4><?php Lang::_lang('CliClienteTiendaClave') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteTiendaClavesParaBloqueMasInfo() as $cli_cliente_tienda_clave){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_tienda_clave->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_tienda_clave->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_clave->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_clave->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_clave->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_clave->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_tienda_clave->getId() ?>" archivo="ajax/modulos/cli_cliente_tienda_clave/cli_cliente_tienda_clave_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteTiendaClave') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_CLAVE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteTiendaClave') ?>">
                                <a href="cli_cliente_tienda_clave_alta.php?id=<?php echo $cli_cliente_tienda_clave->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA_CLAVE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_tienda_clave){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteTiendaClave::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_tienda_clave->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteTiendaClaves de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_tienda_clave_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteTiendaClave') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA_LOGIN')){ ?>
	<div id="tab_cli_cliente_tienda_login" class="bloque-relacion cli_cliente_tienda_login">
		
            <h4><?php Lang::_lang('CliClienteTiendaLogin') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteTiendaLoginsParaBloqueMasInfo() as $cli_cliente_tienda_login){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_tienda_login->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_tienda_login->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_login->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_login->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_login->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_login->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_tienda_login->getId() ?>" archivo="ajax/modulos/cli_cliente_tienda_login/cli_cliente_tienda_login_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteTiendaLogin') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_LOGIN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteTiendaLogin') ?>">
                                <a href="cli_cliente_tienda_login_alta.php?id=<?php echo $cli_cliente_tienda_login->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA_LOGIN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_tienda_login){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteTiendaLogin::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_tienda_login->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteTiendaLogins de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_tienda_login_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteTiendaLogin') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA_NAVEGACION')){ ?>
	<div id="tab_cli_cliente_tienda_navegacion" class="bloque-relacion cli_cliente_tienda_navegacion">
		
            <h4><?php Lang::_lang('CliClienteTiendaNavegacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getCliClienteTiendaNavegacionsParaBloqueMasInfo() as $cli_cliente_tienda_navegacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_tienda_navegacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_tienda_navegacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_navegacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_navegacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_navegacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_navegacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_tienda_navegacion->getId() ?>" archivo="ajax/modulos/cli_cliente_tienda_navegacion/cli_cliente_tienda_navegacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteTiendaNavegacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_NAVEGACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteTiendaNavegacion') ?>">
                                <a href="cli_cliente_tienda_navegacion_alta.php?id=<?php echo $cli_cliente_tienda_navegacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_CLI_CLIENTE_TIENDA_NAVEGACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_tienda_navegacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteTiendaNavegacion::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_tienda_navegacion->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteTiendaNavegacions de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_tienda_navegacion_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteTiendaNavegacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_TND_TIENDA_BUSQUEDA')){ ?>
	<div id="tab_tnd_tienda_busqueda" class="bloque-relacion tnd_tienda_busqueda">
		
            <h4><?php Lang::_lang('TndTiendaBusqueda') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getTndTiendaBusquedasParaBloqueMasInfo() as $tnd_tienda_busqueda){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($tnd_tienda_busqueda->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($tnd_tienda_busqueda->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($tnd_tienda_busqueda->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($tnd_tienda_busqueda->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($tnd_tienda_busqueda->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($tnd_tienda_busqueda->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $tnd_tienda_busqueda->getId() ?>" archivo="ajax/modulos/tnd_tienda_busqueda/tnd_tienda_busqueda_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('TndTiendaBusqueda') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('TND_TIENDA_BUSQUEDA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('TndTiendaBusqueda') ?>">
                                <a href="tnd_tienda_busqueda_alta.php?id=<?php echo $tnd_tienda_busqueda->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_TND_TIENDA_BUSQUEDA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($tnd_tienda_busqueda){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo TndTiendaBusqueda::getFiltrosArrGral() ?>&arr=<?php echo $tnd_tienda_busqueda->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver TndTiendaBusquedas de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="tnd_tienda_busqueda_alta.php" >
                            <?php Lang::_lang('Agregar TndTiendaBusqueda') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_PRD_ORDEN_TRABAJO')){ ?>
	<div id="tab_prd_orden_trabajo" class="bloque-relacion prd_orden_trabajo">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente->getPrdOrdenTrabajosParaBloqueMasInfo() as $prd_orden_trabajo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajo') ?>">
                                <a href="prd_orden_trabajo_alta.php?id=<?php echo $prd_orden_trabajo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_MASINFO_PRD_ORDEN_TRABAJO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajo::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajos de ') ?> <strong><?php echo($cli_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

