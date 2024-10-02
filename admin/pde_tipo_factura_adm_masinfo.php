<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_tipo_factura_id = Gral::getVars(2, 'id');
$pde_tipo_factura = PdeTipoFactura::getOxId($pde_tipo_factura_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_tipo_factura->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_factura->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_factura->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_factura->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_factura->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_FACTURA')){ ?>
            <li><a href="#tab_gral_condicion_iva_pde_tipo_factura"><?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_MASINFO_PDE_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_pde_tipo_factura_ws_fe_param_tipo_comprobante"><?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_MASINFO_PDE_FACTURA')){ ?>
            <li><a href="#tab_pde_factura"><?php Lang::_lang('PdeFactura') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_FACTURA')){ ?>
	<div id="tab_gral_condicion_iva_pde_tipo_factura" class="bloque-relacion gral_condicion_iva_pde_tipo_factura">
		
            <h4><?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_factura->getGralCondicionIvaPdeTipoFacturasParaBloqueMasInfo() as $gral_condicion_iva_pde_tipo_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getDescripcionVinculante('PdeTipoFactura')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_pde_tipo_factura->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_pde_tipo_factura/gral_condicion_iva_pde_tipo_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoFactura') ?>">
                                <a href="gral_condicion_iva_pde_tipo_factura_alta.php?id=<?php echo $gral_condicion_iva_pde_tipo_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_pde_tipo_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaPdeTipoFactura::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_pde_tipo_factura->getFiltrosArrXCampo('PdeTipoFactura', 'pde_tipo_factura_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaPdeTipoFacturas de ') ?> <strong><?php echo($pde_tipo_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_pde_tipo_factura_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaPdeTipoFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_MASINFO_PDE_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_pde_tipo_factura_ws_fe_param_tipo_comprobante" class="bloque-relacion pde_tipo_factura_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_factura->getPdeTipoFacturaWsFeParamTipoComprobantesParaBloqueMasInfo() as $pde_tipo_factura_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_tipo_factura_ws_fe_param_tipo_comprobante->getDescripcionVinculante('PdeTipoFactura')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_tipo_factura_ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_factura_ws_fe_param_tipo_comprobante->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_tipo_factura_ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_factura_ws_fe_param_tipo_comprobante->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_tipo_factura_ws_fe_param_tipo_comprobante->getId() ?>" archivo="ajax/modulos/pde_tipo_factura_ws_fe_param_tipo_comprobante/pde_tipo_factura_ws_fe_param_tipo_comprobante_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobante') ?>">
                                <a href="pde_tipo_factura_ws_fe_param_tipo_comprobante_alta.php?id=<?php echo $pde_tipo_factura_ws_fe_param_tipo_comprobante->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_MASINFO_PDE_TIPO_FACTURA_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_tipo_factura_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeTipoFacturaWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $pde_tipo_factura_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('PdeTipoFactura', 'pde_tipo_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeTipoFacturaWsFeParamTipoComprobantes de ') ?> <strong><?php echo($pde_tipo_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_tipo_factura_ws_fe_param_tipo_comprobante_alta.php" >
                            <?php Lang::_lang('Agregar PdeTipoFacturaWsFeParamTipoComprobante') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_MASINFO_PDE_FACTURA')){ ?>
	<div id="tab_pde_factura" class="bloque-relacion pde_factura">
		
            <h4><?php Lang::_lang('PdeFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_factura->getPdeFacturasParaBloqueMasInfo() as $pde_factura){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_MASINFO_PDE_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura->getFiltrosArrXCampo('PdeTipoFactura', 'pde_tipo_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturas de ') ?> <strong><?php echo($pde_tipo_factura->getDescripcion()) ?></strong>
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
	
</div>

