<?php
include_once 'control/seguridad.php';
include_once '_autoload.php';
?>
<?php include 'parciales/head.php' ?>

<body>
<?php include 'parciales/encabezado.php'?>
<?php include 'parciales/user.php';?>
<form id='formu' name='formu' method='post' action=''>
<div id='menu'><?php include 'parciales/menuh.php' ?></div>
<div id='buscador'>
<?php include 'parciales/tips/index.php' ?>
</div>
<div id='cuerpo'>
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('Menu') ?> </div>
	<div class='contenedor central'>
    <ul class='sitemap multicol'>
	
		  <br />
          <div class='titulo'><?php Lang::_lang('UsGrupo') ?></div>
		  <li><a href='us_grupo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsGrupo') ?> </a></li>
		  <li><a href='us_grupo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsGrupo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsAgrupador') ?></div>
		  <li><a href='us_agrupador_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsAgrupador') ?> </a></li>
		  <li><a href='us_agrupador_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsAgrupador') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsCredencial') ?></div>
		  <li><a href='us_credencial_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsCredencial') ?> </a></li>
		  <li><a href='us_credencial_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsCredencial') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsAgrupado') ?></div>
		  <li><a href='us_agrupado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsAgrupado') ?> </a></li>
		  <li><a href='us_agrupado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsAgrupado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsAcreditado') ?></div>
		  <li><a href='us_acreditado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsAcreditado') ?> </a></li>
		  <li><a href='us_acreditado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsAcreditado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsUsuario') ?></div>
		  <li><a href='us_usuario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsUsuario') ?> </a></li>
		  <li><a href='us_usuario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsUsuario') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsUsuarioDatos') ?></div>
		  <li><a href='us_usuario_dato_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsUsuarioDatos') ?> </a></li>
		  <li><a href='us_usuario_dato_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsUsuarioDatos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsUsuarioAuditorias') ?></div>
		  <li><a href='us_usuario_auditoria_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsUsuarioAuditorias') ?> </a></li>
		  <li><a href='us_usuario_auditoria_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsUsuarioAuditorias') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsMensajes') ?></div>
		  <li><a href='us_mensaje_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsMensajes') ?> </a></li>
		  <li><a href='us_mensaje_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsMensajes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsMemo') ?></div>
		  <li><a href='us_memo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsMemo') ?> </a></li>
		  <li><a href='us_memo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsMemo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsMemoTipoEstado') ?></div>
		  <li><a href='us_memo_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsMemoTipoEstado') ?> </a></li>
		  <li><a href='us_memo_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsMemoTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsMemoEstado') ?></div>
		  <li><a href='us_memo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsMemoEstado') ?> </a></li>
		  <li><a href='us_memo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsMemoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsMemoTipos') ?></div>
		  <li><a href='us_memo_tipo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsMemoTipos') ?> </a></li>
		  <li><a href='us_memo_tipo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsMemoTipos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsClave') ?></div>
		  <li><a href='us_clave_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsClave') ?> </a></li>
		  <li><a href='us_clave_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsClave') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsLogins') ?></div>
		  <li><a href='us_login_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsLogins') ?> </a></li>
		  <li><a href='us_login_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsLogins') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('UsNavegacions') ?></div>
		  <li><a href='us_navegacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('UsNavegacions') ?> </a></li>
		  <li><a href='us_navegacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('UsNavegacions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('XmlLenguajeTipos') ?></div>
		  <li><a href='xml_lenguaje_tipo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('XmlLenguajeTipos') ?> </a></li>
		  <li><a href='xml_lenguaje_tipo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('XmlLenguajeTipos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('XmlLenguajePaginas') ?></div>
		  <li><a href='xml_lenguaje_pagina_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('XmlLenguajePaginas') ?> </a></li>
		  <li><a href='xml_lenguaje_pagina_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('XmlLenguajePaginas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('XmlLenguajeEntornos') ?></div>
		  <li><a href='xml_lenguaje_entorno_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('XmlLenguajeEntornos') ?> </a></li>
		  <li><a href='xml_lenguaje_entorno_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('XmlLenguajeEntornos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('XmlLenguajeCodigo') ?></div>
		  <li><a href='xml_lenguaje_codigo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('XmlLenguajeCodigo') ?> </a></li>
		  <li><a href='xml_lenguaje_codigo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('XmlLenguajeCodigo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('XmlLenguajeTraduccion') ?></div>
		  <li><a href='xml_lenguaje_traduccion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('XmlLenguajeTraduccion') ?> </a></li>
		  <li><a href='xml_lenguaje_traduccion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('XmlLenguajeTraduccion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GeoPais') ?></div>
		  <li><a href='geo_pais_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GeoPais') ?> </a></li>
		  <li><a href='geo_pais_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GeoPais') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GeoProvincia') ?></div>
		  <li><a href='geo_provincia_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GeoProvincia') ?> </a></li>
		  <li><a href='geo_provincia_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GeoProvincia') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GeoLocalidad') ?></div>
		  <li><a href='geo_localidad_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GeoLocalidad') ?> </a></li>
		  <li><a href='geo_localidad_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GeoLocalidad') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('ConVariable') ?></div>
		  <li><a href='conf_variable_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('ConVariable') ?> </a></li>
		  <li><a href='conf_variable_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('ConVariable') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('ConfCategoria') ?></div>
		  <li><a href='conf_categoria_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('ConfCategoria') ?> </a></li>
		  <li><a href='conf_categoria_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('ConfCategoria') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GenArbolTipo') ?></div>
		  <li><a href='gen_arbol_tipo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GenArbolTipo') ?> </a></li>
		  <li><a href='gen_arbol_tipo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GenArbolTipo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GenArbol') ?></div>
		  <li><a href='gen_arbol_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GenArbol') ?> </a></li>
		  <li><a href='gen_arbol_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GenArbol') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GenMenuItem') ?></div>
		  <li><a href='gen_menu_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GenMenuItem') ?> </a></li>
		  <li><a href='gen_menu_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GenMenuItem') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GenWidgetSector') ?></div>
		  <li><a href='gen_widget_sector_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GenWidgetSector') ?> </a></li>
		  <li><a href='gen_widget_sector_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GenWidgetSector') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GenWidget') ?></div>
		  <li><a href='gen_widget_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GenWidget') ?> </a></li>
		  <li><a href='gen_widget_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GenWidget') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralLenguaje') ?></div>
		  <li><a href='gral_lenguaje_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralLenguaje') ?> </a></li>
		  <li><a href='gral_lenguaje_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralLenguaje') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralSiNo') ?></div>
		  <li><a href='gral_si_no_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralSiNo') ?> </a></li>
		  <li><a href='gral_si_no_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralSiNo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralTipoIvas') ?></div>
		  <li><a href='gral_tipo_iva_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralTipoIvas') ?> </a></li>
		  <li><a href='gral_tipo_iva_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralTipoIvas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?></div>
		  <li><a href='gral_tipo_iva_ws_fe_param_tipo_iva_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?> </a></li>
		  <li><a href='gral_tipo_iva_ws_fe_param_tipo_iva_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralTipoIvaWsFeParamTipoIva') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralTipoDocumentos') ?></div>
		  <li><a href='gral_tipo_documento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralTipoDocumentos') ?> </a></li>
		  <li><a href='gral_tipo_documento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralTipoDocumentos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumentos') ?></div>
		  <li><a href='gral_tipo_documento_ws_fe_param_tipo_documento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumentos') ?> </a></li>
		  <li><a href='gral_tipo_documento_ws_fe_param_tipo_documento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralTipoDocumentoWsFeParamTipoDocumentos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralBanco') ?></div>
		  <li><a href='gral_banco_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralBanco') ?> </a></li>
		  <li><a href='gral_banco_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralBanco') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralMess') ?></div>
		  <li><a href='gral_mes_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralMess') ?> </a></li>
		  <li><a href='gral_mes_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralMess') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralMedioPagos') ?></div>
		  <li><a href='gral_medio_pago_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralMedioPagos') ?> </a></li>
		  <li><a href='gral_medio_pago_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralMedioPagos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <li><a href='gral_condicion_iva_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralCondicionIva') ?> </a></li>
		  <li><a href='gral_condicion_iva_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralCondicionIva') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?></div>
		  <li><a href='gral_condicion_iva_vta_tipo_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?> </a></li>
		  <li><a href='gral_condicion_iva_vta_tipo_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoFactura') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralCondicionIvaVtaTipoNotaCredito') ?></div>
		  <li><a href='gral_condicion_iva_vta_tipo_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoNotaCredito') ?> </a></li>
		  <li><a href='gral_condicion_iva_vta_tipo_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoNotaCredito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?></div>
		  <li><a href='gral_condicion_iva_vta_tipo_nota_debito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?> </a></li>
		  <li><a href='gral_condicion_iva_vta_tipo_nota_debito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralCondicionIvaVtaTipoRecibo') ?></div>
		  <li><a href='gral_condicion_iva_vta_tipo_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoRecibo') ?> </a></li>
		  <li><a href='gral_condicion_iva_vta_tipo_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoRecibo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?></div>
		  <li><a href='gral_condicion_iva_pde_tipo_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?> </a></li>
		  <li><a href='gral_condicion_iva_pde_tipo_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?></div>
		  <li><a href='gral_condicion_iva_pde_tipo_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?> </a></li>
		  <li><a href='gral_condicion_iva_pde_tipo_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?></div>
		  <li><a href='gral_condicion_iva_pde_tipo_nota_debito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?> </a></li>
		  <li><a href='gral_condicion_iva_pde_tipo_nota_debito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?></div>
		  <li><a href='gral_condicion_iva_pde_tipo_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?> </a></li>
		  <li><a href='gral_condicion_iva_pde_tipo_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		  <li><a href='gral_tipo_personeria_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralTipoPersoneria') ?> </a></li>
		  <li><a href='gral_tipo_personeria_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralTipoPersoneria') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralEmpresas') ?></div>
		  <li><a href='gral_empresa_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralEmpresas') ?> </a></li>
		  <li><a href='gral_empresa_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralEmpresas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralSucursal') ?></div>
		  <li><a href='gral_sucursal_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralSucursal') ?> </a></li>
		  <li><a href='gral_sucursal_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralSucursal') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralSucursalVtaPuntoVentas') ?></div>
		  <li><a href='gral_sucursal_vta_punto_venta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralSucursalVtaPuntoVentas') ?> </a></li>
		  <li><a href='gral_sucursal_vta_punto_venta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralSucursalVtaPuntoVentas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralSucursalCliClientes') ?></div>
		  <li><a href='gral_sucursal_cli_cliente_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralSucursalCliClientes') ?> </a></li>
		  <li><a href='gral_sucursal_cli_cliente_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralSucursalCliClientes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralSucursalVtaVendedors') ?></div>
		  <li><a href='gral_sucursal_vta_vendedor_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralSucursalVtaVendedors') ?> </a></li>
		  <li><a href='gral_sucursal_vta_vendedor_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralSucursalVtaVendedors') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralSucursalUsUsuarios') ?></div>
		  <li><a href='gral_sucursal_us_usuario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralSucursalUsUsuarios') ?> </a></li>
		  <li><a href='gral_sucursal_us_usuario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralSucursalUsUsuarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralRuta') ?></div>
		  <li><a href='gral_ruta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralRuta') ?> </a></li>
		  <li><a href='gral_ruta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralRuta') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralRutaVtaVendedors') ?></div>
		  <li><a href='gral_ruta_vta_vendedor_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralRutaVtaVendedors') ?> </a></li>
		  <li><a href='gral_ruta_vta_vendedor_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralRutaVtaVendedors') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralRutaGeoLocalidads') ?></div>
		  <li><a href='gral_ruta_geo_localidad_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralRutaGeoLocalidads') ?> </a></li>
		  <li><a href='gral_ruta_geo_localidad_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralRutaGeoLocalidads') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralEmpresaTransportadoras') ?></div>
		  <li><a href='gral_empresa_transportadora_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralEmpresaTransportadoras') ?> </a></li>
		  <li><a href='gral_empresa_transportadora_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralEmpresaTransportadoras') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralActividads') ?></div>
		  <li><a href='gral_actividad_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralActividads') ?> </a></li>
		  <li><a href='gral_actividad_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralActividads') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralEscenarios') ?></div>
		  <li><a href='gral_escenario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralEscenarios') ?> </a></li>
		  <li><a href='gral_escenario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralEscenarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralCajaTipos') ?></div>
		  <li><a href='gral_caja_tipo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralCajaTipos') ?> </a></li>
		  <li><a href='gral_caja_tipo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralCajaTipos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralCajas') ?></div>
		  <li><a href='gral_caja_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralCajas') ?> </a></li>
		  <li><a href='gral_caja_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralCajas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralFpMedioPagos') ?></div>
		  <li><a href='gral_fp_medio_pago_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralFpMedioPagos') ?> </a></li>
		  <li><a href='gral_fp_medio_pago_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralFpMedioPagos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralFpCuota') ?></div>
		  <li><a href='gral_fp_cuota_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralFpCuota') ?> </a></li>
		  <li><a href='gral_fp_cuota_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralFpCuota') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralFpAgrupacion') ?></div>
		  <li><a href='gral_fp_agrupacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralFpAgrupacion') ?> </a></li>
		  <li><a href='gral_fp_agrupacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralFpAgrupacion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GralFpFormaPago') ?></div>
		  <li><a href='gral_fp_forma_pago_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GralFpFormaPago') ?> </a></li>
		  <li><a href='gral_fp_forma_pago_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GralFpFormaPago') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsCategorias') ?></div>
		  <li><a href='ins_categoria_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsCategorias') ?> </a></li>
		  <li><a href='ins_categoria_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsCategorias') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumos') ?></div>
		  <li><a href='ins_insumo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumos') ?> </a></li>
		  <li><a href='ins_insumo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsTipoInsumos') ?></div>
		  <li><a href='ins_tipo_insumo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsTipoInsumos') ?> </a></li>
		  <li><a href='ins_tipo_insumo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsTipoInsumos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsTipoFabricantes') ?></div>
		  <li><a href='ins_tipo_fabricante_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsTipoFabricantes') ?> </a></li>
		  <li><a href='ins_tipo_fabricante_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsTipoFabricantes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoEnviados') ?></div>
		  <li><a href='ins_insumo_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoEnviados') ?> </a></li>
		  <li><a href='ins_insumo_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoEnviados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoImagens') ?></div>
		  <li><a href='ins_insumo_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoImagens') ?> </a></li>
		  <li><a href='ins_insumo_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsTipoImagens') ?></div>
		  <li><a href='ins_tipo_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsTipoImagens') ?> </a></li>
		  <li><a href='ins_tipo_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsTipoImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoPrvProveedors') ?></div>
		  <li><a href='ins_insumo_prv_proveedor_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoPrvProveedors') ?> </a></li>
		  <li><a href='ins_insumo_prv_proveedor_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoPrvProveedors') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoInsMarcas') ?></div>
		  <li><a href='ins_insumo_ins_marca_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoInsMarcas') ?> </a></li>
		  <li><a href='ins_insumo_ins_marca_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoInsMarcas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoInstancias') ?></div>
		  <li><a href='ins_insumo_instancia_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoInstancias') ?> </a></li>
		  <li><a href='ins_insumo_instancia_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoInstancias') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoBultos') ?></div>
		  <li><a href='ins_insumo_bulto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoBultos') ?> </a></li>
		  <li><a href='ins_insumo_bulto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoBultos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoPanPanols') ?></div>
		  <li><a href='ins_insumo_pan_panol_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoPanPanols') ?> </a></li>
		  <li><a href='ins_insumo_pan_panol_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoPanPanols') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoVehModelos') ?></div>
		  <li><a href='ins_insumo_veh_modelo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoVehModelos') ?> </a></li>
		  <li><a href='ins_insumo_veh_modelo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoVehModelos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoVinculados') ?></div>
		  <li><a href='ins_insumo_vinculado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoVinculados') ?> </a></li>
		  <li><a href='ins_insumo_vinculado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoVinculados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoSimilars') ?></div>
		  <li><a href='ins_insumo_similar_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoSimilars') ?> </a></li>
		  <li><a href='ins_insumo_similar_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoSimilars') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsVentaWebInfos') ?></div>
		  <li><a href='ins_venta_web_info_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsVentaWebInfos') ?> </a></li>
		  <li><a href='ins_venta_web_info_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsVentaWebInfos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsVentaMlInfos') ?></div>
		  <li><a href='ins_venta_ml_info_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsVentaMlInfos') ?> </a></li>
		  <li><a href='ins_venta_ml_info_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsVentaMlInfos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsVentaMlInfoMlAttributes') ?></div>
		  <li><a href='ins_venta_ml_info_ml_attribute_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsVentaMlInfoMlAttributes') ?> </a></li>
		  <li><a href='ins_venta_ml_info_ml_attribute_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsVentaMlInfoMlAttributes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoCostos') ?></div>
		  <li><a href='ins_insumo_costo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoCostos') ?> </a></li>
		  <li><a href='ins_insumo_costo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoCostos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsTipoListaPrecios') ?></div>
		  <li><a href='ins_tipo_lista_precio_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsTipoListaPrecios') ?> </a></li>
		  <li><a href='ins_tipo_lista_precio_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsTipoListaPrecios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsListaPrecios') ?></div>
		  <li><a href='ins_lista_precio_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsListaPrecios') ?> </a></li>
		  <li><a href='ins_lista_precio_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsListaPrecios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsEtiquetas') ?></div>
		  <li><a href='ins_etiqueta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsEtiquetas') ?> </a></li>
		  <li><a href='ins_etiqueta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsEtiquetas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoInsEtiquetas') ?></div>
		  <li><a href='ins_insumo_ins_etiqueta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoInsEtiquetas') ?> </a></li>
		  <li><a href='ins_insumo_ins_etiqueta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoInsEtiquetas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoDestinoTransformacions') ?></div>
		  <li><a href='ins_insumo_destino_transformacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoDestinoTransformacions') ?> </a></li>
		  <li><a href='ins_insumo_destino_transformacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoDestinoTransformacions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsClasificacions') ?></div>
		  <li><a href='ins_clasificacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsClasificacions') ?> </a></li>
		  <li><a href='ins_clasificacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsClasificacions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsMarcas') ?></div>
		  <li><a href='ins_marca_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsMarcas') ?> </a></li>
		  <li><a href='ins_marca_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsMarcas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsMarcaImagens') ?></div>
		  <li><a href='ins_marca_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsMarcaImagens') ?> </a></li>
		  <li><a href='ins_marca_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsMarcaImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsCategoriaInsMarcas') ?></div>
		  <li><a href='ins_categoria_ins_marca_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsCategoriaInsMarcas') ?> </a></li>
		  <li><a href='ins_categoria_ins_marca_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsCategoriaInsMarcas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsAtributos') ?></div>
		  <li><a href='ins_atributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsAtributos') ?> </a></li>
		  <li><a href='ins_atributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsAtributos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsInsumoInsAtributos') ?></div>
		  <li><a href='ins_insumo_ins_atributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsInsumoInsAtributos') ?> </a></li>
		  <li><a href='ins_insumo_ins_atributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsInsumoInsAtributos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsUnidadMedidas') ?></div>
		  <li><a href='ins_unidad_medida_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsUnidadMedidas') ?> </a></li>
		  <li><a href='ins_unidad_medida_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsUnidadMedidas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsUnidadMedidaAtributos') ?></div>
		  <li><a href='ins_unidad_medida_atributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsUnidadMedidaAtributos') ?> </a></li>
		  <li><a href='ins_unidad_medida_atributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsUnidadMedidaAtributos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsUnidadMedidaPedidos') ?></div>
		  <li><a href='ins_unidad_medida_pedido_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsUnidadMedidaPedidos') ?> </a></li>
		  <li><a href='ins_unidad_medida_pedido_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsUnidadMedidaPedidos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsTipoNecesidads') ?></div>
		  <li><a href='ins_tipo_necesidad_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsTipoNecesidads') ?> </a></li>
		  <li><a href='ins_tipo_necesidad_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsTipoNecesidads') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsNivelAprovisionamientos') ?></div>
		  <li><a href='ins_nivel_aprovisionamiento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsNivelAprovisionamientos') ?> </a></li>
		  <li><a href='ins_nivel_aprovisionamiento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsNivelAprovisionamientos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsTipoConsumos') ?></div>
		  <li><a href='ins_tipo_consumo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsTipoConsumos') ?> </a></li>
		  <li><a href='ins_tipo_consumo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsTipoConsumos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsMatriz') ?></div>
		  <li><a href='ins_matriz_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsMatriz') ?> </a></li>
		  <li><a href='ins_matriz_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsMatriz') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsStockTransformacions') ?></div>
		  <li><a href='ins_stock_transformacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsStockTransformacions') ?> </a></li>
		  <li><a href='ins_stock_transformacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsStockTransformacions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsStockTransformacionDestinos') ?></div>
		  <li><a href='ins_stock_transformacion_destino_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsStockTransformacionDestinos') ?> </a></li>
		  <li><a href='ins_stock_transformacion_destino_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsStockTransformacionDestinos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvGrupo') ?></div>
		  <li><a href='prv_grupo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvGrupo') ?> </a></li>
		  <li><a href='prv_grupo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvGrupo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvCategoria') ?></div>
		  <li><a href='prv_categoria_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvCategoria') ?> </a></li>
		  <li><a href='prv_categoria_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvCategoria') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvProveedor') ?></div>
		  <li><a href='prv_proveedor_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvProveedor') ?> </a></li>
		  <li><a href='prv_proveedor_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvProveedor') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvPreventistas') ?></div>
		  <li><a href='prv_preventista_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvPreventistas') ?> </a></li>
		  <li><a href='prv_preventista_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvPreventistas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvConvenioDescuentos') ?></div>
		  <li><a href='prv_convenio_descuento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvConvenioDescuentos') ?> </a></li>
		  <li><a href='prv_convenio_descuento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvConvenioDescuentos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvDescuentoFinancieros') ?></div>
		  <li><a href='prv_descuento_financiero_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvDescuentoFinancieros') ?> </a></li>
		  <li><a href='prv_descuento_financiero_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvDescuentoFinancieros') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvDescuentoComercials') ?></div>
		  <li><a href='prv_descuento_comercial_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvDescuentoComercials') ?> </a></li>
		  <li><a href='prv_descuento_comercial_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvDescuentoComercials') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvProveedorUsUsuarios') ?></div>
		  <li><a href='prv_proveedor_us_usuario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvProveedorUsUsuarios') ?> </a></li>
		  <li><a href='prv_proveedor_us_usuario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvProveedorUsUsuarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvProveedorInsMarcas') ?></div>
		  <li><a href='prv_proveedor_ins_marca_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvProveedorInsMarcas') ?> </a></li>
		  <li><a href='prv_proveedor_ins_marca_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvProveedorInsMarcas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvTelefono') ?></div>
		  <li><a href='prv_telefono_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvTelefono') ?> </a></li>
		  <li><a href='prv_telefono_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvTelefono') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvTelefonoTipos') ?></div>
		  <li><a href='prv_telefono_tipo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvTelefonoTipos') ?> </a></li>
		  <li><a href='prv_telefono_tipo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvTelefonoTipos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvEmail') ?></div>
		  <li><a href='prv_email_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvEmail') ?> </a></li>
		  <li><a href='prv_email_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvEmail') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvDomicilio') ?></div>
		  <li><a href='prv_domicilio_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvDomicilio') ?> </a></li>
		  <li><a href='prv_domicilio_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvDomicilio') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvRubro') ?></div>
		  <li><a href='prv_rubro_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvRubro') ?> </a></li>
		  <li><a href='prv_rubro_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvRubro') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvProveedorPrvRubro') ?></div>
		  <li><a href='prv_proveedor_prv_rubro_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvProveedorPrvRubro') ?> </a></li>
		  <li><a href='prv_proveedor_prv_rubro_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvProveedorPrvRubro') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvInsumo') ?></div>
		  <li><a href='prv_insumo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvInsumo') ?> </a></li>
		  <li><a href='prv_insumo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvInsumo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvInsumoCosto') ?></div>
		  <li><a href='prv_insumo_costo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvInsumoCosto') ?> </a></li>
		  <li><a href='prv_insumo_costo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvInsumoCosto') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvImportacions') ?></div>
		  <li><a href='prv_importacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvImportacions') ?> </a></li>
		  <li><a href='prv_importacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvImportacions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvImportacionEstados') ?></div>
		  <li><a href='prv_importacion_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvImportacionEstados') ?> </a></li>
		  <li><a href='prv_importacion_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvImportacionEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvImportacionTipoEstado') ?></div>
		  <li><a href='prv_importacion_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvImportacionTipoEstado') ?> </a></li>
		  <li><a href='prv_importacion_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvImportacionTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PrvImportacionResultados') ?></div>
		  <li><a href='prv_importacion_resultado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PrvImportacionResultados') ?> </a></li>
		  <li><a href='prv_importacion_resultado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PrvImportacionResultados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VehMarcas') ?></div>
		  <li><a href='veh_marca_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VehMarcas') ?> </a></li>
		  <li><a href='veh_marca_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VehMarcas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VehMarcaImagens') ?></div>
		  <li><a href='veh_marca_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VehMarcaImagens') ?> </a></li>
		  <li><a href='veh_marca_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VehMarcaImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VehModelos') ?></div>
		  <li><a href='veh_modelo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VehModelos') ?> </a></li>
		  <li><a href='veh_modelo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VehModelos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VehCoches') ?></div>
		  <li><a href='veh_coche_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VehCoches') ?> </a></li>
		  <li><a href='veh_coche_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VehCoches') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VehCocheImagens') ?></div>
		  <li><a href='veh_coche_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VehCocheImagens') ?> </a></li>
		  <li><a href='veh_coche_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VehCocheImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PanPanol') ?></div>
		  <li><a href='pan_panol_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PanPanol') ?> </a></li>
		  <li><a href='pan_panol_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PanPanol') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PanPanolUsUsuarios') ?></div>
		  <li><a href='pan_panol_us_usuario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PanPanolUsUsuarios') ?> </a></li>
		  <li><a href='pan_panol_us_usuario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PanPanolUsUsuarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PanTipoPanols') ?></div>
		  <li><a href='pan_tipo_panol_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PanTipoPanols') ?> </a></li>
		  <li><a href='pan_tipo_panol_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PanTipoPanols') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PanUbiPisos') ?></div>
		  <li><a href='pan_ubi_piso_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PanUbiPisos') ?> </a></li>
		  <li><a href='pan_ubi_piso_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PanUbiPisos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PanUbiPasillos') ?></div>
		  <li><a href='pan_ubi_pasillo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PanUbiPasillos') ?> </a></li>
		  <li><a href='pan_ubi_pasillo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PanUbiPasillos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PanUbiEstantes') ?></div>
		  <li><a href='pan_ubi_estante_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PanUbiEstantes') ?> </a></li>
		  <li><a href='pan_ubi_estante_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PanUbiEstantes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PanUbiAlturas') ?></div>
		  <li><a href='pan_ubi_altura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PanUbiAlturas') ?> </a></li>
		  <li><a href='pan_ubi_altura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PanUbiAlturas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PanUbiCasilleros') ?></div>
		  <li><a href='pan_ubi_casillero_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PanUbiCasilleros') ?> </a></li>
		  <li><a href='pan_ubi_casillero_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PanUbiCasilleros') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PanUbiCeldas') ?></div>
		  <li><a href='pan_ubi_celda_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PanUbiCeldas') ?> </a></li>
		  <li><a href='pan_ubi_celda_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PanUbiCeldas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliCliente') ?></div>
		  <li><a href='cli_cliente_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliCliente') ?> </a></li>
		  <li><a href='cli_cliente_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliCliente') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliTelefono') ?></div>
		  <li><a href='cli_telefono_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliTelefono') ?> </a></li>
		  <li><a href='cli_telefono_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliTelefono') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliTelefonoTipos') ?></div>
		  <li><a href='cli_telefono_tipo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliTelefonoTipos') ?> </a></li>
		  <li><a href='cli_telefono_tipo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliTelefonoTipos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliEmail') ?></div>
		  <li><a href='cli_email_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliEmail') ?> </a></li>
		  <li><a href='cli_email_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliEmail') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliDomicilio') ?></div>
		  <li><a href='cli_domicilio_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliDomicilio') ?> </a></li>
		  <li><a href='cli_domicilio_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliDomicilio') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliRubro') ?></div>
		  <li><a href='cli_rubro_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliRubro') ?> </a></li>
		  <li><a href='cli_rubro_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliRubro') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliClienteCliRubro') ?></div>
		  <li><a href='cli_cliente_cli_rubro_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliClienteCliRubro') ?> </a></li>
		  <li><a href='cli_cliente_cli_rubro_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliClienteCliRubro') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliGrupo') ?></div>
		  <li><a href='cli_grupo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliGrupo') ?> </a></li>
		  <li><a href='cli_grupo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliGrupo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliCategoria') ?></div>
		  <li><a href='cli_categoria_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliCategoria') ?> </a></li>
		  <li><a href='cli_categoria_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliCategoria') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliCategoriaInsTipoListaPrecio') ?></div>
		  <li><a href='cli_categoria_ins_tipo_lista_precio_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliCategoriaInsTipoListaPrecio') ?> </a></li>
		  <li><a href='cli_categoria_ins_tipo_lista_precio_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliCategoriaInsTipoListaPrecio') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliCentroRecepcion') ?></div>
		  <li><a href='cli_centro_recepcion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliCentroRecepcion') ?> </a></li>
		  <li><a href='cli_centro_recepcion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliCentroRecepcion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliCentroPedido') ?></div>
		  <li><a href='cli_centro_pedido_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliCentroPedido') ?> </a></li>
		  <li><a href='cli_centro_pedido_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliCentroPedido') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliMedioDigital') ?></div>
		  <li><a href='cli_medio_digital_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliMedioDigital') ?> </a></li>
		  <li><a href='cli_medio_digital_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliMedioDigital') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliTipoMedioDigital') ?></div>
		  <li><a href='cli_tipo_medio_digital_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliTipoMedioDigital') ?> </a></li>
		  <li><a href='cli_tipo_medio_digital_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliTipoMedioDigital') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliClienteVtaVendedor') ?></div>
		  <li><a href='cli_cliente_vta_vendedor_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliClienteVtaVendedor') ?> </a></li>
		  <li><a href='cli_cliente_vta_vendedor_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliClienteVtaVendedor') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliClienteInsTipoListaPrecio') ?></div>
		  <li><a href='cli_cliente_ins_tipo_lista_precio_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliClienteInsTipoListaPrecio') ?> </a></li>
		  <li><a href='cli_cliente_ins_tipo_lista_precio_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliClienteInsTipoListaPrecio') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliClienteVtaPreventista') ?></div>
		  <li><a href='cli_cliente_vta_preventista_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliClienteVtaPreventista') ?> </a></li>
		  <li><a href='cli_cliente_vta_preventista_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliClienteVtaPreventista') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliClienteVtaComprador') ?></div>
		  <li><a href='cli_cliente_vta_comprador_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliClienteVtaComprador') ?> </a></li>
		  <li><a href='cli_cliente_vta_comprador_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliClienteVtaComprador') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliClienteGralFpAgrupacion') ?></div>
		  <li><a href='cli_cliente_gral_fp_agrupacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliClienteGralFpAgrupacion') ?> </a></li>
		  <li><a href='cli_cliente_gral_fp_agrupacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliClienteGralFpAgrupacion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliClienteGralFpCuota') ?></div>
		  <li><a href='cli_cliente_gral_fp_cuota_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliClienteGralFpCuota') ?> </a></li>
		  <li><a href='cli_cliente_gral_fp_cuota_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliClienteGralFpCuota') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliClienteGralActividads') ?></div>
		  <li><a href='cli_cliente_gral_actividad_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliClienteGralActividads') ?> </a></li>
		  <li><a href='cli_cliente_gral_actividad_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliClienteGralActividads') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CliClienteVtaPuntoVentas') ?></div>
		  <li><a href='cli_cliente_vta_punto_venta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CliClienteVtaPuntoVentas') ?> </a></li>
		  <li><a href='cli_cliente_vta_punto_venta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CliClienteVtaPuntoVentas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaVendedor') ?></div>
		  <li><a href='vta_vendedor_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaVendedor') ?> </a></li>
		  <li><a href='vta_vendedor_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaVendedor') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaComprador') ?></div>
		  <li><a href='vta_comprador_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaComprador') ?> </a></li>
		  <li><a href='vta_comprador_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaComprador') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPreventista') ?></div>
		  <li><a href='vta_preventista_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPreventista') ?> </a></li>
		  <li><a href='vta_preventista_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPreventista') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPresupuesto') ?></div>
		  <li><a href='vta_presupuesto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPresupuesto') ?> </a></li>
		  <li><a href='vta_presupuesto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPresupuesto') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPresupuestoTipoEmision') ?></div>
		  <li><a href='vta_presupuesto_tipo_emision_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPresupuestoTipoEmision') ?> </a></li>
		  <li><a href='vta_presupuesto_tipo_emision_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPresupuestoTipoEmision') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPresupuestoTipoEstado') ?></div>
		  <li><a href='vta_presupuesto_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPresupuestoTipoEstado') ?> </a></li>
		  <li><a href='vta_presupuesto_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPresupuestoTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPresupuestoEstado') ?></div>
		  <li><a href='vta_presupuesto_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPresupuestoEstado') ?> </a></li>
		  <li><a href='vta_presupuesto_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPresupuestoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></div>
		  <li><a href='vta_presupuesto_ins_insumo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPresupuestoInsInsumo') ?> </a></li>
		  <li><a href='vta_presupuesto_ins_insumo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPresupuestoInsInsumo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPresupuestoConflicto') ?></div>
		  <li><a href='vta_presupuesto_conflicto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPresupuestoConflicto') ?> </a></li>
		  <li><a href='vta_presupuesto_conflicto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPresupuestoConflicto') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPresupuestoCancelacion') ?></div>
		  <li><a href='vta_presupuesto_cancelacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPresupuestoCancelacion') ?> </a></li>
		  <li><a href='vta_presupuesto_cancelacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPresupuestoCancelacion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPresupuestoEnviado') ?></div>
		  <li><a href='vta_presupuesto_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPresupuestoEnviado') ?> </a></li>
		  <li><a href='vta_presupuesto_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPresupuestoEnviado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPresupuestoVehCoches') ?></div>
		  <li><a href='vta_presupuesto_veh_coche_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPresupuestoVehCoches') ?> </a></li>
		  <li><a href='vta_presupuesto_veh_coche_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPresupuestoVehCoches') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoFactura') ?></div>
		  <li><a href='vta_tipo_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoFactura') ?> </a></li>
		  <li><a href='vta_tipo_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoFactura') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoOrigenFacturas') ?></div>
		  <li><a href='vta_tipo_origen_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoOrigenFacturas') ?> </a></li>
		  <li><a href='vta_tipo_origen_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoOrigenFacturas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?></div>
		  <li><a href='vta_tipo_factura_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?> </a></li>
		  <li><a href='vta_tipo_factura_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoFacturaWsFeParamTipoComprobante') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?></div>
		  <li><a href='vta_tributo_ws_fe_param_tipo_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?> </a></li>
		  <li><a href='vta_tributo_ws_fe_param_tipo_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTributoExencions') ?></div>
		  <li><a href='vta_tributo_exencion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTributoExencions') ?> </a></li>
		  <li><a href='vta_tributo_exencion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTributoExencions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTributo') ?></div>
		  <li><a href='vta_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTributo') ?> </a></li>
		  <li><a href='vta_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoNotaCredito') ?></div>
		  <li><a href='vta_tipo_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoNotaCredito') ?> </a></li>
		  <li><a href='vta_tipo_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoNotaCredito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoNotaCreditoWsFeParamTipoComprobante') ?></div>
		  <li><a href='vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoNotaCreditoWsFeParamTipoComprobante') ?> </a></li>
		  <li><a href='vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoNotaCreditoWsFeParamTipoComprobante') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoOrigenNotaCreditos') ?></div>
		  <li><a href='vta_tipo_origen_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoOrigenNotaCreditos') ?> </a></li>
		  <li><a href='vta_tipo_origen_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoOrigenNotaCreditos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoNotaDebito') ?></div>
		  <li><a href='vta_tipo_nota_debito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoNotaDebito') ?> </a></li>
		  <li><a href='vta_tipo_nota_debito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoNotaDebito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoOrigenNotaDebitos') ?></div>
		  <li><a href='vta_tipo_origen_nota_debito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoOrigenNotaDebitos') ?> </a></li>
		  <li><a href='vta_tipo_origen_nota_debito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoOrigenNotaDebitos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoNotaDebitoWsFeParamTipoComprobante') ?></div>
		  <li><a href='vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoNotaDebitoWsFeParamTipoComprobante') ?> </a></li>
		  <li><a href='vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoNotaDebitoWsFeParamTipoComprobante') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaCredito') ?></div>
		  <li><a href='vta_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaCredito') ?> </a></li>
		  <li><a href='vta_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaCredito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaCreditoTipoEstado') ?></div>
		  <li><a href='vta_nota_credito_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaCreditoTipoEstado') ?> </a></li>
		  <li><a href='vta_nota_credito_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaCreditoTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaCreditoEstado') ?></div>
		  <li><a href='vta_nota_credito_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaCreditoEstado') ?> </a></li>
		  <li><a href='vta_nota_credito_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaCreditoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaCreditoConcepto') ?></div>
		  <li><a href='vta_nota_credito_concepto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaCreditoConcepto') ?> </a></li>
		  <li><a href='vta_nota_credito_concepto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaCreditoConcepto') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaCreditoWsFeOpeSolicitud') ?></div>
		  <li><a href='vta_nota_credito_ws_fe_ope_solicitud_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaCreditoWsFeOpeSolicitud') ?> </a></li>
		  <li><a href='vta_nota_credito_ws_fe_ope_solicitud_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaCreditoWsFeOpeSolicitud') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?></div>
		  <li><a href='vta_nota_credito_vta_factura_vta_orden_venta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?> </a></li>
		  <li><a href='vta_nota_credito_vta_factura_vta_orden_venta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?></div>
		  <li><a href='vta_nota_credito_vta_factura_vta_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?> </a></li>
		  <li><a href='vta_nota_credito_vta_factura_vta_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaCreditoItem') ?></div>
		  <li><a href='vta_nota_credito_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaCreditoItem') ?> </a></li>
		  <li><a href='vta_nota_credito_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaCreditoItem') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaCreditoEnviado') ?></div>
		  <li><a href='vta_nota_credito_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaCreditoEnviado') ?> </a></li>
		  <li><a href='vta_nota_credito_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaCreditoEnviado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaCreditoVtaTributo') ?></div>
		  <li><a href='vta_nota_credito_vta_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaCreditoVtaTributo') ?> </a></li>
		  <li><a href='vta_nota_credito_vta_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaCreditoVtaTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaDebito') ?></div>
		  <li><a href='vta_nota_debito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaDebito') ?> </a></li>
		  <li><a href='vta_nota_debito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaDebito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaDebitoTipoEstado') ?></div>
		  <li><a href='vta_nota_debito_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaDebitoTipoEstado') ?> </a></li>
		  <li><a href='vta_nota_debito_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaDebitoTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaDebitoEstado') ?></div>
		  <li><a href='vta_nota_debito_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaDebitoEstado') ?> </a></li>
		  <li><a href='vta_nota_debito_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaDebitoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaDebitoConcepto') ?></div>
		  <li><a href='vta_nota_debito_concepto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaDebitoConcepto') ?> </a></li>
		  <li><a href='vta_nota_debito_concepto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaDebitoConcepto') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaDebitoWsFeOpeSolicitud') ?></div>
		  <li><a href='vta_nota_debito_ws_fe_ope_solicitud_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaDebitoWsFeOpeSolicitud') ?> </a></li>
		  <li><a href='vta_nota_debito_ws_fe_ope_solicitud_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaDebitoWsFeOpeSolicitud') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaDebitoVtaTributo') ?></div>
		  <li><a href='vta_nota_debito_vta_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaDebitoVtaTributo') ?> </a></li>
		  <li><a href='vta_nota_debito_vta_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaDebitoVtaTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?></div>
		  <li><a href='vta_nota_debito_vta_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?> </a></li>
		  <li><a href='vta_nota_debito_vta_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaDebitoVtaRecibo') ?></div>
		  <li><a href='vta_nota_debito_vta_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaDebitoVtaRecibo') ?> </a></li>
		  <li><a href='vta_nota_debito_vta_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaDebitoVtaRecibo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaDebitoEnviado') ?></div>
		  <li><a href='vta_nota_debito_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaDebitoEnviado') ?> </a></li>
		  <li><a href='vta_nota_debito_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaDebitoEnviado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaNotaDebitoItem') ?></div>
		  <li><a href='vta_nota_debito_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaNotaDebitoItem') ?> </a></li>
		  <li><a href='vta_nota_debito_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaNotaDebitoItem') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaRecibo') ?></div>
		  <li><a href='vta_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaRecibo') ?> </a></li>
		  <li><a href='vta_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaRecibo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboImagens') ?></div>
		  <li><a href='vta_recibo_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboImagens') ?> </a></li>
		  <li><a href='vta_recibo_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboArchivos') ?></div>
		  <li><a href='vta_recibo_archivo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboArchivos') ?> </a></li>
		  <li><a href='vta_recibo_archivo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboArchivos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboTipoEstado') ?></div>
		  <li><a href='vta_recibo_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboTipoEstado') ?> </a></li>
		  <li><a href='vta_recibo_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboEstado') ?></div>
		  <li><a href='vta_recibo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboEstado') ?> </a></li>
		  <li><a href='vta_recibo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboEnviado') ?></div>
		  <li><a href='vta_recibo_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboEnviado') ?> </a></li>
		  <li><a href='vta_recibo_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboEnviado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboItem') ?></div>
		  <li><a href='vta_recibo_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboItem') ?> </a></li>
		  <li><a href='vta_recibo_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboItem') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboItemConciliado') ?></div>
		  <li><a href='vta_recibo_item_conciliado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboItemConciliado') ?> </a></li>
		  <li><a href='vta_recibo_item_conciliado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboItemConciliado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboItemCheque') ?></div>
		  <li><a href='vta_recibo_item_cheque_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboItemCheque') ?> </a></li>
		  <li><a href='vta_recibo_item_cheque_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboItemCheque') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboItemRetencions') ?></div>
		  <li><a href='vta_recibo_item_retencion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboItemRetencions') ?> </a></li>
		  <li><a href='vta_recibo_item_retencion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboItemRetencions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboConcepto') ?></div>
		  <li><a href='vta_recibo_concepto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboConcepto') ?> </a></li>
		  <li><a href='vta_recibo_concepto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboConcepto') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboWsFeOpeSolicitud') ?></div>
		  <li><a href='vta_recibo_ws_fe_ope_solicitud_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboWsFeOpeSolicitud') ?> </a></li>
		  <li><a href='vta_recibo_ws_fe_ope_solicitud_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboWsFeOpeSolicitud') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoRecibo') ?></div>
		  <li><a href='vta_tipo_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoRecibo') ?> </a></li>
		  <li><a href='vta_tipo_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoRecibo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoOrigenRecibos') ?></div>
		  <li><a href='vta_tipo_origen_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoOrigenRecibos') ?> </a></li>
		  <li><a href='vta_tipo_origen_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoOrigenRecibos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoReciboWsFeParamTipoComprobante') ?></div>
		  <li><a href='vta_tipo_recibo_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoReciboWsFeParamTipoComprobante') ?> </a></li>
		  <li><a href='vta_tipo_recibo_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoReciboWsFeParamTipoComprobante') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPuntoVenta') ?></div>
		  <li><a href='vta_punto_venta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPuntoVenta') ?> </a></li>
		  <li><a href='vta_punto_venta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPuntoVenta') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?></div>
		  <li><a href='vta_punto_venta_ws_fe_param_punto_venta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?> </a></li>
		  <li><a href='vta_punto_venta_ws_fe_param_punto_venta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVenta') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaReciboVtaTributo') ?></div>
		  <li><a href='vta_recibo_vta_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaReciboVtaTributo') ?> </a></li>
		  <li><a href='vta_recibo_vta_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaReciboVtaTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaOrdenVenta') ?></div>
		  <li><a href='vta_orden_venta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaOrdenVenta') ?> </a></li>
		  <li><a href='vta_orden_venta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaOrdenVenta') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaOrdenVentaTipoEstado') ?></div>
		  <li><a href='vta_orden_venta_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstado') ?> </a></li>
		  <li><a href='vta_orden_venta_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaOrdenVentaEstado') ?></div>
		  <li><a href='vta_orden_venta_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaOrdenVentaEstado') ?> </a></li>
		  <li><a href='vta_orden_venta_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaOrdenVentaEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?></div>
		  <li><a href='vta_orden_venta_tipo_estado_facturacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?> </a></li>
		  <li><a href='vta_orden_venta_tipo_estado_facturacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?></div>
		  <li><a href='vta_orden_venta_estado_facturacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?> </a></li>
		  <li><a href='vta_orden_venta_estado_facturacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?></div>
		  <li><a href='vta_orden_venta_tipo_estado_remision_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?> </a></li>
		  <li><a href='vta_orden_venta_tipo_estado_remision_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?></div>
		  <li><a href='vta_orden_venta_estado_remision_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?> </a></li>
		  <li><a href='vta_orden_venta_estado_remision_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaOrdenVentaTipoEstadoCobro') ?></div>
		  <li><a href='vta_orden_venta_tipo_estado_cobro_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoCobro') ?> </a></li>
		  <li><a href='vta_orden_venta_tipo_estado_cobro_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoCobro') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?></div>
		  <li><a href='vta_orden_venta_estado_cobro_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?> </a></li>
		  <li><a href='vta_orden_venta_estado_cobro_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaOrdenVentaVtaRecibos') ?></div>
		  <li><a href='vta_orden_venta_vta_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaOrdenVentaVtaRecibos') ?> </a></li>
		  <li><a href='vta_orden_venta_vta_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaOrdenVentaVtaRecibos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?></div>
		  <li><a href='vta_remito_vta_orden_venta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?> </a></li>
		  <li><a href='vta_remito_vta_orden_venta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaRemito') ?></div>
		  <li><a href='vta_remito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaRemito') ?> </a></li>
		  <li><a href='vta_remito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaRemito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaRemitoTipoEstado') ?></div>
		  <li><a href='vta_remito_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaRemitoTipoEstado') ?> </a></li>
		  <li><a href='vta_remito_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaRemitoTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaRemitoEstado') ?></div>
		  <li><a href='vta_remito_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaRemitoEstado') ?> </a></li>
		  <li><a href='vta_remito_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaRemitoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaRemitoEnviado') ?></div>
		  <li><a href='vta_remito_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaRemitoEnviado') ?> </a></li>
		  <li><a href='vta_remito_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaRemitoEnviado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaVendedorUsUsuario') ?></div>
		  <li><a href='vta_vendedor_us_usuario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaVendedorUsUsuario') ?> </a></li>
		  <li><a href='vta_vendedor_us_usuario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaVendedorUsUsuario') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?></div>
		  <li><a href='vta_vendedor_ins_tipo_lista_precio_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?> </a></li>
		  <li><a href='vta_vendedor_ins_tipo_lista_precio_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoComprador') ?></div>
		  <li><a href='vta_tipo_comprador_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoComprador') ?> </a></li>
		  <li><a href='vta_tipo_comprador_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoComprador') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaTipoVendedor') ?></div>
		  <li><a href='vta_tipo_vendedor_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaTipoVendedor') ?> </a></li>
		  <li><a href='vta_tipo_vendedor_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaTipoVendedor') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaVendedorDescuento') ?></div>
		  <li><a href='vta_vendedor_descuento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaVendedorDescuento') ?> </a></li>
		  <li><a href='vta_vendedor_descuento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaVendedorDescuento') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaFactura') ?></div>
		  <li><a href='vta_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaFactura') ?> </a></li>
		  <li><a href='vta_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaFactura') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaFacturaTipoEstado') ?></div>
		  <li><a href='vta_factura_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaFacturaTipoEstado') ?> </a></li>
		  <li><a href='vta_factura_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaFacturaTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaFacturaEstado') ?></div>
		  <li><a href='vta_factura_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaFacturaEstado') ?> </a></li>
		  <li><a href='vta_factura_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaFacturaEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaFacturaConceptos') ?></div>
		  <li><a href='vta_factura_concepto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaFacturaConceptos') ?> </a></li>
		  <li><a href='vta_factura_concepto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaFacturaConceptos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaFacturaItems') ?></div>
		  <li><a href='vta_factura_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaFacturaItems') ?> </a></li>
		  <li><a href='vta_factura_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaFacturaItems') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaFacturaVtaTributo') ?></div>
		  <li><a href='vta_factura_vta_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaFacturaVtaTributo') ?> </a></li>
		  <li><a href='vta_factura_vta_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaFacturaVtaTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaFacturaVtaRecibo') ?></div>
		  <li><a href='vta_factura_vta_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaFacturaVtaRecibo') ?> </a></li>
		  <li><a href='vta_factura_vta_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaFacturaVtaRecibo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaFacturaVtaNotaCredito') ?></div>
		  <li><a href='vta_factura_vta_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaFacturaVtaNotaCredito') ?> </a></li>
		  <li><a href='vta_factura_vta_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaFacturaVtaNotaCredito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaFacturaWsFeOpeSolicitud') ?></div>
		  <li><a href='vta_factura_ws_fe_ope_solicitud_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaFacturaWsFeOpeSolicitud') ?> </a></li>
		  <li><a href='vta_factura_ws_fe_ope_solicitud_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaFacturaWsFeOpeSolicitud') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaFacturaEnviado') ?></div>
		  <li><a href='vta_factura_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaFacturaEnviado') ?> </a></li>
		  <li><a href='vta_factura_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaFacturaEnviado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?></div>
		  <li><a href='vta_factura_vta_orden_venta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?> </a></li>
		  <li><a href='vta_factura_vta_orden_venta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPoliticaDescuentos') ?></div>
		  <li><a href='vta_politica_descuento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPoliticaDescuentos') ?> </a></li>
		  <li><a href='vta_politica_descuento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPoliticaDescuentos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPoliticaDescuentoRangos') ?></div>
		  <li><a href='vta_politica_descuento_rango_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPoliticaDescuentoRangos') ?> </a></li>
		  <li><a href='vta_politica_descuento_rango_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPoliticaDescuentoRangos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPoliticaDescuentoInsTipoListaPrecios') ?></div>
		  <li><a href='vta_politica_descuento_ins_tipo_lista_precio_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsTipoListaPrecios') ?> </a></li>
		  <li><a href='vta_politica_descuento_ins_tipo_lista_precio_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsTipoListaPrecios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPoliticaDescuentoInsCategorias') ?></div>
		  <li><a href='vta_politica_descuento_ins_categoria_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsCategorias') ?> </a></li>
		  <li><a href='vta_politica_descuento_ins_categoria_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsCategorias') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaPoliticaDescuentoInsInsumos') ?></div>
		  <li><a href='vta_politica_descuento_ins_insumo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsInsumos') ?> </a></li>
		  <li><a href='vta_politica_descuento_ins_insumo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsInsumos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaComisions') ?></div>
		  <li><a href='vta_comision_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaComisions') ?> </a></li>
		  <li><a href='vta_comision_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaComisions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaComisionTipoEstado') ?></div>
		  <li><a href='vta_comision_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaComisionTipoEstado') ?> </a></li>
		  <li><a href='vta_comision_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaComisionTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaComisionEstado') ?></div>
		  <li><a href='vta_comision_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaComisionEstado') ?> </a></li>
		  <li><a href='vta_comision_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaComisionEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaComisionEnviados') ?></div>
		  <li><a href='vta_comision_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaComisionEnviados') ?> </a></li>
		  <li><a href='vta_comision_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaComisionEnviados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaComisionVtaFactura') ?></div>
		  <li><a href='vta_comision_vta_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaComisionVtaFactura') ?> </a></li>
		  <li><a href='vta_comision_vta_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaComisionVtaFactura') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaComisionGralFpFormaPago') ?></div>
		  <li><a href='vta_comision_gral_fp_forma_pago_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaComisionGralFpFormaPago') ?> </a></li>
		  <li><a href='vta_comision_gral_fp_forma_pago_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaComisionGralFpFormaPago') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('VtaComisionGralFpFormaPagoCheques') ?></div>
		  <li><a href='vta_comision_gral_fp_forma_pago_cheque_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaComisionGralFpFormaPagoCheques') ?> </a></li>
		  <li><a href='vta_comision_gral_fp_forma_pago_cheque_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('VtaComisionGralFpFormaPagoCheques') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeParamTipoIva') ?></div>
		  <li><a href='ws_fe_param_tipo_iva_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeParamTipoIva') ?> </a></li>
		  <li><a href='ws_fe_param_tipo_iva_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeParamTipoIva') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeParamTipoTributo') ?></div>
		  <li><a href='ws_fe_param_tipo_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeParamTipoTributo') ?> </a></li>
		  <li><a href='ws_fe_param_tipo_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeParamTipoTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeParamTipoOpcional') ?></div>
		  <li><a href='ws_fe_param_tipo_opcional_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeParamTipoOpcional') ?> </a></li>
		  <li><a href='ws_fe_param_tipo_opcional_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeParamTipoOpcional') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeParamTipoPais') ?></div>
		  <li><a href='ws_fe_param_tipo_pais_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeParamTipoPais') ?> </a></li>
		  <li><a href='ws_fe_param_tipo_pais_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeParamTipoPais') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeParamTipoMoneda') ?></div>
		  <li><a href='ws_fe_param_tipo_moneda_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeParamTipoMoneda') ?> </a></li>
		  <li><a href='ws_fe_param_tipo_moneda_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeParamTipoMoneda') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeParamTipoComprobante') ?></div>
		  <li><a href='ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeParamTipoComprobante') ?> </a></li>
		  <li><a href='ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeParamTipoComprobante') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeParamTipoConcepto') ?></div>
		  <li><a href='ws_fe_param_tipo_concepto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeParamTipoConcepto') ?> </a></li>
		  <li><a href='ws_fe_param_tipo_concepto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeParamTipoConcepto') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeParamTipoDocumento') ?></div>
		  <li><a href='ws_fe_param_tipo_documento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeParamTipoDocumento') ?> </a></li>
		  <li><a href='ws_fe_param_tipo_documento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeParamTipoDocumento') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeParamPuntoVenta') ?></div>
		  <li><a href='ws_fe_param_punto_venta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeParamPuntoVenta') ?> </a></li>
		  <li><a href='ws_fe_param_punto_venta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeParamPuntoVenta') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeOpeSolicitudIva') ?></div>
		  <li><a href='ws_fe_ope_solicitud_iva_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeOpeSolicitudIva') ?> </a></li>
		  <li><a href='ws_fe_ope_solicitud_iva_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeOpeSolicitudIva') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeOpeSolicitudOpcional') ?></div>
		  <li><a href='ws_fe_ope_solicitud_opcional_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeOpeSolicitudOpcional') ?> </a></li>
		  <li><a href='ws_fe_ope_solicitud_opcional_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeOpeSolicitudOpcional') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeOpeSolicitudRespuestaObservacion') ?></div>
		  <li><a href='ws_fe_ope_solicitud_respuesta_observacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeOpeSolicitudRespuestaObservacion') ?> </a></li>
		  <li><a href='ws_fe_ope_solicitud_respuesta_observacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeOpeSolicitudRespuestaObservacion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeOpeSolicitudComprobanteAsociado') ?></div>
		  <li><a href='ws_fe_ope_solicitud_comprobante_asociado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeOpeSolicitudComprobanteAsociado') ?> </a></li>
		  <li><a href='ws_fe_ope_solicitud_comprobante_asociado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeOpeSolicitudComprobanteAsociado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeOpeSolicitudTributo') ?></div>
		  <li><a href='ws_fe_ope_solicitud_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeOpeSolicitudTributo') ?> </a></li>
		  <li><a href='ws_fe_ope_solicitud_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeOpeSolicitudTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeOpeSolicitud') ?></div>
		  <li><a href='ws_fe_ope_solicitud_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?> </a></li>
		  <li><a href='ws_fe_ope_solicitud_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?></div>
		  <li><a href='ws_fe_ope_solicitud_respuesta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?> </a></li>
		  <li><a href='ws_fe_ope_solicitud_respuesta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsStockTipoMovimientos') ?></div>
		  <li><a href='ins_stock_tipo_movimiento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsStockTipoMovimientos') ?> </a></li>
		  <li><a href='ins_stock_tipo_movimiento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsStockTipoMovimientos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsStockMovimientos') ?></div>
		  <li><a href='ins_stock_movimiento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsStockMovimientos') ?> </a></li>
		  <li><a href='ins_stock_movimiento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsStockMovimientos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsStockResumens') ?></div>
		  <li><a href='ins_stock_resumen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsStockResumens') ?> </a></li>
		  <li><a href='ins_stock_resumen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsStockResumens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsStockResumenEstados') ?></div>
		  <li><a href='ins_stock_resumen_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsStockResumenEstados') ?> </a></li>
		  <li><a href='ins_stock_resumen_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsStockResumenEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('InsStockResumenTipoEstados') ?></div>
		  <li><a href='ins_stock_resumen_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('InsStockResumenTipoEstados') ?> </a></li>
		  <li><a href='ins_stock_resumen_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('InsStockResumenTipoEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiPedidos') ?></div>
		  <li><a href='pdi_pedido_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiPedidos') ?> </a></li>
		  <li><a href='pdi_pedido_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiPedidos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiEstados') ?></div>
		  <li><a href='pdi_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiEstados') ?> </a></li>
		  <li><a href='pdi_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiTipoEstados') ?></div>
		  <li><a href='pdi_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiTipoEstados') ?> </a></li>
		  <li><a href='pdi_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiTipoEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiPedidoDestinatarios') ?></div>
		  <li><a href='pdi_pedido_destinatario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiPedidoDestinatarios') ?> </a></li>
		  <li><a href='pdi_pedido_destinatario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiPedidoDestinatarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiComentarios') ?></div>
		  <li><a href='pdi_comentario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiComentarios') ?> </a></li>
		  <li><a href='pdi_comentario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiComentarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiTipoOrigens') ?></div>
		  <li><a href='pdi_tipo_origen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiTipoOrigens') ?> </a></li>
		  <li><a href='pdi_tipo_origen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiTipoOrigens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiUrgencias') ?></div>
		  <li><a href='pdi_urgencia_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiUrgencias') ?> </a></li>
		  <li><a href='pdi_urgencia_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiUrgencias') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiPedidoAgrupacions') ?></div>
		  <li><a href='pdi_pedido_agrupacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiPedidoAgrupacions') ?> </a></li>
		  <li><a href='pdi_pedido_agrupacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiPedidoAgrupacions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiPedidoAgrupacionEstados') ?></div>
		  <li><a href='pdi_pedido_agrupacion_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiPedidoAgrupacionEstados') ?> </a></li>
		  <li><a href='pdi_pedido_agrupacion_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiPedidoAgrupacionEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiPedidoAgrupacionTipoEstados') ?></div>
		  <li><a href='pdi_pedido_agrupacion_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiPedidoAgrupacionTipoEstados') ?> </a></li>
		  <li><a href='pdi_pedido_agrupacion_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiPedidoAgrupacionTipoEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiPedidoAgrupacionEnviado') ?></div>
		  <li><a href='pdi_pedido_agrupacion_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiPedidoAgrupacionEnviado') ?> </a></li>
		  <li><a href='pdi_pedido_agrupacion_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiPedidoAgrupacionEnviado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdiPedidoAgrupacionItems') ?></div>
		  <li><a href='pdi_pedido_agrupacion_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdiPedidoAgrupacionItems') ?> </a></li>
		  <li><a href='pdi_pedido_agrupacion_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdiPedidoAgrupacionItems') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdePedidos') ?></div>
		  <li><a href='pde_pedido_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdePedidos') ?> </a></li>
		  <li><a href='pde_pedido_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdePedidos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeEstados') ?></div>
		  <li><a href='pde_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeEstados') ?> </a></li>
		  <li><a href='pde_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoEstados') ?></div>
		  <li><a href='pde_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoEstados') ?> </a></li>
		  <li><a href='pde_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdePedidoEnviados') ?></div>
		  <li><a href='pde_pedido_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdePedidoEnviados') ?> </a></li>
		  <li><a href='pde_pedido_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdePedidoEnviados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdePedidoDestinatarios') ?></div>
		  <li><a href='pde_pedido_destinatario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdePedidoDestinatarios') ?> </a></li>
		  <li><a href='pde_pedido_destinatario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdePedidoDestinatarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdePedidoEnvioEmails') ?></div>
		  <li><a href='pde_pedido_envio_email_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdePedidoEnvioEmails') ?> </a></li>
		  <li><a href='pde_pedido_envio_email_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdePedidoEnvioEmails') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeUrgencias') ?></div>
		  <li><a href='pde_urgencia_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeUrgencias') ?> </a></li>
		  <li><a href='pde_urgencia_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeUrgencias') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdePedidoPrvProveedors') ?></div>
		  <li><a href='pde_pedido_prv_proveedor_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdePedidoPrvProveedors') ?> </a></li>
		  <li><a href='pde_pedido_prv_proveedor_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdePedidoPrvProveedors') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdePedidoPrvProveedorAvisados') ?></div>
		  <li><a href='pde_pedido_prv_proveedor_avisado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdePedidoPrvProveedorAvisados') ?> </a></li>
		  <li><a href='pde_pedido_prv_proveedor_avisado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdePedidoPrvProveedorAvisados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeCotizacions') ?></div>
		  <li><a href='pde_cotizacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeCotizacions') ?> </a></li>
		  <li><a href='pde_cotizacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeCotizacions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeCotizacionDestinatarios') ?></div>
		  <li><a href='pde_cotizacion_destinatario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeCotizacionDestinatarios') ?> </a></li>
		  <li><a href='pde_cotizacion_destinatario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeCotizacionDestinatarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeCotizacionEnvioEmails') ?></div>
		  <li><a href='pde_cotizacion_envio_email_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeCotizacionEnvioEmails') ?> </a></li>
		  <li><a href='pde_cotizacion_envio_email_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeCotizacionEnvioEmails') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcAgrupacions') ?></div>
		  <li><a href='pde_oc_agrupacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcAgrupacions') ?> </a></li>
		  <li><a href='pde_oc_agrupacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcAgrupacions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcAgrupacionEstados') ?></div>
		  <li><a href='pde_oc_agrupacion_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcAgrupacionEstados') ?> </a></li>
		  <li><a href='pde_oc_agrupacion_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcAgrupacionEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcAgrupacionTipoEstados') ?></div>
		  <li><a href='pde_oc_agrupacion_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcAgrupacionTipoEstados') ?> </a></li>
		  <li><a href='pde_oc_agrupacion_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcAgrupacionTipoEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcAgrupacionEnviado') ?></div>
		  <li><a href='pde_oc_agrupacion_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcAgrupacionEnviado') ?> </a></li>
		  <li><a href='pde_oc_agrupacion_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcAgrupacionEnviado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcAgrupacionItems') ?></div>
		  <li><a href='pde_oc_agrupacion_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcAgrupacionItems') ?> </a></li>
		  <li><a href='pde_oc_agrupacion_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcAgrupacionItems') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcs') ?></div>
		  <li><a href='pde_oc_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcs') ?> </a></li>
		  <li><a href='pde_oc_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcs') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcEstados') ?></div>
		  <li><a href='pde_oc_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcEstados') ?> </a></li>
		  <li><a href='pde_oc_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcTipoEstados') ?></div>
		  <li><a href='pde_oc_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcTipoEstados') ?> </a></li>
		  <li><a href='pde_oc_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcTipoEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcEstadoRecepcion') ?></div>
		  <li><a href='pde_oc_estado_recepcion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcEstadoRecepcion') ?> </a></li>
		  <li><a href='pde_oc_estado_recepcion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcEstadoRecepcion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcTipoEstadoRecepcion') ?></div>
		  <li><a href='pde_oc_tipo_estado_recepcion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcTipoEstadoRecepcion') ?> </a></li>
		  <li><a href='pde_oc_tipo_estado_recepcion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcTipoEstadoRecepcion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcEstadoFacturacion') ?></div>
		  <li><a href='pde_oc_estado_facturacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcEstadoFacturacion') ?> </a></li>
		  <li><a href='pde_oc_estado_facturacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcEstadoFacturacion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcTipoEstadoFacturacion') ?></div>
		  <li><a href='pde_oc_tipo_estado_facturacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcTipoEstadoFacturacion') ?> </a></li>
		  <li><a href='pde_oc_tipo_estado_facturacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcTipoEstadoFacturacion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcEnviados') ?></div>
		  <li><a href='pde_oc_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcEnviados') ?> </a></li>
		  <li><a href='pde_oc_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcEnviados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcTipoOrigens') ?></div>
		  <li><a href='pde_oc_tipo_origen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcTipoOrigens') ?> </a></li>
		  <li><a href='pde_oc_tipo_origen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcTipoOrigens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcDestinatario') ?></div>
		  <li><a href='pde_oc_destinatario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcDestinatario') ?> </a></li>
		  <li><a href='pde_oc_destinatario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcDestinatario') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcEnvioEmails') ?></div>
		  <li><a href='pde_oc_envio_email_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcEnvioEmails') ?> </a></li>
		  <li><a href='pde_oc_envio_email_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcEnvioEmails') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeRecepcionAgrupacions') ?></div>
		  <li><a href='pde_recepcion_agrupacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeRecepcionAgrupacions') ?> </a></li>
		  <li><a href='pde_recepcion_agrupacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeRecepcionAgrupacions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeRecepcions') ?></div>
		  <li><a href='pde_recepcion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeRecepcions') ?> </a></li>
		  <li><a href='pde_recepcion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeRecepcions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeRecepcionEstados') ?></div>
		  <li><a href='pde_recepcion_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeRecepcionEstados') ?> </a></li>
		  <li><a href='pde_recepcion_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeRecepcionEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeRecepcionTipoEstados') ?></div>
		  <li><a href='pde_recepcion_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeRecepcionTipoEstados') ?> </a></li>
		  <li><a href='pde_recepcion_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeRecepcionTipoEstados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeRecepcionTipoEstadoFacturacion') ?></div>
		  <li><a href='pde_recepcion_tipo_estado_facturacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeRecepcionTipoEstadoFacturacion') ?> </a></li>
		  <li><a href='pde_recepcion_tipo_estado_facturacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeRecepcionTipoEstadoFacturacion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeRecepcionEstadoFacturacion') ?></div>
		  <li><a href='pde_recepcion_estado_facturacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeRecepcionEstadoFacturacion') ?> </a></li>
		  <li><a href='pde_recepcion_estado_facturacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeRecepcionEstadoFacturacion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeRecepcionDestinatarios') ?></div>
		  <li><a href='pde_recepcion_destinatario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeRecepcionDestinatarios') ?> </a></li>
		  <li><a href='pde_recepcion_destinatario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeRecepcionDestinatarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoRecepcions') ?></div>
		  <li><a href='pde_tipo_recepcion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoRecepcions') ?> </a></li>
		  <li><a href='pde_tipo_recepcion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoRecepcions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeCentroRecepcions') ?></div>
		  <li><a href='pde_centro_recepcion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeCentroRecepcions') ?> </a></li>
		  <li><a href='pde_centro_recepcion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeCentroRecepcions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeCentroRecepcionPanPanols') ?></div>
		  <li><a href='pde_centro_recepcion_pan_panol_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeCentroRecepcionPanPanols') ?> </a></li>
		  <li><a href='pde_centro_recepcion_pan_panol_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeCentroRecepcionPanPanols') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeCentroRecepcionUsUsuarios') ?></div>
		  <li><a href='pde_centro_recepcion_us_usuario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeCentroRecepcionUsUsuarios') ?> </a></li>
		  <li><a href='pde_centro_recepcion_us_usuario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeCentroRecepcionUsUsuarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeCentroPedidos') ?></div>
		  <li><a href='pde_centro_pedido_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeCentroPedidos') ?> </a></li>
		  <li><a href='pde_centro_pedido_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeCentroPedidos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeCentroPedidoUsUsuarios') ?></div>
		  <li><a href='pde_centro_pedido_us_usuario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeCentroPedidoUsUsuarios') ?> </a></li>
		  <li><a href='pde_centro_pedido_us_usuario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeCentroPedidoUsUsuarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeCentroPedidoEmail') ?></div>
		  <li><a href='pde_centro_pedido_email_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeCentroPedidoEmail') ?> </a></li>
		  <li><a href='pde_centro_pedido_email_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeCentroPedidoEmail') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeCentroPedidoPrvProveedors') ?></div>
		  <li><a href='pde_centro_pedido_prv_proveedor_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeCentroPedidoPrvProveedors') ?> </a></li>
		  <li><a href='pde_centro_pedido_prv_proveedor_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeCentroPedidoPrvProveedors') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcions') ?></div>
		  <li><a href='pde_centro_pedido_pde_centro_recepcion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcions') ?> </a></li>
		  <li><a href='pde_centro_pedido_pde_centro_recepcion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcReclamos') ?></div>
		  <li><a href='pde_oc_reclamo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcReclamos') ?> </a></li>
		  <li><a href='pde_oc_reclamo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcReclamos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcReclamoMotivos') ?></div>
		  <li><a href='pde_oc_reclamo_motivo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcReclamoMotivos') ?> </a></li>
		  <li><a href='pde_oc_reclamo_motivo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcReclamoMotivos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcReclamoDestinatarios') ?></div>
		  <li><a href='pde_oc_reclamo_destinatario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcReclamoDestinatarios') ?> </a></li>
		  <li><a href='pde_oc_reclamo_destinatario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcReclamoDestinatarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOcReclamoEnvioEmails') ?></div>
		  <li><a href='pde_oc_reclamo_envio_email_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOcReclamoEnvioEmails') ?> </a></li>
		  <li><a href='pde_oc_reclamo_envio_email_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOcReclamoEnvioEmails') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTributo') ?></div>
		  <li><a href='pde_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTributo') ?> </a></li>
		  <li><a href='pde_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoFactura') ?></div>
		  <li><a href='pde_tipo_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoFactura') ?> </a></li>
		  <li><a href='pde_tipo_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoFactura') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?></div>
		  <li><a href='pde_tipo_factura_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?> </a></li>
		  <li><a href='pde_tipo_factura_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoOrigenFacturas') ?></div>
		  <li><a href='pde_tipo_origen_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoOrigenFacturas') ?> </a></li>
		  <li><a href='pde_tipo_origen_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoOrigenFacturas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFactura') ?></div>
		  <li><a href='pde_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFactura') ?> </a></li>
		  <li><a href='pde_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFactura') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFacturaImagens') ?></div>
		  <li><a href='pde_factura_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFacturaImagens') ?> </a></li>
		  <li><a href='pde_factura_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFacturaImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFacturaArchivos') ?></div>
		  <li><a href='pde_factura_archivo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFacturaArchivos') ?> </a></li>
		  <li><a href='pde_factura_archivo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFacturaArchivos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFacturaTipoEstado') ?></div>
		  <li><a href='pde_factura_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFacturaTipoEstado') ?> </a></li>
		  <li><a href='pde_factura_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFacturaTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFacturaEstado') ?></div>
		  <li><a href='pde_factura_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFacturaEstado') ?> </a></li>
		  <li><a href='pde_factura_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFacturaEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFacturaConceptos') ?></div>
		  <li><a href='pde_factura_concepto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFacturaConceptos') ?> </a></li>
		  <li><a href='pde_factura_concepto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFacturaConceptos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFacturaItems') ?></div>
		  <li><a href='pde_factura_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFacturaItems') ?> </a></li>
		  <li><a href='pde_factura_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFacturaItems') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFacturaPdeTributo') ?></div>
		  <li><a href='pde_factura_pde_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFacturaPdeTributo') ?> </a></li>
		  <li><a href='pde_factura_pde_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFacturaPdeTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFacturaPdeOcs') ?></div>
		  <li><a href='pde_factura_pde_oc_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFacturaPdeOcs') ?> </a></li>
		  <li><a href='pde_factura_pde_oc_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFacturaPdeOcs') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFacturaPdeRecepcions') ?></div>
		  <li><a href='pde_factura_pde_recepcion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFacturaPdeRecepcions') ?> </a></li>
		  <li><a href='pde_factura_pde_recepcion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFacturaPdeRecepcions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFacturaPdeRecibo') ?></div>
		  <li><a href='pde_factura_pde_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFacturaPdeRecibo') ?> </a></li>
		  <li><a href='pde_factura_pde_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFacturaPdeRecibo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeFacturaPdeNotaCredito') ?></div>
		  <li><a href='pde_factura_pde_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeFacturaPdeNotaCredito') ?> </a></li>
		  <li><a href='pde_factura_pde_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeFacturaPdeNotaCredito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoNotaCredito') ?></div>
		  <li><a href='pde_tipo_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoNotaCredito') ?> </a></li>
		  <li><a href='pde_tipo_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoNotaCredito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?></div>
		  <li><a href='pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?> </a></li>
		  <li><a href='pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoOrigenNotaCreditos') ?></div>
		  <li><a href='pde_tipo_origen_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoOrigenNotaCreditos') ?> </a></li>
		  <li><a href='pde_tipo_origen_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoOrigenNotaCreditos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaCredito') ?></div>
		  <li><a href='pde_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaCredito') ?> </a></li>
		  <li><a href='pde_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaCredito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaCreditoImagens') ?></div>
		  <li><a href='pde_nota_credito_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaCreditoImagens') ?> </a></li>
		  <li><a href='pde_nota_credito_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaCreditoImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaCreditoArchivos') ?></div>
		  <li><a href='pde_nota_credito_archivo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaCreditoArchivos') ?> </a></li>
		  <li><a href='pde_nota_credito_archivo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaCreditoArchivos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaCreditoTipoEstado') ?></div>
		  <li><a href='pde_nota_credito_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaCreditoTipoEstado') ?> </a></li>
		  <li><a href='pde_nota_credito_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaCreditoTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaCreditoEstado') ?></div>
		  <li><a href='pde_nota_credito_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaCreditoEstado') ?> </a></li>
		  <li><a href='pde_nota_credito_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaCreditoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaCreditoConcepto') ?></div>
		  <li><a href='pde_nota_credito_concepto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaCreditoConcepto') ?> </a></li>
		  <li><a href='pde_nota_credito_concepto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaCreditoConcepto') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?></div>
		  <li><a href='pde_nota_credito_pde_factura_pde_recepcion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?> </a></li>
		  <li><a href='pde_nota_credito_pde_factura_pde_recepcion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?></div>
		  <li><a href='pde_nota_credito_pde_factura_pde_oc_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?> </a></li>
		  <li><a href='pde_nota_credito_pde_factura_pde_oc_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?></div>
		  <li><a href='pde_nota_credito_pde_factura_pde_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?> </a></li>
		  <li><a href='pde_nota_credito_pde_factura_pde_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaCreditoItem') ?></div>
		  <li><a href='pde_nota_credito_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaCreditoItem') ?> </a></li>
		  <li><a href='pde_nota_credito_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaCreditoItem') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaCreditoPdeTributo') ?></div>
		  <li><a href='pde_nota_credito_pde_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaCreditoPdeTributo') ?> </a></li>
		  <li><a href='pde_nota_credito_pde_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaCreditoPdeTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoNotaDebito') ?></div>
		  <li><a href='pde_tipo_nota_debito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoNotaDebito') ?> </a></li>
		  <li><a href='pde_tipo_nota_debito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoNotaDebito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?></div>
		  <li><a href='pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?> </a></li>
		  <li><a href='pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoOrigenNotaDebitos') ?></div>
		  <li><a href='pde_tipo_origen_nota_debito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoOrigenNotaDebitos') ?> </a></li>
		  <li><a href='pde_tipo_origen_nota_debito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoOrigenNotaDebitos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaDebito') ?></div>
		  <li><a href='pde_nota_debito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaDebito') ?> </a></li>
		  <li><a href='pde_nota_debito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaDebito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaDebitoImagens') ?></div>
		  <li><a href='pde_nota_debito_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaDebitoImagens') ?> </a></li>
		  <li><a href='pde_nota_debito_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaDebitoImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaDebitoArchivos') ?></div>
		  <li><a href='pde_nota_debito_archivo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaDebitoArchivos') ?> </a></li>
		  <li><a href='pde_nota_debito_archivo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaDebitoArchivos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaDebitoTipoEstado') ?></div>
		  <li><a href='pde_nota_debito_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaDebitoTipoEstado') ?> </a></li>
		  <li><a href='pde_nota_debito_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaDebitoTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaDebitoEstado') ?></div>
		  <li><a href='pde_nota_debito_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaDebitoEstado') ?> </a></li>
		  <li><a href='pde_nota_debito_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaDebitoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaDebitoConcepto') ?></div>
		  <li><a href='pde_nota_debito_concepto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaDebitoConcepto') ?> </a></li>
		  <li><a href='pde_nota_debito_concepto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaDebitoConcepto') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaDebitoItem') ?></div>
		  <li><a href='pde_nota_debito_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaDebitoItem') ?> </a></li>
		  <li><a href='pde_nota_debito_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaDebitoItem') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaDebitoPdeTributo') ?></div>
		  <li><a href='pde_nota_debito_pde_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaDebitoPdeTributo') ?> </a></li>
		  <li><a href='pde_nota_debito_pde_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaDebitoPdeTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaDebitoPdeNotaCredito') ?></div>
		  <li><a href='pde_nota_debito_pde_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaDebitoPdeNotaCredito') ?> </a></li>
		  <li><a href='pde_nota_debito_pde_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaDebitoPdeNotaCredito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeNotaDebitoPdeRecibo') ?></div>
		  <li><a href='pde_nota_debito_pde_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeNotaDebitoPdeRecibo') ?> </a></li>
		  <li><a href='pde_nota_debito_pde_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeNotaDebitoPdeRecibo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoRecibo') ?></div>
		  <li><a href='pde_tipo_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoRecibo') ?> </a></li>
		  <li><a href='pde_tipo_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoRecibo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeTipoOrigenRecibos') ?></div>
		  <li><a href='pde_tipo_origen_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeTipoOrigenRecibos') ?> </a></li>
		  <li><a href='pde_tipo_origen_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeTipoOrigenRecibos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeRecibo') ?></div>
		  <li><a href='pde_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeRecibo') ?> </a></li>
		  <li><a href='pde_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeRecibo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeReciboImagens') ?></div>
		  <li><a href='pde_recibo_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeReciboImagens') ?> </a></li>
		  <li><a href='pde_recibo_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeReciboImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeReciboArchivos') ?></div>
		  <li><a href='pde_recibo_archivo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeReciboArchivos') ?> </a></li>
		  <li><a href='pde_recibo_archivo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeReciboArchivos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeReciboTipoEstado') ?></div>
		  <li><a href='pde_recibo_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeReciboTipoEstado') ?> </a></li>
		  <li><a href='pde_recibo_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeReciboTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeReciboEstado') ?></div>
		  <li><a href='pde_recibo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeReciboEstado') ?> </a></li>
		  <li><a href='pde_recibo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeReciboEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeReciboConcepto') ?></div>
		  <li><a href='pde_recibo_concepto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeReciboConcepto') ?> </a></li>
		  <li><a href='pde_recibo_concepto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeReciboConcepto') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeReciboItem') ?></div>
		  <li><a href='pde_recibo_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeReciboItem') ?> </a></li>
		  <li><a href='pde_recibo_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeReciboItem') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeReciboItemCheque') ?></div>
		  <li><a href='pde_recibo_item_cheque_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeReciboItemCheque') ?> </a></li>
		  <li><a href='pde_recibo_item_cheque_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeReciboItemCheque') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeReciboPdeTributo') ?></div>
		  <li><a href='pde_recibo_pde_tributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeReciboPdeTributo') ?> </a></li>
		  <li><a href='pde_recibo_pde_tributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeReciboPdeTributo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOrdenPagos') ?></div>
		  <li><a href='pde_orden_pago_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOrdenPagos') ?> </a></li>
		  <li><a href='pde_orden_pago_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOrdenPagos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOrdenPagoTipoEstado') ?></div>
		  <li><a href='pde_orden_pago_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOrdenPagoTipoEstado') ?> </a></li>
		  <li><a href='pde_orden_pago_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOrdenPagoTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOrdenPagoEstado') ?></div>
		  <li><a href='pde_orden_pago_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOrdenPagoEstado') ?> </a></li>
		  <li><a href='pde_orden_pago_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOrdenPagoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOrdenPagoEnviados') ?></div>
		  <li><a href='pde_orden_pago_enviado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOrdenPagoEnviados') ?> </a></li>
		  <li><a href='pde_orden_pago_enviado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOrdenPagoEnviados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOrdenPagoPdeFactura') ?></div>
		  <li><a href='pde_orden_pago_pde_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOrdenPagoPdeFactura') ?> </a></li>
		  <li><a href='pde_orden_pago_pde_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOrdenPagoPdeFactura') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOrdenPagoPdeNotaDebito') ?></div>
		  <li><a href='pde_orden_pago_pde_nota_debito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOrdenPagoPdeNotaDebito') ?> </a></li>
		  <li><a href='pde_orden_pago_pde_nota_debito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOrdenPagoPdeNotaDebito') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOrdenPagoGralFpFormaPago') ?></div>
		  <li><a href='pde_orden_pago_gral_fp_forma_pago_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOrdenPagoGralFpFormaPago') ?> </a></li>
		  <li><a href='pde_orden_pago_gral_fp_forma_pago_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOrdenPagoGralFpFormaPago') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheques') ?></div>
		  <li><a href='pde_orden_pago_gral_fp_forma_pago_cheque_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheques') ?> </a></li>
		  <li><a href='pde_orden_pago_gral_fp_forma_pago_cheque_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheques') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbTipoSaldos') ?></div>
		  <li><a href='cntb_tipo_saldo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbTipoSaldos') ?> </a></li>
		  <li><a href='cntb_tipo_saldo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbTipoSaldos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbTipoClasificacions') ?></div>
		  <li><a href='cntb_tipo_clasificacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbTipoClasificacions') ?> </a></li>
		  <li><a href='cntb_tipo_clasificacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbTipoClasificacions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbTipoCuentas') ?></div>
		  <li><a href='cntb_tipo_cuenta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbTipoCuentas') ?> </a></li>
		  <li><a href='cntb_tipo_cuenta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbTipoCuentas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbTipoAsientos') ?></div>
		  <li><a href='cntb_tipo_asiento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbTipoAsientos') ?> </a></li>
		  <li><a href='cntb_tipo_asiento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbTipoAsientos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbTipoOrigens') ?></div>
		  <li><a href='cntb_tipo_origen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbTipoOrigens') ?> </a></li>
		  <li><a href='cntb_tipo_origen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbTipoOrigens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbTipoMovimientos') ?></div>
		  <li><a href='cntb_tipo_movimiento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbTipoMovimientos') ?> </a></li>
		  <li><a href='cntb_tipo_movimiento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbTipoMovimientos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbCuentaPlan') ?></div>
		  <li><a href='cntb_cuenta_plan_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbCuentaPlan') ?> </a></li>
		  <li><a href='cntb_cuenta_plan_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbCuentaPlan') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbCuentas') ?></div>
		  <li><a href='cntb_cuenta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbCuentas') ?> </a></li>
		  <li><a href='cntb_cuenta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbCuentas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbEjercicios') ?></div>
		  <li><a href='cntb_ejercicio_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbEjercicios') ?> </a></li>
		  <li><a href='cntb_ejercicio_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbEjercicios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbPeriodos') ?></div>
		  <li><a href='cntb_periodo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbPeriodos') ?> </a></li>
		  <li><a href='cntb_periodo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbPeriodos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbDiarioAsientos') ?></div>
		  <li><a href='cntb_diario_asiento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbDiarioAsientos') ?> </a></li>
		  <li><a href='cntb_diario_asiento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbDiarioAsientos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbDiarioAsientoCuentas') ?></div>
		  <li><a href='cntb_diario_asiento_cuenta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbDiarioAsientoCuentas') ?> </a></li>
		  <li><a href='cntb_diario_asiento_cuenta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbDiarioAsientoCuentas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbDiarioAsientoVtaFacturas') ?></div>
		  <li><a href='cntb_diario_asiento_vta_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaFacturas') ?> </a></li>
		  <li><a href='cntb_diario_asiento_vta_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaFacturas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbDiarioAsientoVtaNotaCreditos') ?></div>
		  <li><a href='cntb_diario_asiento_vta_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaCreditos') ?> </a></li>
		  <li><a href='cntb_diario_asiento_vta_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaCreditos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbDiarioAsientoVtaNotaDebitos') ?></div>
		  <li><a href='cntb_diario_asiento_vta_nota_debito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaDebitos') ?> </a></li>
		  <li><a href='cntb_diario_asiento_vta_nota_debito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaDebitos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbDiarioAsientoVtaRecibos') ?></div>
		  <li><a href='cntb_diario_asiento_vta_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaRecibos') ?> </a></li>
		  <li><a href='cntb_diario_asiento_vta_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaRecibos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbDiarioAsientoPdeFacturas') ?></div>
		  <li><a href='cntb_diario_asiento_pde_factura_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeFacturas') ?> </a></li>
		  <li><a href='cntb_diario_asiento_pde_factura_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeFacturas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbDiarioAsientoPdeNotaCreditos') ?></div>
		  <li><a href='cntb_diario_asiento_pde_nota_credito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaCreditos') ?> </a></li>
		  <li><a href='cntb_diario_asiento_pde_nota_credito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaCreditos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbDiarioAsientoPdeNotaDebitos') ?></div>
		  <li><a href='cntb_diario_asiento_pde_nota_debito_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaDebitos') ?> </a></li>
		  <li><a href='cntb_diario_asiento_pde_nota_debito_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaDebitos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('CntbDiarioAsientoPdeRecibos') ?></div>
		  <li><a href='cntb_diario_asiento_pde_recibo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeRecibos') ?> </a></li>
		  <li><a href='cntb_diario_asiento_pde_recibo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeRecibos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AfipCitiPrcs') ?></div>
		  <li><a href='afip_citi_prc_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AfipCitiPrcs') ?> </a></li>
		  <li><a href='afip_citi_prc_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AfipCitiPrcs') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AfipCitiCabeceras') ?></div>
		  <li><a href='afip_citi_cabecera_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AfipCitiCabeceras') ?> </a></li>
		  <li><a href='afip_citi_cabecera_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AfipCitiCabeceras') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AfipCitiVentasCbtes') ?></div>
		  <li><a href='afip_citi_ventas_cbte_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AfipCitiVentasCbtes') ?> </a></li>
		  <li><a href='afip_citi_ventas_cbte_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AfipCitiVentasCbtes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AfipCitiVentasAlicuotass') ?></div>
		  <li><a href='afip_citi_ventas_alicuotas_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AfipCitiVentasAlicuotass') ?> </a></li>
		  <li><a href='afip_citi_ventas_alicuotas_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AfipCitiVentasAlicuotass') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AfipCitiComprasCbtes') ?></div>
		  <li><a href='afip_citi_compras_cbte_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AfipCitiComprasCbtes') ?> </a></li>
		  <li><a href='afip_citi_compras_cbte_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AfipCitiComprasCbtes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AfipCitiComprasAlicuotass') ?></div>
		  <li><a href='afip_citi_compras_alicuotas_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AfipCitiComprasAlicuotass') ?> </a></li>
		  <li><a href='afip_citi_compras_alicuotas_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AfipCitiComprasAlicuotass') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AfipCitiComprasImportacioness') ?></div>
		  <li><a href='afip_citi_compras_importaciones_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AfipCitiComprasImportacioness') ?> </a></li>
		  <li><a href='afip_citi_compras_importaciones_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AfipCitiComprasImportacioness') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NovNovedads') ?></div>
		  <li><a href='nov_novedad_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NovNovedads') ?> </a></li>
		  <li><a href='nov_novedad_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NovNovedads') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NovNovedadImagens') ?></div>
		  <li><a href='nov_novedad_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NovNovedadImagens') ?> </a></li>
		  <li><a href='nov_novedad_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NovNovedadImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NovNovedadArchivos') ?></div>
		  <li><a href='nov_novedad_archivo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NovNovedadArchivos') ?> </a></li>
		  <li><a href='nov_novedad_archivo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NovNovedadArchivos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NovNovedadUsGrupos') ?></div>
		  <li><a href='nov_novedad_us_grupo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NovNovedadUsGrupos') ?> </a></li>
		  <li><a href='nov_novedad_us_grupo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NovNovedadUsGrupos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NovNovedadDestinatarios') ?></div>
		  <li><a href='nov_novedad_destinatario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NovNovedadDestinatarios') ?> </a></li>
		  <li><a href='nov_novedad_destinatario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NovNovedadDestinatarios') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NovNovedadObservados') ?></div>
		  <li><a href='nov_novedad_observado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NovNovedadObservados') ?> </a></li>
		  <li><a href='nov_novedad_observado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NovNovedadObservados') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NovNovedadLeidos') ?></div>
		  <li><a href='nov_novedad_leido_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NovNovedadLeidos') ?> </a></li>
		  <li><a href='nov_novedad_leido_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NovNovedadLeidos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AltModulo') ?></div>
		  <li><a href='alt_modulo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AltModulo') ?> </a></li>
		  <li><a href='alt_modulo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AltModulo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AltAlertaUsUsuario') ?></div>
		  <li><a href='alt_alerta_us_usuario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AltAlertaUsUsuario') ?> </a></li>
		  <li><a href='alt_alerta_us_usuario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AltAlertaUsUsuario') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AltAlertaEnvioEmails') ?></div>
		  <li><a href='alt_alerta_envio_email_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AltAlertaEnvioEmails') ?> </a></li>
		  <li><a href='alt_alerta_envio_email_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AltAlertaEnvioEmails') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AltControl') ?></div>
		  <li><a href='alt_control_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AltControl') ?> </a></li>
		  <li><a href='alt_control_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AltControl') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AltControlUsUsuario') ?></div>
		  <li><a href='alt_control_us_usuario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AltControlUsUsuario') ?> </a></li>
		  <li><a href='alt_control_us_usuario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AltControlUsUsuario') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AltTipo') ?></div>
		  <li><a href='alt_tipo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AltTipo') ?> </a></li>
		  <li><a href='alt_tipo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AltTipo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AltAlerta') ?></div>
		  <li><a href='alt_alerta_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AltAlerta') ?> </a></li>
		  <li><a href='alt_alerta_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AltAlerta') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AltOrigen') ?></div>
		  <li><a href='alt_origen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AltOrigen') ?> </a></li>
		  <li><a href='alt_origen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AltOrigen') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AltControlUsGrupo') ?></div>
		  <li><a href='alt_control_us_grupo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AltControlUsGrupo') ?> </a></li>
		  <li><a href='alt_control_us_grupo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AltControlUsGrupo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AltNivel') ?></div>
		  <li><a href='alt_nivel_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AltNivel') ?> </a></li>
		  <li><a href='alt_nivel_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AltNivel') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajas') ?></div>
		  <li><a href='fnd_caja_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajas') ?> </a></li>
		  <li><a href='fnd_caja_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajaTipoEstado') ?></div>
		  <li><a href='fnd_caja_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajaTipoEstado') ?> </a></li>
		  <li><a href='fnd_caja_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajaTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajaEstado') ?></div>
		  <li><a href='fnd_caja_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajaEstado') ?> </a></li>
		  <li><a href='fnd_caja_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajaEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajaIngreso') ?></div>
		  <li><a href='fnd_caja_ingreso_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajaIngreso') ?> </a></li>
		  <li><a href='fnd_caja_ingreso_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajaIngreso') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajaTipoIngreso') ?></div>
		  <li><a href='fnd_caja_tipo_ingreso_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajaTipoIngreso') ?> </a></li>
		  <li><a href='fnd_caja_tipo_ingreso_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajaTipoIngreso') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajaEgreso') ?></div>
		  <li><a href='fnd_caja_egreso_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajaEgreso') ?> </a></li>
		  <li><a href='fnd_caja_egreso_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajaEgreso') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajaTipoEgreso') ?></div>
		  <li><a href='fnd_caja_tipo_egreso_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajaTipoEgreso') ?> </a></li>
		  <li><a href='fnd_caja_tipo_egreso_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajaTipoEgreso') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajeros') ?></div>
		  <li><a href='fnd_cajero_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajeros') ?> </a></li>
		  <li><a href='fnd_cajero_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajeros') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajeroUsUsuario') ?></div>
		  <li><a href='fnd_cajero_us_usuario_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajeroUsUsuario') ?> </a></li>
		  <li><a href='fnd_cajero_us_usuario_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajeroUsUsuario') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajeroGralCaja') ?></div>
		  <li><a href='fnd_cajero_gral_caja_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajeroGralCaja') ?> </a></li>
		  <li><a href='fnd_cajero_gral_caja_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajeroGralCaja') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajaTipoMovimientos') ?></div>
		  <li><a href='fnd_caja_tipo_movimiento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajaTipoMovimientos') ?> </a></li>
		  <li><a href='fnd_caja_tipo_movimiento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajaTipoMovimientos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajaMovimientos') ?></div>
		  <li><a href='fnd_caja_movimiento_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajaMovimientos') ?> </a></li>
		  <li><a href='fnd_caja_movimiento_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajaMovimientos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajaMovimientoItems') ?></div>
		  <li><a href='fnd_caja_movimiento_item_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajaMovimientoItems') ?> </a></li>
		  <li><a href='fnd_caja_movimiento_item_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajaMovimientoItems') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajaMovimientoEstado') ?></div>
		  <li><a href='fnd_caja_movimiento_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajaMovimientoEstado') ?> </a></li>
		  <li><a href='fnd_caja_movimiento_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajaMovimientoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndCajaMovimientoTipoEstado') ?></div>
		  <li><a href='fnd_caja_movimiento_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndCajaMovimientoTipoEstado') ?> </a></li>
		  <li><a href='fnd_caja_movimiento_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndCajaMovimientoTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndChqChequera') ?></div>
		  <li><a href='fnd_chq_chequera_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndChqChequera') ?> </a></li>
		  <li><a href='fnd_chq_chequera_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndChqChequera') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndChqTipoEstado') ?></div>
		  <li><a href='fnd_chq_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndChqTipoEstado') ?> </a></li>
		  <li><a href='fnd_chq_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndChqTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndChqTipoEmisor') ?></div>
		  <li><a href='fnd_chq_tipo_emisor_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndChqTipoEmisor') ?> </a></li>
		  <li><a href='fnd_chq_tipo_emisor_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndChqTipoEmisor') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndChqTipoEmision') ?></div>
		  <li><a href='fnd_chq_tipo_emision_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndChqTipoEmision') ?> </a></li>
		  <li><a href='fnd_chq_tipo_emision_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndChqTipoEmision') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndChqTipoPago') ?></div>
		  <li><a href='fnd_chq_tipo_pago_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndChqTipoPago') ?> </a></li>
		  <li><a href='fnd_chq_tipo_pago_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndChqTipoPago') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndChqEstado') ?></div>
		  <li><a href='fnd_chq_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndChqEstado') ?> </a></li>
		  <li><a href='fnd_chq_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndChqEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndChqCheque') ?></div>
		  <li><a href='fnd_chq_cheque_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndChqCheque') ?> </a></li>
		  <li><a href='fnd_chq_cheque_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndChqCheque') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('FndChqTipoEmisorFndChqTipoEstado') ?></div>
		  <li><a href='fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('FndChqTipoEmisorFndChqTipoEstado') ?> </a></li>
		  <li><a href='fnd_chq_tipo_emisor_fnd_chq_tipo_estado_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('FndChqTipoEmisorFndChqTipoEstado') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlAutorizations') ?></div>
		  <li><a href='ml_autorization_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlAutorizations') ?> </a></li>
		  <li><a href='ml_autorization_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlAutorizations') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlListingTypes') ?></div>
		  <li><a href='ml_listing_type_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlListingTypes') ?> </a></li>
		  <li><a href='ml_listing_type_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlListingTypes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlConditions') ?></div>
		  <li><a href='ml_condition_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlConditions') ?> </a></li>
		  <li><a href='ml_condition_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlConditions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlCategorys') ?></div>
		  <li><a href='ml_category_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlCategorys') ?> </a></li>
		  <li><a href='ml_category_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlCategorys') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlCategoryMlAttributes') ?></div>
		  <li><a href='ml_category_ml_attribute_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlCategoryMlAttributes') ?> </a></li>
		  <li><a href='ml_category_ml_attribute_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlCategoryMlAttributes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlCategoryMlShippingModes') ?></div>
		  <li><a href='ml_category_ml_shipping_mode_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlCategoryMlShippingModes') ?> </a></li>
		  <li><a href='ml_category_ml_shipping_mode_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlCategoryMlShippingModes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlShippingModes') ?></div>
		  <li><a href='ml_shipping_mode_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlShippingModes') ?> </a></li>
		  <li><a href='ml_shipping_mode_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlShippingModes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlAttributes') ?></div>
		  <li><a href='ml_attribute_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlAttributes') ?> </a></li>
		  <li><a href='ml_attribute_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlAttributes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlAttributeTypes') ?></div>
		  <li><a href='ml_attribute_type_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlAttributeTypes') ?> </a></li>
		  <li><a href='ml_attribute_type_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlAttributeTypes') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlAttributeInsAtributos') ?></div>
		  <li><a href='ml_attribute_ins_atributo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlAttributeInsAtributos') ?> </a></li>
		  <li><a href='ml_attribute_ins_atributo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlAttributeInsAtributos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlAttributeMlValues') ?></div>
		  <li><a href='ml_attribute_ml_value_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlAttributeMlValues') ?> </a></li>
		  <li><a href='ml_attribute_ml_value_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlAttributeMlValues') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlValues') ?></div>
		  <li><a href='ml_value_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlValues') ?> </a></li>
		  <li><a href='ml_value_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlValues') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlValueInsMarcas') ?></div>
		  <li><a href='ml_value_ins_marca_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlValueInsMarcas') ?> </a></li>
		  <li><a href='ml_value_ins_marca_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlValueInsMarcas') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('MlItemStatuss') ?></div>
		  <li><a href='ml_item_status_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('MlItemStatuss') ?> </a></li>
		  <li><a href='ml_item_status_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('MlItemStatuss') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GenApiProyectos') ?></div>
		  <li><a href='gen_api_proyecto_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GenApiProyectos') ?> </a></li>
		  <li><a href='gen_api_proyecto_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GenApiProyectos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GenApiConsumers') ?></div>
		  <li><a href='gen_api_consumer_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GenApiConsumers') ?> </a></li>
		  <li><a href='gen_api_consumer_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GenApiConsumers') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GenApiTokens') ?></div>
		  <li><a href='gen_api_token_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GenApiTokens') ?> </a></li>
		  <li><a href='gen_api_token_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GenApiTokens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GenPrcaProceso') ?></div>
		  <li><a href='gen_prca_proceso_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GenPrcaProceso') ?> </a></li>
		  <li><a href='gen_prca_proceso_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GenPrcaProceso') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GenPrcaEjecucion') ?></div>
		  <li><a href='gen_prca_ejecucion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GenPrcaEjecucion') ?> </a></li>
		  <li><a href='gen_prca_ejecucion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GenPrcaEjecucion') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('GenPrcaEjecucionDetalle') ?></div>
		  <li><a href='gen_prca_ejecucion_detalle_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('GenPrcaEjecucionDetalle') ?> </a></li>
		  <li><a href='gen_prca_ejecucion_detalle_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('GenPrcaEjecucionDetalle') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AppMovDispositivos') ?></div>
		  <li><a href='app_mov_dispositivo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AppMovDispositivos') ?> </a></li>
		  <li><a href='app_mov_dispositivo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AppMovDispositivos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AppMovModulos') ?></div>
		  <li><a href='app_mov_modulo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AppMovModulos') ?> </a></li>
		  <li><a href='app_mov_modulo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AppMovModulos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AppMovVersions') ?></div>
		  <li><a href='app_mov_version_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AppMovVersions') ?> </a></li>
		  <li><a href='app_mov_version_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AppMovVersions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AppMovInstalacions') ?></div>
		  <li><a href='app_mov_instalacion_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AppMovInstalacions') ?> </a></li>
		  <li><a href='app_mov_instalacion_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AppMovInstalacions') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('AppMovActividads') ?></div>
		  <li><a href='app_mov_actividad_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('AppMovActividads') ?> </a></li>
		  <li><a href='app_mov_actividad_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('AppMovActividads') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NotNoticia') ?></div>
		  <li><a href='not_noticia_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NotNoticia') ?> </a></li>
		  <li><a href='not_noticia_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NotNoticia') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NotCategoria') ?></div>
		  <li><a href='not_categoria_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NotCategoria') ?> </a></li>
		  <li><a href='not_categoria_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NotCategoria') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NotNoticiaImagen') ?></div>
		  <li><a href='not_noticia_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NotNoticiaImagen') ?> </a></li>
		  <li><a href='not_noticia_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NotNoticiaImagen') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NotNoticiaArchivo') ?></div>
		  <li><a href='not_noticia_archivo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NotNoticiaArchivo') ?> </a></li>
		  <li><a href='not_noticia_archivo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NotNoticiaArchivo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NotVideo') ?></div>
		  <li><a href='not_video_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NotVideo') ?> </a></li>
		  <li><a href='not_video_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NotVideo') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NotTipoImagens') ?></div>
		  <li><a href='not_tipo_imagen_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NotTipoImagens') ?> </a></li>
		  <li><a href='not_tipo_imagen_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NotTipoImagens') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NotTipoArchivos') ?></div>
		  <li><a href='not_tipo_archivo_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NotTipoArchivos') ?> </a></li>
		  <li><a href='not_tipo_archivo_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NotTipoArchivos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NotTipoVideos') ?></div>
		  <li><a href='not_tipo_video_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NotTipoVideos') ?> </a></li>
		  <li><a href='not_tipo_video_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NotTipoVideos') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NotRelacionada') ?></div>
		  <li><a href='not_relacionada_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NotRelacionada') ?> </a></li>
		  <li><a href='not_relacionada_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NotRelacionada') ?> </a></li>
			
		  <br />
          <div class='titulo'><?php Lang::_lang('NotNoticiaLeida') ?></div>
		  <li><a href='not_noticia_leida_alta.php'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('NotNoticiaLeida') ?> </a></li>
		  <li><a href='not_noticia_leida_adm.php'><?php Lang::_lang('Listado de') ?> <?php Lang::_lang('NotNoticiaLeida') ?> </a></li>
			
	</ul>	  
	</div>

</div>
<div id='pie'>&nbsp;</div>
</form>
</body>
</html>

