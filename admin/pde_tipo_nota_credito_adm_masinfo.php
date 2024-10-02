<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_tipo_nota_credito_id = Gral::getVars(2, 'id');
$pde_tipo_nota_credito = PdeTipoNotaCredito::getOxId($pde_tipo_nota_credito_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_tipo_nota_credito->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_NOTA_CREDITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_credito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_nota_credito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_NOTA_CREDITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_credito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_nota_credito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_CREDITO')){ ?>
            <li><a href="#tab_gral_condicion_iva_pde_tipo_nota_credito"><?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_MASINFO_PDE_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_pde_tipo_nota_credito_ws_fe_param_tipo_comprobante"><?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO')){ ?>
            <li><a href="#tab_pde_nota_credito"><?php Lang::_lang('PdeNotaCredito') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_CREDITO')){ ?>
	<div id="tab_gral_condicion_iva_pde_tipo_nota_credito" class="bloque-relacion gral_condicion_iva_pde_tipo_nota_credito">
		
            <h4><?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_nota_credito->getGralCondicionIvaPdeTipoNotaCreditosParaBloqueMasInfo() as $gral_condicion_iva_pde_tipo_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_credito->getDescripcionVinculante('PdeTipoNotaCredito')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_pde_tipo_nota_credito->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_pde_tipo_nota_credito/gral_condicion_iva_pde_tipo_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaCredito') ?>">
                                <a href="gral_condicion_iva_pde_tipo_nota_credito_alta.php?id=<?php echo $gral_condicion_iva_pde_tipo_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_pde_tipo_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaPdeTipoNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_pde_tipo_nota_credito->getFiltrosArrXCampo('PdeTipoNotaCredito', 'pde_tipo_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaPdeTipoNotaCreditos de ') ?> <strong><?php echo($pde_tipo_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_pde_tipo_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaPdeTipoNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_MASINFO_PDE_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_pde_tipo_nota_credito_ws_fe_param_tipo_comprobante" class="bloque-relacion pde_tipo_nota_credito_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_nota_credito->getPdeTipoNotaCreditoWsFeParamTipoComprobantesParaBloqueMasInfo() as $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getDescripcionVinculante('PdeTipoNotaCredito')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId() ?>" archivo="ajax/modulos/pde_tipo_nota_credito_ws_fe_param_tipo_comprobante/pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?>">
                                <a href="pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php?id=<?php echo $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_MASINFO_PDE_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeTipoNotaCreditoWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('PdeTipoNotaCredito', 'pde_tipo_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeTipoNotaCreditoWsFeParamTipoComprobantes de ') ?> <strong><?php echo($pde_tipo_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta.php" >
                            <?php Lang::_lang('Agregar PdeTipoNotaCreditoWsFeParamTipoComprobante') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO')){ ?>
	<div id="tab_pde_nota_credito" class="bloque-relacion pde_nota_credito">
		
            <h4><?php Lang::_lang('PdeNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_nota_credito->getPdeNotaCreditosParaBloqueMasInfo() as $pde_nota_credito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito->getFiltrosArrXCampo('PdeTipoNotaCredito', 'pde_tipo_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditos de ') ?> <strong><?php echo($pde_tipo_nota_credito->getDescripcion()) ?></strong>
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
	
</div>

