<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_tipo_nota_debito_id = Gral::getVars(2, 'id');
$pde_tipo_nota_debito = PdeTipoNotaDebito::getOxId($pde_tipo_nota_debito_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_tipo_nota_debito->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_debito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_nota_debito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_debito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_nota_debito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO')){ ?>
            <li><a href="#tab_gral_condicion_iva_pde_tipo_nota_debito"><?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_MASINFO_PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
            <li><a href="#tab_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante"><?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO')){ ?>
            <li><a href="#tab_pde_nota_debito"><?php Lang::_lang('PdeNotaDebito') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO')){ ?>
	<div id="tab_gral_condicion_iva_pde_tipo_nota_debito" class="bloque-relacion gral_condicion_iva_pde_tipo_nota_debito">
		
            <h4><?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_nota_debito->getGralCondicionIvaPdeTipoNotaDebitosParaBloqueMasInfo() as $gral_condicion_iva_pde_tipo_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getDescripcionVinculante('PdeTipoNotaDebito')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_pde_tipo_nota_debito->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_pde_tipo_nota_debito/gral_condicion_iva_pde_tipo_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?>">
                                <a href="gral_condicion_iva_pde_tipo_nota_debito_alta.php?id=<?php echo $gral_condicion_iva_pde_tipo_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_pde_tipo_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaPdeTipoNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_pde_tipo_nota_debito->getFiltrosArrXCampo('PdeTipoNotaDebito', 'pde_tipo_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaPdeTipoNotaDebitos de ') ?> <strong><?php echo($pde_tipo_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_pde_tipo_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaPdeTipoNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_MASINFO_PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div id="tab_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante" class="bloque-relacion pde_tipo_nota_debito_ws_fe_param_tipo_comprobante">
		
            <h4><?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_nota_debito->getPdeTipoNotaDebitoWsFeParamTipoComprobantesParaBloqueMasInfo() as $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getDescripcionVinculante('PdeTipoNotaDebito')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId() ?>" archivo="ajax/modulos/pde_tipo_nota_debito_ws_fe_param_tipo_comprobante/pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTipoNotaDebitoWsFeParamTipoComprobante') ?>">
                                <a href="pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php?id=<?php echo $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_MASINFO_PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeTipoNotaDebitoWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('PdeTipoNotaDebito', 'pde_tipo_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver PdeTipoNotaDebitoWsFeParamTipoComprobantes de ') ?> <strong><?php echo($pde_tipo_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php" >
                            <?php Lang::_lang('Agregar PdeTipoNotaDebitoWsFeParamTipoComprobante') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO')){ ?>
	<div id="tab_pde_nota_debito" class="bloque-relacion pde_nota_debito">
		
            <h4><?php Lang::_lang('PdeNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_nota_debito->getPdeNotaDebitosParaBloqueMasInfo() as $pde_nota_debito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito->getFiltrosArrXCampo('PdeTipoNotaDebito', 'pde_tipo_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitos de ') ?> <strong><?php echo($pde_tipo_nota_debito->getDescripcion()) ?></strong>
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
	
</div>

